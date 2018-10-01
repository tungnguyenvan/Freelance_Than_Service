<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');
/**
 * Hàm chạy ứng dụng
 */
function FT_load()
{
    // Lấy phần config chung
    $config = include_once PATH_SYSTEM . '/config/config.php';

    // Lấy phần config khởi tạo ban đầu
    $config = include_once PATH_APPLICATION . '/config/init.php';

    $method = $_SERVER['REQUEST_METHOD'];

    if($method == 'GET'){
        // Nếu không truyền controller thì lấy controller mặc định
        $controller = empty($_GET['c']) ? $config['default_controller'] : $_GET['c'];

        // Nếu không truyền action thì lấy action mặc định
        $action = empty($_GET['a']) ? $config['default_action'] : $_GET['a'];
    }

    if($method == 'POST'){
        // Nếu không truyền controller thì lấy controller mặc định
        $controller = empty($_POST['c']) ? $config['default_controller'] : $_POST['c'];

        // Nếu không truyền action thì lấy action mặc định
        $action = empty($_POST['a']) ? $config['default_action'] : $_POST['a'];
    }

    

    // Chuyển đổi tên controller vì nó có định dạng là {Name}_Controller
    $controller = ucfirst(strtolower($controller)) . '_Controller';

    // chuyển đổi tên action
    $action = strtolower($action);

    // Kiểm tra file controller có tồn tại hay không
    if (!file_exists(PATH_APPLICATION . '/controller/' . $controller . '.php')){
        die ('Không tìm thấy controller');
    }

    // Include controller chính để các controller con nó kế thừa
    include_once PATH_SYSTEM . '/core/FT_Controller.php';

    // Load Base_Controller
    if (file_exists(PATH_APPLICATION . '/core/Base_Controller.php')){
        include_once PATH_APPLICATION . '/core/Base_Controller.php';
    }

    // Gọi file controller vào
    require_once PATH_APPLICATION . '/controller/' . $controller . '.php';

    // Kiểm tra class controller có tồn tại hay không
    if (!class_exists($controller)){
        die ('Không tìm thấy controller');
    }

    // Khởi tạo controller
    $controllerObject = new $controller();

    // Kiểm tra action có tồn tại hay không
    if ( !method_exists($controllerObject, $action)){
        die ('Không tìm thấy action');
    }

    // Chạy ứng dụng
    $controllerObject->{$action}();
}
