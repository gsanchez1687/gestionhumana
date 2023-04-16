<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'Sistema integrado de recursos humanos',
    'language' => 'es',
    'theme' => 'classic',
    'sourceLanguage' => 'es',
    'defaultController' => 'user/login',
    // preloading 'log' component
    'preload' => array('log'),
    // autoloading model and component classes

    'import' => array(       
        'application.models.*',
        'application.components.*',
        'application.modules.user.models.*',
        'application.modules.user.components.*',
    ),
    'modules' => array(
        'user'=>array(
                        # encrypting method (php hash function)
                        'tableUsers' => 'tbl_users',
                        'tableProfiles' => 'tbl_profiles',
                        'tableProfileFields' => 'tbl_profiles_fields',
                        'hash' => 'md5',                   

                        # send activation email
                        'sendActivationMail' => false,

                        # allow access for non-activated users
                        'loginNotActiv' => false,

                        # activate user on registration (only sendActivationMail = false)
                        'activeAfterRegister' => true,

                        # automatically login from registration
                        'autoLogin' => true,

                        # registration path
                        'registrationUrl' => array('/user/registration'),

                        # recovery password path
                        'recoveryUrl' => array('/user/recovery'),

                        # login form path
                        'loginUrl' => array('/user/login'),

                        # page after login
                        'returnUrl' => array('/site/index'),

                        # page after logout
                        'returnLogoutUrl' => array('/user/login'),
                    ),

        'gii' => array(          
            'class' => 'system.gii.GiiModule',
            'password' => '16871752',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters' => array($_SERVER['REMOTE_ADDR']),
        ),
    ),
    // application components
    'components' => array(
        'db' => array(
            #...
            'tablePrefix' => 'tbl_',
        #...
        ),
        'user'=>array(
			// enable cookie-based authentication
//			'allowAutoLogin'=>true,
                        'loginUrl' => array('/user/login'),
                        'class' => 'WebUser',
		),
        
        'user' => array(
            // enable cookie-based authentication
            'allowAutoLogin' => true,
        ),
        'widgetFactory' => array('widgets' => array('CGridView' => array('itemsCssClass' => 'table table-bordered table-striped table-hover table-gridview table-condensed','pagerCssClass' => 'gridview-pagination','pager'=>array('cssFile' => false,'header' => '','class' => 'CLinkPager','firstPageLabel' => '<<','prevPageLabel' => '<','nextPageLabel' => '>','lastPageLabel' => '>>','maxButtonCount' => 15)),'CDetailView' => array('cssFile' => false,'htmlOptions' => array('class' => 'table table-bordered table-hover table-striped table-condensed table-gridview')),'htmlOptions' => array('class' => 'container-grid-view'))),

        // uncomment the following to enable URLs in path-format
        'urlManager' => array(
//            'class' => 'application.components.MyCUrlManager',
            'urlFormat' => 'path',
            'showScriptName' => false,
            'rules' => array(
			  '<controller:\d+>/<id:[a-zA-Z0-9-]+>'=>'<controller>/<action>',  
                          '<controller:\w+>/<action:\w+>/<id:\d+>' =>'<controller>/<action>',
                          '<controller:\w+>/<action:\w+>/<id:>' =>'<controller>/<action>', 
                          '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
            ),
        ),
        // database settings are configured in database.php
        'db' => require(dirname(__FILE__) . '/database.php'),
        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => YII_DEBUG ? null : 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
            // uncomment the following to show log messages on web pages
            /*
              array(
              'class'=>'CWebLogRoute',
              ),
             */
            ),
        ),
    ),
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => array(
        // this is used in contact page
        'adminEmail' => 'webmaster@example.com',
        /* Gridview */
	'IDGridview' => '',
	'rutaUrlGridviewBoxSwitch' => '',
        'GridViewOrder' => FALSE,
	'ClassTable' => 'table table-bordered table-hover table-striped table-condensed table-gridview',
        'cantregistros_defecto_gridview' => '10',
	'registros_pagina_gridview' => array(
                                            5=>5,
                                            10 => 10,
                                            20 => 20,
                                            50 => 50,
                                            100 => 100),
        /* Errores */
        'Error404' => 'La Pagina Solicitada no se encuentra o posiblemente tiene un error',
        'ErrorAccesoDenegado' => 'Acceso Denegado',
        'msjsuccess' => 'Se ha guardado con exito',
        'msjdanger' => 'No se ha podido guardar, verifique las validaciones',
        /* Botones */
        'boton' => 'btn peter-river-flat-button',
        'index-btn' => 'btn btn-info',
        'view-btn' => 'btn btn-info',
        'create-btn' => 'btn btn-info',
        'update-btn' => 'btn btn-info',
        'delete-btn' => 'btn btn-info',
        'admin-btn' => 'btn btn-info',
        'save-btn' => 'btn btn-success',
        'cancel-btn' => 'btn btn-default',
        'search-btn' => 'btn btn-info',
        'download-btn' => 'btn btn-info',
        'email-btn' => 'btn btn-info',
        'send-btn' => 'btn btn-success',
        /* Iconos de Botones */
        'index-icon' => '<i class="icon-menu glyph-icon flaticon-add46"></i>',
        'view-icon' => '<i class="fa fa-eye"></i>',
        'create-icon' => '<i class="icon-menu glyph-icon flaticon-add46"></i>',
        'update-icon' => '<i class="fa fa-pencil-square-o"></i>',
        'delete-icon' => '<i class="fa fa-times"></i>',
        'admin-icon' => '<i class="icon-menu glyph-icon flaticon-content"></i>',
        'save-icon' => '<i class="icon-menu glyph-icon flaticon-floppy1"></i>',
        'cancel-icon' => '<i class="icon-menu glyph-icon flaticon-back1"></i>',
        'search-icon' => '<i class="icon-menu glyph-icon flaticon-add46"></i>',
        'download-icon' => '<i class="fa fa-download"></i>',
        'email-icon' => '<i class="fa fa-envelope"></i>',
        'diario-icon' => '<i class="fa fa-book"></i>',
        /* Textos */
        'index-text' => 'Administrar', /* Botones */
        'boton' => 'btn peter-river-flat-button',
        'index-btn' => 'btn btn-info',
        'view-btn' => 'btn btn-info',
        'create-btn' => 'btn btn-info',
        'update-btn' => 'btn btn-info',
        'delete-btn' => 'btn btn-info',
        'admin-btn' => 'btn btn-info',
        'save-btn' => 'btn btn-success',
        'cancel-btn' => 'btn btn-default',
        'search-btn' => 'btn btn-info',
        'download-btn' => 'btn btn-info',
        'email-btn' => 'btn btn-info',
        'send-btn' => 'btn btn-success',
        /* Iconos de Botones */
        'index-icon' => '<i class="icon-menu glyph-icon flaticon-add46"></i>',
        'view-icon' => '<i class="fa fa-eye"></i>',
        'create-icon' => '<i class="icon-menu glyph-icon flaticon-add46"></i>',
        'update-icon' => '<i class="fa fa-pencil-square-o"></i>',
        'delete-icon' => '<i class="fa fa-times"></i>',
        'admin-icon' => '<i class="icon-menu glyph-icon flaticon-content"></i>',
        'save-icon' => '<i class="icon-menu glyph-icon flaticon-floppy1"></i>',
        'cancel-icon' => '<i class="icon-menu glyph-icon flaticon-back1"></i>',
        'search-icon' => '<i class="icon-menu glyph-icon flaticon-add46"></i>',
        'download-icon' => '<i class="fa fa-download"></i>',
        'email-icon' => '<i class="fa fa-envelope"></i>',
        'diario-icon' => '<i class="fa fa-book"></i>',
        /* Textos */
        'index-text' => 'Administrar',
        'view-text' => 'Detalle',
        'create-text' => 'Agregar',
        'update-text' => 'Editar',
        'delete-text' => 'Eliminar',
        'admin-text' => 'Listar',
        'save-text' => 'Guardar',
        'cancel-text' => 'Cancelar',
        'search-text' => 'Buscar',
        'download-text' => 'Descargar',
        'email-text' => 'Email',
        'send-text' => 'Enviar',
        'camposrequeridos' => 'Campos con <span class="errorMessage">*</span> son requeridos.',
        'confirmacion-eliminar' => '¿Está seguro que desea borrar este elemento?',
        'msjsuccess' => 'Se ha guardado con exito',
        'msjdanger' => 'No se ha podido guardar, verifique las validaciones',
        /* Transacciones */
        'rollback' => TRUE,
        'order-grid' => FALSE,
        'view-icon2' => "<i class='fa fa-eye'></i>",
    ),
);
