<?php

$lang['db_invalid_connection_str'] = 'Não foi possível determinar as configurações de banco de dados com base na string de conexão que você enviou.';
$lang['db_unable_to_connect'] = 'Não é possível conectar ao servidor de banco de dados usando as configurações fornecidas.';
$lang['db_unable_to_select'] = 'Não foi possível selecionar o banco de dados especificado: %s';
$lang['db_unable_to_create'] = 'Não é possível criar o banco de dados especificado: %s';
$lang['db_invalid_query'] = 'A consulta que você enviou não é válida.';
$lang['db_must_set_table'] = 'Você deve definir a tabela de banco de dados para ser usado com sua consulta.';
$lang['db_must_use_set'] = 'Você deve usar o método "set" para atualizar uma entrada.';
$lang['db_must_use_index'] = 'Você deve especificar um índice para corresponder por atualizações em lote.';
$lang['db_batch_missing_index'] = 'Em uma ou mais linhas apresentadas para atualização em lote está faltando o índice especificado.';
$lang['db_must_use_where'] = 'As atualizações não são permitidas a menos que contenham uma cláusula "where".';
$lang['db_del_must_use_where'] = 'Exclusões não são permitidas a menos que contenham um "where" ou "like" cláusula.';
$lang['db_field_param_missing'] = 'Para buscar campos, é necessáario o nome da tabela como parâmetro.';
$lang['db_unsupported_function'] = 'Este recurso não está disponível para o banco de dados você está usando.';
$lang['db_transaction_failure'] = 'Fracasso na transação: Rollback executado.';
$lang['db_unable_to_drop'] = 'Incapaz de excluir o banco de dados especificado.';
$lang['db_unsuported_feature'] = 'Recurso sem suporte da plataforma de banco de dados você está usando.';
$lang['db_unsuported_compression'] = 'O formato de compressão de arquivos que você escolheu não é suportado pelo seu servidor.';
$lang['db_filepath_error'] = 'Não foi possível gravar dados para o caminho do arquivo que você enviou.';
$lang['db_invalid_cache_path'] = 'O caminho de cache que você enviou não é válido ou gravável.';
$lang['db_table_name_required'] = 'Um nome de tabela é necessário para essa operação.';
$lang['db_column_name_required'] = 'Um nome de coluna é necessário para essa operação.';
$lang['db_column_definition_required'] = 'A definição da coluna é necessário para essa operação.';
$lang['db_unable_to_set_charset'] = 'Não é possível definir o conjunto de caracteres para a conexão do cliente: %s';
$lang['db_error_heading'] = 'Um erro de banco de dados ocorreu';

/* End of file db_lang.php */
/* Location: ./system/language/english/db_lang.php */