<?php
/* @var $this RrhhexamenmedicoController */
/* @var $model RrhhExamenMedico */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rrhh-examen-medico-form',
	'htmlOptions'=>array('class'=>'','role'=>'form'),
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>false,
	'clientOptions'=>array(
		'validateOnChange'=>false,
		'validateOnSubmit'=>true,		
		'beforeValidate'=>"js:function(form){
	    	var newSessing = form.data('settings');
            newSessing.validationUrl = $(form).attr('action');
            form.data('settings', newSessing);
            return true;
		}",
		'afterValidate'=>"js:function(form,data,hasError){ 
			if(!hasError) {
				form.each (function(){
				  this.reset();
				});
				$.fn.yiiListView.update('rrhh-examen-medico-list', {
					// data: { '".get_class($model)."':  }
					
complete: function () {
$(\"#rrhh-examen-medico-list ul\").sortable({
	update: function() {
		var that = $(this);
		$(\".loading\").html('<i class=\"fa fa-refresh fa-spin\"></i>');
		setTimeout(function () {
        	var order = that.sortable(\"toArray\");
	        $.post('".$this->createUrl('rrhhexamenmedico/order')."', {order: order}, function(datos){
    			$('.loading').empty();
	        });
		},500);
    }
});
},

				});
				$('#rrhh-examen-medico-modal').modal('hide');
				return false;
			}
			return false;
		}",
	),
)); ?>

<div class="row">
	<div class="pln col-lg-6">

<div class="form-group">
	<?php echo $form->labelEx($model,'fecha',array('class'=>'control-label')); ?>
	<?php echo $this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'model' => $model,
				'attribute' => 'fecha',
				'language' =>  Yii::app()->language,
				'htmlOptions' => array('class'=>'form-control','placeholder'=>'Año / Mes / Dia'),
				'options' => array(
					'showButtonPanel' => true,
					'changeYear' => true,
					'dateFormat' => 'yy-mm-dd',
				),
			),true); ?>
	<?php echo $form->error($model,'fecha',array('class'=>'help-block')); ?>
</div>
<div class="form-group">
	<?php echo $form->labelEx($model,'nombre_examen',array('class'=>'control-label')); ?>
	<?php //echo $form->dropDownList($model,'nombre_examen',RrhhNombreExamenes::listData(),array('empty'=>Yii::t('app','Select ...'),'class'=>'form-control')); ?>
        <?php echo FormHelper::dropDownList($form, $model, 'id', RrhhNombreExamenes::model()->findAll(''), 'id', 'nombre') ?>
	<?php echo $form->error($model,'nombre_examen',array('class'=>'help-block')); ?>
</div>
<!--<div class="form-group">
	<?#php echo $form->labelEx($model,'estado',array('class'=>'control-label')); ?>
	<?#php echo $form->checkBox($model,'estado'); ?>
	<?#php echo $form->error($model,'estado',array('class'=>'help-block')); ?>
</div>-->
<div class="form-group">
    <?php echo $form->labelEx($model,'estado',array('class'=>'control-label')); ?>
    <?php echo $this->widget('ext.inputs.radio.GThumbnail', array(
                'model'=>$model,
                'attribute'=>'estado',
                'htmlOptions'=>array('class'=>'form-control'),
                'listData'=>array(
                  '1'=>'Activo',
                  '0'=>'Inactivo',
                ),
            ),true)?>
    <?php echo $form->error($model,'estado',array('class'=>'help-block')); ?>
</div>
	</div>
	<div class="pln prn col-lg-6">
<div class="form-group">
	<?php echo $form->labelEx($model,'fecha_proximo_examen',array('class'=>'control-label')); ?>
	<?php echo $this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'model' => $model,
				'attribute' => 'fecha_proximo_examen',
				'language' =>  Yii::app()->language,
				'htmlOptions' => array('class'=>'form-control','placeholder'=>'Año / Mes / Dia'),
				'options' => array(
					'showButtonPanel' => true,
					'changeYear' => true,
					'dateFormat' => 'yy-mm-dd',
				),
			),true); ?>
	<?php echo $form->error($model,'fecha_proximo_examen',array('class'=>'help-block')); ?>
</div>
<div class="form-group">
	<?php echo $form->labelEx($model,'imagen',array('class'=>'control-label')); ?>
         <?php echo CHtml::activeFileField($model, 'imagen'); ?>
	<?php /*echo $this->widget('ext.inputs.uploader.GUpload', array(
			    'model' => $model,
			    'attribute' => 'imagen',
			    // 'sizeValidate' => array('width'=>'500','height'=>'500'),
			    // 'allowedExtensions' => array('png','jpg','jpeg','pdf','zip'),
			    // 'iconButtom' => 'fa-cloud-upload',
			 	'actionUrl' => $this->createUrl('upload'),
			),true); */?>
	<?php echo $form->error($model,'imagen',array('class'=>'help-block')); ?>
</div>
	</div>
</div>

<div class="modal-footer">
	<button type="button" class="btn default" data-dismiss="modal"><?php echo Yii::t('app','Cancel')?></button>
	<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('app','Create') : Yii::t('app','Save'),array('class'=>'rrhh-examen-medico-submit btn btn-primary btn-large')); ?>
</div>
<?php $this->endWidget(); ?>
