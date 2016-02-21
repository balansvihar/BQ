<?php ?>
<header>
	<div class="logo float-left">
		<a class="spin" href="http://www.balsoft.in/bqjs/"><img src="images/bq.png" alt="bq.js" title="bq.js"/></a>
	</div>
	
		<a class="menu float-right" href="javascript:;"></a>
	<nav>
		<a <?php  echo "menu= $menu "; if($menu=="index") echo 'class="active" ';?>href="index.php" title="Home">Home</a>
		<a <?php if($menu=="docs") echo 'class="active" ';?>href="documentation.php" title="Documentation">Documentation</a>
		<a <?php if($menu=="faqs") echo 'class="active" ';?>href="faq.php" title="FAQ's">FAQ's</a>
		<!--<a <?php if($menu=="example") echo 'class="active" ';?>href="example.php" title="Examples">Examples</a>-->
		<a <?php if($menu=="contact") echo 'class="active" ';?>href="contact.php" title="Contact">Contact</a>
	</nav>
	<div class="clear"></div>
</header>
<div class="sep"></div>