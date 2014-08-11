<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    /**
     * novo.php
     * 
     * Contem a classe novo
     * 
     * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
     * @version     v1.1.0
     */

    /**
     * novo
     * 
     * Classe desenvolvida para criar um novo associado no sistema
     * 
     * @package     CI_Controller
     * @subpackage  MY_Controller
     * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
     */
    class Novo extends MY_Controller
    {
        /**
         * __construct()
         * 
         * Realiza a construção da classe
         * 
         * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
         * @access      Public
         */
        public function __construct()
        {
            parent::__construct(TRUE);
            
            $this->load->library('combo_library');
            $this->load->model('associados_model', 'associados');
        }
        //**********************************************************************
        
        /**
         * index()
         * 
         * Função principal do controller
         * 
         * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
         * @access      Public
         */
        function index()
        {
            $this->load->view('paginas/admin/associados/novo');
        }
        //**********************************************************************
        
        /**
         * preenchimento_combo()
         * 
         * Função desenvolvida para preencher os diversos combobox na tela de 
         * cadastro do sistema
         * 
         * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
         * @access      public
         */
        function preenchimento_combo()
        {
            $escolaridades  = $this->combo_library->buscar_escolaridades();
            $estados        = $this->combo_library->buscar_estados();
            $nacionalidade  = $this->combo_library->buscar_nacionalidade();
            $cota           = $this->combo_library->buscar_cota();
            $estado_civil   = $this->combo_library->estado_civil();
            $residencia     = $this->combo_library->busca_residencia();
            
            $combo = array(
                'escolaridades' => $escolaridades,
                'estados'       => $estados,
                'nacionalidade' => $nacionalidade,
                'tipo_cota'     => $cota,
                'estado_civil'  => $estado_civil,
                'residencia'    => $residencia
            );
            
            echo json_encode($combo);
        }
        //**********************************************************************
        
        /**
         * salvar()
         * 
         * Função desenvolvida para salvar os dados de um novo associado
         * 
         * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
         * @access      public
         * @todo        Converter as datas passadas pelo usuário para o padrão
         *              MYSQL
         */
        function salvar()
        {
            /** Dados do associados que serão salvos **/
            $dados['nome_associado']        = $this->input->post('nome_associado');
            $dados['cpf_associado']         = $this->input->post('cpf_associado');
            $dados['tipo_cota']             = $this->input->post('tipo_cota');
            $dados['numero_identidade']     = $this->input->post('numero_identidade');
            $dados['data_expedicao']        = $this->input->post('data_expedicao');
            $dados['orgao_emissor']         = $this->input->post('orgao_emissor');
            $dados['data_nascimento']       = $this->input->post('data_nascimento');
            $dados['naturalidade']          = $this->input->post('naturalidade');
            $dados['estado']                = $this->input->post('estado');
            $dados['nacionalidade']         = $this->input->post('nacionalidade');
            $dados['nome_pai']              = $this->input->post('nome_pai');
            $dados['nome_mae']              = $this->input->post('nome_mae');
            $dados['sexo']                  = $this->input->post('sexo');
            $dados['escolaridade']          = $this->input->post('escolaridade');
            $dados['estado_civil']          = $this->input->post('estado_civil');
            $dados['endereco_residencial']  = $this->input->post('endereco_residencial');
            $dados['numero']                = $this->input->post('numero');
            $dados['complemento']           = $this->input->post('complemento');
            $dados['bairro']                = $this->input->post('bairro');
            $dados['cidade']                = $this->input->post('cidade');
            $dados['cep']                   = $this->input->post('cep');
            $dados['tipo_residencia']       = $this->input->post('tipo_residencia');
            $dados['anos_residencia']       = $this->input->post('anos_residencia');
            $dados['telefone']              = $this->input->post('telefone');
            $dados['celular']               = $this->input->post('celular');
            $dados['email']                 = $this->input->post('email');
            
            echo $this->associados->salvar($dados);
        }
        //**********************************************************************
    }
    /** End of File home.php **/
    /** Location ./application/controllers/admin/home.php **/