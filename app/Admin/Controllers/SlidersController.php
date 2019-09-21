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
			$actions->disableDelete();
		});
		$grid->tools(function ($tools) {
			// 禁用批量删除按钮
			$tools->batch(function ($batch) {
				$batch->disableDelete();
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

		// 创建一个输入框，第一个参数 title 是模型的字段名，第二个参数是该字段描述
		$form->text('title', 'Title')->rules('required');
		$form->text('slug', 'Slug');
		// $form->text('slug', 'Slug')->rules('required');

		// 创建一个选择图片的框
		$form->multipleImage('images')->sortable()->removable();

		// 创建一个富文本编辑器
		$form->editor('description', 'Description');
		// $form->editor('content', 'Content')->rules('required');
		// 定义事件回调，当模型即将保存时会触发这个回调
		$form->saving(function (Form $form) {
//            $form->model()->price = collect($form->input('skus'))->where(Form::REMOVE_FLAG_NAME, 0)->min('price') ?: 0;
		});

		return $form;
	}
}
