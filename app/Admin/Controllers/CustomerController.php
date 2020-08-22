<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Customer;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class CustomerController extends AdminController
{
    protected $title = '客户管理';
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Customer(), function (Grid $grid) {
            $grid->id->sortable();
            $grid->name;
            $grid->sex->using([1 => '男', 2 => '女']);
            $grid->phone;
            $grid->weixin;
            $grid->balance;
            $grid->status->using([0 => '正常', 1 => '不可用']);
            $grid->created_at;
            $grid->updated_at->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');

            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new Customer(), function (Show $show) {
            $show->id;
            $show->name;
            $show->sex->using([0 => '男', 1 => '女']);
            $show->phone;
            $show->weixin;
            $show->balance;
            $show->status->using([0 => '正常', 1 => '不可用']);
            $show->created_at;
            $show->updated_at;
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Customer(), function (Form $form) {
            $form->display('id');
            $form->text('name');
            $form->text('sex');
            $form->text('phone');
            $form->text('weixin');
            $form->text('balance');
            $form->text('status');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
