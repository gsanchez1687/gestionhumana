<?php
/* @var $this RrhhNotificationsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rrhh Notifications',
);

$this->menu=array(
	array('label'=>'Create RrhhNotifications', 'url'=>array('create')),
	array('label'=>'Manage RrhhNotifications', 'url'=>array('admin')),
);
?>

<h1>Rrhh Notifications</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
