<?php
/* @var $this RrhhincapacidadesController */
/* @var $model RrhhIncapacidades */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rrhh-incapacidades-form',
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
				$.fn.yiiListView.update('rrhh-incapacidades-list', {
					// data: { '".get_class($model)."':  }
					
complete: function () {
$(\"#rrhh-incapacidades-list ul\").sortable({
	update: function() {
		var that = $(this);
		$(\".loading\").html('<i class=\"fa fa-refresh fa-spin\"></i>');
		setTimeout(function () {
        	var order = that.sortable(\"toArray\");
	        $.post('".$this->createUrl('rrhhIncapacidades/order')."', {order: order}, function(datos){
    			$('.loading').empty();
	        });
		},500);
    }
});
},

				});
				$('#rrhh-incapacidades-modal').modal('hide');
				return false;
			}
			return false;
		}",
	),
)); ?>

<div class="row">
	<div class="pln col-lg-6">

<div class="form-group">
	<?php echo $form->labelEx($model,'origen_licencias',array('class'=>'control-label')); ?>
	<?php //echo $form->dropDownList($model,'origen_licencias',RrhhNombreIncapacidades::listData(),array('empty'=>Yii::t('app','Select ...'),'class'=>'form-control')); ?>
        <?php echo FormHelper::dropDownList($form, $model, 'id', RrhhNombreIncapacidades::model()->findAll(), 'id', 'nombre') ?>
	<?php echo $form->error($model,'origen_licencias',array('class'=>'help-block')); ?>
</div>
<div class="form-group">
	<?php echo $form->labelEx($model,'fecha_inicio',array('class'=>'control-label')); ?>
	<?php echo $this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'model' => $model,
				'attribute' => 'fecha_inicio',
				'language' =>  Yii::app()->language,
				'htmlOptions' => array('class'=>'form-control','placeholder'=>'Año / Mes / Dia'),
				'options' => array(
					'showButtonPanel' => true,
					'changeYear' => true,
					'dateFormat' => 'yy-mm-dd',
				),
			),true); ?>
	<?php echo $form->error($model,'fecha_inicio',array('class'=>'help-block')); ?>
</div>
<div class="form-group">
	<?php echo $form->labelEx($model,'fecha_fin',array('class'=>'control-label')); ?>
	<?php echo $this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'model' => $model,
				'attribute' => 'fecha_fin',
				'language' =>  Yii::app()->language,
				'htmlOptions' => array('class'=>'form-control','placeholder'=>'Año / Mes / Dia'),
				'options' => array(
					'showButtonPanel' => true,
					'changeYear' => true,
					'dateFormat' => 'yy-mm-dd',
				),
			),true); ?>
	<?php echo $form->error($model,'fecha_fin',array('class'=>'help-block')); ?>
</div>

<div class="form-group">
    <?php echo $form->labelEx($model,'calcular_por dias',array('class'=>'control-label')); ?>
    <?php echo $this->widget('ext.inputs.radio.GThumbnail', array(
                'model'=>$model,
                'attribute'=>'calcular_por',
                'htmlOptions'=>array('class'=>'form-control'),
                'listData'=>array(
                  '1'=>'Habiles',
                  '0'=>'Corrientes',
                ),
            ),true)?>
    <?php echo $form->error($model,'calcular_por',array('class'=>'help-block')); ?>
</div>
	</div>
	<div class="pln prn col-lg-6">
		<!--
<div class="form-group">
	<?php //echo $form->labelEx($model,'tiempo',array('class'=>'control-label')); ?>
	<?php //echo $this->widget('ext.inputs.counter.GTextfield',array(
			//		'model'=>$model,
			//		'attribute'=>'tiempo',
			//		'allowed' => 11,
			//		'htmlOptions' => array('class'=>'form-control'),
			//	),true); ?>
	<?php //echo $form->error($model,'tiempo',array('class'=>'help-block')); ?>
</div>-->
<div class="form-group">
	<?php echo $form->labelEx($model,'diagnostico',array('class'=>'control-label')); ?>
	<?php echo $this->widget('ext.inputs.counter.GTextfield',array(
					'model'=>$model,
					'attribute'=>'observacion',
					'allowed' => 100,
					'htmlOptions' => array('class'=>'form-control'),
				),true); ?>
	<?php echo $form->error($model,'observacion',array('class'=>'help-block')); ?>
</div>
<div class="form-group">
	<?php echo $form->labelEx($model,'imgen',array('class'=>'control-label')); ?>
        <?php echo CHtml::activeFileField($model, 'imgen'); ?>
	<?php /*echo $this->widget('ext.inputs.uploader.GUpload', array(
			    'model' => $model,
			    'attribute' => 'imgen',
			    // 'sizeValidate' => array('width'=>'500','height'=>'500'),
			    // 'allowedExtensions' => array('png','jpg','jpeg','pdf','zip'),
			    // 'iconButtom' => 'fa-cloud-upload',
			 	'actionUrl' => $this->createUrl('upload'),
			),true);*/ ?>
	<?php echo $form->error($model,'imgen',array('class'=>'help-block')); ?>
</div>
	</div>
</div>

<div class="modal-footer">
	<button type="button" class="btn default" data-dismiss="modal"><?php echo Yii::t('app','Cancel')?></button>
	<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('app','Create') : Yii::t('app','Save'),array('class'=>'rrhh-incapacidades-submit btn btn-primary btn-large')); ?>
</div>
<?php $this->endWidget(); ?>
