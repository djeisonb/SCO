<?php
	/**
	 * mensalidades_model.php
	 * 
	 * Contém a classe mensalidades model
	 * 
	 * @author		Matheus Lopes Santos <fale_com_lopez@hotmail.com>
	 * @version		v1.0.0
	 */

	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	/**
	 * mensalidades_model
	 * 
	 * Classe desenvolvida para gerenciar as transações com a tabela mensalidades
	 * 
	 * @author		Matheus Lopes Santos <fale_com_lopez@hotmail.com> 
	 */
	class Mensalidades_model extends MY_Model
	{
		/**
		 * __construct()
		 * 
		 * Realiza a construção do sistema
		 * 
		 * @author		Matheus Lopes Santos <fale_com_lopez@hotmail.com>
		 * @access		Public
		 * @var			$this->_tabela Indica a tabela na qual a classe irá trabalhar
		 */
		public function __construct()
		{
			parent::__construct();
			
			$this->_tabela	='mensalidades';
		}
		//*********************************************************************
	}
	//*************************************************************************