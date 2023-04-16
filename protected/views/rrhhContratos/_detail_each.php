<?php $last=RrhhContratos::model()->findAll(); ?>
<br>
<?php
   //if ($data->conteo<(count($last)-1)){ 
   if ($data->conteo<=4 && $data->conteo!=(count($last)) ){ ?>

<button class="btn btn-danger" type="button" data-toggle="collapse" data-target="#collapseExample<?=$data->conteo ?>" aria-expanded="false" aria-controls="collapseExample">
  Contrato N° <?php echo CHtml::encode($data->conteo); ?> Del <?php echo Yii::app()->format->formatShort($data->fecha_inicio) ;?> Al <?php echo Yii::app()->format->formatShort($data->fecha_terminacion) ;?> 
</button>
<?php }elseif($data->conteo<(count($last)) && $data->conteo>4 ){ ?>
<button class="btn btn-warning" type="button" data-toggle="collapse" data-target="#collapseExample<?=$data->conteo ?>" aria-expanded="false" aria-controls="collapseExample">
  Contrato N°<?php echo CHtml::encode($data->conteo); ?> Del <?php echo Yii::app()->format->formatShort($data->fecha_inicio) ;?> Al <?php echo Yii::app()->format->formatShort($data->fecha_terminacion) ;?> 
</button>
  <?php }else{ ?>
<button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseExample<?=$data->conteo ?>" aria-expanded="false" aria-controls="collapseExample">
  Contrato N°<?php echo CHtml::encode($data->conteo); ?> Del <?php echo Yii::app()->format->formatShort($data->fecha_inicio) ;?> Al <?php echo Yii::app()->format->formatShort($data->fecha_terminacion) ;?> 
</button>
  <?php } ?>

<div class="collapse" id="collapseExample<?=$data->conteo ?>">
  <div class="well">
    <?php
/* @var $this ContratosController */
/* @var $data RrhhContratos */
?>
<table class="table table-condensed">
  
  
  <?php
   if ($data->conteo<=4 && $data->conteo!=(count($last)) ){ ?>
<tr class="danger">
<?php }elseif($data->conteo<(count($last)) && $data->conteo>4 ){ ?>
<tr class="warning">
 <?php }else{ ?>
<tr class="success">
 <?php } ?>
  
  <td><b><?php echo CHtml::encode($data->getAttributeLabel('tipo_contrato')); ?></b></td>
  <td><b><?php echo CHtml::encode($data->getAttributeLabel('duracion')); ?></b></td>
  
  <td></td>
</tr>
  <tr class="success">
   
      <td class="info">
      
  <?php echo CHtml::encode($data->tipo_contrato); ?>
  <br/>
    </td>
    <td>
      
  <?php echo CHtml::encode($data->duracion); ?>
  <br />
    </td>
   
    <td>
      <?php  //echo CHtml::link('<i class="fa fa-pencil"></i>', array('contratos/update', 'id'=>$data->id, 'rrhh_datos_empleado_id'=>$data->rrhh_datos_empleado_id),
             //        array('class'=>'btn btn-primary mls pull-right','data-action'=>'crud-contratos','data-type'=>'update','data-name'=>$data->id)); ?>  
        <?php  //echo CHtml::link('<i class="fa fa-eye"></i>', array('contratos/view', 'id'=>$data->id, 'rrhh_datos_empleado_id'=>$data->rrhh_datos_empleado_id),
               //      array('class'=>'btn btn-default mls pull-right','data-action'=>'crud-contratos','data-type'=>'view','data-name'=>$data->id)); ?>
        <?php // echo CHtml::link('<i class="fa fa-trash-o"></i>', array('contratos/delete', 'id'=>$data->id),
               // array('class'=>'btn btn-default pull-right','data-action'=>'crud-contratos', 'data-type'=>'delete','data-name'=>$data->id)); ?>  
    </td>
  </tr>
  <tr>
    <td>
     Plantiila del contrato
    </td>
    <td>
      <?php if (!empty($data->rrhhPerfil->formato_contrato)):
$contrato=$data->rrhhPerfil->formato_contrato_path;
 ?>
  <a href="<?php echo Yii::app()->controller->createUrl("word",array("id"=>$data->rrhh_datos_empleado_id,'iddoc'=>$contrato,"idContrato"=>$data->id,"nombre"=>'Contrato'))?>"><i class="fa fa-file-word-o"></i></a>
<?php endif; ?>
    </td>


  </tr>
  <tr>
   <td>
    Ficha de ingreso
   </td>
   <td>
    <a href="<?php echo Yii::app()->controller->createUrl("pdf",array("id"=>$data->rrhh_datos_empleado_id,"idContrato"=>$data->id,'idcentro'=>$data->rrhh_centro_costo_id,"idperfil"=>$data->rrhh_perfil_id))?>">Ficha_Ingreso</a>
  
   </td>
  </tr>
  <tr>
   <td>
    Contrato firmado
   </td>
   <td>
    <?php 
  if(!empty($data->contrato_firmado_en_pdf)) {
    echo CHtml::link('<i style="font-size:1em" class="fa fa-download"></i>',$data->contrato_firmado_en_pdf_path,array('class'=>'mhl mvl'));


  }

  ?>
   </td>
  </tr>

</table>

    <?php 

    
     
     ?>

  

 
  </div>
</div>