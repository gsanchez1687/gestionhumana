<?php
/* @var $this RrhhvacacionesController */
/* @var $data RrhhVacaciones */
?>
<li class="list-group-item cursor-move" id="<?php echo $index."-".$data->id?>">
	<div class="row">	
    <div class="col-lg-7 pls">
<div class="col-lg-4 pln prn">
</div>
<div class="col-lg-8">
    
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), '#'); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dias_tomados')); ?>:</b>
	<?php echo CHtml::encode($data->dias_tomados); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('periodo_afectado')); ?>:</b>
	<?php echo CHtml::encode($data->periodo_afectado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_salida')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_salida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_reintegro')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_reintegro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rrhh_datos_empleado_id')); ?>:</b>
	<?php echo CHtml::encode($data->rrhh_datos_empleado_id); ?>
	<br />

	*/ ?>
</div>
    
    </div>
    <div class="col-lg-5">
        <?php echo CHtml::link('<i class="fa fa-pencil"></i>', array('rrhhvacaciones/update', 'id'=>$data->id, 'rrhh_datos_empleado_id'=>$data->rrhh_datos_empleado_id),
                    array('class'=>'btn btn-primary mls pull-right','data-action'=>'crud-rrhhvacaciones','data-type'=>'update','data-name'=>$data->id)); ?>  
        <?php #echo CHtml::link('<i class="fa fa-eye"></i>', array('rrhhvacaciones/view', 'id'=>$data->id, 'rrhh_datos_empleado_id'=>$data->rrhh_datos_empleado_id),
                    #array('class'=>'btn btn-default mls pull-right','data-action'=>'crud-rrhhvacaciones','data-type'=>'view','data-name'=>$data->id)); ?>
        <?php echo CHtml::link('<i class="fa fa-trash-o"></i>', array('rrhhvacaciones/delete', 'id'=>$data->id),
            		array('class'=>'btn btn-default pull-right','data-action'=>'crud-rrhhvacaciones', 'data-type'=>'delete','data-name'=>$data->id)); ?>    </div>
    </div>

</li>