<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lucian's Luscious Lasagna</title>
    </head>
    <body>
        <?php
        /* // Instructions

          In this exercise you're going to write some code to help you cook a brilliant
         * lasagna from your favorite cooking book.

          You have five tasks, all related to the time spent cooking the lasagna.

          //# 1. Define the expected oven time in minutes

          Define the Lasagna::expectedCookTime function that does not take any arguments and returns
         * how many minutes the lasagna should be in the oven. According to the cooking book, the 
         * expected oven time in minutes is 40 
         * 
         * //# 2. Calculate the remaining oven time in minutes
         * 
         * Define the Lasagna::remainingCookTime function that takes the actual minutes the lasagna
         *  has been in the oven as an argument and returns how many minutes the lasagna still has 
         * to remain in the oven, based on the expected oven time in minutes from the previous task.

         * //# 3. Calculate the preparation time in minutes
         * 
         * Define the Lasagna::totalPreparationTime function that takes the number of layers you 
         * added to the lasagna as an argument and returns how many minutes you spent preparing the
         *  lasagna, assuming each layer takes you 2 minutes to prepare.
         * 
         * //# 4. Calculate the total working time in minutes
         * 
         * Define the Lasgna::totalElapsedTime function that takes two arguments: the first 
         * argument is the number of layers you added to the lasagna, and the second argument is 
         * the number of minutes the lasagna has been in the oven. The function should return how 
         * many minutes in total you've worked on cooking the lasagna, which is the sum of the 
         * preparation time in minutes, and the time in minutes the lasagna has spent in the oven
         * at the moment.
         * 
         * //# 5. Create a notification that the lasagna is ready
         * 
         * Define the Lasagna::alarm function that does not take any arguments and returns 
         * a message indicating that the lasagna is ready to eat.
         * */



        declare(strict_types=1);

        class Lasagna {

            // Please define the 'expectedCookTime()' function
            public function expectedCookTime() {
                return 40;
            }

            // Please define the 'remainingCookTime($elapsed_minutes)' function
            public function remainingCookTime($elapsed_minutes) {
                return $this->expectedCookTime() - $elapsed_minutes;
            }

            // Please define the 'totalPreparationTime($layers_to_prep)' function
            public function totalPreparationTime($layers_to_prep) {
                return $layers_to_prep * 2;
            }

            // Please define the 'totalElapsedTime($layers_to_prep, $elapsed_minutes)' function
            public function totalElapsedTime($layers_to_prep, $elapsed_minutes) {
                return $this->totalPreparationTime($layers_to_prep) + $elapsed_minutes;
            }

            // Please define the 'alarm()' function
            public function alarm() {
                return "Ding!";
            }
        }

        $timer = new Lasagna();
        $timer->expectedCookTime();         //40
        $timer->remainingCookTime(30);      //10  
        $timer->totalPreparationTime(2);    //4 
        $timer->totalElapsedTime(3, 20);    //26
        $timer->alarm();                    //"Ding!"
        ?>
    </body>
</html>
