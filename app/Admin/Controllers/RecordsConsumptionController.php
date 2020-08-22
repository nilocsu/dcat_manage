<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\AdminUser;
use App\Admin\Repositories\Customer;
use App\Admin\Repositories\RecordsConsumption;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class RecordsConsumptionController extends AdminController
{
    protected $title = '消费记录管理';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new RecordsConsumption(['customer', 'adminUser']), function (Grid $grid) {
            $grid->id->sortable();
            $grid->column('customer.name', admin_trans_field('customer'));
            $grid->column('adminUser.name', '员工姓名');
            $grid->consumption_type;
            $grid->price;
            $grid->pay_type;
            $grid->pay_time;
            $grid->is_record;
            $grid->remark;
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

        return Show::make($id, new RecordsConsumption(), function (Show $show) {
            $show->id;
            $show->customer(function ($model){
                return Show::make($model->customer_id, new Customer(), function ($show){
                   $show->name();
                });
            });
            $show->adminUser(function ($model){
                return Show::make($model->user_id, new AdminUser(), function ($show){
                    $show->name();
                });
            });
            $show->consumption_type;
            $show->price;
            $show->pay_type;
            $show->pay_time;
            $show->is_record;
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
        return Form::make(new RecordsConsumption([ 'adminUser','customer']), function (Form $form) {
            $form->display('id');
//            $form->text('customer.name', '顾客名称');
//            $form->text('adminUser.name', '员工名称');
            $form->text('consumption_type');
            $form->text('price');
            $form->text('pay_type');
            $form->text('pay_time');
            $form->text('is_record');
            $form->text('remark');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
