<?php
/* @var $this ContactController */
/* @var $model Contact */
/* @var $form CActiveForm */
?>

<div class="form form-horizontal">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<div>
		<?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'name', array('class' => 'col-sm-2 control-label')); ?>
	    <div class="col-sm-10">
			<?php echo $form->textField($model,'name', array('size'=>32,'maxlength'=>255, 'class' => 'form-control')); ?>
	    </div>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'email', array('class' => 'col-sm-2 control-label')); ?>
	    <div class="col-sm-10">
			<?php echo $form->textField($model,'email', array('size'=>32,'maxlength'=>120, 'class' => 'form-control')); ?>
	    </div>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'phone', array('class' => 'col-sm-2 control-label')); ?>
	    <div class="col-sm-10">
			<?php echo $form->textField($model,'phone', array('size'=>32,'maxlength'=>32, 'class' => 'form-control')); ?>
	    </div>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'typ', array('class' => 'col-sm-2 control-label', 'label' => 'Type')); ?>
	    <div class="col-sm-10">
			<?php echo $form->dropDownList($model,'typ', array('P' => 'Personal', 'B' => 'Business'), array('size'=>1,'maxlength'=>1, 'class' => 'select-type form-control')); ?>
	    </div>
		<?php echo $form->error($model,'typ'); ?>
	</div>

	<div class="form-group hide-it form-home-address">
		<?php echo $form->labelEx($model,'home_address', array('class' => 'col-sm-2 control-label')); ?>
	    <div class="col-sm-10">
			<?php echo $form->textField($model,'home_address', array('size'=>32,'maxlength'=>255, 'class' => 'form-control')); ?>
	    </div>
		<?php echo $form->error($model,'home_address'); ?>
	</div>

	<div class="form-group hide-it form-photo">
		<?php echo $form->labelEx($model,'photo_name', array('class' => 'col-sm-2 control-label')); ?>
	    <div class="col-sm-10">
			/images/ <?php echo $form->textField($model,'photo_name', array('size'=>32,'maxlength'=>120, 'class' => 'form-control')); ?>
	    </div>
		<?php echo $form->error($model,'photo_name'); ?>
	</div>

	<div class="form-group hide-it form-fax">
		<?php echo $form->labelEx($model,'fax', array('class' => 'col-sm-2 control-label')); ?>
	    <div class="col-sm-10">
			<?php echo $form->textField($model,'fax', array('size'=>32,'maxlength'=>32, 'class' => 'form-control')); ?>
	    </div>
		<?php echo $form->error($model,'fax'); ?>
	</div>

	<div class="form-group hide-it form-website">
		<?php echo $form->labelEx($model,'website', array('class' => 'col-sm-2 control-label')); ?>
	    <div class="col-sm-10">
			<?php echo $form->textField($model,'website', array('size'=>32,'maxlength'=>120, 'class' => 'form-control')); ?>
	    </div>
		<?php echo $form->error($model,'website'); ?>
	</div>

	<div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-success')); ?>
	    </div>

	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->