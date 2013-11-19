<?php
/* @var $this AddressBookController */
/* @var $model AddressBook */

$this->breadcrumbs=array(
	'Address Books'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AddressBook', 'url'=>array('index')),
	array('label'=>'Create AddressBook', 'url'=>array('create')),
	array('label'=>'View AddressBook', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AddressBook', 'url'=>array('admin')),
);
?>

<h1>Update AddressBook <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>