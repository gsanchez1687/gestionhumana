<?php
/* @var $this RrhhDotacionesController */
/* @var $data RrhhDotaciones */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observacion')); ?>:</b>
	<?php echo CHtml::encode($data->observacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comprobante')); ?>:</b>
	<?php echo CHtml::encode($data->comprobante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('orden_id')); ?>:</b>
	<?php echo CHtml::encode($data->orden_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rrhh_datos_empleado_id')); ?>:</b>
	<?php echo CHtml::encode($data->rrhh_datos_empleado_id); ?>
	<br />


</div>