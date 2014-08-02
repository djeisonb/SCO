<?php

    /**
     * MY_Model.php
     * 
     * @package     CI_Model
     * @subpackage  MY_Model
     * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
     * @abstract    Classe desenvolvida para gerenciar todos os outros submodels
     *              do sistema
     */
    class MY_Model extends CI_Model
    {
        /**
         * Definição das variáveis protegidas, onde serão setados as informações
         * importantes para o banco de dados
         **/
        protected $BD;
        protected $_tabela;
        protected $_primaria;
        
        /**
         * __construct()
         * 
         * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
         * @abstract    Realiza a construção da classe
         * @access      Public
         */
        public function __construct()
        {
            parent::__construct();
            
            /** Faz o Load do banco de dados **/
            $this->BD = $this->load->database('default', TRUE);
        }
        //**********************************************************************
        
        /**
         * salvar()
         * 
         * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
         * @abstract    Função que verifica se os dados que estão sendo tratados
         *              no momento serão salvos ou atualizados
         * @access      Public
         * @param       array $dados Contém os dados que serão passados ao banco
         *              de dados
         */
        public function salvar($dados)
        {
            if(isset($this->_primaria) && !empty($this->_primaria))
            {
                return $this->update($dados);
            }
            else
            {
                return $this->insert($dados);
            }
        }
        //**********************************************************************
        
        /**
         * update()
         * 
         * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
         * @abstract    Função desenvolvida para realizar a atualização dos dados
         * @access      Private
         * @param       array $dados Contém os dados a serem atualizados
         * @return      Retorna TRUE se atualizar e FALSE se não atualizar
         */
        private function update($dados)
        {
            $dados = array_map('mysql_escape_string', $dados);
            
            $this->BD->where($this->_primaria = $dados['id']);
            
            return $this->BD->update($this->_tabela, $dados);
        }
        //**********************************************************************
        
        /**
         * insert()
         * 
         * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
         * @abstract    Função desenvolvida para salvar os dados
         * @access      Private
         * @param       array $dados Contém os dados que serão salvos
         * @return      Retorna TRUE se salvar e FALSE se não salvar
         */
        function insert($dados)
        {   
            $dados = array_map('mysql_escape_string', $dados);
            
            return $this->BD->insert($this->_tabela, $dados);
        }
        //**********************************************************************
        
        /**
         * buscar()
         * 
         * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
         * @abstract    Função desenvolvida para realizar as buscas
         * @access      Public
         * @param       array $where Contém as cláusulas WHERE que serão utilizadas
         *              na consulta sql
         * @return      retorna um array de objetos se encontrar algo
         */
        public function buscar($where)
        {   
            $this->BD->where($where);
            return $this->BD->get($this->_tabela)->result();
        }
        //**********************************************************************
    }
    /** End of File MY_Model.php **/
    /** Location ./application/core/MY_Model.php **/