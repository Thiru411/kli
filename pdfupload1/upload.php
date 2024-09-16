<?php 


/* ====================zip File upload======================  */ 
  
 
if(isset($_FILES["zip_file"]["name"])) { 
	$filepath=$_POST['filepath'];
 $filename = $_FILES["zip_file"]["name"]; 
 $source = $_FILES["zip_file"]["tmp_name"]; 
 $type = $_FILES["zip_file"]["type"]; 
 $extension = pathinfo($filename, PATHINFO_EXTENSION);
 $fileexplode=explode('.',$filename);
 $filename1=$fileexplode[0];
 $oldFilePath = $filepath.'/'.$filename; // Specify the current file's path
$newFileName = $filename1.date('Y-m-dh-i-s').'.'.$extension;// Specify the new file name
$newFilePath =  $filepath.'/'.$newFileName; // Specify the new file's path
if (file_exists($oldFilePath)) {

if (rename($oldFilePath, $newFilePath)) {
	move_uploaded_file($source, $oldFilePath);
	header("Location:index.php");

} else {
    echo 'Error renaming file.';
}
 
}else{
	move_uploaded_file($source, $oldFilePath);
	header("Location:index.php");

}
 
 }else{
	echo 'something went wrong';
 
 } 
 
 


/* ====================zip File upload======================  */
?>