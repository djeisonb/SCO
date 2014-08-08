<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    /**
     * associados_model.php
     * 
     * Contém a classe associados_model
     * 
     * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
     * @version     v1.0.0
     */
    
    /**
     * associados_model
     * 
     * Classe que realiza a gerencia dos associados
     * 
     * @package     CI_Model
     * @subpackage  MY_Model
     * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
     */
    class Associados_model extends MY_Model
    {
        /**
         * __construct()
         * 
         * Realiza a construção da classe
         * 
         * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
         * @access      public
         */
        public function __construct()
        {
            parent::__construct();
            
            /** Indicação da tabela e da chave primaria **/
            $this->_tabela      = 'associados';
            $this->_primaria    = 'id';
        }
        //**********************************************************************
        
        /**
         * buscar()
         * 
         * Função desenvolvida realizar busca de associados
         * 
         * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
         * @access      public
         * @param       string $search Contém o nome do associado a ser buscado
         * @return      array Retorna um array com dados dos associados encontrados
         */
        function buscar($search)
        {
            $search = mysql_real_escape_string($search);
            
            $this->BD->select('nome_associado, tipo_cota, data_adesao');
            $this->BD->like('nome_associado', $search, 'both');
            
            return parent::buscar();
        }
        //**********************************************************************
    }
    /** End of File associados_model.php **/
    /** Location ./application/models/associados_model.php **/