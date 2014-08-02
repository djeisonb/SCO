/**
 * PENTAUREA.JS
 * 
 * Scripts desenvolvidos para auxiliar em diversas operações no sistema
 */

/**
 * load_ajax()
 * 
 * Função desenvolvida para buscar determinadas páginas requeridas via ajax.
 * 
 * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
 * @param       {string} url Contém a URL que será carregada
 * @param       {string} container Contém o elemento que receberá a resposta ajax
 */
function loadAjax(url, container)
{
    container.html('<h4><i class="fa fa-cog fa-spin"></i> Buscando...</h4>');

    $.get(url, function(e) {
        container.html(e);
    }).fail(function() {
        container.html('<h4 class="ajax-loading-error"><i class="fa fa-warning txt-color-orangeDark"></i> Erro 404! Página ou recurso não encontrado.</h4>');
    });
}
//******************************************************************************

/**
 * msg_sucesso()
 * 
 * Função desenvolvida para exibir mensagens de sucesso no sistema
 * 
 * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
 * @param       {string} msg Contém a mensagem que será exibida
 */
function msg_sucesso(msg)
{
    $.smallBox({
        title: "<i class='fa fa-check'></i> Sucesso",
        content: "<strong>"+msg+"</strong>",
        iconSmall: "fa fa-thumbs-up bounce animated",
        color: "#3b5998",
        timeout: 5000
    });
}
//******************************************************************************

/**
 * msg_erro()
 * 
 * Função desenvolvida para exibir mensagens de erro no sistema
 * 
 * @author      Matheus Lopes Santos <fale_com_lopez@hotmail.com>
 * @param       {string} msg Contém a mensagem que será exibida
 */
function msg_erro(msg)
{
    $.smallBox({
        title: "<i class='fa fa-times'></i> Erro",
        content: "<strong>"+msg+"</strong>",
        iconSmall: "fa fa-thumbs-down bounce animated",
        color: "#FE1A00",
        timeout: 5000
    });
}
//******************************************************************************