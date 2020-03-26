<?php
declare(strict_types=1);

class SignupController extends ControllerBase
{

    public function indexAction()
    {

    }
    
    public function registerAction()
    {
        $user = new Users();
        
        //assign value from the form to $user
        $user->assign(
            $this->request->getPost(null,(['','username','useremail','userpassword'])));
        
        // Store and check for errors
        $success = $user->save();
        
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
    
}