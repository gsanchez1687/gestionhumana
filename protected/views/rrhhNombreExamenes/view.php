<?php
/* @var $this RrhhNombreExamenesController */
/* @var $model RrhhNombreExamenes */

$this->breadcrumbs=array(
	'Rrhh Nombre Examenes'=>array('index'),
	$model->id,
);
?>

<div class="row">
    <div class="col-xs-12 col-md-10 col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading navbar-tool">
                <h1>Nombre de Examen <?php //echo $model->id; ?></h1>    
                <div class="actions pull-right">
                    <i class="fa fa-expand"></i>
                    <i class="fa fa-chevron-down"></i>
                    <i class="fa fa-times"></i>
                </div>
            </div>
            <div class="panel-footer">
            	<div class="container btn-group">
                     <?php echo CHtml::link('Nuevo', array('rrhhNombreExamenes/create'), array('class' => 'btn btn-square btn-info')); ?>                      
                     <?php echo CHtml::link('Actualizar', array('rrhhNombreExamenes/update/'.$model->id), array('class' => 'btn btn-square btn-info')); ?>                      
                     <?php echo CHtml::link('Listado', array('rrhhNombreExamenes/admin'), array('class' => 'btn  btn-square btn-info')); ?>                      
            	</div>
           	</div>
            <div class="panel-body">
            	<?php $this->widget('zii.widgets.CDetailView', array(
                		'data'=>$model,
                        'attributes'=>array(
                        	'id',
							'nombre',
							'orden_id',
                        ),
                )); ?>
            </div>
		</div>
	</div>
</div>
