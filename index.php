<!DOCTYPE html>
<html lang="vi">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="stylesheet/css/css.css"/>
    <script type="text/javascript" src="stylesheet/js/script.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <script type="text/javascript" src="jquery/scripts.js"></script>
    <script type="text/javascript" src="jquery/scroll-to-top.js"></script>
    <title>Web tin tức PHP</title>
</head>

<body>
<?php

include('modules/config.php');
include('modules/header.php');
include('modules/menu.php');
?>
<div class="status"></div>
<div class="wrapper">
    <?php

    include('modules/login.php');
    include('modules/register.php');
    include('modules/content.php');


    ?>
</div>
<?php
include('modules/footer.php');
?>

</body>
</html>
