<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Salary;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class SalaryController extends AdminController
{
    protected $title = '薪水管理';
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Salary(), function (Grid $grid) {
            $grid->id->sortable();
            $grid->user_id;
            $grid->pro_sum;
            $grid->card_sum;
            $grid->make_money_income;
            $grid->pro_add;
            $grid->base_salary;
            $grid->sum_salary;
            $grid->settle_date;
            $grid->remark->sortable();
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
        return Show::make($id, new Salary(), function (Show $show) {
            $show->id;
            $show->user_id;
            $show->pro_sum;
            $show->card_sum;
            $show->make_money_income;
            $show->pro_add;
            $show->base_salary;
            $show->sum_salary;
            $show->settle_date;
            $show->remark;
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
        return Form::make(new Salary(), function (Form $form) {
            $form->display('id');
            $form->text('user_id');
            $form->text('pro_sum');
            $form->text('card_sum');
            $form->text('make_money_income');
            $form->text('pro_add');
            $form->text('base_salary');
            $form->text('sum_salary');
            $form->text('settle_date');
            $form->text('remark');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
