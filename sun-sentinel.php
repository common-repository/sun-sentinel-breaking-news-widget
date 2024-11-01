<?php
/*
Plugin Name: Sun-Sentinel Breaking News
Plugin URI: http://www.sun-sentinel.com/
Description: Sun-Sentinel Breaking News Widget
Author: Kit Mobley
Version: 2.0
Author URI: http://www.sun-sentinel.com/
*/
  
			
function ssbreakingnews_widget() {
	  ?>

<link rel="stylesheet" href="http://interactive.sun-sentinel.com/widgets/tabber/example.css" TYPE="text/css" MEDIA="screen">

<script type="text/javascript">document.write('<style type="text/css">.tabber{display:none;}<\/style>');</script>

<style type="text/css">
<!--
#getwidget {
float: right; font-size: 9px; color: #FFFFFF; margin-right: 5px;
}
#getwidget a {
color:#FFFFFF;
}

-->
</style>
 <script type="text/javascript" src="http://interactive.sun-sentinel.com/widgets/tabber/tabber.js"></script>
 
<div style="width: 300px; height: 250px; background-color:#000000;">
<div style="width: 300px; background-image: url(http://interactive.sun-sentinel.com/widgets/tabber/images/top_bg.jpg); height: 74px;">
<div id="getwidget"><a href="http://www.sun-sentinel.com/sfl-rss-widgets,0,6223346.htmlstory"  target="_blank">Get this widget</a></div>
</div>
<div class="tabber" >
     <div class="tabbertab" style="background-color:#FFFFFF; margin-left: 2px;">
	  <h2>SFL Breaking News</h2>
       <?php
$a = file_get_contents("http://interactive.sun-sentinel.com/widgets/rss2html.php?XMLFILE=http://www.sun-sentinel.com/news/local/breakingnews/rss2.0.xml&TEMPLATE=http://interactive.sun-sentinel.com/widgets/sample-template-sfl.html&MAXITEMS=4");
echo ($a);
?>
     </div>

     <div class="tabbertab" style="background-color:#FFFFFF; margin-left: 2px;">
	  <h2>Broward County</h2>
	  <?php
$b = file_get_contents("http://interactive.sun-sentinel.com/widgets/rss2html.php?XMLFILE=http://www.sun-sentinel.com/news/broward/rss2.0.xml&TEMPLATE=http://interactive.sun-sentinel.com/widgets/sample-template-broward.html&MAXITEMS=4");
echo ($b);
?>
     </div>


     <div class="tabbertab" style="background-color:#FFFFFF; margin-left: 2px;">
	  <h2>Palm Beach County</h2>
	  <?php
$c = file_get_contents("http://interactive.sun-sentinel.com/widgets/rss2html.php?XMLFILE=http://www.sun-sentinel.com/news/palm-beach/rss2.0.xml&TEMPLATE=http://interactive.sun-sentinel.com/widgets/sample-template-pbc.html&MAXITEMS=4");
echo $c;
?>
     </div>

</div>
</div>
<?php
      }
      function init_ssbreakingnews(){
          register_sidebar_widget("Sun-Sentinel Breaking News", "ssbreakingnews_widget");    
      }
      add_action("plugins_loaded", "init_ssbreakingnews");
?>