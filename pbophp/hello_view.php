<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <!-- BAD PRACTICE ! -->
        <?php
        include 'hello_class.php';
        $hello = new hello;
        ?>
        <h1>
            <?
            unset($hello);
            $hello->sayHello("Someone");
            ?>
        </h1>

    </body>
</html>
