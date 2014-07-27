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
            $this->LoadView();
        }
    }
    /** End of File login.php**/
    /** Location ./application/controllers/login.php **/