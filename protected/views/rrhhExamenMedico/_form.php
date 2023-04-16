<?php
/* @var $this RrhhExamenMedicoController */
/* @var $model RrhhExamenMedico */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rrhh-examen-medico-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data')
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
			<?php echo $form->labelEx($model,'fecha'); ?>
		</div>
		<div class="col-xs-12 col-sm-9">
			<?php echo $form->textField($model,'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
		</div>
	</div>
	
	<div class="form-group">
    	<div class="col-xs-12 col-sm-3">
			<?php echo $form->labelEx($model,'nombre_examen'); ?>
		</div>
		<div class="col-xs-12 col-sm-9">
			<?php echo $form->dropDownList($model, 'nombre_examen', 
								CHtml::listData(RrhhNombreExamenes::model()
									->findAll('',
										array('order' => 'id ASC')), 
										'id', 'name'
									),
									array('empty'=>'Seleccione')
								);
			?>
			<?php echo $form->error($model,'nombre_examen'); ?>
		</div>
	</div>

	<div class="form-group">
    	<div class="col-xs-12 col-sm-3">
        	<?php echo $form->labelEx($model,'fecha_proximo_examen'); ?>
        </div>
        <div class="col-xs-12 col-sm-9">
        	<?php
            	echo $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                	'model' => $model,
                    'attribute' => 'fecha_proximo_examen',
                    'language' => Yii::app()->language,
                    'htmlOptions' => array('class' => 'form-control', 'placeholder' => 'Año / Mes / Dia'),
                    'options' => array(
                        'showButtonPanel' => true,
                        'changeYear' => true,
                        'dateFormat' => 'yy-mm-dd',
                    ),
                 ), true);
             ?>
			<?php echo $form->error($model,'fecha_proximo_examen'); ?>
        </div>            
	</div>

	<div class="form-group">
    	<div class="col-xs-12 col-sm-3">
			<?php echo $form->labelEx($model,'imagen'); ?>
		</div>
		<div class="col-xs-12 col-sm-9">
			<?php echo CHtml::activeFileField($model, 'imagen'); ?>
			<?php //echo $form->textField($model,'imagen',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'imagen'); ?>
		</div>
	</div>
	
	<div class="form-group">
    	<div class="col-xs-12 col-sm-3">
			<?php echo $form->labelEx($model,'orden_id'); ?>
		</div>
		<div class="col-xs-12 col-sm-9">
			<?php echo $form->textField($model,'orden_id'); ?>
			<?php echo $form->error($model,'orden_id'); ?>
		</div>
	</div>

	<div class="form-group">
    	<div class="col-xs-12 col-sm-3">
			<?php echo $form->labelEx($model,'rrhh_datos_empleado_id'); ?>
		</div>
		<div class="col-xs-12 col-sm-9">
			<?php echo $form->dropDownList($model, 'rrhh_datos_empleado_id', 
								CHtml::listData(RrhhDatosEmpleado::model()
									->findAll('',
										array('order' => 'id ASC')), 
										'id', 'numero_documento' 
									),
									array('empty'=>'Seleccione')
								);
			?>
			<?php echo $form->error($model,'rrhh_datos_empleado_id'); ?>
		</div>
	</div>

	<div class="form-group">
    	<div class="col-xs-12 col-sm-3">
        	<?php echo $form->labelEx($model,'estado'); ?>
        </div>
        <div class="col-xs-12 col-sm-9">
        	<?php
            	$this->widget('application.extensions.SwitchToggleJD.SwitchToggleJD', array(
                				'id' => 'RrhhDatosEmpleado_estado',
                                'attribute' => 'RrhhDatosEmpleado[estado]',
                                'state' => $model->estado,
                                'type' => 'item',
                                'coloron' => 'color1'));
            ?>

			<?php echo $form->error($model,'estado'); ?>
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
