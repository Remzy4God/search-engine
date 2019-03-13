<!DOCTYPE html>
<html>
<head>
	<title>Search Result Page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	 <header class="topsection">
	 	
	 </header>
	 <div class="row" id="content" style="background-color: snow;">
	 	<div class="col-sm-1">
	 	</div>	
	 	<div class="col-sm-10">
	 		<form action="search_result.php" method="get">
	 			<span style="margin-left: 5%;"><b>Write Your Keyword</b></span>
	 			<input type="text" name="user_query"  style="padding: 5px; width: 65%;">
	 			<input type="submit" name="search" value="Search" class="btn btn-success">
	 		</form>
	 		<a href="index.html"><button>Go back</button></a>
	 	</div>
	 	<div class="col-sm-1">
	 	</div>
	 </div>
	 <div class="row" style="background-color: snow; margin-top: -50px;">
	 	<div class="col-sm-1">
	 	</div>
 			
		<div class="col-sm-10" style="margin-top: -20px;">
			
			<?php
 			require ("database/db.php");
 			if (isset($_GET['search'])){
 				
 				$get_value=$_GET['user_query'];

 				if ($get_value==''){
 					echo "<center>Please Enter Something</center>";
 					exit();
 				}

 				$sql=mysqli_query($connect,"SELECT * FROM site WHERE site_keywords LIKE '%$get_value%' ");

 				$count= mysqli_num_rows($sql);
 				if ($count < 1){
 					echo "<center><strong><em>NO RESULT FOUND IN THE DATABASE</em></strong></center>";
 				}

 				while ($row_result= mysqli_fetch_array($sql)) {
 				    
 				    $site_title=$row_result['site_title'];
 				    $site_link=$row_result['site_link'];
 				    $site_keyword=$row_result['site_keywords'];
 				    $site_description=$row_result['site_description'];
 				    $site_image=$row_result['site_image'];
 				?>
				<h3><?php echo $site_title; ?></h3>
				<a href="<?php echo $site_link; ?>" target="_blank"><?php echo $site_link; ?></a>
				<p align="justify"><?php echo $site_description; ?></p>
				<img src='images/<?php echo $site_image; ?>' width="100" height="100">
				<hr style="border:1px solid green">
		
				<?php } ?> <!--end of while loop-->

 				
 		    <?php } ?><!--end of if statement-->
 		
		</div> 
 		
	 		
	 </div>	
	 <footer>
	 	&copy 2018. Remzy Corporation. All Rights Reserved.
	 </footer>	
</body>
</html>