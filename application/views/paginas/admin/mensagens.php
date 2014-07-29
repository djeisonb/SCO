<!-- Header da página -->
<div class="inbox-nav-bar no-content-padding">
    <h1 class="page-title txt-color-blueDark hidden-tablet">
        <i class="fa fa-fw fa-inbox"></i> Mensagens
    </h1>
</div>
<!--*************************************************************************-->

<div id="inbox-content" class="inbox-body no-content-padding">

    <!-- Navegação das mensagens -->
    <div class="inbox-side-bar">
        <a href="javascript:void(0);" id="compose-mail" class="btn btn-primary btn-block"> <strong>Compor Mensagem</strong> </a>

        <ul class="inbox-menu-lg">
            <li class="active">
                <a class="inbox-load" href="javascript:void(0);"> Recebidas (14) </a>
            </li>
            <li>
                <a href="javascript:void(0);">Enviadas</a>
            </li>
        </ul>
    </div>
    <!--*********************************************************************-->

    <!-- Div será preenchida automaticamente via ajax -->
    <div class="table-wrap custom-scroll animated fast fadeInRight"></div>
    <!--*********************************************************************-->
</div>

<script type="text/javascript">
    // DO NOT REMOVE : GLOBAL FUNCTIONS!
    pageSetUp();

    // PAGE RELATED SCRIPTS

    /*
     * Load delete row plugin
     */

    loadScript("js/plugin/delete-table-row/delete-table-row.js");

    /*
     * Fixed table height
     */

    tableHeightSize()
    $(window).resize(function() {
        tableHeightSize()
    })

    function tableHeightSize() {

        var tableHeight = $(window).height() - 212;

        if (tableHeight < 320) {
            $('.table-wrap').css('height', 320 + 'px');
        } else {
            $('.table-wrap').css('height', tableHeight + 'px');
        }

    }

    /*
     * LOAD INBOX MESSAGES
     */
    loadInbox();
    function loadInbox() {
        loadURL("ajax/email/email-list.html", $('#inbox-content > .table-wrap'));
    }

    /*
     * Buttons (compose mail and inbox load)
     */
    $(".inbox-load").click(function() {
        loadInbox();
    });

    // compose email
    $("#compose-mail").click(function() {
        loadURL("ajax/email-compose.html", $('#inbox-content > .table-wrap'));
    });

</script>