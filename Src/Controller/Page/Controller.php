<?php
namespace Controller\Page;


class Controller{

    function __construct() {
        
        $pages = array("home"=>(array("path"=>"Home.php","class"=>"Home")));
        
        $page = "home";
        echo $page;
        if (!empty(filter_input(INPUT_GET,"page"))) {
        $page = filter_input(INPUT_GET,"page");
        }
        $path = $pages [$page]["path"];
        $page_class = $pages[$page]["class"];
        //include $path;
        $apth = "Controller\Page\\" . $page_class;
        new $apth();
    }

}
