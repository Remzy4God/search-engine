<!DOCTYPE html>
<html>
<head>
	<title>Insert Search Engine Data</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body bgcolor="gold">
  <header class="topsection">
  	
  </header>
  <div class="row" id="content">
  	<div class="col-sm-1">
  	</div>
  	<div class="col-sm-10">
      <center><h2 style="background-color: goldenrod; border:5px solid khaki; margin-left:17%; width: 83%;">Insert Site Data</h2></center>
  		<form action="upload_sitedata.php" method="post" enctype="multipart/form-data" class="form-horizontal">
  			<!--<table class="table table-bordered">
            <tr>
              <th>Site title</th>
              <td><input type="text" name="site_title"></td>
            </tr>   
        </table>-->
        <div class="form-group">
          <label class="col-xs-2 control-label">Site Title</label>
          <div class="col-sm-10">
            <input type="text" name="site_title" class="form-control">
          </div> 
        </div>  
        <div class="form-group">
          <label class="col-sm-2 control-label" for="link" name="site_link">Site Link</label>
          <div class="col-sm-10">
            <input type="text" name="site_link" class="form-control" id="link">
          </div>  
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Site Keyword</label>
          <div class="col-sm-10">
            <input type="text" name="site_keyword" class="form-control">
          </div> 
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Site Description</label>
          <div class="col-sm-10">
            <textarea name="site_description" rows="6"class="form-control"></textarea> 
          </div> 
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Site Image</label>
          <div class="col-sm-10">
            <input type="file" name="site_image" >
          </div> 
        </div>
        <div class="form-group">
            <input type="submit" name="upload" value="Upload Site" class="btn btn-warning pull-right" style="margin-right: 15px;">
        </div>    
  		</form>	
  	</div>	
  	<div class="col-sm-1">
  	</div>		
  </div>	
  <footer>
  	Remzy Corporation. &copy 2018. All Rights Reserved. 
  </footer>	
</body>
</html>