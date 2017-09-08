<?php 
    class loginController extends controller {
        public function __construct(){
            parent::__construct();
            
        }
        
        public function index() {
            $dados = array();
            
            $this->loadView('login', $dados);
        }
        
        public function entrar() {
            $dados = array('erro' => '');
            
            if(isset($_POST['email']) && !empty($_POST['email'])){
                $email = addslashes($_POST['email']);
                $senha = md5($_POST['senha']);
                
                $u = new usuarios();
                $dados['erro'] = $u->logar($email, $senha);
            }
            
            $this->loadView('login_entrar', $dados);
        }
        
        public function cadastrar() {
            $dados = array();
            
            if(isset($_POST['email']) && !empty($_POST['email'])){
                $email = addslashes($_POST['email']);
                $nome = addslashes($_POST['nome']);
                $senha = addslashes($_POST['senha']);
                $sexo = addslashes($_POST['sexo']);
                
                $u = new usuarios();
                $dados['erro'] = $u->cadastrar($email, $nome, $senha, $sexo);
            }
            
            $this->loadView('login_cadastrar', $dados);
        }
        
        public function sair() {
         unset($_SESSION);   
         header("Location: ".BASE."login");
        }
    }