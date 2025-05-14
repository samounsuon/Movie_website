<?php
    require_once "Views/Layout.php";
class BaseController {
    
    
    public function views($view, $data = []){
        // echo "1333";
        extract($data);
        ob_start();
        // $content = ob_get_clean();  
        require_once 'Views/Layout.php';
        require_once 'Views/'.$view;

    }
}