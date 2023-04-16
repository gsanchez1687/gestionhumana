<?php
/* @var $this RrhhContratosController */
/* @var $data RrhhContratos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_contrato')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_contrato); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_inicio')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_inicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_terminacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_terminacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('duracion')); ?>:</b>
	<?php echo CHtml::encode($data->duracion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_salario')); ?>:</b>
	<?php echo CHtml::encode($data->valor_salario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_preaviso')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_preaviso); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('estado_preaviso')); ?>:</b>
	<?php echo CHtml::encode($data->estado_preaviso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observacion')); ?>:</b>
	<?php echo CHtml::encode($data->observacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conteo')); ?>:</b>
	<?php echo CHtml::encode($data->conteo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rrhh_centro_costo_id')); ?>:</b>
	<?php echo CHtml::encode($data->rrhh_centro_costo_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rrhh_punto_operacion_id')); ?>:</b>
	<?php echo CHtml::encode($data->rrhh_punto_operacion_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rrhh_perfil_id')); ?>:</b>
	<?php echo CHtml::encode($data->rrhh_perfil_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rrhh_datos_empleado_id')); ?>:</b>
	<?php echo CHtml::encode($data->rrhh_datos_empleado_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contrato_firmado_en_pdf')); ?>:</b>
	<?php echo CHtml::encode($data->contrato_firmado_en_pdf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('orden_id')); ?>:</b>
	<?php echo CHtml::encode($data->orden_id); ?>
	<br />

	*/ ?>

</div>