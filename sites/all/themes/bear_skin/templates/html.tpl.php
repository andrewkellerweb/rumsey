<!DOCTYPE html>

<html <?php print $html_attributes . $rdf_namespaces; ?>><!--<![endif]-->

<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>

  <?php if ($default_mobile_metatags): ?>
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1">
  <?php endif; ?>
  <meta http-equiv="cleartype" content="on">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <?php print $styles; ?>
  <?php if (theme_get_setting('sticky_footer')): ?>
    <link href="/<?php print path_to_theme(); ?>/css/sticky-footer.css" media="all" rel="stylesheet" type="text/css" />
  <?php endif; ?>

  <?php print $scripts; ?>
  
  <?php if ($add_respond_js): ?>
    <!--[if lt IE 9]>
    <script src="<?php print $base_path . $path_to_zen; ?>/js/html5-respond.js"></script>
    <![endif]-->
  <?php elseif ($add_html5_shim): ?>
    <!--[if lt IE 9]>
    <script src="<?php print $base_path . $path_to_zen; ?>/js/html5.js"></script>
    <![endif]-->
  <?php endif; ?>
  <script>jQuery.noConflict();</script>
  
  <link href='http://fonts.googleapis.com/css?family=Belgrano' rel='stylesheet' type='text/css'>
  
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="/<?php print path_to_theme(); ?>/js/jquery.jpanelmenu.min.js"></script>

	<script type="text/javascript">
    //Jpanel Menu Call
    jQuery(document).ready(function () {
      var jPM = jQuery.jPanelMenu({
        direction: 'right',
        openPosition: '260px'
      });
      jPM.on();
      jQuery('a.menu-trigger').click(function () {
          $("#jPanelMenu-menu").css('opacity','1');
          });
    });

      //Jpanel SubMenu Additional Code
    jQuery(document).ready(function () {
        $("#jPanelMenu-menu li.menuparent.active-trail").addClass('toggle')
        $("#jPanelMenu-menu li.menuparent.active-trail a + ul").css('display','block');
        $("#jPanelMenu-menu li.menuparent.active-trail a + ul").css('visibility','visible');
        $("header nav ul.nice-menu ul ul ul").css('display','none');
        $("header nav ul.nice-menu ul ul ul").css('visibility','invisible'); 

    jQuery('#jPanelMenu-menu li.menuparent > a').click(function () {
              $(this).toggleClass('toggle'); 
              $(this).attr("href", "#")
              $("#jPanelMenu-menu li.menuparent.active-trail a").removeClass('toggle')
              $("#jPanelMenu-menu li.menuparent a:first").attr("href", "#");
        });
    });
  </script>
  
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "32c7d819-2257-4606-bf79-1efc3b578ae3", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
  
</head>

<body class="<?php print $classes; ?>" <?php print $attributes;?>>
<div id="sidebar_bg"></div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>

<script type="text/javascript">
   var cdJsHost = (("https:" == document.location.protocol) ? "https://" : "http://");
   document.write(unescape("%3Cscript src='" + cdJsHost + "analytics.clickdimensions.com/ts.js' type='text/javascript'%3E%3C/script%3E"));
 </script>

<script type="text/javascript">
   var cdAnalytics = new clickdimensions.Analytics('analytics.clickdimensions.com');
   cdAnalytics.setAccountKey('aSM5OfYtehEyv1kgK7geNg');
   cdAnalytics.setDomain('rumsey.com');
   cdAnalytics.trackPage();
 </script>
</body>
</html>
