<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\AdminUser;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class StaffController extends AdminController
{

    protected $title = '员工管理';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new AdminUser(), function (Grid $grid) {
            $grid->id->sortable();
            $grid->username;
            $grid->name;
            $grid->avatar;
            $grid->sex->using([0 => '男', 1 => '女']);
            $grid->base_salary;
            $grid->phone;
            $grid->status->using([0 => '正常', 1 => '禁用']);
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
        return Show::make($id, new AdminUser(), function (Show $show) {
            $show->id;
            $show->username;
            $show->name;
            $show->avatar;
            $show->sex->using([0 => '男', 1 => '女']);
            $show->base_salary;
            $show->phone;
            $show->status->using([0 => '正常', 1 => '禁用']);
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
        return Form::make(new AdminUser(), function (Form $form) {
            $form->display('id');
            $form->text('username');
            $form->text('password');
            $form->text('name');
            $form->text('avatar');
            $form->text('sex');
            $form->text('base_salary');
            $form->text('phone');
            $form->text('status');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
