<?php
/* @var $this RrhhVacacionesController */
/* @var $model RrhhVacaciones */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rrhh-vacaciones-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'dias_tomados'); ?>
		<?php echo $form->textField($model,'dias_tomados'); ?>
		<?php echo $form->error($model,'dias_tomados'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'periodo_afectado'); ?>
		<?php echo $form->textField($model,'periodo_afectado',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'periodo_afectado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_salida'); ?>
		<?php echo $form->textField($model,'fecha_salida'); ?>
		<?php echo $form->error($model,'fecha_salida'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_reintegro'); ?>
		<?php echo $form->textField($model,'fecha_reintegro'); ?>
		<?php echo $form->error($model,'fecha_reintegro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rrhh_datos_empleado_id'); ?>
		<?php echo $form->textField($model,'rrhh_datos_empleado_id'); ?>
		<?php echo $form->error($model,'rrhh_datos_empleado_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'imagen'); ?>
		<?php echo $form->textField($model,'imagen',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'imagen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'orden_id'); ?>
		<?php echo $form->textField($model,'orden_id'); ?>
		<?php echo $form->error($model,'orden_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->