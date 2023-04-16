<?php
/* @var $this RrhhPreavisoController */
/* @var $data RrhhPreaviso */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('duracion_en_dias')); ?>:</b>
	<?php echo CHtml::encode($data->duracion_en_dias); ?>
	<br />


</div>