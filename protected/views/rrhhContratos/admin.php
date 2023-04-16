<?php
/* @var $this RrhhContratosController */
/* @var $model RrhhContratos */
/*
$this->breadcrumbs = array(
    'Rrhh Contratoses' => array('index'),
    'Manage',
);
*/
Yii::app()->params['IDGridview'] = 'rrhh-contratos-grid';
Yii::app()->params['rutaUrlGridviewBoxSwitch'] = Yii::app()->controller->createUrl('UpdateActive');

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#rrhh-contratos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="row">
    <div class="col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Contratos</h1>  
                <br />
                <div class="content">
                    <?php echo CHtml::link('Crear', array('rrhhContratos/create'), array('class' => 'btn btn-square btn-info')); ?>                      
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
                    
                        <?php
                        $this->widget('zii.widgets.grid.CGridView', array(
                            'id' => 'rrhh-contratos-grid',
                            'dataProvider' => $model->search(),
                            'filter' => $model,
                            'columns' => array(
                                'id',
                                'tipo_contrato',
                                'fecha_inicio',
                                'fecha_terminacion',
                                'duracion',
                                'valor_salario',
                                /*
                                  'fecha_preaviso',
                                  'estado_preaviso',
                                  'estado',
                                  'observacion',
                                  'conteo',
                                  'rrhh_centro_costo_id',
                                  'rrhh_punto_operacion_id',
                                  'rrhh_perfil_id',
                                  'rrhh_datos_empleado_id',
                                  'contrato_firmado_en_pdf',
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
                                    'urlExpression' => 'Yii::app()->controller->createUrl("delete",array("id"=>$data->id))',
                                //'visible' => Yii::app()->authRBAC->checkAccess($this->modulo . '_delete')
                                ),
                            ),
                        ));
                        ?>
                   
                </div>
            </div>
        </div>
    </div>
</div>

