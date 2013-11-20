<?php
/* @var $this ContactController */
/* @var $model Contact */

$this->breadcrumbs=array(
	'Contacts'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Contact', 'url'=>array('index')),
	array('label'=>'Create Contact', 'url'=>array('create')),
	array('label'=>'Update Contact', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Contact', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Contact', 'url'=>array('admin')),
);
?>

<h1>View Contact #<?php echo $model->id; ?></h1>

<?php 

$att = array('id', 'name', 'email', 'phone');

// For business, show only Business fields
if ($model->typ == 'B')
{
	// $att[] = 'fax';
	// $att[] = 'website';
	$popupDetails = <<<DET

	<tr>
		<td>Fax:</td>
		<td>{$model->fax}</td>
	</tr>

	<tr>
		<td>Website:</td>
		<td>{$model->website}</td>
	</tr>

DET;
}
else
{
	// $att[] = 'home_address';
	// $att[] = 'photo_name';

	$photo = !empty($model->photo_name) ? '<img src="'. Yii::app()->request->baseUrl . '/images/' . $model->photo_name . '" alt="" />' : '';
	$popupDetails = <<<DET

	<tr>
		<td>Home Address:</td>
		<td>{$model->home_address}</td>
	</tr>

	<tr>
		<td>Photo:</td>
		<td>{$photo}</td>
	</tr>

DET;
}

$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class' => 'table table-hover'),
	'attributes'=> $att,
)); ?>

<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Contact Details</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Contact Details</h4>
      </div>
      <div class="modal-body">

	      <table class="table">
	      	<tbody>
			<?php echo $popupDetails ?>
			</tbody>
	      </table>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->