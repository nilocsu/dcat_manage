<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\CouponCard;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class CouponCardController extends AdminController
{
    protected $title = '优惠卡管理';
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new CouponCard(), function (Grid $grid) {
            $grid->id->sortable();
            $grid->name;
            $grid->percentage;
            $grid->price;
            $grid->start_time;
            $grid->end_time;
            $grid->status->using([0 => '未激活', 1 => '正常']);;
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
        return Show::make($id, new CouponCard(), function (Show $show) {
            $show->id;
            $show->name;
            $show->percentage;
            $show->price;
            $show->start_time;
            $show->end_time;
            $show->status;
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
        return Form::make(new CouponCard(), function (Form $form) {
            $form->display('id');
            $form->text('name');
            $form->text('percentage');
            $form->text('price');
            $form->text('start_time');
            $form->text('end_time');
            $form->text('status');
            $form->text('introduction');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
