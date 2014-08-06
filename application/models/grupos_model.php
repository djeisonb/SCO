<?php

    /**
     * gupos_model.php
     * 
     * @package     CI_Model
     * @subpackage  MY_Model
     * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
     * @abstract    Classe desenvolvida para gerenciar as transações envolvendo
     *              a tabela grupos_usuarios
     */
    class Grupos_model extends MY_Model
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
            $this->_tabela      = 'grupos_usuarios';
            $this->_primaria    = 'id';
        }
        //**********************************************************************
        
        /**
         * buscar_grupo()
         * 
         * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
         * @abstract    Função desenvolvida para buscar o grupo de usuário na 
         *              qual o usuário está inserido
         */
        function buscar_grupo($id)
        {   
            $where = array(
                'id' => $id
            );
            
            return parent::buscar($where);
        }
        //**********************************************************************
    }
    /** End of File grupos_model.php **/
    /** Location ./application/models/grupos_model.php **/