<?php
/* @var $this ContratosController */
/* @var $model RrhhContratos */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rrhh-contratos-form',
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
				$.fn.yiiListView.update('rrhh-contratos-list', {
					// data: { '".get_class($model)."':  }
					
complete: function () {
$(\"#rrhh-contratos-list ul\").sortable({
	update: function() {
		var that = $(this);
		$(\".loading\").html('<i class=\"fa fa-refresh fa-spin\"></i>');
		setTimeout(function () {
        	var order = that.sortable(\"toArray\");
	        $.post('".$this->createUrl('contratos/order')."', {order: order}, function(datos){
    			$('.loading').empty();
	        });
		},500);
    }
});
},

				});
				$('#rrhh-contratos-modal').modal('hide');
				return false;
			}
			return false;
		}",
	),
)); ?>

<div class="row">
	<div class="pln col-lg-6">

<div class="form-group">
	<?php echo $form->labelEx($model,'tipo_contrato',array('class'=>'control-label')); ?>
	<?php echo $form->dropDownList($model,'tipo_contrato',RrhhTipoContrato::listData(),array('empty'=>Yii::t('app','Select ...'),'class'=>'form-control')); ?>
	<?php echo $form->error($model,'tipo_contrato',array('class'=>'help-block')); ?>
</div>
<div class="form-group">
	<?php echo $form->labelEx($model,'fecha_inicio',array('class'=>'control-label')); ?>
	<?php echo $this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'model' => $model,
				'attribute' => 'fecha_inicio',
				'language' =>  Yii::app()->language,
				'htmlOptions' => array('class'=>'form-control'),
				'options' => array(
					'showButtonPanel' => true,
					'changeYear' => true,
					'dateFormat' => 'yy-mm-dd',
				),
			),true); ?>
	<?php echo $form->error($model,'fecha_inicio',array('class'=>'help-block')); ?>
</div>
<div class="form-group">
	<?php echo $form->labelEx($model,'fecha_terminacion',array('class'=>'control-label')); ?>
	<?php echo $this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'model' => $model,
				'attribute' => 'fecha_terminacion',
				'language' =>  Yii::app()->language,
				'htmlOptions' => array('class'=>'form-control'),
				'options' => array(
					'showButtonPanel' => true,
					'changeYear' => true,
					'dateFormat' => 'yy-mm-dd',
				),
			),true); ?>
	<?php echo $form->error($model,'fecha_terminacion',array('class'=>'help-block')); ?>
</div>
<div class="form-group">
	<?php echo $form->labelEx($model,'duracion',array('class'=>'control-label')); ?>
	<?php echo $this->widget('ext.inputs.counter.GTextfield',array(
					'model'=>$model,
					'attribute'=>'duracion',
					'allowed' => 11,
					'htmlOptions' => array('class'=>'form-control'),
				),true); ?>
	<?php echo $form->error($model,'duracion',array('class'=>'help-block')); ?>
</div>
<div class="form-group">
	<?php echo $form->labelEx($model,'valor_salario',array('class'=>'control-label')); ?>
	<?php echo $form->textField($model,'valor_salario',array('class'=>'form-control')); ?>
	<?php echo $form->error($model,'valor_salario',array('class'=>'help-block')); ?>
</div>
<div class="form-group">
	<?php echo $form->labelEx($model,'fecha_preaviso',array('class'=>'control-label')); ?>
	<?php echo $this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'model' => $model,
				'attribute' => 'fecha_preaviso',
				'language' =>  Yii::app()->language,
				'htmlOptions' => array('class'=>'form-control'),
				'options' => array(
					'showButtonPanel' => true,
					'changeYear' => true,
					'dateFormat' => 'yy-mm-dd',
				),
			),true); ?>
	<?php echo $form->error($model,'fecha_preaviso',array('class'=>'help-block')); ?>
</div>
	</div>
	<div class="pln prn col-lg-6">
<div class="form-group">
	<?php echo $form->labelEx($model,'estado',array('class'=>'control-label')); ?>
	<?php echo $form->checkBox($model,'estado'); ?>
	<?php echo $form->error($model,'estado',array('class'=>'help-block')); ?>
</div>
<div class="form-group">
	<?php echo $form->labelEx($model,'observacion',array('class'=>'control-label')); ?>
	<?php echo $this->widget('ext.inputs.counter.GTextfield',array(
					'model'=>$model,
					'attribute'=>'observacion',
					'allowed' => 100,
					'htmlOptions' => array('class'=>'form-control'),
				),true); ?>
	<?php echo $form->error($model,'observacion',array('class'=>'help-block')); ?>
</div>


<div class="form-group">
    <?php echo $form->labelEx($model,'rrhh_centro_costo_id',array('class'=>'control-label')); ?>
    <?php echo $form->dropDownList($model,'rrhh_centro_costo_id',RrhhCentroCosto::listData(),array('empty'=>Yii::t('app','Select ...'),'class'=>'form-control',
    	'ajax'=>array(
             	'type'=>'POST',
             	'url'=>$this->createUrl('selectpuntos'),
             	'update'=>'#'.CHtml::activeId($model,'rrhh_punto_operacion_id'),
             	))); ?>
    <?php echo $form->error($model,'rrhh_centro_costo_id',array('class'=>'help-block')); ?>
</div>

<div class="form-group">
    <?php echo $form->labelEx($model,'rrhh_punto_operacion_id',array('class'=>'control-label')); ?>
    <?php echo $this->widget('ext.inputs.select2.ESelect2',array(
            'model'=>$model,
            'attribute'=>'rrhh_punto_operacion_id',
            'data'=>array(
                
            ),
            // 'data'=>UsersUsers::listData(),
            'htmlOptions'=>array('class'=>'form-control'),
        ),true)?>
    <?php echo $form->error($model,'rrhh_punto_operacion_id',array('class'=>'help-block')); ?>
</div>


<div class="form-group">
	<?php echo $form->labelEx($model,'rrhh_perfil_id',array('class'=>'control-label')); ?>
	<?php echo $form->dropDownList($model,'rrhh_perfil_id',RrhhPerfil::listData(),array('empty'=>Yii::t('app','Select ...'),'class'=>'form-control')); ?>
	<?php echo $form->error($model,'rrhh_perfil_id',array('class'=>'help-block')); ?>
</div>
<div class="form-group">
	<?php echo $form->labelEx($model,'contrato_firmado_en_pdf',array('class'=>'control-label')); ?>
	<?php echo $this->widget('ext.inputs.uploader.GUpload', array(
			    'model' => $model,
			    'attribute' => 'contrato_firmado_en_pdf',
			    // Put this same array extensions allowed in your upload action
		        'iconButtom' => 'fa-cloud-upload',
		        'allowedExtensions' => array('png','jpg','jpeg','csv','xls','xlsx','doc','docx','pdf','rar','zip','txt','mp4','mp3','mov','swf'),
			    'actionUrl' => $this->createUrl('upload'),
			),true); ?>
	<?php echo $form->error($model,'contrato_firmado_en_pdf',array('class'=>'help-block')); ?>
</div>
	</div>
</div>

<div class="modal-footer">
	<button type="button" class="btn default" data-dismiss="modal"><?php echo Yii::t('app','Cancel')?></button>
	<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('app','Create') : Yii::t('app','Save'),array('class'=>'rrhh-contratos-submit btn btn-primary btn-large')); ?>
</div>
<?php $this->endWidget(); ?>
