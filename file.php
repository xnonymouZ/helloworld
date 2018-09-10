<html>
<head>
  <title> File - Test [Demo PHP] </title>
</head>
 <body>
 <?php
$fName = $_POST['filename'];
$fInput = $_POST['fileinput'];

if ($fName && $fInput) {
  $myfile = fopen($_SERVER["DOCUMENT_ROOT"] . $fName, "wb") or die("Error Requested!") ;
  fwrite($myfile, $fInput);
  fclose($myfile);
  echo "Completed!";
} else {
  echo "Submit Your File!";
}

?>

<form action="" method="POST">
   <input type="text" name="filename" placeholder="Create your file name" value="php/contents/user/">
   <input type="text" name="fileinput" placeholder="Insert text to your file"> 
   <input type="submit" value="Submit"> 
</form>
 </body>
 </html>
