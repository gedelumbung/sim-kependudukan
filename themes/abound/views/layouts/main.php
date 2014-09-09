
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo Yii::app()->name; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Free yii themes, free web application theme">
    <meta name="author" content="Webapplicationthemes.com">
	<link href='http://fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<?php
	  $baseUrl = Yii::app()->theme->baseUrl; 
	  $cs = Yii::app()->getClientScript();
	  Yii::app()->clientScript->registerCoreScript('jquery');
	?>
  <style type="text/css">
  .nav-list>li>a, .nav-list .nav-header {
      margin: 0px 10px;
  }
  </style>

  <script type="text/javascript">
  $(function()
  {
      $('#wrapper') .css({'height': (($(window).height()) - 230)+'px'});

      $(window).resize(function(){
          $('#wrapper') .css({'height': (($(window).height()) - 230)+'px'});
      });
  });
  </script>
	<?php  
	  $cs->registerCssFile($baseUrl.'/css/bootstrap.min.css');
	  $cs->registerCssFile($baseUrl.'/css/bootstrap-responsive.min.css');
	  $cs->registerCssFile($baseUrl.'/css/abound.css');
      $cs->registerCssFile($baseUrl.'/css/font-awesome/css/font-awesome.min.css');
      $cs->registerCssFile($baseUrl.'/css/grid.css');
      $cs->registerCssFile($baseUrl.'/css/form.css');
	  ?>
      <!-- styles for style switcher -->
        <link rel="alternate stylesheet" type="text/css" media="screen" title="style2" href="<?php echo $baseUrl;?>/css/style-brown.css" />
        <link rel="alternate stylesheet" type="text/css" media="screen" title="style3" href="<?php echo $baseUrl;?>/css/style-green.css" />
        <link rel="alternate stylesheet" type="text/css" media="screen" title="style4" href="<?php echo $baseUrl;?>/css/style-grey.css" />
        <link rel="alternate stylesheet" type="text/css" media="screen" title="style5" href="<?php echo $baseUrl;?>/css/style-orange.css" />
        <link rel="alternate stylesheet" type="text/css" media="screen" title="style6" href="<?php echo $baseUrl;?>/css/style-purple.css" />
        <link rel="alternate stylesheet" type="text/css" media="screen" title="style7" href="<?php echo $baseUrl;?>/css/style-red.css" />
	  <?php
	  $cs->registerScriptFile($baseUrl.'/js/bootstrap.min.js');
	  $cs->registerScriptFile($baseUrl.'/js/plugins/jquery.sparkline.js');
	  $cs->registerScriptFile($baseUrl.'/js/plugins/jquery.flot.min.js');
	  $cs->registerScriptFile($baseUrl.'/js/plugins/jquery.flot.pie.min.js');
	  $cs->registerScriptFile($baseUrl.'/js/plugins/jquery.knob.js');
	  $cs->registerScriptFile($baseUrl.'/js/plugins/jquery.masonry.min.js');
	  $cs->registerScriptFile($baseUrl.'/js/styleswitcher.js');
	?>
  

<script type="text/javascript">
  function call_kabupaten(id)
  {
    var value = id.options[id.selectedIndex].value;
    $.get("<?php echo Yii::app()->baseUrl; ?>/kabupaten/by_provinsi/"+value, function( data ) {
      $("#kabupaten").empty();
      $("#RumahTangga_id_desa_kelurahan").empty();
      $("#kabupaten").append(data);
    });
  }
  function call_kecamatan(id)
  {
    var value = id.options[id.selectedIndex].value;
    $.get("<?php echo Yii::app()->baseUrl; ?>/kecamatan/by_kabupaten/"+value, function( data ) {
      $("#kecamatan").empty();
      $("#RumahTangga_id_desa_kelurahan").empty();
      $("#kecamatan").append(data);
    });
  }
  function call_desa(id)
  {
    var value = id.options[id.selectedIndex].value;
    $.get("<?php echo Yii::app()->baseUrl; ?>/desa_kelurahan/by_kecamatan/"+value, function( data ) {
      $("#RumahTangga_id_desa_kelurahan").empty();
      $("#RumahTangga_id_desa_kelurahan").append(data);
    });
  }
</script>
  </head>

<body>

<section id="navigation-main">   
<!-- Require the navigation -->
<?php require_once('tpl_navigation.php')?>
</section><!-- /#navigation-main -->
    
<section class="main-body">
    <div class="container-fluid">
            <!-- Include content pages -->
            <?php echo $content; ?>
    </div>
    <br>
    <br>
    <br>
</section>

<!-- Require the footer -->
<?php require_once('tpl_footer.php')?>

  </body>
</html>