<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

<div class="container">
  
  <div class="row">
    
    <div class="col-sm-9">

      <?php echo $content; ?>

    </div>

    <div class="col-sm-3">
      
      <?php
        $this->beginWidget('zii.widgets.CPortlet', array(
          'title'=>'Operations',
        ));
        $this->widget('zii.widgets.CMenu', array(
          'items'=>$this->menu,
          'htmlOptions'=>array('class'=>'nav nav-pills nav-stacked'),
        ));
        $this->endWidget();
      ?>

    </div>

  </div>
</div>
<?php $this->endContent(); ?>