<?php
/* @var $this AddressBookController */
/* @var $model AddressBook */

$this->breadcrumbs=array(
	'Address Books'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List AddressBook', 'url'=>array('index')),
	array('label'=>'Create AddressBook', 'url'=>array('create')),
	array('label'=>'Update AddressBook', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AddressBook', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AddressBook', 'url'=>array('admin')),
);
?>

<h1>View AddressBook #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'email',
		'phone',
		'typ',
		'home_address',
		'photo_name',
		'fax',
		'website',
	),
)); ?>
