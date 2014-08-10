<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    /**
     * escolaridades_model.php
     * 
     * Contém a classe escolaridades_model
     * 
     * @author      Matheus Lopes Santos <fale_Com_lopez@hotmail.com>
     * @version     v1.0.0
     */

     /**
      * escolaridades_model
      * 
      * Classe desenvolvida para gerenciar as operações com a tabela escolaridades
      * 
      * @author      Matheus Lopes Santos <fale_Com_lopez@hotmail.com>
      */
      
    class Escolaridades_model extends MY_Model
    {
        /**
         * __construct()
         * 
         * Realiza a construção da classe
         * 
         * @author      Matheus Lopes Santos <fale_Com_lopez@hotmail.com>
         * @access      public
         */
        public function __construct()
        {
            parent::__construct();
            
            /** Seleciona a tabela e a chave primaria **/
            $this->_tabela      = 'escolaridades';
            $this->_primaria    = 'id';
        }
        //**********************************************************************
        
        /**
         * buscar()
         * 
         * Função desenvolvida para buscar as escolaridades cadastradas
         * 
         * @author      Matheus Lopes Santos <fale_Com_lopez@hotmail.com>
         * @access      public
         * @return      array   Retorna um array com as escolaridades cadastradas
         */
        function buscar()
        {
            return parent::buscar();
        }
        //**********************************************************************
    }
    /** End of File escolaridades_model.php **/
    /** Location ./application/models/escolaridades_model.php **/