<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>


<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/img1.png" alt="First slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>Welcome to <?php echo CHtml::encode(Yii::app()->name); ?>.</h1>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/img2.png" alt="First slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>Get in touch.</h1>
        </div>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div><!-- /.carousel -->
