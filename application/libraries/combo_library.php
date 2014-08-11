<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    /**
     * comboLibrary.php
     * 
     * Contém a classe combo
     * 
     * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
     * @version     string
     */
    
    /**
     * combo_library
     * 
     * Classe desenvolvida para criação das combobox diversas que serão 
     * utilizadas no decorrer do sistema
     * 
     * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
     */
    class Combo_library {

        /**
         * buscar_escolaridades()
         * 
         * Função desenvolvida para buscar as escolaridades cadastradas
         * 
         * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
         * @access      public
         * @return      string  Retorna uma string com as escolaridades cadastradas
         */
        function buscar_escolaridades()
        {
            $CI =& get_instance();
            
            $CI->load->model('combo_model');
            
            $escolaridades = $CI->combo_model->buscar('escolaridades');
            
            $opcao = '<option value="0" selected="" disabled="">Selecione uma Escolaridade</option>';
            
            foreach ($escolaridades as $row)
            {
                $opcao .= "
                    <option value='$row->id'>$row->descricao</option>
                ";
            }
            
            return $opcao;
        }
        //**********************************************************************
        
        /**
         * buscar_estados()
         * 
         * Função desenvolvida para buscar os estados cadastrados
         * 
         * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
         * @access      private
         * @return      string  Retorna uma string com os meses cadastrados
         */
        function buscar_estados()
        {   
            $CI = & get_instance();
            
            $CI->load->model('combo_model');
            
            $estados = $CI->combo_model->buscar('estados');
            
            $opcao = '<option value="" selected="" disabled="">Selecione um Estado</option>';
            
            foreach ($estados as $row)
            {
                $opcao .= "
                    <option value='$row->id'>$row->nome_estado - $row->sigla_estado</option>
                ";
            }
            
            return $opcao;
        }
        //**********************************************************************
        
        /**
         * buscar_nacionalidade()
         * 
         * Função desenvolvida para buscar as nacionalidades cadastradas
         * 
         * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
         * @access      private
         * @return      string  Retorna uma string com as nacionalidades cadastradas
         */
        function buscar_nacionalidade()
        {
            $CI = & get_instance();
            
            $CI->load->model('combo_model');
            
            $nacionalidades = $CI->combo_model->buscar('nacionalidade');
            
            $opcao = '<option value="" selected="" disabled="">Selecione uma Nacionalidade</option>';
            
            foreach($nacionalidades as $row)
            {
                $opcao .= "
                    <option value='$row->id'>$row->descricao</options>
                ";
            }
            
            return $opcao;
        }
        //**********************************************************************
        
        /**
         * buscar_cota()
         * 
         * Função desenvolvida para buscar os tipos de cota cadastradas
         * 
         * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
         * @access      private
         * @return      string  Retorna uma string com os tipos de cota cadastradas
         */
        function buscar_cota()
        {
            $CI = & get_instance();
            
            $CI->load->model('combo_model');
            
            $cota = $CI->combo_model->buscar('tipo_cota');
            
            $opcao = '<option value="" selected="" disabled="">Selecione o Tipo da Cota</option>';
            
            foreach ($cota as $row)
            {
                $opcao .= "
                    <option value='$row->id'>$row->tipo_cota</option>
                ";
            }
            
            return $opcao;
        }
        //**********************************************************************
        
        /**
         * estado_civil()
         * 
         * Função desenvolvida para buscar os estados civis cadastrados
         * 
         * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
         * @access      private
         * @return      string  Retorna uma string com os tipos de cota cadastradas
         */
        function estado_civil()
        {
            $CI = & get_instance();
            
            $CI->load->model('combo_model');
            
            $estado_civil = $CI->combo_model->buscar('estado_civil');
            
            $opcao = '<option value="" selected="" disabled="">Selecione um Estado Civil</option>';
            
            foreach ($estado_civil as $row)
            {
                $opcao .= "
                    <option value='$row->id'>$row->descricao</option>
                ";
            }
            
            return $opcao;
        }
        //**********************************************************************
        
        /**
         * busca_residencia()
         * 
         * Função desenvolvida para buscar os tipos de residência cadastrados
         * 
         * @author      Matheus Lopes Santos <fale_com_lopez@hotmail>
         * @access      public
         * @return      string  Retorna uma string com os tipos de residência cadastrados
         */
        function busca_residencia()
        {
            $CI = & get_instance();
            
            $CI->load->model('combo_model');
            
            $residencia = $CI->combo_model->buscar('tipo_residencia');
            
            $opcao = '<option value="" selected="" disabled="">Selecione um Tipo de Residência</option>';
            
            foreach ($residencia as $row)
            {
                $opcao .= "
                    <option value='$row->id'>$row->descricao</option>
                ";
            }
            
            return $opcao;
        }
        //**********************************************************************
    }
    /** End of File combo.php **/
    /** Locations ./application/libraries/combo.php **/