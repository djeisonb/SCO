<?php

    /**
     * NOVO.PHP
     * 
     * @package     CI_Controller
     * @subpackage  MY_Controller
     * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
     * @abstract    Classe desenvolvida para criar um novo associado no sistema
     */
    class Novo extends MY_Controller
    {
        /**
         * __construct()
         * 
         * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
         * @abstract    Realiza a construção da classe
         * @access      Public
         * @param       bool $requer_autenticaco Se TRUE, indica que é necessário
         *              fazer login
         */
        public function __construct($requer_autenticaco = false)
        {
            parent::__construct($requer_autenticaco);
        }
        //**********************************************************************
        
        /**
         * index()
         * 
         * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
         * @abstract    Função principal do controller
         * @access      Public
         */
        function index()
        {
            $this->load->view('paginas/admin/associados/novo');
        }
        //**********************************************************************
    }
    /** End of File home.php **/
    /** Location ./application/controllers/admin/home.php **/