<?php

    /**
     * FAZER_BAIXAS.PHP
     * 
     * @package     CI_Controller
     * @subpackage  MY_Controller
     * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
     * @abstract    Classe desenvolvida para realizar as baixas
     * @todo        Definir se haverá algum dado a ser mostrado nesta view
     */
    class Fazer_baixas extends MY_Controller
    {
        /**
         * __construct()
         * 
         * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
         * @abstract    Realiza a construção da classe
         * @access      Public
         * @param       bool $requer_autenticacao Se TRUE, indica que é necessário
         *              fazer login
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
         * @access      Public
         */
        function index()
        {
            $this->load->view('paginas/admin/fazer_baixas');
        }
        //**********************************************************************
    }
    /** End of File home.php **/
    /** Location ./application/controllers/admin/home.php **/