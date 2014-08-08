<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    /**
     * pesquisar.php
     * 
     * Contem a classe pesquisar
     * 
     * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
     * @version     v1.1.0
     */

    /**
     * pesquisar
     * 
     * @package     CI_Controller
     * @subpackage  MY_Controller
     * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
     * @abstract    Classe desenvolvida para pesquisar associados cadastrados
     */
    class Pesquisar extends MY_Controller
    {
        /**
         * __construct()
         * 
         * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
         * @abstract    Realiza a construção da classe
         * @access      Public
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
         * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
         * @abstract    Função principal do controller
         * @access      Public
         */
        function index()
        {
            $this->load->view('paginas/admin/associados/pesquisar');
        }
        //**********************************************************************
        
        /**
         * search()
         * 
         * Função desenvolvida para realizar a busca de um associado
         * 
         * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
         * @access      public
         */
        function search()
        {
            $search = $this->input->post('search');
            
            $this->dados['associados']  = $this->associados->buscar($search);
            $this->dados['search']      = $search;
            $this->load->view('paginas/ajax/associado/busca_associado', $this->dados);   
        }
        //**********************************************************************
    }
    /** End of File home.php **/
    /** Location ./application/controllers/admin/associados/home.php **/