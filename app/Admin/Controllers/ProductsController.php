<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class ProductsController extends Controller
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
            ->header('List Products')
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
            ->header('Edit Product')
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
            ->header('Create Product')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product);

        $grid->id('ID')->sortable();
        $grid->title('title');
        $grid->on_sale('on_sale')->display(function ($value) {
            return $value ? 'Yes' : 'No';
        });
        $grid->code('Code');
        $grid->price('price')->display(function ($value){
            return number_format($value, 0);
        });
        $grid->rating('rating');
//        $grid->sold_count('sold_count');
        $grid->review_count('review_count');

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
    protected function form()
    {
        $form = new Form(new Product);

        // 创建一个输入框，第一个参数 title 是模型的字段名，第二个参数是该字段描述
        $form->text('title', 'title')->rules('required');
        $form->text('slug', 'Slug')->readonly()->placeholder('Auto ...');
        $form->text('code', 'Code')->readonly()->placeholder('Auto ...');
        $form->currency('price', 'Price')->symbol('VND')->rules('required');

        // 创建一个选择图片的框
        $form->image('image', 'image')->rules('required|image');

        // 创建一个富文本编辑器
        $form->textarea('description', 'description')->rules('required');
        $form->editor('content', 'Content')->rules('required');
        $form->multipleSelect('categories')->options(Category::all()->pluck('title', 'id'));
        // 创建一组单选框
        $form->radio('on_sale', 'on_sale')->options(['1' => 'Yes', '0'=> 'No'])->default('1');

        // 直接添加一对多的关联模型
        $form->hasMany('skus', 'SKU ', function (Form\NestedForm $form) {
            $form->text('title', 'SKU title')->rules('required');
            $form->text('description', 'SKU description')->rules('required');
            $form->text('price', 'price')->rules('required|numeric|min:0.01');
            $form->text('stock', 'stock')->rules('required|integer|min:0');
            $form->text('sku_code', 'SKU')->rules('required|string');
        });
        // 定义事件回调，当模型即将保存时会触发这个回调
        $form->saving(function (Form $form) {
            $form->model()->price = collect($form->input('skus'))->where(Form::REMOVE_FLAG_NAME, 0)->min('price') ?: 0;
        });

        return $form;
    }
}
