<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        /**
          For want of a horseshoe nail, a kingdom was lost, or so the saying goes.

          Given a list of inputs, generate the relevant proverb. For example, given the list ["nail",
         * "shoe", "horse", "rider", "message", "battle", "kingdom"], you will output the full text of 
         * this proverbial rhyme:

          For want of a nail the shoe was lost.
          For want of a shoe the horse was lost.
          For want of a horse the rider was lost.
          For want of a rider the message was lost.
          For want of a message the battle was lost.
          For want of a battle the kingdom was lost.
          And all for the want of a nail.
          Note that the list of inputs may vary; your solution should be able to handle lists of arbitrary
         * length and content. No line of the output text should be a static, unchanging string; all should
         *  vary according to the input given.
         *          /
         */
        class Proverb {

            public function recite($pieces) {
                $count = count($pieces);
                $proverb = [];

                if ($count == 0) {
                    return $pieces;
                }

                for ($i = 0; $i < $count - 1; $i++) {
                    $j = $i + 1;
                    $proverb[] = "For want of a $pieces[$i] the $pieces[$j] was lost.";
                }
                $proverb[] = "And all for the want of a " . $pieces[0] . ".";
                return $proverb;
            }
        }
        ?>
    </body>
</html>
