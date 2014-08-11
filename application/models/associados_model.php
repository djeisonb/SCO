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
        
        /**
         * salvar()
         * 
         * Função desenvolvida para salvar os dados de um novo associado
         * 
         * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
         * @access      public
         * @param       array $dados Contém os dados que seão salvos
         * @return      bool Retorna TRUE se salvar e FALSE se não salvar
         */
        function salvar($dados)
        {
            $data = array(
                'nome_associado'        => $dados['nome_associado'],
                'cpf_associado'         => $dados['cpf_associado'],
                'tipo_cota'             => $dados['tipo_cota'],
                'numero_identidade'     => $dados['numero_identidade'],
                'data_expedicao'        => $dados['data_expedicao'],
                'orgao_emissor'         => $dados['orgao_emissor'],
                'data_nascimento'       => $dados['data_nascimento'],
                'naturalidade'          => $dados['naturalidade'],
                'estado'                => $dados['estado'],
                'nacionalidade'         => $dados['nacionalidade'],
                'nome_pai'              => $dados['nome_pai'],
                'nome_mae'              => $dados['nome_mae'],
                'sexo'                  => $dados['sexo'],
                'escolaridade'          => $dados['escolaridade'],
                'estado_civil'          => $dados['estado_civil'],
                'endereco_residencial'  => $dados['endereco_residencial'],
                'numero'                => $dados['numero'],
                'complemento'           => $dados['complemento'],
                'bairro'                => $dados['bairro'],
                'cidade'                => $dados['cidade'],
                'cep'                   => $dados['cep'],
                'tipo_residencia'       => $dados['tipo_residencia'],
                'anos_residencia'       => $dados['anos_residencia'],
                'telefone'              => $dados['telefone'],
                'celular'               => $dados['celular'],
                'email'                 => $dados['email'],
            );
            
            return parent::salvar($data);
        }
        //**********************************************************************
    }
    /** End of File associados_model.php **/
    /** Location ./application/models/associados_model.php **/