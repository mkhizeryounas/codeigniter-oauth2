<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopdesk oAuth 2.0</title>
</head>
<body>
    <a href="http://localhost:8888/oauth-server/oauth/authorize?response_type=code&state=abc123&client_id=shopdeskClientId&redirect_uri=http%3A%2F%2Flocalhost%3A8888%2Foauth-server%2Fexample%2Fredirect.php&scope=products_read,products_write" target="_BLANK">Login with Shopdesk</a>

    <?php
        // echo time()+36000;
    ?>
</body>
</html>