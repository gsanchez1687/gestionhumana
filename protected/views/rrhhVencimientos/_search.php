<?php
/* @var $this RrhhVencimientosController */
/* @var $model RrhhVencimientos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vencimiento'); ?>
		<?php echo $form->textField($model,'vencimiento',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'repetir'); ?>
		<?php echo $form->textField($model,'repetir'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rrhh_datos_empleado_id'); ?>
		<?php echo $form->textField($model,'rrhh_datos_empleado_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->