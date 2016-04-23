<?php

class Template
{
    /** @var array */
    protected static $data_shared = [];

    /**
     * @return array
     */
    public static function getData() : array
    {
        return self::$data_shared;
    }

    /**
     * @param $key
     * @param $value
     */
    public static function share($key, $value)
    {
        self::$data_shared[$key] = $value;
    }

    /**
     * @param string $__TEMPLATE__
     * @param array $__DATA__
     * @return string
     * @throws Exception
     */
    public static function render(string $__TEMPLATE__, array $__DATA__ = [])
    {
        if (!is_file($__TEMPLATE__))
            throw new Exception('Template file not found!');

        extract( self::$data_shared );
        extract( $__DATA__ );

        ob_start();
        include $__TEMPLATE__;
        return ob_get_clean();
    }


    /**
     * @param string $__TEMPLATE__
     * @param array $__DATA__
     * @throws Exception
     */
    public static function display(string $__TEMPLATE__, array $__DATA__ = [])
    {
        echo static::render($__TEMPLATE__, $__DATA__);
    }
}
