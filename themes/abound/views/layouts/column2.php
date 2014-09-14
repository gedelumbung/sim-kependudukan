<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

  <div class="row-fluid">
    <div class="span9">
    
    <?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
            'links'=>$this->breadcrumbs,
			'homeLink'=>CHtml::link('Dashboard'),
			'htmlOptions'=>array('class'=>'breadcrumb')
        )); ?><!-- breadcrumbs -->
    <?php endif?>
    
    <!-- Include content pages -->
    <?php echo $content; ?>

	</div><!--/span-->
  
  <div class="span3">
    <div class="sidebar-nav">
      <div class="portlet">
        <div class="portlet-decoration">
          <div class="portlet-title">
            <i class="icon icon-wrench"></i> MANAGE DATA
          </div>
        </div>
        <div class="portlet-content">
        
          <?php 
          $this->widget('zii.widgets.CMenu', array(
          /*'type'=>'list',*/
          'encodeLabel'=>false,
          'items'=>array(
            array('label'=>'','items'=>$this->menu),
          ),
          ));?>
        </div>
      </div>


      <div class="portlet">
        <div class="portlet-decoration">
          <div class="portlet-title">
            <i class="icon icon-wrench"></i> MANAGE DATA
          </div>
        </div>
        <div class="portlet-content">

          <?php 
          $this->widget('zii.widgets.CMenu', array(
          /*'type'=>'list',*/
          'encodeLabel'=>false,
              'items'=>array(
                  array('label'=>'<i class="icon icon-home"></i> Dashboard', 'url'=>array('/site/index')),
                  array('label'=>'<i class="icon icon-tags"></i> Data Provinsi', 'url'=>array('/provinsi')),
                  array('label'=>'<i class="icon icon-tags"></i> Data Kabupaten', 'url'=>array('/kabupaten')),
                  array('label'=>'<i class="icon icon-tags"></i> Data Kecamatan', 'url'=>array('/kecamatan')),
                  array('label'=>'<i class="icon icon-tags"></i> Data Kelurahan/Desa', 'url'=>array('/kelurahan_desa')),
                  array('label'=>'<i class="icon icon-user"></i> Data Kependudukan', 'url'=>array('/rumah_tangga')),
                  array('label'=>'<i class="icon icon-user"></i> Account', 'url'=>array('/users')),
                  array('label'=>'<i class="icon icon-bookmark"></i> Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                  array('label'=>'<i class="icon icon-bookmark"></i> Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
              ),
          ));?>
        </div>
      </div>

    </div>
    
    </div><!--/span-->
  </div><!--/row-->


<?php $this->endContent(); ?>