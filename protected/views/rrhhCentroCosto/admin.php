<?php
/* @var $this RrhhCentroCostoController */
/* @var $model RrhhCentroCosto */
/*
$this->breadcrumbs=array(
	'Rrhh Centro Costos'=>array('index'),
	'Manage',
);
*/

Yii::app()->params['IDGridview'] = 'rrhh-centro-costo-grid';
Yii::app()->params['rutaUrlGridviewBoxSwitch'] = Yii::app()->controller->createUrl('UpdateActive');

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#rrhh-centro-costo-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<?php foreach(Yii::app()->user->getFlashes() as $type => $message):?>
  <div class="alert alert-<?php echo $type?>">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <?php echo $message?>
  </div>
<?php endforeach;?>

<div class="row">
    <div class="col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Centro de Costos <!--<small>Admin Centro de Costos</small>--></h1>
                <br />
                <div class="content">
                	<?php echo CHtml::link('Crear', array('rrhhCentroCosto/create'), array('class' => 'btn btn-square btn-info')); ?>
                    <?php //echo CHtml::link('excel', array(''), array('class' => 'btn btn-square btn-info')); ?>
                </div>
                <div class="menu-tool">

                    <div class="pagesize">
                        <?php $dataProvider = $this->PageSize(Yii::app()->params['IDGridview'], $model->search()); ?>
                    </div>

                </div>
                <div class="actions pull-right">
                    <i class="fa fa-expand"></i>
                    <i class="fa fa-chevron-down"></i>
                    <i class="fa fa-times"></i>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                   <?php $this->widget('zii.widgets.grid.CGridView', array(
                            'id'=>'rrhh-centro-costo-grid',
                            'dataProvider'=>$model->search(),
                            'filter'=>$model,
                            'columns'=>array(
                                    'id',
                                    'nit',
                                    'razon_social',
                                    'direccion',
                                    'telefono',
                                    'ciudad',
                                    /*
                                    'orden_id',
                                    */
                                    array(
                                          'class' => 'CLinkColumn',
                                          'header' => Yii::app()->params['view-text'],
                                          'label' => Yii::app()->params['view-icon'],
                                          'linkHtmlOptions' => array('class' => 'view ' . Yii::app()->params['view-btn']),
                                          'urlExpression' => 'Yii::app()->controller->createUrl("view",array("id"=>$data->id))',
                                          //'visible' => Yii::app()->authRBAC->checkAccess($this->modulo . '_view')
                                        ),
                                    array(
                                          'class' => 'CLinkColumn',
                                          'header' => Yii::app()->params['update-text'],
                                          'label' => Yii::app()->params['update-icon'],
                                          'linkHtmlOptions' => array('class' => 'edit ' . Yii::app()->params['update-btn']),
                                          'urlExpression' => 'Yii::app()->controller->createUrl("update",array("id"=>$data->id))',
                                           //'visible' => Yii::app()->authRBAC->checkAccess($this->modulo . '_update')
                                        ),
                                    array(
                                          'class' => 'CLinkColumn',
                                          'header' => Yii::app()->params['delete-text'],
                                          'label' => Yii::app()->params['delete-icon'],
                                          'linkHtmlOptions' => array('class' => 'delete ' . Yii::app()->params['delete-btn']),
                                          'htmlOptions' => array('onclick' => "return confirm('Está seguro de eliminar el Registro?')"),
                                          'urlExpression' => 'Yii::app()->controller->createUrl("delete",array("id"=>$data->id)) ',
                                           //'visible' => Yii::app()->authRBAC->checkAccess($this->modulo . '_delete')
																					 //return confirm('Está seguro de eliminar el Registro?')
                                    ),
                            ),
                    )); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Yii::app()->controller->createUrl("delete",array("id"=>$data->id)) -->
<script language="javascript" type="text/javascript">
        function beforeDelete(grid_id)
        {
					var keyId = $.fn.yiiGridView.getSelection(grid_id);
	        keyId  = keyId[0];
					alert(keyId);
            <?php
						echo CHtml::ajax(array(
		            'url'=>Yii::app()->controller->createUrl("validateModelBeforeDelete",array("id"=>"js: idRow")),
		            'data'=>array('id'=>'js: idRow'),
		            'type'=>'GET',
		            'dataType'=> 'json',
		            'success'=> "function(data) { alert(data) }"
		        ));
            ?>
        }
</script>
