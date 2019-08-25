<?php

namespace App\Admin\Controllers;

use App\Models\CouponCode;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class CouponCodesController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('List CouponCodes')
            ->body($this->grid());
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('Edit CouponCodes')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('Create CouponCode')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new CouponCode);
        $grid->quickSearch(function ($model, $query) {
            $model->where('id', $query)->orWhere('code', $query)->orWhere('name', 'like', "%{$query}%") ;
        });
        $grid->model()->orderBy('created_at', 'desc');
        $grid->id('ID')->sortable();
        $grid->name('Name');
        $grid->code('Code');
        $grid->description('Description');
        $grid->column('usage', 'usage')->display(function ($value) {
            return "{$this->used} / {$this->total}";
        });
        $grid->enabled('Active')->display(function ($value) {
            return $value ? 'Yes' : 'No';
        });
        $grid->created_at()->sortable();
        $grid->actions(function ($actions) {
            $actions->disableView();
        });

        return $grid;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new CouponCode);

        $form->display('id', 'ID');
        $form->text('name', 'Name')->rules('required');
        $form->text('code', 'Code')->rules(function($form) {
            // 如果 $form->model()->id 不为空，代表是编辑操作
            if ($id = $form->model()->id) {
                return 'nullable|unique:coupon_codes,code,'.$id.',id';
            } else {
                return 'nullable|unique:coupon_codes';
            }
        });
        $form->radio('type', 'Type')->options(CouponCode::$typeMap)->rules('required');
        $form->text('value', 'Value')->rules(function ($form) {
            if ($form->model()->type === CouponCode::TYPE_PERCENT) {
                // 如果选择了百分比折扣类型，那么折扣范围只能是 1 ~ 99
                return 'required|numeric|between:1,99';
            } else {
                // 否则只要大等于 0.01 即可
                return 'required|numeric|min:0.01';
            }
        });
        $form->text('total', 'Total')->rules('required|numeric|min:0');
        $form->text('min_amount', 'Min Amount')->rules('required|numeric|min:0');
        $form->datetime('not_before', 'Start Time');
        $form->datetime('not_after', 'End Time');
        $form->radio('enabled', 'Active')->options(['1' => 'Yes', '0' => 'No']);

        $form->saving(function (Form $form) {
            if (!$form->code) {
                $form->code = CouponCode::findAvailableCode();
            }
        });

        return $form;
    }
}
