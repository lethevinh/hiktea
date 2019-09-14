<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SiteOption;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;

class OptionsController extends Controller {
	use HasResourceActions;

	/**
	 * Index interface.
	 *
	 * @param Content $content
	 * @return Content
	 */
	public function index(Content $content) {
		return $content
			->header('List Site Option')
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
			->header('Update SiteOption')
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
			->header('Create SiteOption')
			->body($this->form());
	}

	/**
	 * Make a grid builder.
	 *
	 * @return Grid
	 */
	protected function grid() {
		$grid = new Grid(new SiteOption);
		$grid->quickSearch(function ($model, $query) {
			$model->where('id', $query)->orWhere('key', 'like', "%{$query}%");
		});
		$grid->id('ID')->sortable();
		$grid->key('Key');
		$grid->value('Value');
		$grid->created_at()->sortable();
		$grid->actions(function ($actions) {
			$actions->disableView();
			$actions->disableDelete();
		});
		$grid->tools(function ($tools) {
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
		$form = new Form(new SiteOption);
		$form->text('key', 'Key')->rules('required');
		$form->text('value', 'Value');
		$form->radio('active', 'active')->options(['1' => 'Yes', '0' => 'No'])->default('1');
		$form->saving(function (Form $form) {
		});

		return $form;
	}
}
