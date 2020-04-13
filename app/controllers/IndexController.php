<?php
declare(strict_types=1);

class IndexController extends ControllerBase
{
    

    public function indexAction()
    {
        
        if($_SESSION['login'] != true){
            header('Location: sign');
            exit();
        }

    }
    
    

}

