<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PHP Test</title>
    </head>
    <body>
        <?php 
            $name = "Sergey Moshtakov";
            $age = 19;
            echo "Hello! My name is $name";
            echo "<br>";
            echo "I'm $age";

            $a = 5; 
            $b = 3; 
            $rez = $a + $b; 
            echo "<br>";
            echo "$a + $b = $rez";

            echo "<br>";
            echo "a = $a";
            echo "<br>";
            echo "b = $b";
            $a = $a + $b;
            $b = $a - $b;
            $a = $a - $b;
            echo "<br>";
            echo "a = $a";
            echo "<br>";
            echo "b = $b";
        ?>
    </body>
</html>