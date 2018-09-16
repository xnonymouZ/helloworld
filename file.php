<html>
<head>
  <title> File - Test [Demo PHP] </title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
  <title> Create File - Test [Demo PHP] </title>
  <style>
    input, textarea {
      display: block;
      width: 95%;
      padding: 4px 8px;
      margin: auto;
      margin-bottom: 8px;
      outline: none
    }
  </style>
</head>
 <body>
 <div>
<form action="./file.php" method="POST">
   <input type="text" name="filename" placeholder="Create your file name" value="<?php echo $_POST['filename']; ?>">
   <select name="filetype">
     <option value=".txt">Text</option>
     <option value=".php">PHP</option>
     <option value=".html">HTML</option>
     <option value="-no-exe">No Extensiton</option>
   </select>
   <textarea name="fileinput" placeholder="Insert text to your file"> 
     <?php 
       echo $_POST['fileinput']; 
     ?>
   </textarea>
   <input type="hidden" name="submit" value="Submit">
   <button name="submit">Create OR Edit File</button>
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
