
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array('id'=>'rrhh-perfil-form','enableAjaxValidation'=>true,'htmlOptions' => array('enctype' => 'multipart/form-data'),'clientOptions'=>array('validateOnSubmit'=>true))); ?>

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
                <?php echo $form->labelEx($model,'cargo'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php echo $form->textField($model,'cargo',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'cargo'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'area_departamento'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
               <?php echo FormHelper::dropDownList($form, $model, 'area_departamento', RrhhAreaODepartamentos::model()->findAll(''), 'id', 'nombre') ?>
		<?php echo $form->error($model,'area_departamento'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'mision'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php echo $form->textField($model,'mision',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'mision'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'jefe_directo'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php echo $form->textField($model,'jefe_directo',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'jefe_directo'); ?>
            </div>            
        </div>

        <div class="form-group">
	    	<div class="col-xs-12 col-sm-3">
				<?php echo $form->labelEx($model,'formato_contrato'); ?>
			</div>
			<div class="col-xs-12 col-sm-9">
				<?php echo CHtml::activeFileField($model, 'formato_contrato'); ?>
				<?php //echo $form->textField($model,'imagen',array('size'=>60,'maxlength'=>100)); ?>
				<?php echo $form->error($model,'formato_contrato'); ?>
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
