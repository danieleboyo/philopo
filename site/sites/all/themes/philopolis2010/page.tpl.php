<?php
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
  "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" >
  <head>
    <title><?php print $head_title ?></title>
    <?php print $head ?>
    <?php print $styles ?>
    <?php print $scripts ?>
    <!--[if lte IE 7]><?php print philopolis2010_get_ie_styles(); ?><![endif]--> <!--If Less Than or Equal (lte) to IE 7-->
  </head>
  <body<?php print philopolis2010_body_class($left, $right); ?>>
    <!-- Layout -->
    <div class="container"> <!-- add "showgrid" class to display grid -->
  
      <div id="header" class="clearfix">
        <?php if ($logo): ?>
          <a href="<?php print check_url($front_page); ?>" title="<?php print check_plain($site_name); ?>">
            <img src="<?php print check_url($logo); ?>" alt="<?php print check_plain($site_name); ?>" id="logo" />
          </a>
        <?php endif; ?>

        <div id="sitename">
					<?php if ($site_name): ?>
            <h1><a href="<?php print check_url($front_page); ?>" title="<?php print check_plain($site_name); ?>"><?php print check_plain($site_name); ?></a></h1>
          <?php endif; ?>
  
          <?php if ($site_slogan): ?>
            <span id="siteslogan"><?php print check_plain($site_slogan); ?></span>
          <?php endif; ?>
        </div> <!-- /#sitename -->
      
        <?php if ($search_box): ?><?php print $search_box ?><?php endif; ?>
        <?php print $header; ?>
        	
      </div> <!-- /#header -->

	  <div id="belowheader">

      <?php if ($nav): ?>
        <div id="nav" class="clearfix">
          <?php print $nav ?>
        </div> <!-- /#nav -->
      <?php endif; ?>

      <div id="main" class="clearfix">
        <?php print $breadcrumb; ?>
        <?php if ($mission): print '<div id="mission">'. $mission .'</div>'; endif; ?>
        <?php if ($title): print '<h2'. ($tabs ? ' class="with-tabs"' : '') .'>'. $title .'</h2>'; endif; ?>
        <?php if ($tabs): print '<div id="tabs-wrapper" class="clear-block"><ul class="tabs primary">'. $tabs .'</ul>'; endif; ?>
        <?php if ($tabs2): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif; ?>
        <?php if ($tabs): print '<span class="clear"></span></div>'; endif; ?>
        <?php if ($show_messages && $messages): print $messages; endif; ?>
        <?php print $help; ?>
        <?php print $center; ?>
        <div>
          <?php print $content; ?>
          <?php print $feed_icons ?>
        </div>
      </div> <!-- /#main -->

	  </div>
	  	  
	  <?php if ($right): ?>
        <div id="sidebar-right" class="sidebar">
          <?php print $right ?>
        </div> <!-- /#sidebar-right -->
      <?php endif; ?>

      <div id="footer" class="clear">
        <?php print $footer_message . $footer ?>
      </div> <!-- /#footer -->

    </div> <!-- /.container -->
    <!-- /layout -->

  <?php print $closure ?>

  </body>
</html>