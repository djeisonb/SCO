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
         * valida_cpf()
         * 
         * Função desenvolvida para validação de CPF
         * 
         * @author      Gerador de CPF
         * @access      public
         * @param       string $cpf Contém o CPF a ser validado
         * @see         http://www.geradorcpf.com/script-validar-cpf-php.htm
         */
        function valida_cpf($cpf = NULL)
        {
            // Verifica se um número foi informado
            if(empty($cpf)) {
                return false;
            }
 
            // Elimina possivel mascara
            $cpf = ereg_replace('[^0-9]', '', $cpf);
            $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
     
            // Verifica se o numero de digitos informados é igual a 11 
            if (strlen($cpf) != 11) {
                return false;
            }
    
            // Verifica se nenhuma das sequências invalidas abaixo 
            // foi digitada. Caso afirmativo, retorna falso
            else if ($cpf == '00000000000' || 
                $cpf == '11111111111' || 
                $cpf == '22222222222' || 
                $cpf == '33333333333' || 
                $cpf == '44444444444' || 
                $cpf == '55555555555' || 
                $cpf == '66666666666' || 
                $cpf == '77777777777' || 
                $cpf == '88888888888' || 
                $cpf == '99999999999') {
                return false;
             // Calcula os digitos verificadores para verificar se o
             // CPF é válido
            }
            else
            {
         
                for ($t = 9; $t < 11; $t++)
                {

                    for ($d = 0, $c = 0; $c < $t; $c++) {
                        $d += $cpf{$c} * (($t + 1) - $c);
                    }
                    $d = ((10 * $d) % 11) % 10;
                    if ($cpf{$c} != $d) {
                        return false;
                    }
                }
                return true;
            }
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
            $escolaridades = $this->buscar_escolaridades();
            
            $combo = array(
                'escolaridades' => $escolaridades
            );
            
            echo json_encode($combo);
        }
        //**********************************************************************
        
        /**
         * buscar_escolaridades()
         * 
         * Função desenvolvida para buscar as escolaridades cadastradas
         * 
         * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
         * @access      private
         * @return      array   Retorna um array com as escolaridades cadastradas
         */
        private function buscar_escolaridades()
        {
            $this->load->model('escolaridades_model', 'escolaridades');
            
            $escolaridades = $this->escolaridades->buscar();
            
            $opcao = '<option value="0" selected="" disabled="">Selecione uma opção</option>';
            
            foreach ($escolaridades as $row)
            {
                $opcao .= "
                    <option value='$row->id'>$row->descricao</option>
                ";
            }
            
            return $opcao;
        }
        //**********************************************************************
    }
    /** End of File home.php **/
    /** Location ./application/controllers/admin/home.php **/