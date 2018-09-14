<?php
   header("Access-Control-Allow-Origin: *");
?>

<?php
$ts1 = time() - 5;
$ts2 = time() + 5;
$key = $_POST['token'];
echo "{ \"token\": \"$key\" ";

if ($key > ($ts1 * 1000) && $key < ($ts2 * 1000)) {
    $path = $_POST['pathname'];
    $scope = $_POST['method'];
    echo ", \"key\": true, \"method\": \"$scope\", \"status\": [200, \"OK\"] }";

    if ($scope == "w") {

        $file = fopen($path, "w");
        fwrite($file, $_POST['comment']);


    } elseif ($_POST['method'] == "r") {

        $file = fopen($path, "r") or die("Failed!");
        echo fread($file, 1200);

    }

    fclose($file);
} else {
    echo "\"key\": false }";
}
?>
