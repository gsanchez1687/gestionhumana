<?php
/* @var $this RrhhDotacionesController */
/* @var $model RrhhDotaciones */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rrhh-dotaciones-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observacion'); ?>
		<?php echo $form->textField($model,'observacion',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'observacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comprobante'); ?>
		<?php echo $form->textField($model,'comprobante',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'comprobante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'orden_id'); ?>
		<?php echo $form->textField($model,'orden_id'); ?>
		<?php echo $form->error($model,'orden_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rrhh_datos_empleado_id'); ?>
		<?php echo $form->textField($model,'rrhh_datos_empleado_id'); ?>
		<?php echo $form->error($model,'rrhh_datos_empleado_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->