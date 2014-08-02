<?php

    /**
     * usuarios_model.php
     * 
     * @package     CI_Model
     * @subpackage  MY_Model
     * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
     * @abstract    Classe desenvolvida para gerenciar as transações com a tabela
     *              usuarios.
     */
    class Usuarios_model extends MY_Model
    {
        /**
         * __construct()
         * 
         * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
         * @abstract    Realiza a construção da classe
         */
        public function __construct()
        {
            parent::__construct();
            
            /** Define a tabela e a chave primária **/
            $this->_tabela      = 'usuarios';
            $this->_primaria    = 'id';
        }
        //**********************************************************************
        
        /**
         * login()
         * 
         * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
         * @abstract    Função desenvolvida para que os usuários possam fazer 
         *              login no sistema
         * @access      Public
         * @param       string $dados Contém os dados passados pelo usuário
         * @return      Retorna um array com os dados do usuário
         */
        function login($dados)
        {
            $where = array(
                'usuario'   => $dados['usuario'],
                'senha'     => $dados['senha']
            );
            
            return parent::buscar($where);
        }
        //**********************************************************************
    }
    /** End of File usuarios_model.php **/
    /** Location ./application/models/usuarios_model.php **/