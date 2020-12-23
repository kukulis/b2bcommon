<?php
/**
 * Utils.php
 * Created by Giedrius Tumelis.
 * Date: 2020-12-23
 * Time: 16:19
 */

namespace Catalog\B2b\Common\Helper;

use \stdClass;

class Utils
{
    /**
     * @param $instance
     * @param string $className
     * @return mixed
     */
    public static function objectToObject($instance, string $className)
    {
        return unserialize(sprintf(
            'O:%d:"%s"%s',
            strlen($className),
            $className,
            strstr(strstr(serialize($instance), '"'), ':')
        ));
    }

    /**
     * @param $obj
     * @return stdClass
     */
    public static function emptyStdClass($obj)
    {
        if (empty($obj)) {
            return new stdClass();
        } else {
            return $obj;
        }
    }
}