<?php 
    class gruposController extends controller {
        public function __construct(){
            parent::__construct();
            $u = new usuarios();
            $u->verificarLogin();
        }
        
        public function abrir($id_grupo) {
            $u = new usuarios();
            $g = new grupos();
            $dados = array(
                'usuario_nome' => ''
            );
            
            $dados['usuario_nome'] = $u->getNome($_SESSION['lgsocial']);
            
            $dados['info'] = $g->getInfo($id_grupo);
            $dados['id_grupo'] = $id_grupo;
            $dados['is_membro'] = $g->isMembro($id_grupo, $_SESSION['lgsocial']);
            
            $this->loadTemplate('grupo', $dados);
        }
        
    }