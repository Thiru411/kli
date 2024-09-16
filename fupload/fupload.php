<?php include('commonfile.php')
?>

 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title>Unzip a zip file to the webserver</title></head> 
 <body>
 <?php if(isset($message)) echo "<p>$message</p>"; ?>
 <form enctype="multipart/form-data" method="post" action="upload.php">
 <label>Choose a zip file to upload: 
 <input type="file" required name="zip_file"  id="zip_file"  accept=".zip"/>
 </label><br />
 <input type="submit" name="submit" value="Upload" />
 </form>
 </body>
 </html>