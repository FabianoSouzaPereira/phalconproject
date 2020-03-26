<?php
declare(strict_types=1);
use Phalcon\Db\Column;

class SignController extends ControllerBase
{
    public $iduser=0;
    public function indexAction()
    {
        
    }
    
    public function updateAction()
    {
        $user = new Users();
        
        //assign value from the form to $user
        $user->assign(
            $this->request->getPost(null,(['','username','useremail','userpassword'])));
        
        // Store and check for errors
        $success = $user->update();
        
        // passing the result to the view
        $this->view->success = $success;
        
        if ($success) {
        echo    $message = "Obrigado por Registrar";
        } else {
         echo   $message = "Desculpe, ocorreu os seguintes problemas: <br>"
                . implode('<br>', $user->getMessages());
        }
        
        // passing a message to the view
        $this->view->message = $message;
 
    }

    public function loginAction()
    {
        $users = new Users();

         $users::find(
            [
                "useremail = useremail AND userpassword = userpassword",
                'order' => 'useremail',
                'limit' => 100,
            ]
        );
            foreach ($users as $user) {
                echo $user['useremail']; "\n";
            }
     
/*
    // Bind parameters
    $parameters = [
        'useremail' => 'useremail',
        'userpassword' => 'userpassword',
    ];

    // Casting Types
    $types = [
        'useremail' => Column::BIND_PARAM_STR,
        'userpassword' => Column::BIND_PARAM_INT,
    ];

    
         $users::find(
            [
                "useremail = :useremail: AND userpassword = :userpassword:",
                'bind'      => $parameters,
                'bindTypes' => $types,
            ]
        );
            foreach ($users as $user) {
                echo $users->useremail, "\n";
            }
   */  
    }
}