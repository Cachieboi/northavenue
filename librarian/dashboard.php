<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_dashboard.php'); ?>
<?php
	$date1 = "1998-11-24";
	$date2 = "1997-03-26";
	  
	// Use comparison operator to 
	// compare dates
	if ($date1 > $date2)
		$results = true;
	else
	$results = false;
	  
	?>

    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">		
                       
			<img src="../images/welcome.png">
			
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>