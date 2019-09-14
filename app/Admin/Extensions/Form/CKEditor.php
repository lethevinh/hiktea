<?php

namespace App\Admin\Extensions\Form;

use Encore\Admin\Form\Field;

class CKEditor extends Field
{
    public static $js = [
        '/packages/ckeditor/ckeditor.js',
        '/packages/ckeditor/adapters/jquery.js',
    ];

    protected $view = 'admin.ckeditor';

    public function render()
    {
        $this->script = "$('textarea.{$this->getElementClassString()}').ckeditor({
                width:'100%',
                filebrowserImageBrowseUrl: '/admin/file-manager?type=Images',
                filebrowserImageUploadUrl: '/admin/file-manager/upload?type=Images&_token=',
                filebrowserBrowseUrl: '/admin/file-manager?type=Files',
                filebrowserUploadUrl: '/admin/file-manager/upload?type=Files&_token='
                });";

        return parent::render();
    }
}
