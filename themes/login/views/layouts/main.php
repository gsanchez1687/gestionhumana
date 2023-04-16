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
    <!--<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/vendor/jquery-1.11.1.min.js"></script>-->     
    <!--chosen select-->    
    <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/vendor/html5shiv.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/vendor/respond.min.js"></script>
    <![endif]-->
</head>

<body>
                    <?php echo $content; ?>
                    <div class="clear"></div>
    <!--Global JS-->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/plugins/bootstrap/js/bootstrap.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/plugins/navgoco/jquery.navgoco.min.js"></script>    
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/plugins/pace/pace.min.js"></script> 
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/src/app.js"></script>       
</body>

</html>