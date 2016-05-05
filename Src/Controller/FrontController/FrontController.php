<?php
namespace Controller\FrontController;

use Controller\FrontController\FrontControllerInterface as FrontControllerInterface;

class FrontController implements FrontControllerInterface
{
    protected $handler  ;
    protected $action   ;
    protected $params        = array();
    
    // IEI URL-ul si il spargi
    // localhost/index.php?handler=auth&action=login
    public function __construct() {
        // trebuie sa continui cu _GET['action'] si celalalt
        if (isset($_GET["handler"])) {
            $this->setHandler($_GET["handler"]);
        }
        // daca exista action si handler le pune in obiect
        if (isset($_GET["action"])) {
            $this->setAction($_GET["action"]);     
        }
        if (isset($_GET["params"])) {
            $this->setParams($_GET["params"]);
        }
    }
    
    public function setHandler($handler) {
        $handler = ucfirst(strtolower($handler));
        $this->handler = '\Controller\\' .$handler;
        return $this;
    }
    
    public function setAction($action) {
        $this->action = $action;
        return $this;
    }
    
    public function setParams(array $params) {
        $this->params = $params;
        return $this;
    }
    
    public function run() {
        if ( strcmp($this->handler, "") === 0 & strcmp($this->action,"") === 0) {
            $this->setHandler("Auth");
            $this->setAction("login");
        }            
            call_user_func_array(array(new $this->handler, $this->action), $this->params);
    }
}