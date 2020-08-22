<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Project;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class ProjectController extends AdminController
{
    protected $title = '项目管理';
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Project(), function (Grid $grid) {
            $grid->id->sortable();
            $grid->name;
            $grid->price;
            $grid->percentage;
            $grid->status->using([0 => '可用', 1 => '不可用']);
            $grid->introduction;
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
        return Show::make($id, new Project(), function (Show $show) {
            $show->id;
            $show->name;
            $show->price;
            $show->percentage;
            $show->status->using([0 => '可用', 1 => '不可用']);
            $show->introduction;
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
        return Form::make(new Project(), function (Form $form) {
            $form->display('id');
            $form->text('name');
            $form->text('price');
            $form->text('percentage');
            $form->text('status');
            $form->text('introduction');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
