<?php
/* @var $this ContactController */
/* @var $data Contact */
?>

<tr>
	<td><?php echo CHtml::encode($data->id); ?></td>
	<td><?php echo CHtml::encode($data->name); ?></td>
	<td><?php echo CHtml::encode($data->email); ?></td>
	<td><?php echo CHtml::encode($data->phone); ?></td>
	<td><?php echo str_replace(array('B', 'P'), array('Business', 'Personal'), CHtml::encode($data->typ)); ?></td>
	<td><?php echo CHtml::link('View', array('view', 'id'=>$data->id)); ?></td>
</tr>
