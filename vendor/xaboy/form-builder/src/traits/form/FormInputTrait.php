<?php
/**
 * FormBuilder表单生成器
 * Author: xaboy
 * Github: https://github.com/xaboy/form-builder
 */

namespace FormBuilder\traits\form;


use FormBuilder\components\Input;

/**
 * Class FormInputTrait
 * @package FormBuilder\traits\form
 */
trait FormInputTrait
{
    /**
     * 获取input组件
     * @param $field
     * @param $title
     * @param string $value
     * @param string $type
     * @return Input
     */
    public static function input($field, $title, $value = '', $type = Input::TYPE_TEXT)
    {
        $input = new Input($field, $title, (string)$value);
        $input->type($type);
        return $input;
    }

    /**
     * @param $field
     * @param $title
     * @param string $value
     * @return Input
     */
    public static function text($field, $title, $value = '')
    {
        return self::input($field, $title, $value);
    }

    /**
     * @param $field
     * @param $title
     * @param string $value
     * @return Input
     */
    public static function password($field, $title, $value = '')
    {
        return self::input($field, $title, $value, Input::TYPE_PASSWORD);
    }

    /**
     * @param $field
     * @param $title
     * @param string $value
     * @return Input
     */
    public static function textarea($field, $title, $value = '')
    {
        return self::input($field, $title, $value, Input::TYPE_TEXTAREA);
    }

    /**
     * @param $field
     * @param $title
     * @param string $value
     * @return Input
     */
    public static function url($field, $title, $value = '')
    {
        return self::input($field, $title, $value, Input::TYPE_URL);
    }

    /**
     * @param $field
     * @param $title
     * @param string $value
     * @return Input
     */
    public static function email($field, $title, $value = '')
    {
        return self::input($field, $title, $value, Input::TYPE_EMAIL);
    }

    /**
     * @param $field
     * @param $title
     * @param string $value
     * @return Input
     */
    public static function idate($field, $title, $value = '')
    {
        return self::input($field, $title, $value, Input::TYPE_DATE);
    }
}