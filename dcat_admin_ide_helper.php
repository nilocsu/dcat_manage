<?php

/**
 * A helper file for Dcat Admin, to provide autocomplete information to your IDE
 *
 * This file should not be included in your code, only analyzed by your IDE!
 *
 * @author jqh <841324345@qq.com>
 */
namespace Dcat\Admin {
    use Illuminate\Support\Collection;

    /**
     * @property Grid\Column|Collection id
     * @property Grid\Column|Collection username
     * @property Grid\Column|Collection name
     * @property Grid\Column|Collection roles
     * @property Grid\Column|Collection permissions
     * @property Grid\Column|Collection created_at
     * @property Grid\Column|Collection updated_at
     * @property Grid\Column|Collection avatar
     * @property Grid\Column|Collection user
     * @property Grid\Column|Collection method
     * @property Grid\Column|Collection path
     * @property Grid\Column|Collection ip
     * @property Grid\Column|Collection input
     * @property Grid\Column|Collection slug
     * @property Grid\Column|Collection version
     * @property Grid\Column|Collection alias
     * @property Grid\Column|Collection authors
     * @property Grid\Column|Collection enable
     * @property Grid\Column|Collection imported
     * @property Grid\Column|Collection config
     * @property Grid\Column|Collection require
     * @property Grid\Column|Collection require_dev
     * @property Grid\Column|Collection percentage
     * @property Grid\Column|Collection price
     * @property Grid\Column|Collection start_time
     * @property Grid\Column|Collection end_time
     * @property Grid\Column|Collection status
     * @property Grid\Column|Collection introduction
     * @property Grid\Column|Collection sex
     * @property Grid\Column|Collection phone
     * @property Grid\Column|Collection weixin
     * @property Grid\Column|Collection balance
     * @property Grid\Column|Collection user_id
     * @property Grid\Column|Collection pro_sum
     * @property Grid\Column|Collection card_sum
     * @property Grid\Column|Collection make_money_income
     * @property Grid\Column|Collection pro_add
     * @property Grid\Column|Collection base_salary
     * @property Grid\Column|Collection sum_salary
     * @property Grid\Column|Collection settle_date
     * @property Grid\Column|Collection remark
     * @property Grid\Column|Collection consumption_type
     * @property Grid\Column|Collection pay_type
     * @property Grid\Column|Collection pay_time
     * @property Grid\Column|Collection is_record
     * @property Grid\Column|Collection customer_id
     * @property Grid\Column|Collection parent_id
     * @property Grid\Column|Collection order
     * @property Grid\Column|Collection icon
     * @property Grid\Column|Collection uri
     * @property Grid\Column|Collection permission_id
     * @property Grid\Column|Collection menu_id
     * @property Grid\Column|Collection http_method
     * @property Grid\Column|Collection http_path
     * @property Grid\Column|Collection role_id
     * @property Grid\Column|Collection password
     * @property Grid\Column|Collection remember_token
     * @property Grid\Column|Collection deleted_at
     * @property Grid\Column|Collection card_id
     * @property Grid\Column|Collection project_id
     * @property Grid\Column|Collection times
     * @property Grid\Column|Collection update_at
     * @property Grid\Column|Collection opening_time
     * @property Grid\Column|Collection dead_time
     * @property Grid\Column|Collection remarks
     * @property Grid\Column|Collection recommend_id
     * @property Grid\Column|Collection customer_card_id
     * @property Grid\Column|Collection residual_times
     * @property Grid\Column|Collection connection
     * @property Grid\Column|Collection queue
     * @property Grid\Column|Collection payload
     * @property Grid\Column|Collection exception
     * @property Grid\Column|Collection failed_at
     * @property Grid\Column|Collection email
     * @property Grid\Column|Collection token
     * @property Grid\Column|Collection type
     * @property Grid\Column|Collection thing_id
     * @property Grid\Column|Collection date
     * @property Grid\Column|Collection money_income
     * @property Grid\Column|Collection money_outcome
     * @property Grid\Column|Collection card_reduce
     * @property Grid\Column|Collection balance_reduce
     * @property Grid\Column|Collection sum_income
     * @property Grid\Column|Collection email_verified_at
     *
     * @method Grid\Column|Collection id(string $label = null)
     * @method Grid\Column|Collection username(string $label = null)
     * @method Grid\Column|Collection name(string $label = null)
     * @method Grid\Column|Collection roles(string $label = null)
     * @method Grid\Column|Collection permissions(string $label = null)
     * @method Grid\Column|Collection created_at(string $label = null)
     * @method Grid\Column|Collection updated_at(string $label = null)
     * @method Grid\Column|Collection avatar(string $label = null)
     * @method Grid\Column|Collection user(string $label = null)
     * @method Grid\Column|Collection method(string $label = null)
     * @method Grid\Column|Collection path(string $label = null)
     * @method Grid\Column|Collection ip(string $label = null)
     * @method Grid\Column|Collection input(string $label = null)
     * @method Grid\Column|Collection slug(string $label = null)
     * @method Grid\Column|Collection version(string $label = null)
     * @method Grid\Column|Collection alias(string $label = null)
     * @method Grid\Column|Collection authors(string $label = null)
     * @method Grid\Column|Collection enable(string $label = null)
     * @method Grid\Column|Collection imported(string $label = null)
     * @method Grid\Column|Collection config(string $label = null)
     * @method Grid\Column|Collection require(string $label = null)
     * @method Grid\Column|Collection require_dev(string $label = null)
     * @method Grid\Column|Collection percentage(string $label = null)
     * @method Grid\Column|Collection price(string $label = null)
     * @method Grid\Column|Collection start_time(string $label = null)
     * @method Grid\Column|Collection end_time(string $label = null)
     * @method Grid\Column|Collection status(string $label = null)
     * @method Grid\Column|Collection introduction(string $label = null)
     * @method Grid\Column|Collection sex(string $label = null)
     * @method Grid\Column|Collection phone(string $label = null)
     * @method Grid\Column|Collection weixin(string $label = null)
     * @method Grid\Column|Collection balance(string $label = null)
     * @method Grid\Column|Collection user_id(string $label = null)
     * @method Grid\Column|Collection pro_sum(string $label = null)
     * @method Grid\Column|Collection card_sum(string $label = null)
     * @method Grid\Column|Collection make_money_income(string $label = null)
     * @method Grid\Column|Collection pro_add(string $label = null)
     * @method Grid\Column|Collection base_salary(string $label = null)
     * @method Grid\Column|Collection sum_salary(string $label = null)
     * @method Grid\Column|Collection settle_date(string $label = null)
     * @method Grid\Column|Collection remark(string $label = null)
     * @method Grid\Column|Collection consumption_type(string $label = null)
     * @method Grid\Column|Collection pay_type(string $label = null)
     * @method Grid\Column|Collection pay_time(string $label = null)
     * @method Grid\Column|Collection is_record(string $label = null)
     * @method Grid\Column|Collection customer_id(string $label = null)
     * @method Grid\Column|Collection parent_id(string $label = null)
     * @method Grid\Column|Collection order(string $label = null)
     * @method Grid\Column|Collection icon(string $label = null)
     * @method Grid\Column|Collection uri(string $label = null)
     * @method Grid\Column|Collection permission_id(string $label = null)
     * @method Grid\Column|Collection menu_id(string $label = null)
     * @method Grid\Column|Collection http_method(string $label = null)
     * @method Grid\Column|Collection http_path(string $label = null)
     * @method Grid\Column|Collection role_id(string $label = null)
     * @method Grid\Column|Collection password(string $label = null)
     * @method Grid\Column|Collection remember_token(string $label = null)
     * @method Grid\Column|Collection deleted_at(string $label = null)
     * @method Grid\Column|Collection card_id(string $label = null)
     * @method Grid\Column|Collection project_id(string $label = null)
     * @method Grid\Column|Collection times(string $label = null)
     * @method Grid\Column|Collection update_at(string $label = null)
     * @method Grid\Column|Collection opening_time(string $label = null)
     * @method Grid\Column|Collection dead_time(string $label = null)
     * @method Grid\Column|Collection remarks(string $label = null)
     * @method Grid\Column|Collection recommend_id(string $label = null)
     * @method Grid\Column|Collection customer_card_id(string $label = null)
     * @method Grid\Column|Collection residual_times(string $label = null)
     * @method Grid\Column|Collection connection(string $label = null)
     * @method Grid\Column|Collection queue(string $label = null)
     * @method Grid\Column|Collection payload(string $label = null)
     * @method Grid\Column|Collection exception(string $label = null)
     * @method Grid\Column|Collection failed_at(string $label = null)
     * @method Grid\Column|Collection email(string $label = null)
     * @method Grid\Column|Collection token(string $label = null)
     * @method Grid\Column|Collection type(string $label = null)
     * @method Grid\Column|Collection thing_id(string $label = null)
     * @method Grid\Column|Collection date(string $label = null)
     * @method Grid\Column|Collection money_income(string $label = null)
     * @method Grid\Column|Collection money_outcome(string $label = null)
     * @method Grid\Column|Collection card_reduce(string $label = null)
     * @method Grid\Column|Collection balance_reduce(string $label = null)
     * @method Grid\Column|Collection sum_income(string $label = null)
     * @method Grid\Column|Collection email_verified_at(string $label = null)
     */
    class Grid {}

