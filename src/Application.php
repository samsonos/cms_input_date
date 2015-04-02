<?php
/**
 * Created by Maxim Omelchenko <omelchenko@samsonos.com>
 * on 31.03.2015 at 18:51
 */

namespace samsoncms\input\date;

/**
 * SamsonCMS date input module
 * @author Max Omelchenko <omelchenko@samsonos.com>
 */
class Application extends \samsoncms\input\Application
{
    /** @var int Field type number */
    public static $type = 3;

    /** @var string SamsonCMS field class */
    protected $fieldClass = '\samsoncms\input\date\Date';
}
