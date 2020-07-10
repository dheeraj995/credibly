<!DOCTYPE html>
<html>
<body>
<?php 
  include 'class.pdf2text.php';

  $targetfolder = "testupload/";

 $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;

 $ok=1;


  $file_type = $_FILES['file']['type'];

  

  if ($file_type=="application/pdf") {

    if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

    {
        $filename = basename( $_FILES['file']['name']);

        // echo $filename;  
        $a = new PDF2Text();
        $a->setFilename($filename); 
        $a->decodePDF();
      
        $md5file = md5($a->output());
  
  	     if ("a0b6077debc0454a91afe5f94a118f25" == $md5file)
          {
          //  header('Location: ' . "index.php?ref=valid", true, false ? 301 : 302);
          //        exit();
            echo '<script type="text/javascript">window.location="index.php?ref=valid"</script>';
           /*echo "file is ok";*/
      
          }
          else
          {
            echo '<script type="text/javascript">window.location="index.php?ref=invalid"</script>';
           /* echo "file is not ok";*/
          }
      }

    }
  
  else {
  
   echo "You may only upload PDFs files.<br>";
  
  } 
