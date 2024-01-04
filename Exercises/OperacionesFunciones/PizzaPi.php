<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pizza Pi</title>
    </head>
    <body>
        <?php
        /*
          Lilly loves cooking. She wants to throw a pizza party with her friends. To make the
         * most of her ingredients, she needs to know how much of each ingredient she requires 
         * before starting.
         * To solve this, Lilly has drafted a program to automate some of the planning but needs 
         * your help finishing it. Will you help Lilly throw the proportionally perfect pizza 
         * party?
         * 
         * 1. A Dough Ratio
         * Lilly is a fan of thin, crispy pizzas with a thinner crust. The dough needed for the 
         * middle is a minimum 200g, but every person it serves requires another 20g of dough.
         * 
         * grams = pizzas * ((persons * 20) + 200)
         * 
         * Lilly needs a function that:
         * - Takes the number of pizzas
         * - The number of persons each pizza will serve
         * - And returns the dough needed to the nearest gram.
         * 
         * 2. A Splash of Sauce
         * Lilly is meticulous when applying her sauce, but the size of her pizzas can be 
         * inconsistent. From her experience, she knows that it takes 125mL of sauce per pizza. 
         * Lilly needs a function that calculates how many cans of sauce to buy.
         * 
         * cans of sauce = pizzas * sauce per pizza / sauce can volume
         * 
         * 3. Some Cheese, Please
         * Cheese comes in perfect cubes and is sold by size. Lilly calculated an equation to 
         * determine how many pizzas can of some diameter (d) made from a cheese cube of 
         * side-length (l):
         * 
         * pizzas = (cheese_dimension^3) / (thickness * PI * diameter)
         * 
         * Create a function that:
         * - Takes a side-length dimension of a cheese cube
         * - Takes the desired thickness of the cheese layer
         * - Takes the diameter of the pizza
         * - And returns the number of pizzas that can be made while rounding down.
         * 
         * 4. A Fair Share
         * Finally, Lilly wants her pizzas to divide into 8 slices each and distributed evenly 
         * among her friends.
         * Create a function that:
         * - Takes a number of pizzas and number of friends
         * - and returns the number of slices that will be left over if each person takes an 
         * equal number of slices.
         */

        class PizzaPi {

            public function calculateDoughRequirement($pizzas, $persons) {
                $grams = $pizzas * (($persons * 20) + 200);
                return $grams;
            }

            public function calculateSauceRequirement($pizzas, $sauceCanVolume) {
                $cansOfSauce = $pizzas * 125 / $sauceCanVolume;
                return $cansOfSauce;
            }

            public function calculateCheeseCubeCoverage($cheese_dimension, $thickness, $diameter) {
                $pizzas = (int) (($cheese_dimension ** 3) / ($thickness * 3.14 * $diameter));
                return $pizzas;
            }

            public function calculateLeftOverSlices($pizzas, $friends) {
                $slices = $pizzas * 8;
                return $slices % $friends;
            }
        }

        $pizza_pi = new PizzaPi();
        $pizza_pi->calculateDoughRequirement(4, 8);                 //1440
        $pizza_pi->calculateSauceRequirement(8, 250);               //4
        $pizza_pi->calculateCheeseCubeCoverage(25, 0.5, 30);        //331
        $pizza_pi->calculateLeftOverSlices(2, 4);                   //0
        $pizza_pi->calculateLeftOverSlices(4, 3);                   //2
        ?>
    </body>
</html>
