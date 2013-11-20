<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
);
?>

<div class="container">

	<div class="row form-horizontal">

		<div class="col-sm-4 col-sm-offset-4">

    <h2 class="form-signin-heading">Login</h2>
    <p>Please fill out the following form with your login credentials:</p>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<div>
		<?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-danger')); ?>
	</div>


	<div class="row">
		<?php echo $form->textField($model,'username', array('class' => 'form-control', 'placeholder' => "Username")); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password', array('class' => 'form-control', 'placeholder' => "Password")); ?>
		<?php echo $form->error($model,'password'); ?>
		<p class="hint">
			Hint: You may login with <kbd>admin</kbd>/<kbd>admin</kbd>.
		</p>
	</div>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Login', array('class' => 'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>
			
		</div>

	</div>
</div><!-- form -->
