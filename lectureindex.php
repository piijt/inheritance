<?php
    require_once './includes/Product.inc.php';
    require_once './includes/Book.inc.php';
    require_once './includes/DVD.inc.php';
    require_once './includes/LiveLecture.inc.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<?php
    $ll = new LiveLecture('@Adactio at AEA'
            , 'Jeremy Keith'
            , 'Web Design Principles'
            , ''
            , '(1 h 5 m hours)');
    $ll->display();
?>
    </body>
</html>
