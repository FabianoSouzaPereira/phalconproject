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
                       $nome= "<p class='pparam'>Preencha o campo nome corretamente.</p>"; 
                   };
                   if ($vlr->getField()  == 'useremail'){ 
                       $email= "<p class='pparam'>Preencha o campo email corretamente.</p>"; 
                   };
                   if ($vlr->getField()  == 'userpassword'){ 
                       $senha= "<p class='pparam'>Preencha o campo senha corretamente.</p>"; 
                   };
              
                }
                
         $message= "<div class='alert02'>"
                       . "<div class='alert alert-danger fade show margem' role='alert'>"
                            . "<h2>Desculpe, ocorreu os seguintes problemas:<h2/>"
                            . $nome . $email .  $senha 
                       . "</div>"
                            . "<p id='palert'>". $this->tag->linkTo(['/signup/', 'voltar', 'class' => 'btn btnvoltar btnstyle']) . "</p>"
                   . "</div>";
            }
        
        // passing a message to the view
            $this->view->message = print Phalcon\Tag::stylesheetLink("css/cadStyle.css") . $message;
            $this->view->disable();
    }

}