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
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo 'https://' . $this->host_base?>/css/normalize.css">
  <link rel="stylesheet" href="<?php echo 'https://' . $this->host_base?>/css/skeleton.css">
  <link rel="stylesheet" href="<?php echo 'https://' . $this->host_base?>/css/custom.css">
  <link rel="stylesheet" type="text/css" href="https://h4.theupstairsroom.com/horde/js/syntaxhighlighter/styles/shThemeEclipse.css"/>
  <link rel="stylesheet" type="text/css" href="https://h4.theupstairsroom.com/horde/js/syntaxhighlighter/styles/shCoreEclipse.css"/>
  <link rel="icon" type="image/png" href="images/favicon.png">
  <script type="text/javascript" src="https://h4.theupstairsroom.com/horde/js/prototype.js"></script>
  <script type="text/javascript" src="https://h4.theupstairsroom.com/horde/js/syntaxhighlighter/scripts/shCore.js"></script>
  <script type="text/javascript" src="https://h4.theupstairsroom.com/horde/js/syntaxhighlighter/scripts/shAutoloader.js"></script>
  <script type="text/javascript">
      document.observe('dom:loaded', function() {
          var path = 'https://h4.theupstairsroom.com/horde/js/syntaxhighlighter/scripts/';
          SyntaxHighlighter.autoloader(
            'applescript ' + path + 'shBrushAppleScript.js',
            'bash shell ' + path + 'shBrushBash.js',
            'css ' + path + 'shBrushCss.js',
            'diff patch pas ' + path + 'shBrushDiff.js',
            'js jscript javascript ' + path + 'shBrushJScript.js',
            'perl pl '+ path + 'shBrushPerl.js',
            'php ' + path + 'shBrushPhp.js',
            'text plain ' + path + 'shBrushPlain.js',
            'sql ' + path + 'shBrushSql.js',
            'xml xhtml xslt html ' + path + 'shBrushXml.js'
          );
          SyntaxHighlighter.defaults['toolbar'] = false;
          SyntaxHighlighter.all();
      });

      function updatePreviously(page)
      {
          new Ajax.Updater('previously',
                       '<?php echo 'https://' . $this->host_base . '/gotopage/'?>' + page);
          return false;
      }
  </script>
</head>
<body>
  <div id="header-wrapper">
    <div id="header" class="container">
      <div id="logo">
        <h1><a href="https://<?php echo $this->host_base?>">theUpstairsRoom</a></h1>
        <span>News and Ramblings on Horde development</span>
      </div>
    </div>
  </div>

  <div id="wrapper1">
    <div id="welcome" class="container">
      <div class="title">
        <strong>{ Hi! I'm Mike }</strong>
      </div>
      <div class="content"><!-- <img src="https://www.gravatar.com/avatar/fb930e44282b804151c29212eebaa883?s=80" /> -->
        I'm a core developer with <a href="https://horde.org" alt="The Horde Project">The Horde Project</a> and a
        founding parter of <a href="https://horde.org/services">Horde LLC</a> - the company behind the world's most
        flexible groupware platform. This is my personal blog full of random
        thoughts about development and life in general.
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="nine columns" style="margin-top: 0.75em">
        <!-- Main content area -->
        <?php echo $this->contentTag('div', $this->contentForLayout, array('class' => 'content'));?>
      </div>

      <div class="three columns sidebar"  style="margin-top: 0.75em">
        <!-- Sidebar -->
        <ul class="style2">

          <li>
          <?php echo $this->renderPartial('me');?>
          </li>
          <li>
            <?php echo $this->renderPartial('photostream')?>
          </li>

          <li>
            <?php echo $this->renderPartial('cloud')?>
          </li>

          <li>
            <?php echo $this->renderPartial(
              'previously',
                  array(
                    'locals' => array(
                      'page' => $this->page,
                      'pageCount' => $this->pageCount,
                      'summary' => $this->summary
                     )
                  )
            );?>
          </li>
        </ul>
      <!-- End sidebar column -->
      </div>
    <!-- End Row -->
    </div>
    <!-- End container -->
  </div>
  <?php echo $this->renderPartial('footer.html.php')?>
</body>
</html>