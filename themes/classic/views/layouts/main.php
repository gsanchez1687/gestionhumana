<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>RRHH</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/plugins/bootstrap/css/bootstrap.min.css">    
    <!-- Fonts  -->
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome.min.css">    
    <!-- CSS Animate -->
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/animate.css">
    <!-- Custom styles for this theme -->
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">   
    <!-- pace loading -->
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/plugins/pace/pace.css">
    <!-- Feature detection -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/vendor/modernizr-3.3.1.min.js"></script>    
    <!-- gridview-pagination -->
    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl ?>/css/gridview-pagination.css">
    <!--Jquery 1.11-->
    <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
    <!-- onoffswitch -->  
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/plugins/onoffswitch/css/switch.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/vendor/html5shiv.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/vendor/respond.min.js"></script>
    <![endif]-->
</head>
<body>    
        <?php $userObject = Yii::app()->getModule('user')->user(); ?>
        <section id="main-wrapper" class="theme-default">
            <header id="header">
                <!--logo start-->
                <div class="brand">
                    <a href="#" class="logo"><i></i>Gestion <span>Humana</span></a>
                </div>
                <!--logo end-->
                <ul class="nav navbar-nav navbar-left">
                    <li class="toggle-navigation toggle-left">
                        <button class="sidebar-toggle" id="toggle-left">
                            <i class="fa fa-bars"></i>
                        </button>
                    </li>    
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li style="margin-left: -120px;" class=" dropdown profile hidden-xs">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="meta">
                                <span class="avatar">
                                        <img class="img-circle profile-image" src="<?php echo Yii::app()->baseUrl ?>/images/avatar.jpg" alt="profile">
                                </span>                                
                                <span class="caret"></span>
                            </span>
                        </a>
                        <ul  class="dropdown-menu animated fadeInRight" role="menu">
                            <li>                                
                                <a href="<?php echo Yii::app()->baseUrl.'/user/profile' ?>"><span class="icon"><i class="fa fa-user"></i></span>Mi Cuenta</a>                                
                            </li>
                            <li>                                
                                <a href="<?php echo Yii::app()->baseUrl.'/user/profile/edit' ?>"><span class="icon"><i class="fa fa-user"></i></span>Editar Cuenta</a>                                
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="<?php echo Yii::app()->baseUrl.'/user/logout' ?>"><span class="icon"><i class="fa fa-sign-out"></i></span>Cerrar Sesión</a>
                            </li>
                        </ul>
                    </li>
                    <li class="toggle-fullscreen hidden-xs">
                        <button type="button" class="btn btn-default expand" id="toggle-fullscreen">
                            <i class="fa fa-expand"></i>
                        </button>
                    </li>                   
                </ul>
            </header>
            <!--sidebar left start-->
            <aside class="sidebar sidebar-left">
                <div class="sidebar-profile">
                    <div class="avatar">                       
                            <img class="img-circle profile-image" src="<?php echo Yii::app()->baseUrl ?>/images/avatar.jpg" alt="profile">                        
                        <i class="on border-dark animated bounceIn"></i>                        
                    </div>
                    <div class="profile-body dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><h4><?php echo Yii::app()->params['empresa']; ?> <span class="caret"></span></h4></a>
                        <small style="color:#FFF; font-weight: bold;" class="title"><?php echo $userObject->username; ?></small>
                        <br />
                        <small style="color:#FFF; font-weight: bold;" class="title">Administrador<?php //echo Controller::nombrerol(); ?></small>
                       
                    </div>
                </div>
                <nav>
                    <h5 class="sidebar-header">Menu</h5>
                    <ul class="nav nav-pills nav-stacked">
                        <li class="nav-dropdown">
                            <a href="#" title="UI Elements">
                                <i class="fa fa-fw fa-user"></i> Empleados </a>
                            <ul class="nav-sub">
                                <li>
                                    <?php echo CHtml::link('Empleados', array('rrhhDatosEmpleado/admin')); ?>
                                </li>
                                <li>
                                    <?php echo CHtml::link('Cargos', array('rrhhCargos/admin')); ?>
                                </li>                                
                                
                            </ul>
                        </li>
                       <li>
                            <a href="<?php echo Yii::app()->request->baseUrl."/rrhhPerfil/admin"; ?>" title="perfiles">
                                <i class="fa  fa-fw fa-cogs"></i> Perfiles
                            </a>
                        </li>   
                         <li>
                            <a href="<?php echo Yii::app()->request->baseUrl."/rrhhContratos/admin"; ?>" title="Contratos">
                                <i class="fa  fa-fw fa-cogs"></i> Contratos
                            </a>
                        </li>      
                        <li>
                            <a href="<?php echo Yii::app()->request->baseUrl."/plantillas/admin"; ?>" title="Plantillas">
                                <i class="fa  fa-fw fa-cogs"></i> Plantillas
                            </a>
                        </li>  
                        <li>
                            <a href="<?php echo Yii::app()->request->baseUrl."/rrhhNotifications/admin"; ?>" title="Notificaciones">
                                <i class="fa  fa-fw fa-cogs"></i> Notificaciones
                            </a>
                        </li>  
                        <li class="nav-dropdown">
                            <a href="#" title="UI Elements">
                                <i class="fa fa-fw fa-database"></i> Vencimientos
                            </a>
                            <ul class="nav-sub">
                                <li>
                                    <a href="<?php echo Yii::app()->request->baseUrl ?>/rrhhTiposVencimientos/admin" title="Buttons">Tipo de Vencimiento</a>
                                </li>
                                <li>
                                    <a href="<?php echo Yii::app()->request->baseUrl ?>/rrhhVencimientos/admin" title="Buttons">Vencimiento</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-dropdown">
                            <a href="#" title="UI Elements">
                                <i class="fa fa-fw fa-database"></i> Parametrización
                            </a>
                            <ul class="nav-sub">
                                <li>
                                    <a href="<?php echo Yii::app()->request->baseUrl ?>/rrhhCentroCosto/admin" title="Buttons">Centro de costo</a>
                                </li>
                                <li>
                                    <a href="<?php echo Yii::app()->request->baseUrl ?>/rrhhCesantias/admin" title="Buttons">Cesantias</a>
                                </li>
                                <li>
                                    <a href="<?php echo Yii::app()->request->baseUrl ?>/rrhhEps/admin" title="Buttons">Eps</a>
                                </li>
                                <li>
                                    <a href="<?php echo Yii::app()->request->baseUrl ?>/rrhhFondoPensiones/admin" title="Buttons">Fondo Pensiones</a>
                                </li>
                                <li>
                                    <a href="<?php echo Yii::app()->request->baseUrl ?>/rrhhArl/admin" title="Buttons">Arl</a>
                                </li>
                                <li>
                                    <a href="<?php echo Yii::app()->request->baseUrl ?>/rrhhPoliza/admin" title="Buttons">Poliza</a>
                                </li>
                                <li>
                                    <a href="<?php echo Yii::app()->request->baseUrl ?>/rrhhCajaCompensacion/admin" title="Buttons">Caja Compesasion</a>
                                </li>
                                <li>
                                    <a href="<?php echo Yii::app()->request->baseUrl ?>/rrhhTipoContrato/admin" title="Buttons">Tipo Contrato</a>
                                </li>
                                <li>
                                    <a href="<?php echo Yii::app()->request->baseUrl ?>/rrhhCausalRetiro/admin" title="Buttons">Causa Retiro</a>
                                </li>
                                <li>
                                    <a href="<?php echo Yii::app()->request->baseUrl ?>/rrhhNombreExamenes/admin" title="Buttons">Examenes Medicos</a>
                                </li>
                                <li>
                                    <a href="<?php echo Yii::app()->request->baseUrl ?>/rrhhNombreIncapacidades/admin" title="Buttons">Nombre Incapacidades</a>
                                </li>
                                <li>
                                    <a href="<?php echo Yii::app()->request->baseUrl ?>/rrhhBancos/admin" title="Buttons">Bancos</a>
                                </li>
                                <li>
                                    <a href="<?php echo Yii::app()->request->baseUrl ?>/rrhhAreaODepartamentos/admin" title="Buttons">Areas o Departamento</a>
                                </li>
                                <li>
                                    <a href="<?php echo Yii::app()->request->baseUrl ?>/rrhhSalarios/admin" title="Buttons">Salarios</a>
                                </li>
                                <li>
                                    <a href="<?php echo Yii::app()->request->baseUrl ?>/rrhhPreaviso/admin" title="Buttons">Preaviso</a>
                                </li>
                                <li>
                                    <a href="<?php echo Yii::app()->request->baseUrl ?>/rrhhAyuda/admin" title="Buttons">Ayuda</a>
                                </li>                                
                            </ul>
                        </li>                          
                        <li class="nav-dropdown">
                            <a href="#" title="UI Elements">
                                <i class="fa fa-fw fa-database"></i> Usuarios
                            </a>
                            <ul class="nav-sub">
                                <li>
                                    <a href="<?php echo Yii::app()->request->baseUrl ?>/user/admin" title="Buttons">Usuarios Admin</a>
                                </li>
                                <li>
                                    <a href="<?php echo Yii::app()->request->baseUrl ?>/user/profileField/admin" title="Buttons">Profile Admin</a>
                                </li>
                                <li>
                                    <a href="<?php echo Yii::app()->request->baseUrl ?>/user/profileField/create" title="Buttons">Nuevo Perfil</a>
                                </li>
                            </ul>
                        </li>                          
                    </ul>
                </nav>             
            </aside>
            <!--sidebar left end-->
            <!--main content start-->
            <section class="main-content-wrapper">               
                <section style="margin-top: 0px !important;" id="main-content" class="animated fadeInUp">
             
                    <?php foreach (Yii::app()->user->getFlashes() as $key => $message) : ?>
                   
                    <input type="hidden" class="mensajes" value="<?php echo $message; ?>">
                   
                    <?php endforeach; ?>
                 
                    <?php echo $content; ?>
                    <div class="clear"></div>

                </section>
            </section>
            <!--main content end-->
        </section>   

    <!--Global JS-->    
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/plugins/bootstrap/js/bootstrap.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/plugins/navgoco/jquery.navgoco.min.js"></script>
    <script src="<?php echo Yii::app()->baseUrl ?>/plugins/switchery/switchery.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/plugins/pace/pace.min.js"></script> 
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/plugins/onoffswitch/js/switch.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/src/app.js"></script>  
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/plugins/fullscreen/jquery.fullscreen-min.js"></script>           
    <?php       
            if (Yii::app()->params['IDGridview'] != NULL) {
                $rutaUrlGridviewBoxSwitch = Yii::app()->params['rutaUrlGridviewBoxSwitch'];
                $IDGridview = Yii::app()->params['IDGridview'];          
                Yii::app()->clientScript->registerScript('LoadGridviewBoxSwitch',"GridviewBoxSwitch('{$IDGridview}','{$rutaUrlGridviewBoxSwitch}');");          
                Yii::app()->clientScript->registerScript('UpdateGridviewBoxSwitch', " function UpdateGridviewBoxSwitch(id, data) { GridviewBoxSwitch('{$IDGridview}','{$rutaUrlGridviewBoxSwitch}'); }");
            }
       ?>       
</body>
</html>
