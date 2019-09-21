<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;

class SlidersController extends Controller {
	use HasResourceActions;

	/**
	 * Index interface.
	 *
	 * @param Content $content
	 * @return Content
	 */
	public function index(Content $content) {
		return $content
			->header('List Slider')
			->body($this->grid());
	}

	/**
	 * Edit interface.
	 *
	 * @param mixed $id
	 * @param Content $content
	 * @return Content
	 */
	public function edit($id, Content $content) {
		return $content
			->header('Update Slider')
			->body($this->form()->edit($id));
	}

	public function delete($id) {
	    $slider = Slider::find($id);
		 if ($slider->delete()) {
             return response()->json(['status' => 'success']);
         }
        return response()->json(['status' => 'error'])->status(400);
    }

	/**
	 * Create interface.
	 *
	 * @param Content $content
	 * @return Content
	 */
	public function create(Content $content) {
		return $content
			->header('Create Slider')
			->body($this->form());
	}

	/**
	 * Make a grid builder.
	 *
	 * @return Grid
	 */
	protected function grid() {
		$grid = new Grid(new Slider);
		$grid->quickSearch(function ($model, $query) {
			$model->where('id', $query)->orWhere('title', 'like', "%{$query}%");
		});
		$grid->id('ID')->sortable();
		$grid->title('title');
		$grid->slug('slug');
		$grid->created_at()->sortable();
		$grid->actions(function ($actions) {
			$actions->disableView();
//			$actions->disableDelete();
		});
		$grid->tools(function ($tools) {
			// 禁用批量删除按钮
			$tools->batch(function ($batch) {
//				$batch->disableDelete();
			});
		});

		return $grid;
	}

	/**
	 * Make a form builder.
	 *
	 * @return Form
	 */
	protected function form() {
		$form = new Form(new Slider);

		$form->text('title', 'Title')->rules('required');
		$form->text('slug', 'Slug');
        $form->table('images', function ($table) {
            $table->image('image', "Image");
            $table->text('title', "Title");
            $table->textarea('content', "Content");
            $table->url('link', "Link");
        });

		$form->editor('description', 'Description');
		$form->saving(function (Form $form) {
		});

		return $form;
	}
}
