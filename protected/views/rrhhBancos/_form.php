<?php
/* @var $this RrhhBancosController */
/* @var $model RrhhBancos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rrhh-bancos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model,null,null,array('class'=>'alert alert-danger')); ?>
	
	<div class="form-group">
        <div class="text-right">
            <?php echo CHtml::submitButton(Yii::app()->params['save-text'], array('class' => Yii::app()->params['save-btn'])); ?>
	    	<?php echo CHtml::link(Yii::app()->params['cancel-text'], Yii::app()->controller->createUrl('admin'), array('class' => Yii::app()->params['cancel-btn'])); ?>
        </div>
    </div>
	
	<div class="form-group">
    	<div class="col-xs-12 col-sm-3">
			<?php echo $form->labelEx($model,'nombre'); ?>
		</div>
		<div class="col-xs-12 col-sm-9">
			<?php echo $form->textField($model,'nombre', array('size'=>60,'maxlength'=>60)); ?>
			<?php echo $form->error($model,'nombre'); ?>
		</div>
	</div>
	
	<div class="form-group">
    	<div class="col-xs-12 col-sm-3">
			<?php echo $form->labelEx($model,'orden_id'); ?>
		</div>
		<div class="col-xs-12 col-sm-9">
			<?php echo $form->textField($model,'orden_id', array('size'=>60)); ?>	
			<?php echo $form->error($model,'orden_id'); ?>
		</div>
	</div>

	<div class="form-group">
        <div class="text-right">
			<?php echo CHtml::submitButton(Yii::app()->params['save-text'], array('class' => Yii::app()->params['save-btn'])); ?>
		    <?php echo CHtml::link(Yii::app()->params['cancel-text'], Yii::app()->controller->createUrl('admin'), array('class' => Yii::app()->params['cancel-btn'])); ?>
        </div>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->
