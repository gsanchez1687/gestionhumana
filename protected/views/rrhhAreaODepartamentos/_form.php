<?php
/* @var $this RrhhAreaODepartamentosController */
/* @var $model RrhhAreaODepartamentos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array('id'=>'rrhh-area-odepartamentos-form','enableAjaxValidation'=>true,)); ?>

    	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

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
                <?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre'); ?>
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
