<?php
/* @var $this AddressBookController */
/* @var $data AddressBook */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('typ')); ?>:</b>
	<?php echo CHtml::encode($data->typ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('home_address')); ?>:</b>
	<?php echo CHtml::encode($data->home_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('photo_name')); ?>:</b>
	<?php echo CHtml::encode($data->photo_name); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fax')); ?>:</b>
	<?php echo CHtml::encode($data->fax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('website')); ?>:</b>
	<?php echo CHtml::encode($data->website); ?>
	<br />

	*/ ?>

</div>