<html>
<head>
  <title> File - Test [Demo PHP] </title>
</head>
 <body>


<form action="./file.php" method="POST">
   <input type="text" name="filename" placeholder="Create your file name" value="<?php echo $_POST['filename']; ?>">
   <select name="filetype">
     <option value=".txt">Text</option>
     <option value=".php">PHP</option>
     <option value=".html">HTML</option>
     <option value="-wox">No Extensiton</option>
   </select>
   <input type="text" name="fileinput" placeholder="Insert text to your file" value="<?php echo $_POST['fileinput']; ?>"> 
   <input type="submit" name="submit" value="Submit"> 
</form>


 <?php

if ($_POST["submit"] == "Submit") {
  $fname = $_POST["filename"];
  $ftxt = $_POST["fileinput"];
  $ftyp = $_POST["filetype"];

  if ($fname != "" && $ftxt != "") {
    $fPath = $fname . $ftyp;
    $myfile = fopen($fPath, "wb") or die("Error Requested!");
    fwrite($myfile, $_POST['fileinput']);
    fclose($myfile);
    echo "Completed!";
  } else {
    echo "Nothing Changed!";
  }
} 

?>

 </body>
 </html>
