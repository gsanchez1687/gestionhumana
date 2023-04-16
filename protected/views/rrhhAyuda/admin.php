<?php
/* @var $this RrhhayudaController */
/* @var $model RrhhAyuda */
 
$this->breadcrumbs=array(
	Yii::t('app','Update'),
);
?>

<div class="col-lg-12">
<?php foreach(Yii::app()->user->getFlashes() as $type => $message):?>
  <div class="alert alert-<?php echo $type?>">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <?php echo $message?>
  </div>
<?php endforeach;?>

<section class="panel">
    <div class="panel-body minimal">
        <div class="table-inbox-wrap ">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rrhh-ayuda-form',
	'htmlOptions'=>array("class"=>"","role"=>"form"),
	'enableAjaxValidation'=>true,
    'clientOptions'=>array('validateOnSubmit'=>true),
)); ?>
	<div class="col-lg-12">
	<?php echo $form->errorSummary($model,null,null,array('class'=>'alert alert-danger')); ?>

    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Comandos para plantillas
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
              <div class="row">
    <div class="col-lg-2">


    </div>
    <div class="col-lg-8">
    <div class="table-responsive">
        <table class="table table-bordered table-striped"> 
        <colgroup> <col class="col-xs-1"> <col class="col-xs-7"> 
        </colgroup> 

        <thead>
        <tr>
         <th class="success"></th>
         <th class="success">Sociedad</th> 
        </tr> 
        <tr>
         <th>Comando</th>
         <th>Descripción</th> 
        </tr> 
        </thead> 

        <tbody>
           
             <tr> 
                 <th scope="row"> 
                 <code>${s1}</code> 
                 </th> 
                 <td>Nombre de la razon social</td> 
            </tr> 
            <tr>
               <th scope="row">
               <code>${s2}</code> 
               </th> 
               <td>Nit </td> 
            </tr> 
            <tr>
                <th scope="row"> 
               <code>${s3}</code> 
                </th> 
                <td>Ciudad </td>
            </tr>
            <tr>
                   <th scope="row"> 
                   <code>${s4}</code> 
                   </th> 
                    <td>Direccion </td>
            </tr> 
            <tr> 
                 <th scope="row"> 
                 <code>${s5}</code> 
                 </th> 
                 <td>Telefono </td>
            </tr> 
            
        </tbody> 
        </table> 
       </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped"> 
        <colgroup> <col class="col-xs-1"> <col class="col-xs-7"> 
        </colgroup> 

        <thead>
        <tr>
         <th class="success"></th>
         <th class="success">Punto de operación</th> 
        </tr> 
        <tr>
         <th>Comando</th>
         <th>Descripción</th> 
        </tr> 
        </thead> 

        <tbody>
           
             <tr> 
                 <th scope="row"> 
                 <code>${p1}</code> 
                 </th> 
                 <td>Nombre </td> 
            </tr> 
            <tr>
               <th scope="row">
               <code>${p2}</code> 
               </th> 
               <td>Ciudad </td> 
            </tr> 
            <tr>
                <th scope="row"> 
               <code>${p3}</code> 
                </th> 
                <td>Dirección</td>
            </tr>
            <tr>
                <th scope="row"> 
               <code>${p4}</code> 
                </th> 
                <td>Telefono</td>
            </tr>
            <tr>
               <th scope="row"> 
               <code>${p5}</code> 
               </th> 
                <td>Descripción</td>
            </tr> 
           
        </tbody> 
        </table> 
       </div>
       <div class="table-responsive">
        <table class="table table-bordered table-striped"> 
        <colgroup> <col class="col-xs-1"> <col class="col-xs-7"> 
        </colgroup> 

        <thead>
         <tr>
         <th class="success"></th>
         <th class="success">Empleado</th> 
        </tr> 
        <tr>
         <th>Comando</th>
         <th>Descripción</th> 
        </tr> 
        </thead> 

        <tbody>
           
             <tr> 
                 <th scope="row"> 
                 <code>${e1}</code> 
                 </th> 
                 <td>Nombre </td> 
            </tr> 
            <tr>
               <th scope="row">
               <code>${e2}</code> 
               </th> 
               <td>Tipo documento </td> 
            </tr> 
            <tr>
                <th scope="row"> 
               <code>${e3}</code> 
                </th> 
                <td>Numero documento</td>
            </tr>
            <tr>
                   <th scope="row"> 
                   <code>${e4}</code> 
                   </th> 
                    <td>Lugar expedición</td>
            </tr> 
            <tr> 
                 <th scope="row"> 
                 <code>${e5}</code> 
                 </th> 
                 <td>Lugar nacimiento</td>
            </tr> 
             <tr>
                <th scope="row"> 
               <code>${e6}</code> 
                </th> 
                <td>Lugar residencia</td>
            </tr>
            <tr>
                   <th scope="row"> 
                   <code>${e7}</code> 
                   </th> 
                    <td>Dirección</td>
            </tr> 
            <tr> 
                 <th scope="row"> 
                 <code>${e8}</code> 
                 </th> 
                 <td>Telefono fijo</td>
            </tr> 
              <tr>
                <th scope="row"> 
               <code>${e9}</code> 
                </th> 
                <td>Telefono celular</td>
            </tr>
            <tr>
                   <th scope="row"> 
                   <code>${e10}</code> 
                   </th> 
                    <td>Mail personal</td>
            </tr> 
            <tr> 
                 <th scope="row"> 
                 <code>${e11}</code> 
                 </th> 
                 <td>Mail corporativo</td>
            </tr> 
              <tr>
                <th scope="row"> 
               <code>${e12}</code> 
                </th> 
                <td>Fecha nacimiento</td>
            </tr>
            <tr>
                   <th scope="row"> 
                   <code>${e13}</code> 
                   </th> 
                    <td>Estado civil</td>
            </tr> 
            <tr> 
                 <th scope="row"> 
                 <code>${e14}</code> 
                 </th> 
                 <td>Eps</td>
            </tr> 
             <tr> 
                 <th scope="row"> 
                 <code>${e15}</code> 
                 </th> 
                 <td>Fondo de pensiones</td>
            </tr> 
             <tr> 
                 <th scope="row"> 
                 <code>${e16}</code> 
                 </th> 
                 <td>Cesantias</td>
            </tr> 
             <tr> 
                 <th scope="row"> 
                 <code>${e17}</code> 
                 </th> 
                 <td>Arl</td>
            </tr> 
             <tr> 
                 <th scope="row"> 
                 <code>${e18}</code> 
                 </th> 
                 <td>Caja de conpensación</td>
            </tr> 
             <tr> 
                 <th scope="row"> 
                 <code>${e19}</code> 
                 </th> 
                 <td>Escolaridad</td>
            </tr> 
             <tr> 
                 <th scope="row"> 
                 <code>${e20}</code> 
                 </th> 
                 <td>Cargo</td>
            </tr> 
        </tbody> 
        </table> 
       </div>
       <div class="table-responsive">
        <table class="table table-bordered table-striped"> 
        <colgroup> <col class="col-xs-1"> <col class="col-xs-7"> 
        </colgroup> 

        <thead>
        <tr>
         <th class="success"></th>
         <th class="success">Contrato</th> 
        </tr> 
        <tr>
         <th>Comando</th>
         <th>Descripción</th> 
        </tr> 
        </thead> 

        <tbody>
           
             <tr> 
                 <th scope="row"> 
                 <code>${c1}</code> 
                 </th> 
                 <td>Tipo contrato</td> 
            </tr> 
            <tr>
               <th scope="row">
               <code>${c2}</code> 
               </th> 
               <td>Fecha inicio</td> 
            </tr> 
            <tr>
                <th scope="row"> 
               <code>${c3}</code> 
                </th> 
                <td>Fecha terminación</td>
            </tr>
            <tr>
                   <th scope="row"> 
                   <code>${c4}</code> 
                   </th> 
                    <td>Valor salario</td>
            </tr> 
            <tr> 
                 <th scope="row"> 
                 <code>${c5}</code> 
                 </th> 
                 <td>Duración </td>
            </tr> 
            
        </tbody> 
        </table> 
       </div>

    </div>


    <div class="col-lg-2">


    </div>
</div>


      </div>
    </div>
  </div>
 
  
</div>











    </div>
<?php $this->endWidget(); ?>
        </div>
    </div>
</section>

</div>
