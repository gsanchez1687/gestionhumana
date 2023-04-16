<?php
/* @var $this RrhhCausalRetiroController */
/* @var $model RrhhCausalRetiro */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array('id'=>'rrhh-causal-retiro-form','enableAjaxValidation'=>true,)); ?>

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
                <?php echo $form->labelEx($model,'causal_retiro'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php echo $form->textField($model,'causal_retiro',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'causal_retiro'); ?>
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
