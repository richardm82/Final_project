    <div id="footer">Copyright <?php echo date("Y"); ?>, Richard Miller</div>

	</body>
</html>
<?php
  // 5. Close database connection
	if (isset($connection)) {
	  mysqli_close($connection);
	}
?>
