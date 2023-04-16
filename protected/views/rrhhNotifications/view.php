<?php
/* @var $this RrhhNotificationsController */
/* @var $model RrhhNotifications */

$this->breadcrumbs=array(
	'Rrhh Notifications'=>array('index'),
	$model->id,
);

?>


<div class="row">
    <div class="col-xs-12 col-md-10 col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading navbar-tool">
                <h1>Detalle Notificación</h1>       
            </div>
            <div class="container btn-group ">
                     <?php echo CHtml::link('Crear', array('rrhhNotifications/create'), array('class' => 'btn btn-info')); ?>                      
                     <?php echo CHtml::link('Actualizar', array('rrhhNotifications/update/'.$model->id), array('class' => 'btn btn-info')); ?>                      
                     <?php echo CHtml::link('Listado', array('rrhhNotifications/admin'), array('class' => 'btn btn-info')); ?>                      
                </div>
            <div class="panel-body">
                <?php $this->widget('zii.widgets.CDetailView', array(
                    'data'=>$model,
                    'attributes'=>array(
                            'id',
                            'nombre',
                            'detalle',
                            'fecha_y_hora',
                            'estado',
                            'link',
                            'orden_id',
                    ),
            )); ?>
            </div>
        </div>
    </div>
</div>

