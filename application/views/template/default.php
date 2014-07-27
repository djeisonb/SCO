<!DOCTYPE html>
<html lang="en-us">	
    <head>
        <meta charset="utf-8">
        <title> Sistema de Cobrança on-Line</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- #CSS Links -->
        <!-- Basic Styles -->
        <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" media="screen" href="css/font-awesome.min.css">

        <!-- SmartAdmin Styles : Please note (smartadmin-production.css) was created using LESS variables -->
        <link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-production.min.css">
        <link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-skins.min.css">

        <!-- #FAVICONS -->
        <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
        <link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">

        <!-- #GOOGLE FONT -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">
    </head>
    <body class="smart-style-2 menu-on-top">

        <!-- #HEADER -->
        <header id="header">
            <div id="logo-group">

                <!-- Logo -->
                <span id="logo"> <img src="img/reservado/logo.png" alt="Clube Campestre Pentáurea"> </span>
                <!--*********************************************************-->

                <span id="activity" class="activity-dropdown"> <i class="fa fa-user"></i> <b class="badge"> 21 </b> </span>

                <!-- AJAX-DROPDOWN : control this dropdown height, look and feel from the LESS variable file -->
                <div class="ajax-dropdown">

                    <!-- the ID links are fetched via AJAX to the ajax container "ajax-notifications" -->
                    <div class="btn-group btn-group-justified" data-toggle="buttons">
                        <label class="btn btn-default">
                            <input type="radio" name="activity" id="ajax/notify/mail.html">
                            Msgs (14) </label>
                        <label class="btn btn-default">
                            <input type="radio" name="activity" id="ajax/notify/notifications.html">
                            notify (3) </label>
                        <label class="btn btn-default">
                            <input type="radio" name="activity" id="ajax/notify/tasks.html">
                            Tasks (4) </label>
                    </div>

                    <!-- notification content -->
                    <div class="ajax-notifications custom-scroll">

                        <div class="alert alert-transparent">
                            <h4>Click a button to show messages here</h4>
                            This blank page message helps protect your privacy, or you can show the first message here automatically.
                        </div>

                        <i class="fa fa-lock fa-4x fa-border"></i>

                    </div>
                    <!-- end notification content -->

                    <!-- footer: refresh area -->
                    <span> Last updated on: 12/12/2013 9:43AM
                        <button type="button" data-loading-text="<i class='fa fa-refresh fa-spin'></i> Loading..." class="btn btn-xs btn-default pull-right">
                            <i class="fa fa-refresh"></i>
                        </button> </span>
                    <!-- end footer -->

                </div>
                <!-- END AJAX-DROPDOWN -->
            </div>

            <!-- #TOGGLE LAYOUT BUTTONS -->
            <!-- pulled right: nav area -->
            <div class="pull-right">

                <!-- collapse menu button -->
                <div id="hide-menu" class="btn-header pull-right">
                    <span> <a href="javascript:void(0);" data-action="toggleMenu" title="Collapse Menu"><i class="fa fa-reorder"></i></a> </span>
                </div>
                <!-- end collapse menu -->

                <!-- logout button -->
                <div id="logout" class="btn-header transparent pull-right visible-lg visible-md">
                    <span> <a href="login.html" title="Sign Out" data-action="userLogout" data-logout-msg="You can improve your security further after logging out by closing this opened browser"><i class="fa fa-sign-out"></i></a> </span>
                </div>
                <!-- end logout button -->

                <!-- #Voice Command: Start Speech -->
                <div id="speech-btn" class="btn-header transparent pull-right">
                    <div> 
                        <a href="javascript:void(0)" title="Voice Command" data-action="voiceCommand"><i class="fa fa-microphone"></i></a> 
                        <div class="popover bottom"><div class="arrow"></div>
                            <div class="popover-content">
                                <h4 class="vc-title">Voice command activated <br><small>Please speak clearly into the mic</small></h4>
                                <h4 class="vc-title-error text-center">
                                    <i class="fa fa-microphone-slash"></i> Voice command failed
                                    <br><small class="txt-color-red">Must <strong>"Allow"</strong> Microphone</small>
                                    <br><small class="txt-color-red">Must have <strong>Internet Connection</strong></small>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end voice command -->

            </div>
            <!-- end pulled right: nav area -->

        </header>
        <!-- END HEADER -->

        <!-- #NAVIGATION -->
        <aside id="left-panel">
            <nav>
                <ul>
                    <li class="">
                        <a href="index.php?/admin/home" title="Dashboard">
                            <i class="fa fa-lg fa-fw fa-home"></i> 
                            <span class="menu-item-parent">Início</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?/admin/mensagens">
                            <i class="fa fa-lg fa-fw fa-inbox"></i> 
                            <span class="menu-item-parent">Mensagens</span>
                            <span class="badge pull-right inbox-badge">14</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?/admin/fazer_baixas">
                            <i class="fa fa-lg fa-fw fa-download"></i>
                            <span class="menu-item-parent">Baixas a Fazer</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-lg fa-fw fa-users"></i> 
                            <span class="menu-item-parent">Associados</span>
                        </a>
                        <ul>
                            <li>
                                <a href="index.php?/admin/associados/pesquisar">
                                    <i class="fa fa-lg fa-fw fa-search"></i> Pesquisar Cadastrados
                                </a>
                            </li>
                            <li>
                                <a href="index.php?/admin/associados/novo">
                                    <i class="fa fa-lg fa-fw fa-plus"></i> Novo Associado
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-lg fa-fw fa-male"></i> 
                            <span class="menu-item-parent">Cobradores</span>
                        </a>
                        <ul>
                            <li>
                                <a href="index.php?/admin/cobradores/pesquisar">
                                    <i class="fa fa-lg fa-fw fa-search"></i> Pesquisar Cadastrados
                                </a>
                            </li>
                            <li>
                                <a href="index.php?/admin/cobradores/novo">
                                    <i class="fa fa-lg fa-fw fa-plus"></i> Novo Cobrador
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-lg fa-fw fa-file-text-o"></i> 
                            <span class="menu-item-parent">Relatórios</span>
                        </a>
                        <ul>
                            <li>
                                <a href="index.php?/admin/relatorios/cobranca">
                                    <i class="fa fa-lg fa-fw fa-calendar"></i> Cobrança
                                </a>
                            </li>
                            <li>
                                <a href="index.php?/admin/relatorios/usuarios_cadastrados">
                                    <i class="glyphicon glyphicon-user"></i> Usuários Cadastrados
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-lg fa-fw fa-cog"></i> 
                            <span class="menu-item-parent">Opções</span>
                        </a>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-lg fa-fw fa-plus"></i> Cadastros
                                </a>
                                <ul>
                                    <li>
                                        <a href="index.php?/admin/opcoes/cadastros/usuarios_sistema">
                                            <i class="glyphicon glyphicon-user"></i> Usuários do Sistema
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index.php?/admin/opcoes/cadastros/tipos_recebimento">
                                            <i class="fa fa-lg fa-fw fa-money"></i> Tipos de Recebimento
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="index.php?/admin/opcoes/envio_email">
                                    <i class="fa fa-lg fa-fw fa-envelope"></i> Envio de E-mail
                                </a>
                            </li>
                            <li>
                                <a href="index.php?/admin/opcoes/mensalidades">
                                    <i class="fa fa-lg fa-fw fa-calendar"></i> Mensalidades
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="*">
                            <i class="fa fa-lg fa-fw fa-sign-out"></i> 
                            <span class="menu-item-parent">Fazer Logoff</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>
        <!-- END NAVIGATION -->

        <!-- #MAIN PANEL -->
        <div id="main" role="main">

            <!-- RIBBON -->
            <div id="ribbon">
                <!-- breadcrumb -->
                <ol class="breadcrumb"></ol>
				<!--********************************************************-->
            </div>
            <!--************************************************************-->

            <!-- #MAIN CONTENT (As páginas serão inseridas aqui via ajax) -->
            <div id="content"></div>
            <!--************************************************************-->

        </div>
        <!-- END #MAIN PANEL -->

        <!-- #PAGE FOOTER -->
        <div class="page-footer">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <span class="txt-color-white">Sistema de Cobrança On-Line © 2014</span>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- END FOOTER -->

        <!--================================================== -->

        <!-- #PLUGINS -->
        <!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
        <script src="js/libs/jquery-2.0.2.min.js"></script>
        <script src="js/libs/jquery-ui-1.10.3.min.js"></script>

        <!-- IMPORTANT: APP CONFIG -->
        <script src="js/app.config.js"></script>

        <!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->
        <script src="js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> 

        <!-- BOOTSTRAP JS -->
        <script src="js/bootstrap/bootstrap.min.js"></script>

        <!-- CUSTOM NOTIFICATION -->
        <script src="js/notification/SmartNotification.min.js"></script>

        <!-- JARVIS WIDGETS -->
        <script src="js/smartwidgets/jarvis.widget.min.js"></script>

        <!-- JQUERY VALIDATE -->
        <script src="js/plugin/jquery-validate/jquery.validate.min.js"></script>

        <!-- JQUERY MASKED INPUT -->
        <script src="js/plugin/masked-input/jquery.maskedinput.min.js"></script>

        <!-- JQUERY SELECT2 INPUT -->
        <script src="js/plugin/select2/select2.min.js"></script>

        <!-- browser msie issue fix -->
        <script src="js/plugin/msie-fix/jquery.mb.browser.min.js"></script>

        <!-- FastClick: For mobile devices: you can disable this in app.js -->
        <script src="js/plugin/fastclick/fastclick.min.js"></script>

        <!--[if IE 8]>
                <h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>
        <![endif]-->

        <!-- MAIN APP JS FILE -->
        <script src="js/app.min.js"></script>

        <!-- ENHANCEMENT PLUGINS : NOT A REQUIREMENT -->
        <!-- Voice command : plugin -->
        <script src="js/speech/voicecommand.min.js"></script>
    </body>

</html>