<?php
/* @var $this RrhhPerfilController */
/* @var $data RrhhPerfil */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cargo')); ?>:</b>
	<?php echo CHtml::encode($data->cargo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('area_departamento')); ?>:</b>
	<?php echo CHtml::encode($data->area_departamento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mision')); ?>:</b>
	<?php echo CHtml::encode($data->mision); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jefe_directo')); ?>:</b>
	<?php echo CHtml::encode($data->jefe_directo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('formato_contrato')); ?>:</b>
	<?php echo CHtml::encode($data->formato_contrato); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('orden_id')); ?>:</b>
	<?php echo CHtml::encode($data->orden_id); ?>
	<br />


</div>