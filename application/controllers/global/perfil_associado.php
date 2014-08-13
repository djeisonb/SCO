<?php
    /**
     * perfil_associado.php
     * 
     * Contém a classe perfil_associado
     * 
     * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
     * @version     v1.0.0
     */
    
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    /**
     * perfil_associado
     * 
     * Classe desenvolvida para gerenciar os associados cadastrados
     * 
     * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
     */
    class Perfil_associado extends MY_Controller
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
            parent::__construct(TRUE);
            
            $this->load->model('associados_model', 'associados');
        }
        //**********************************************************************
        
        /**
         * index()
         * 
         * Função principal da classe
         * 
         * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
         * @access      public
         * @param       int $id Contém o ID do usuário a ser buscado
         */
        function index($id)
        {   
            $this->dados['id'] = $id;
            
            $this->load->view('paginas/global/perfil_associado', $this->dados);
        }
        //**********************************************************************
        
        /**
         * buscar_dadosPessoais()
         * 
         * Função desenvolvida para buscar os dados pessoais do usuário
         * 
         * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
         * @access      public
         */
        function buscar_dadosPessoais($id)
        {
            $this->dados['pessoais'] = $this->associados->buscar_byId($id);
            
            $this->load->view('paginas/ajax/global/dados_pessoais', $this->dados);
        }
    }
    /** End of File perfil_associado.php **/
    /** Location ./application/controllers/global/perfil_associado.php **/