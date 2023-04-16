<?php $col = 'col-md-6'; $fax = 'fa-3x'; $panel = 'panel-primary' ?>
<style>    
    .hover i{
        color: #2C3E50 !important;
    }
    .hover i:hover{
        color: #405C9C !important;
    }

</style>
<?php
//$userObject = Yii::app()->getModule('user')->user();
//$profileObject = $userObject->profile;               
////var_dump($profileObject->lastname);
//echo $profileObject->lastname;
?>

<section class="animated fadeInUp" id="main-content">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body text-center">
                    <p><h1>Panel de Configuración</h1></p>                    
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="<?php echo $col; ?>">
            <div class="panel <?php echo $panel; ?>">
                <div class="panel-heading">
                    <h3 class="panel-title">Empleados</h3>                    
                </div>                
                    <a href="<?php echo Yii::app()->request->baseUrl."/rrhhDatosEmpleado/admin"; ?>">
                        <div  class="panel-body text-center hover">
                            <i class="<?php echo $fax; ?> fa fa-user text-success" aria-hidden="true"></i>
                        </div>
                    </a>                
            </div>
        </div>
        <div class="<?php echo $col; ?>">
            <div class="panel <?php echo $panel; ?>">
                <div class="panel-heading">
                    <h3 class="panel-title">Usuarios</h3>                   
                </div>
                <a href="<?php echo Yii::app()->request->baseUrl."/admin"; ?>">
                    <div class="panel-body text-center hover">
                       <i class="<?php echo $fax; ?> fa fa-users text-success" aria-hidden="true"></i>
                    </div>
                </a>
            </div>
        </div>
        
    </div>
</section>
