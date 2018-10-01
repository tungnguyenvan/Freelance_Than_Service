<?php
/**
 * @package     FT_Framework
 * @author      Freetuts Dev Team
 * @email       freetuts.net@gmail.com
 * @copyright   Copyright (c) 2015
 * @since       Version 1.0
 * @filesource  system/core/loader/FT_Model_Loader.php
 */
class FT_Model_Loader
{
    /**
     * Load helper
     * @param   string
     * @desc    hàm load model, tham số truyền vào là tên của model
     */
    public function load($model)
    {
        // Nếu thư viện chưa được load thì thực hiện load
        if ( empty($this->{$model}) )
        {
            // Chuyển chữ hoa đầu và thêm hậu tố _Library
            $class = ucfirst($model) . '_Model';
            require_once(PATH_ROOT . '/model/' . $class . '.php');
            $this->{$model} = new $class();
        }
    }
}
