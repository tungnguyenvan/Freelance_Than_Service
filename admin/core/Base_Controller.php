<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

class Base_Controller extends FT_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function load_header()
    {
        // Load nội dung footer
    }

    public function load_footer()
    {
        // Load nội dung header
    }

    // Hàm hủy này có nhiệm vụ show nội dung của view, lúc này các controller
    // không cần gọi đến $this->view->show nữa
    public function __destruct()
    {
        $this->view->show();
    }
}
