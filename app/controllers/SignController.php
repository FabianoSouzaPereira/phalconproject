<?php
declare(strict_types=1);
use Phalcon\Db\Column;
use Phalcon\Http\Request;

class SignController extends ControllerBase
{
    public $iduser=0;
    public $email=null;
    public $name=null;
    
    public function indexAction()
    {
        if($_SESSION['login']== true){
            header('Location: index');
            exit();
        }

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
           $message = "<div>Obrigado por atualizar o Registrar</div>";
        } else {
           $message = "Desculpe, ocorreu os seguintes problemas: <br>"
                . implode('<br>', $user->getMessages());
        }
        
        // passing a message to the view
        $this->view->message = print $message;
 
    }

    public function loginAction()
    {
        $users = new Users();

        //assign value from the form to $user
        $users->assign(
            $this->request->getPost(null,(['null','username','useremail','userpassword'])));
            $users::findFirst(
                [
                    'username' => 'username',
                    'useremail' => 'useremail',
                    'userpassword' => 'userpassword'
                ]
            );          
          
            foreach ( $users as $user) {
                if(isset($user['username']) && isset($user['usermail'])){
                    $name=$user['username'];
                    $email=$user['useremail'];
                }
              }
                
        if(isset($email)){
            $_SESSION['login']=true;
            $_SESSION['name']= $name;    
            $message = "Bem vindo ". $name .".";
        }
        else
        {

            $message = "<div class='alert01'>"
                             . "<div class='alert alert-danger fade show margem' role='alert'> "
                                 . "<h2>Seu usuário ou senha estão incorretos. <br>" . "Tente de novo ! </h2>"
                             . "</div>"
                                 . "<p id='palert'>Verifique seu usuário e senha antes de tentar outra vez.</p>"
                                 . "<p>". $this->tag->linkTo(['/sign/', 'voltar', 'class' => 'btn btnvoltar btnstyle']) . "</p>"
                           . "<div>";
        }
        // passing a message to the view
        $this->view->message = print $message;
    }
    
}

