<?php
/* @var $this RrhhveneficiosextralegalesController */
/* @var $data RrhhVeneficiosExtralegales */
?>
<li class="list-group-item cursor-move" id="<?php echo $index."-".$data->id?>">
	<div class="row">	
    <div class="col-lg-7 pls">
<div class="col-lg-4 pln prn">
</div>
<div class="col-lg-8">
    
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), '#'); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('valor')); ?>:</b>
	<?php echo CHtml::encode($data->valor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rrhh_datos_empleado_id')); ?>:</b>
	<?php echo CHtml::encode($data->rrhh_datos_empleado_id); ?>
	<br />

	*/ ?>
</div>
    
    </div>
    <div class="col-lg-5">
        <?php echo CHtml::link('<i class="fa fa-pencil"></i>', array('rrhhveneficiosextralegales/update', 'id'=>$data->id, 'rrhh_datos_empleado_id'=>$data->rrhh_datos_empleado_id),
                    array('class'=>'btn btn-primary mls pull-right','data-action'=>'crud-rrhhveneficiosextralegales','data-type'=>'update','data-name'=>$data->id)); ?>  
        <?php #echo CHtml::link('<i class="fa fa-eye"></i>', array('rrhhveneficiosextralegales/view', 'id'=>$data->id, 'rrhh_datos_empleado_id'=>$data->rrhh_datos_empleado_id),
                    #array('class'=>'btn btn-default mls pull-right','data-action'=>'crud-rrhhveneficiosextralegales','data-type'=>'view','data-name'=>$data->id)); ?>
        <?php echo CHtml::link('<i class="fa fa-trash-o"></i>', array('rrhhveneficiosextralegales/delete', 'id'=>$data->id),
            		array('class'=>'btn btn-default pull-right','data-action'=>'crud-rrhhveneficiosextralegales', 'data-type'=>'delete','data-name'=>$data->id)); ?>    </div>
    </div>

</li>