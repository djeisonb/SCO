<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    /**
     * combo_model.php
     * 
     * Contém a classe combo_model
     * 
     * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
     * @version     v1.0.0
     */
    
    /**
     * combo_model
     * 
     * Classe desenvolvida para gerenciar as tabelas que preencherão diversos
     * combobox no sistema
     * 
     * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
     */
    class Combo_model extends MY_Model
    {
        /**
         * __construct()
         * 
         * Realiza a construção do sistema
         * 
         * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
         * @access      public
         */
        public function __construct()
        {
            parent::__construct();
        }
        //**********************************************************************
        
        /**
         * buscar_nacionalidade()
         * 
         * Função desenvolvida para buscar as nacionalidades cadastradas
         * 
         * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
         * @access      public
         * @param       string $tabela  Contém o nome da tabela na qual será 
         *              feita a busca
         * @return      array Retorna um array de objetos do banco de dados
         */
        function buscar($tabela)
        {
            /** Define a tabela que será trabalhada **/
            $this->_tabela = $tabela;
            
            return parent::buscar();
        }
        //**********************************************************************
    }
    /** End of File combo_model.php **/
    /** Location ./application/models/combo_model.php **/