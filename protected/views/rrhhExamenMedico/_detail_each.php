<?php
/* @var $this RrhhexamenmedicoController */
/* @var $data RrhhExamenMedico */
?>
<li class="list-group-item cursor-move" id="<?php echo $index."-".$data->id?>">
	<div class="row">	
    <div class="col-lg-7 pls">
<div class="col-lg-4 pln prn">
      <?php echo CHtml::image($data->imagen_path,'',array('class'=>'img-responsive img-thumbnail','style'=>'width:100%'));?>
<?php if($data->estado):?>
        <?php echo '<span class="label label-success">Estado '.Yii::t('app','Enabled').'</span>';?>
        <?php else:?>
        <?php echo '<span class="label label-danger">Estado '.Yii::t('app','Disabled').'</span>';?>
        <?php endif;?>
</div>
<div class="col-lg-8">
    
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), '#'); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_examen')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_examen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_proximo_examen')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_proximo_examen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imagen')); ?>:</b>
	<?php echo CHtml::encode($data->imagen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rrhh_datos_empleado_id')); ?>:</b>
	<?php echo CHtml::encode($data->rrhh_datos_empleado_id); ?>
	<br />

	*/ ?>
</div>
    
    </div>
    <div class="col-lg-5">
        <?php echo CHtml::link('<i class="fa fa-pencil"></i>', array('rrhhexamenmedico/update', 'id'=>$data->id, 'rrhh_datos_empleado_id'=>$data->rrhh_datos_empleado_id),
                    array('class'=>'btn btn-primary mls pull-right','data-action'=>'crud-rrhhexamenmedico','data-type'=>'update','data-name'=>$data->id)); ?>  
        <?php #echo CHtml::link('<i class="fa fa-eye"></i>', array('rrhhexamenmedico/view', 'id'=>$data->id, 'rrhh_datos_empleado_id'=>$data->rrhh_datos_empleado_id),
                    #array('class'=>'btn btn-default mls pull-right','data-action'=>'crud-rrhhexamenmedico','data-type'=>'view','data-name'=>$data->id)); ?>
        <?php echo CHtml::link('<i class="fa fa-trash-o"></i>', array('rrhhexamenmedico/delete', 'id'=>$data->id),
            		array('class'=>'btn btn-default pull-right','data-action'=>'crud-rrhhexamenmedico', 'data-type'=>'delete','data-name'=>$data->id)); ?>    </div>
    </div>

</li>