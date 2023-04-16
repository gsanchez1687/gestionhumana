<?php
/* @var $this RrhhVeneficiosExtralegalesController */
/* @var $data RrhhVeneficiosExtralegales */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor')); ?>:</b>
	<?php echo CHtml::encode($data->valor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('orden_id')); ?>:</b>
	<?php echo CHtml::encode($data->orden_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rrhh_datos_empleado_id')); ?>:</b>
	<?php echo CHtml::encode($data->rrhh_datos_empleado_id); ?>
	<br />


</div>