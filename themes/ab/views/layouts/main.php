<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" media="screen, projection">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo $this->createUrl('site/index'); ?>"><?php echo CHtml::encode(Yii::app()->name); ?></a>
        </div>

        <div class="collapse navbar-collapse">
        	<?php 

          $this->widget('zii.widgets.CMenu',array(
    			'items'=>array(
    				array('label'=>'Home', 'url'=>array('/site/index')),
    				array('label'=>'My Contacts', 'url'=>array('/contact/index', 'view'=>'contacts'), 'visible'=>!Yii::app()->user->isGuest),
    				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
    				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),

    			),
          'htmlOptions' => array( 'class' => 'nav navbar-nav' )
		)); ?>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div><!-- /.navbar -->

    <div class="container">

		<?php if(isset($this->breadcrumbs)):?>
			<?php $this->widget('zii.widgets.CBreadcrumbs', array(
				'links'=>$this->breadcrumbs,
        'htmlOptions' => array( 'class' => 'breadcrumb' )
			)); ?><!-- breadcrumbs -->
		<?php endif?>


		<?php echo $content; ?>


      <hr>

      <footer>
        <p>&copy;  <?php echo date('Y'); ?> by <?php echo CHtml::encode(Yii::app()->name); ?>.<br/> All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?></p>
      </footer>

    </div><!--/.container-->



	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/script.js"></script>

</body>
</html>