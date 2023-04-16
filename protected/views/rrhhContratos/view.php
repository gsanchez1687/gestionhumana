<?php
/* @var $this RrhhContratosController */
/* @var $model RrhhContratos */

$this->breadcrumbs=array(
	'Rrhh Contratoses'=>array('index'),
	$model->id,
);

?>
<div class="row">
    <div class="col-xs-12 col-md-10 col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading navbar-tool">
              <h1>Contrato</h1>          
              <div class="actions pull-right">
					<i class="fa fa-expand"></i>
                    <i class="fa fa-chevron-down"></i>
                    <i class="fa fa-times"></i>
                </div>
            </div>
            <div class="panel-footer">
            	<div class="container btn-group">
                     <?php echo CHtml::link('Nuevo', array('rrhhContratos/create'), array('class' => 'btn btn-square btn-info')); ?>                      
                     <?php echo CHtml::link('Actualizar', array('rrhhContratos/update/'.$model->id), array('class' => 'btn btn-square btn-info')); ?>                      
                     <?php echo CHtml::link('Listado', array('rrhhContratos/admin'), array('class' => 'btn  btn-square btn-info')); ?>                      
            	</div>
            </div>
            <div class="panel-body">
                <?php $this->widget('zii.widgets.CDetailView', array(
                    'data'=>$model,
                    'attributes'=>array(
                            'id',
                            'tipo_contrato',
                            'fecha_inicio',
                            'fecha_terminacion',
                            'duracion',
                            'valor_salario',
                            'fecha_preaviso',
                            'estado_preaviso',
                            'estado',
                            'observacion',
                            'conteo',
                            'rrhh_centro_costo_id',
                            'rrhh_punto_operacion_id',
                            'rrhh_perfil_id',
                            'rrhh_datos_empleado_id',
                            'contrato_firmado_en_pdf',
                            'orden_id',
                    ),
            )); ?>

            </div>
        </div>
    </div>
</div>
