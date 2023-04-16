<?php
/* @var $this RrhhExamenMedicoController */
/* @var $model RrhhExamenMedico */

$this->breadcrumbs=array(
	'Rrhh Examen Medicos'=>array('index'),
	$model->id,
);
?>

<div class="row">
    <div class="col-xs-12 col-md-10 col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading navbar-tool">
                <h1>Examen Médico <?php //echo $model->id; ?></h1>            
            </div>
            <div class="container btn-group">
                     <?php echo CHtml::link('Nuevo', array('rrhhExamenMedico/create'), array('class' => 'btn btn-square btn-info')); ?>                      
                     <?php echo CHtml::link('Actualizar', array('rrhhExamenMedico/update/'.$model->id), array('class' => 'btn btn-square btn-info')); ?>                      
                     <?php echo CHtml::link('Administrador', array('rrhhExamenMedico/admin'), array('class' => 'btn  btn-square btn-info')); ?>                      
            </div>
           
            <div class="panel-body">
				<?php $this->widget('zii.widgets.CDetailView', array(
                		'data'=>$model,
                        'attributes'=>array(
                        	'id',
							'fecha',
							'nombre_examen',
							'estado',
							'fecha_proximo_examen',
							'imagen',
							'orden_id',
							'rrhh_datos_empleado_id',
                        ),
                )); ?>	
			</div>
		</div>
	</div>
</div>
