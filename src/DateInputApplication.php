<?php
/**
 * Created by Maxim Omelchenko <omelchenko@samsonos.com>
 * on 31.03.2015 at 18:51
 */

namespace samsoncms\input\date;

class DateInputApplication extends \samsoncms\input\InputApplication
{
    protected $id = 'samson_cms_input_date';

    /**
     * Create field class instance
     *
     * @param string|\samson\activerecord\dbRecord $entity Class name or object
     * @param string|null $param $entity class field
     * @param int $identifier Identifier to find and create $entity instance
     * @param \samson\activerecord\dbQuery|null $dbQuery Database object
     * @return self
     */
    public function createField($entity, $param = null, $identifier = null, $dbQuery = null)
    {
        $this->field = new Date($entity, $param, $identifier, $dbQuery);
        return $this;
    }
}
