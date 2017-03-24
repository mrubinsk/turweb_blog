<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- Copyright 2016 Michael J Rubinsky
     Layout based on http://getskeleton.com CSS template.
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title><?php echo $this->page_title?></title>
  <meta name="description" content="">
  <meta name="author" content="Michael Rubinsky">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo $this->host_protocol . '://' . $this->host_base?>/css/normalize.css">
  <link rel="stylesheet" href="<?php echo $this->host_protocol . '://' . $this->host_base?>/css/skeleton.css">
  <link rel="stylesheet" href="<?php echo $this->host_protocol . '://' . $this->host_base?>/css/custom.css">
  <link rel="icon" type="image/png" href="images/favicon.png">
</head>
<body>
  <div id="header-wrapper">
    <div id="header" class="container">
      <div id="logo">
        <h1><a href="<?php echo $this->host_protocol . '://' . $this->host_base?>">theUpstairsRoom</a></h1>
        <span>News and Ramblings on Horde development</span>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="one column" style="margin-top: 0.75em">
        <!-- Main content area -->
        <?php echo $this->contentTag('div', $this->contentForLayout, array('class' => 'content'));?>
      </div>
    <!-- End Row -->
    </div>
    <!-- End container -->
  </div>
  <?php echo $this->renderPartial('footer.html.php')?>
</body>
</html>
