<html>
<head>
  <title> File - Test [Demo PHP] </title>
</head>
 <body>
 <?php
   $fName = $_POST['filename'];
   $fInput = $_POST['fileinput'];
   
   if ($fName && $fInput) {
     
     $myfile = fopen($fname, "w") or die("Unable to open file!");     
     fwrite($myfile, $fInput);
     
     fclose($myfile);
     
   } else {
     
     echo "<form method=POST> <input type=text name=filename placeholder=FileName> <input type=text name=fileinput placeholder=FileText></form>";
     
   }
?>
 </body>
 </html>
