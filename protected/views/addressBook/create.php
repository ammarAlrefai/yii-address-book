<?php
/* @var $this AddressBookController */
/* @var $model AddressBook */

$this->breadcrumbs=array(
	'Address Books'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AddressBook', 'url'=>array('index')),
	array('label'=>'Manage AddressBook', 'url'=>array('admin')),
);
?>

<h1>Create AddressBook</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>