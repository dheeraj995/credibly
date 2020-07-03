<!DOCTYPE html>
<html>
<body>

<?php



$file_type=$_FILES['file']['type'];

 	$filename = basename( $_FILES['file']['name']);
	$md5file = md5($filename);

if ($file_type=="application/pdf" || $file_type=="image/gif" || $file_type=="image/jpeg") {

	if ("f27de7615d7333cb2f807a83087ddb23" == $md5file)
  {
  echo "The file is ok.";
  }
else
  {
  echo "The file is not ok.";
  }
}

else {

 echo "You may only upload PDFs, JPEGs or GIF files.<br>";

}




 ?>

</body>
</html>