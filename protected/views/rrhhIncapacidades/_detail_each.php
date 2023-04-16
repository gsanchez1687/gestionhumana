<?php
/* @var $this RrhhincapacidadesController */
/* @var $data RrhhIncapacidades */
?>
<li class="list-group-item cursor-move" id="<?php echo $index."-".$data->id?>">
	<div class="row">	
    <div class="col-lg-7 pls">
<div class="col-lg-4 pln prn">
      <?php echo CHtml::image($data->imgen_path,'',array('class'=>'img-responsive img-thumbnail','style'=>'width:100%'));?>
<?php // if($data->calcular_por):?>
        <?php // echo '<span class="label label-success">Calcular Por '.Yii::t('app','Enabled').'</span>';?>
        <?php // else:?>
        <?php  //echo '<span class="label label-danger">Calcular Por '.Yii::t('app','Disabled').'</span>';?>
        <?php  //endif;?>
</div>
<div class="col-lg-8">
    
	

	
	<?php echo CHtml::encode($data->origen_licencias); ?>
	<br />



	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('origen_licencias')); ?>:</b>
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), '#'); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_inicio')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_inicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_fin')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_fin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calcular_por')); ?>:</b>
	<?php echo CHtml::encode($data->calcular_por); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tiempo')); ?>:</b>
	<?php echo CHtml::encode($data->tiempo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observacion')); ?>:</b>
	<?php echo CHtml::encode($data->observacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imgen')); ?>:</b>
	<?php echo CHtml::encode($data->imgen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rrhh_datos_empleado_id')); ?>:</b>
	<?php echo CHtml::encode($data->rrhh_datos_empleado_id); ?>
	<br />

	*/ ?>
</div>
    
    </div>
    <div class="col-lg-5">
        <?php echo CHtml::link('<i class="fa fa-pencil"></i>', array('rrhhincapacidades/update', 'id'=>$data->id, 'rrhh_datos_empleado_id'=>$data->rrhh_datos_empleado_id),
                    array('class'=>'btn btn-primary mls pull-right','data-action'=>'crud-rrhhincapacidades','data-type'=>'update','data-name'=>$data->id)); ?>  
        <?php echo CHtml::link('<i class="fa fa-eye"></i>', array('rrhhincapacidades/view', 'id'=>$data->id, 'rrhh_datos_empleado_id'=>$data->rrhh_datos_empleado_id),
                    array('class'=>'btn btn-default mls pull-right','data-action'=>'crud-rrhhincapacidades','data-type'=>'view','data-name'=>$data->id)); ?>
        <?php echo CHtml::link('<i class="fa fa-trash-o"></i>', array('rrhhincapacidades/delete', 'id'=>$data->id),
            		array('class'=>'btn btn-default pull-right','data-action'=>'crud-rrhhincapacidades', 'data-type'=>'delete','data-name'=>$data->id)); ?>    </div>
    </div>

</li>