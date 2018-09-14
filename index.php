<?php
   header("Access-Control-Allow-Origin: *");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Live</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>

<body>
    <div id="app"></div>

    <script>
       var App = {
    xhttp: function (str, path, mth) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                localStorage.setItem(str, this.responseText);
            }
        }
        xhttp.open(mth, path, true);
        xhttp.send();
    },
    live: function (r) {
        this.xhttp(r, 'db/user/auth/ethereal/test/database/index.php', 'GET');
        return "localStorage.getItem(" + r + ")";
    },
    init: function () {
        var dat = this.live('demo');
        document.querySelector('#app').innerHTML = refresh_LS('demo');

        function refresh_LS(x) {
            return localStorage.getItem(x);
        }
    }
}

setInterval(function () {
    App.init();
}, 2100);
   
   </script>

</body>

</html>