    class MiniGrid extends Grid {}

    /**
     * @property Show\Field|Collection id
     * @property Show\Field|Collection username
     * @property Show\Field|Collection name
     * @property Show\Field|Collection roles
     * @property Show\Field|Collection permissions
     * @property Show\Field|Collection created_at
     * @property Show\Field|Collection updated_at
     * @property Show\Field|Collection avatar
     * @property Show\Field|Collection user
     * @property Show\Field|Collection method
     * @property Show\Field|Collection path
     * @property Show\Field|Collection ip
     * @property Show\Field|Collection input
     * @property Show\Field|Collection slug
     * @property Show\Field|Collection version
     * @property Show\Field|Collection alias
     * @property Show\Field|Collection authors
     * @property Show\Field|Collection enable
     * @property Show\Field|Collection imported
     * @property Show\Field|Collection config
     * @property Show\Field|Collection require
     * @property Show\Field|Collection require_dev
     * @property Show\Field|Collection percentage
     * @property Show\Field|Collection price
     * @property Show\Field|Collection start_time
     * @property Show\Field|Collection end_time
     * @property Show\Field|Collection status
     * @property Show\Field|Collection introduction
     * @property Show\Field|Collection sex
     * @property Show\Field|Collection phone
     * @property Show\Field|Collection weixin
     * @property Show\Field|Collection balance
     * @property Show\Field|Collection user_id
     * @property Show\Field|Collection pro_sum
     * @property Show\Field|Collection card_sum
     * @property Show\Field|Collection make_money_income
     * @property Show\Field|Collection pro_add
     * @property Show\Field|Collection base_salary
     * @property Show\Field|Collection sum_salary
     * @property Show\Field|Collection settle_date
     * @property Show\Field|Collection remark
     * @property Show\Field|Collection consumption_type
     * @property Show\Field|Collection pay_type
     * @property Show\Field|Collection pay_time
     * @property Show\Field|Collection is_record
     * @property Show\Field|Collection customer_id
     * @property Show\Field|Collection parent_id
     * @property Show\Field|Collection order
     * @property Show\Field|Collection icon
     * @property Show\Field|Collection uri
     * @property Show\Field|Collection permission_id
     * @property Show\Field|Collection menu_id
     * @property Show\Field|Collection http_method
     * @property Show\Field|Collection http_path
     * @property Show\Field|Collection role_id
     * @property Show\Field|Collection password
     * @property Show\Field|Collection remember_token
     * @property Show\Field|Collection deleted_at
     * @property Show\Field|Collection card_id
     * @property Show\Field|Collection project_id
     * @property Show\Field|Collection times
     * @property Show\Field|Collection update_at
     * @property Show\Field|Collection opening_time
     * @property Show\Field|Collection dead_time
     * @property Show\Field|Collection remarks
     * @property Show\Field|Collection recommend_id
     * @property Show\Field|Collection customer_card_id
     * @property Show\Field|Collection residual_times
     * @property Show\Field|Collection connection
     * @property Show\Field|Collection queue
     * @property Show\Field|Collection payload
     * @property Show\Field|Collection exception
     * @property Show\Field|Collection failed_at
     * @property Show\Field|Collection email
     * @property Show\Field|Collection token
     * @property Show\Field|Collection type
     * @property Show\Field|Collection thing_id
     * @property Show\Field|Collection date
     * @property Show\Field|Collection money_income
     * @property Show\Field|Collection money_outcome
     * @property Show\Field|Collection card_reduce
     * @property Show\Field|Collection balance_reduce
     * @property Show\Field|Collection sum_income
     * @property Show\Field|Collection email_verified_at
     *
     * @method Show\Field|Collection id(string $label = null)
     * @method Show\Field|Collection username(string $label = null)
     * @method Show\Field|Collection name(string $label = null)
     * @method Show\Field|Collection roles(string $label = null)
     * @method Show\Field|Collection permissions(string $label = null)
     * @method Show\Field|Collection created_at(string $label = null)
     * @method Show\Field|Collection updated_at(string $label = null)
     * @method Show\Field|Collection avatar(string $label = null)
     * @method Show\Field|Collection user(string $label = null)
     * @method Show\Field|Collection method(string $label = null)
     * @method Show\Field|Collection path(string $label = null)
     * @method Show\Field|Collection ip(string $label = null)
     * @method Show\Field|Collection input(string $label = null)
     * @method Show\Field|Collection slug(string $label = null)
     * @method Show\Field|Collection version(string $label = null)
     * @method Show\Field|Collection alias(string $label = null)
     * @method Show\Field|Collection authors(string $label = null)
     * @method Show\Field|Collection enable(string $label = null)
     * @method Show\Field|Collection imported(string $label = null)
     * @method Show\Field|Collection config(string $label = null)
     * @method Show\Field|Collection require(string $label = null)
     * @method Show\Field|Collection require_dev(string $label = null)
     * @method Show\Field|Collection percentage(string $label = null)
     * @method Show\Field|Collection price(string $label = null)
     * @method Show\Field|Collection start_time(string $label = null)
     * @method Show\Field|Collection end_time(string $label = null)
     * @method Show\Field|Collection status(string $label = null)
     * @method Show\Field|Collection introduction(string $label = null)
     * @method Show\Field|Collection sex(string $label = null)
     * @method Show\Field|Collection phone(string $label = null)
     * @method Show\Field|Collection weixin(string $label = null)
     * @method Show\Field|Collection balance(string $label = null)
     * @method Show\Field|Collection user_id(string $label = null)
     * @method Show\Field|Collection pro_sum(string $label = null)
     * @method Show\Field|Collection card_sum(string $label = null)
     * @method Show\Field|Collection make_money_income(string $label = null)
     * @method Show\Field|Collection pro_add(string $label = null)
     * @method Show\Field|Collection base_salary(string $label = null)
     * @method Show\Field|Collection sum_salary(string $label = null)
     * @method Show\Field|Collection settle_date(string $label = null)
     * @method Show\Field|Collection remark(string $label = null)
     * @method Show\Field|Collection consumption_type(string $label = null)
     * @method Show\Field|Collection pay_type(string $label = null)
     * @method Show\Field|Collection pay_time(string $label = null)
     * @method Show\Field|Collection is_record(string $label = null)
     * @method Show\Field|Collection customer_id(string $label = null)
     * @method Show\Field|Collection parent_id(string $label = null)
     * @method Show\Field|Collection order(string $label = null)
     * @method Show\Field|Collection icon(string $label = null)
     * @method Show\Field|Collection uri(string $label = null)
     * @method Show\Field|Collection permission_id(string $label = null)
     * @method Show\Field|Collection menu_id(string $label = null)
     * @method Show\Field|Collection http_method(string $label = null)
     * @method Show\Field|Collection http_path(string $label = null)
     * @method Show\Field|Collection role_id(string $label = null)
     * @method Show\Field|Collection password(string $label = null)
     * @method Show\Field|Collection remember_token(string $label = null)
     * @method Show\Field|Collection deleted_at(string $label = null)
     * @method Show\Field|Collection card_id(string $label = null)
     * @method Show\Field|Collection project_id(string $label = null)
     * @method Show\Field|Collection times(string $label = null)
     * @method Show\Field|Collection update_at(string $label = null)
     * @method Show\Field|Collection opening_time(string $label = null)
     * @method Show\Field|Collection dead_time(string $label = null)
     * @method Show\Field|Collection remarks(string $label = null)
     * @method Show\Field|Collection recommend_id(string $label = null)
     * @method Show\Field|Collection customer_card_id(string $label = null)
     * @method Show\Field|Collection residual_times(string $label = null)
     * @method Show\Field|Collection connection(string $label = null)
     * @method Show\Field|Collection queue(string $label = null)
     * @method Show\Field|Collection payload(string $label = null)
     * @method Show\Field|Collection exception(string $label = null)
     * @method Show\Field|Collection failed_at(string $label = null)
     * @method Show\Field|Collection email(string $label = null)
     * @method Show\Field|Collection token(string $label = null)
     * @method Show\Field|Collection type(string $label = null)
     * @method Show\Field|Collection thing_id(string $label = null)
     * @method Show\Field|Collection date(string $label = null)
     * @method Show\Field|Collection money_income(string $label = null)
     * @method Show\Field|Collection money_outcome(string $label = null)
     * @method Show\Field|Collection card_reduce(string $label = null)
     * @method Show\Field|Collection balance_reduce(string $label = null)
     * @method Show\Field|Collection sum_income(string $label = null)
     * @method Show\Field|Collection email_verified_at(string $label = null)
     */
    class Show {}

    /**
     * @method \Dcat\Admin\Form\Field\Button button(...$params)
     */
    class Form {}

}

namespace Dcat\Admin\Grid {
    /**
     
     */
    class Column {}

    /**
     
     */
    class Filter {}
}

namespace Dcat\Admin\Show {
    /**
     
     */
    class Field {}
}
