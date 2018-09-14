<?php
   header("Access-Control-Allow-Origin: *");
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form Submission</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>

<body>

    <form name="file" action="/submit.php" method="POST">

        <div class="input-field">
            <input type="text" placeholder="{{path}}/{{sub_path}}/..." name="pathname" value="../test/database/index.php">
        </div>
        <div class="input-field">
            <table>
                <tr>
                    <td>
                        <input type="radio" name="method" value="r" onchange="javascript:; document.getElementById('txtcmt').setAttribute('style', 'display:none;')"><label
                            for="method">Read
                            Only</label>
                    </td>
                    <td>
                        <input type="radio" name="method" value="w" onchange="javascript:; document.getElementById('txtcmt').setAttribute('style', 'display:block;')"><label
                            for="method">Write Only</label>
                    </td>
                </tr>
            </table>
        </div>
        <div class="input-field">
            <textarea name="comment" id="txtcmt" placeholder="#type your code..." name="pathname" style="display:none"></textarea>
        </div>

        <div class="input-field">
            <table>
                <tr>
                    <td><input type="hidden" placeholder="Access Token" name="token" readonly=""></td>
                </tr>
            </table>
        </div>

        <div class="input-field">
            <table>
                <tr>
                    <td><input type="submit" name="Submit"></td>
                </tr>
            </table>
        </div>

    </form>



    <script>
        setInterval(function () {
            try {
                var xxx = file.token;
                var vale = newTokenRequest();
                xxx.value = vale;
            } catch (err) {
                xxx.value = err.message;
            }

            function newTokenRequest() {
                var dt = new Date();
                dt = dt.getTime();
                var token = Math.floor(Math.random() * 5);
                var booln = Math.floor(Math.random() * 2) + 1;
                if (booln == 1) {
                    token = dt - token;
                } else
                if (booln == 2) {
                    token = dt + token;
                }
                return token;
            }
        }, 800);
    </script>
</body>

</html>
