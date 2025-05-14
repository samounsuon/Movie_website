<?php 
require_once 'Controllers/BaseController.php';
class VideoController extends BaseController
{
    function index()
    {
       $this->views('Admin/Movie/videoList.php');
       
    }
    
   
}
?>