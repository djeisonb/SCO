<?php

    /**
     * painel.php
     * 
     * @package     CI_Controller
     * @subpackage  MY_Controller
     * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
     * @abstract    Classe desenvolvida para mostrar a tela inicial do sistema
     */
    class Painel extends MY_Controller
    {
        /**
         * __construct()
         * 
         * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
         * @abstract    Realiza a construção da classe
         */
        public function __construct($requer_autenticacao = TRUE)
        {   
            parent::__construct($requer_autenticacao);
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
            $this->template = 'template/adm_template';
            $this->titulo   = 'SCO - Início';
            $this->view     = 'admin/painel';
            
            $this->LoadView();
        }
        //**********************************************************************
    }
    /** End of File painel.php **/
    /** Location ./application/controllers/admin/painel.php **/