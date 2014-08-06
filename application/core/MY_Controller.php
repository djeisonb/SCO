<?php
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    /**
     * MY_Controller.php
     * 
     * @package     CI_Controller
     * @subpackage  MY_Controller
     * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
     * @abstract    Classe desenvolvida para gerenciar todas as outras subclasses
     *              do sistema
     */
    class MY_Controller extends CI_Controller
    {
        /** 
         * Variáveis protegidas usadas para definições de template, a view que 
         * será usada, o título da página e a variável que transportará os dados
         * para as views
         **/
        protected $template;
        protected $view;
        protected $titulo;
        protected $dados;
        
        /**
         * __construct()
         * 
         * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
         * @abstract    Realiza a construção da classe
         * @param       bool $requer_autenticacao Se recebe TRUE, indica que para 
         *              acessar o controller é necessário fazer login no sistema
         * @access      Public
         */
        public function __construct($requer_autenticacao = TRUE)
        {
            parent::__construct();
            session_start();
            
            /** Define o template padrao das páginas **/
            $this->template = 'template/login';
            $this->titulo   = 'SCO - Login';
            
            $this->verifica_login($requer_autenticacao);
        }
        //**********************************************************************
        
        /**
         * LoadView()
         * 
         * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
         * @abstract    Função desenvolvida para carregar as visões e inserir os
         *              dados
         * @access      Public
         */
        public function LoadView()
        {   
            $this->dados['view']    = $this->view;
            $this->dados['titulo']  = $this->titulo;
            
            $this->load->view($this->template, $this->dados);
        }
        //**********************************************************************
        
        /**
         * verifica_login()
         * 
         * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
         * @abstract    Função desenvolvida para verificar se o usuario está logado
         * @access      Private
         * @param       bool $requer_autenticacao indica se é necessário fazer 
         *              login para acessar uma classe
         */
        private function verifica_login($requer_autenticacao)
        {   
            if($requer_autenticacao)
            {
                if(!isset($_SESSION['usuario']))
                {
                    redirect(app_baseurl().'login');
                }
            }
        }
        //**********************************************************************
    }    
    /** End of File MY_Controller.php **/
    /** Location ./application/core/MY_Controller.php **/