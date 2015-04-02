<?php
namespace samsoncms\input\date;

use samsoncms\input\Field;

/**
 * Date SamsonCMS input field
 * @author Vitaly Iegorov <egorov@samsonos.com>
 * @author Maxim Omelchenko <omelchenko@samsonos.com>
 */
class Date extends Field
{
    /** Database object field name */
    protected $param = 'numeric_value';

    /**
     * Function to convert field value
     *
     * @param mixed $value
     * @return int Time value represented as int
     */
    public function convert($value)
    {
        // Convert to timestamp
        return strtotime($value);
    }

    /** {@inheritdoc} */
    public function value()
    {
        // Return formatted date
        return date('Y-m-d', $this->dbObject[$this->param]);
    }
}
