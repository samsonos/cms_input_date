<?php
namespace samsoncms\input\date;

use samsoncms\input\Field;

/**
 * Generic SamsonCMS input field
 * @author Vitaly Iegorov<egorov@samsonos.com>
 *
 */
class Date extends Field
{
//    /** @var  int Field type identifier */
//    protected static $type = 3;
//
//    /** @var string Module identifier */
//    protected $id = 'samson_cms_input_date';

    /**
     * Function to convert
     *
     * @param mixed $input
     * @return int
     */
    public function convert($input)
    {
        // Convert to timestamp
        return strtotime($input);
    }
}
