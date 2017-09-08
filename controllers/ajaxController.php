<?php 
    class ajaxController extends controller {
        public function __construct() {
            parent::__construct();
            $u = new usuarios();
            $u->verificarLogin();
        }
        
        public function index() {}
        
        public function addfriend() {
            
            if(isset($_POST['id']) && !empty($_POST['id'])) {
                $id = addslashes($_POST['id']);
                
                $r = new relacionamentos();
                $r->addFriend($_SESSION['lgsocial'], $id);
            }
            
        }
        
        public function aceitar_friend() {
            if(isset($_POST['id']) && !empty($_POST['id'])) {
                $id = addslashes($_POST['id']);
                
                $r = new relacionamentos();
                $r->aceitarFriend($_SESSION['lgsocial'], $id);
            } 
        }
        
        public function curtir(){
            if(isset($_POST['id']) && !empty($_POST['id'])) {
                $id = addslashes($_POST['id']);
                $id_usuario = $_SESSION['lgsocial'];
                
                $p = new posts();
                if($p->isLiked($id, $id_usuario)) {
                    $p->removeLike($id, $id_usuario);
                }else {                    
                   $p->addLike($id, $id_usuario);
                }
                
            } 
        }
        
        public function comentar() {
            if(isset($_POST['id']) && !empty($_POST['id'])) {
                $id = addslashes($_POST['id']);
                $id_usuario = $_SESSION['lgsocial'];
                $txt = addslashes($_POST['txt']);
                $p = new posts();
                
                if(!empty($txt)) {
                    $p->addComentario($id, $id_usuario, $txt);
                }
                
            } 
        }
    }