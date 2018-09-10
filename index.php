<?php
   header("Access-Control-Allow-Origin: *");
?>

<html>
<head>
   <title>PHP - INFO </title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1.0">
<head>

<body>

<?php
   $USERID = $_POST['usn'];
   if ($USERID) {
       echo "<p>Welcome back, $USERID";
   } else {
       echo "<form action='' method='POST' style='width=100%;padding:15px 28px;margin:auto'> <input type='text' placeholder='USERNAME' name='usn' style='display:block;width:100%;padding:12px 18px'> <input type='password' placeholder='PASSWORD' name='pwd' style='display:block;width:100%;padding:12px 18px'> <input type='submit' value='LOGIN' style='display:block;width:70%;padding:12px 18px;text-align:auto;background:#2569df;'></form>";
   }
?>

</body>
</html>
