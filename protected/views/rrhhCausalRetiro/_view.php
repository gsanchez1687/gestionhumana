<?php
/* @var $this RrhhCausalRetiroController */
/* @var $data RrhhCausalRetiro */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('causal_retiro')); ?>:</b>
	<?php echo CHtml::encode($data->causal_retiro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('orden_id')); ?>:</b>
	<?php echo CHtml::encode($data->orden_id); ?>
	<br />


</div>