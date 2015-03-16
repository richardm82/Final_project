<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php $layout_context = "public"; ?>
<?php include("../includes/layouts/header.php"); ?>
<?php find_selected_page(true); ?>
<?php
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);
?>
<div id="main">
  <div id="navigation">
		<?php echo public_navigation($current_subject, $current_page); ?>
  </div>
  <div id="page">
		<?php if ($current_page) { ?>
			
			<h2><?php echo htmlentities($current_page["menu_name"]); ?></h2>
			<?php echo nl2br(htmlentities($current_page["content"])); ?><br /><br />
			<a href="login.php">Login</a> 
		<?php } else { ?>
			
			<p>Welcome!</p>
			<a href="login.php">Login</a> 
		<?php }?>
  </div>
</div>
<?php include("../includes/layouts/footer.php"); ?>