<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Reverse String</title>
    </head>
    <body>
        <?php

        function reverseString(string $text): string {
            $reverseText = "";
            for ($i = -1; $i >= -(strlen($text)); $i--) {
                $reverseText .= $text[$i];
            }
            return $reverseText;
        }
        
        echo reverseString("");
        echo reverseString("robot");
        ?>
    </body>
</html>
