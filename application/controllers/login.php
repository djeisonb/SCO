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
            
            if(!$this->usuarios->login($dados))
            {
                $erro   = "Usuário ou senha incorreta";
                $grupo  = '';
            }
            else
            {
                $grupo  = '1';
                $erro   = '';
            }
            
            $resposta = array(
                'erro'  => $erro,
                'grupo' => $grupo
            );
                
            echo json_encode($resposta);
        }
        //**********************************************************************
    }
    /** End of File login.php**/
    /** Location ./application/controllers/login.php **/