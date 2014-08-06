<?php
    
    /**
     * Login.php
     * 
     * @package     CI_Controller
     * @subpackage  MY_Controller
     * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
     * @abstract    Classe desenvolvida para gerenciar as operações de login
     */
    class Login extends MY_Controller
    {
        /**
         * __construct()
         * 
         * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
         * @abstract    Realiza a construção da classe
         * @access      Public
         * @param       bool $requer_autenticaco Recebe false pois para acesso a
         *              este controller não é necessário fazer login
         */
        public function __construct($requer_autenticaco = FALSE)
        {
            parent::__construct($requer_autenticaco);
            
            $this->load->model('usuarios_model', 'usuarios');
            $this->load->model('grupos_model', 'grupos');
        }
        //**********************************************************************
        
        /**
         * index()
         * 
         * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
         * @abstract    Função principal do controller
         */
        function index()
        {
            $this->view = 'login';
            $this->template = 'template/login';
            $this->LoadView();
        }
        //**********************************************************************
        
        /**
         * fazer_login()
         * 
         * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
         * @abstract    Função desenvolvida para fazer o login dos usuários
         */
        function fazer_login()
        {
            $dados['usuario']   = $this->input->post('usuario');
            $dados['senha']     = md5($this->input->post('senha'));
            
            $usuario = $this->usuarios->login($dados);
            
            if(!$usuario)
            {
                $erro   = "Usuário ou senha incorreta";
                $grupo  = '';
            }
            else
            {
                $grupo  = $this->definir_permissao($usuario);
                $erro   = '';
            }
            
            $resposta = array(
                'erro'  => $erro,
                'grupo' => $grupo
            );
                
            echo json_encode($resposta);
        }
        //**********************************************************************
        
        /**
         * definir_permissao()
         * 
         * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
         * @abstract    Função desenvolvida para definir a permissão do usuário
         * @access      Private
         */
        private function definir_permissao($usuario)
        {
            /** Percorre o array para definir o ID da permissão e o nome de usuário **/
            foreach($usuario as $row)
            {
                $id             = $row->id_grupo;
                $nome_usuario   = $row->nome_completo;
            }
            
            /** Reecebe a permissão cadastrada **/
            $permissoes = $this->grupos->buscar_grupo($id);
            
            foreach ($permissoes as $row)
            {
                $grupo = $row->abreviacao;
            }
            
            /** Define a seção com o nome do grupo **/
            $_SESSION['usuario']['nome']     = $nome_usuario;
            $_SESSION['usuario']['grupo']    = $grupo;
            
            return $grupo;
        }
        //**********************************************************************
        
        /**
         * logoff()
         * 
         * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
         * @abstract    Função desenvolvida para fazer o logoff do sistema
         */
        function logoff()
        {
            session_destroy();
            unset($_SESSION['usuario']);
            
            redirect(app_baseurl().'login');
        }
        //**********************************************************************
    }
    /** End of File login.php**/
    /** Location ./application/controllers/login.php **/