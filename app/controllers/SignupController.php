<?php
declare(strict_types=1);
use Phalcon\Db\Column;
use Phalcon\Http\Request;

class SignupController extends ControllerBase
{

    
    public function indexAction()
    {

    }
    
    public function registerAction()
    {
        $user = new Users();
        $nome=null;
        $email=null;
        $senha=null;
        
        //assign value from the form to $user
        $user->assign(
            $this->request->getPost(null,(['','username','useremail','userpassword'])));
        
        // Store and check for errors
        $success = $user->save();
        
        // passing the result to the view
        $this->view->success = $success;
        
        if ($success) {
        $message = "Obrigado por Registrar";

        } else {

            $msg=$user->getMessages();
            $mString="";

                foreach ($msg as $key => $value){
                   $i=$key;
                   $vlr= $key = $value;
        
                   if ($vlr->getField() == 'username'){ 
                       $nome= "<h2>Preencha o campo nome corretamente.<h2/>"; 
                   };
                   if ($vlr->getField()  == 'useremail'){ 
                       $email= "<h2>Preencha o campo email corretamente.<h2/>"; 
                   };
                   if ($vlr->getField()  == 'userpassword'){ 
                       $senha= "<h2>Preencha o campo senha corretamente.<h2/>"; 
                   };
              
                }
                
         $message= "<div class='alert02'>"
                       . "<div class='alert alert-danger fade show margem' role='alert'>"
                            . "<h2>Desculpe, ocorreu os seguintes problemas:<h2/>"
                            . $nome . $email .  $senha 
                       . "</div>"
                            . "<p>". $this->tag->linkTo(['/signup/', 'voltar', 'class' => 'btn btnvoltar btnstyle']) . "</p>"
                   . "</div>";
            }
        
        // passing a message to the view
            $this->view->message = print $message;
        $this->view->disable();
    }

}
