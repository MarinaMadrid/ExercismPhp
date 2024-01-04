<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gigasecond</title>
    </head>
    <body>
        <?php
        /*
         * If we ever colonize Mars or some other planet, measuring time is going to get even 
         * messier. If someone says "year" do they mean a year on Earth or a year on Mars?
         * 
         * The idea for this exercise came from the science fiction novel "A Deepness in the Sky" 
         * by author Vernor Vinge. In it the author uses the metric system as the basis for time 
         * measurements.
         * 
         * Instructions
         * Your task is to determine the date and time one gigasecond after a certain date.
         * A gigasecond is one thousand million seconds. That is a one with nine zeros after it.
         * If you were born on January 24th, 2015 at 22:00 (10:00:00pm), then you would be a gigasecond old on October 2nd, 2046 at 23:46:40 (11:46:40pm).
         */

        function from(DateTimeImmutable $date): DateTimeImmutable {
            $gigasecond = 1000000000;
            $newDate = $date->add(new DateInterval("PT{$gigasecond}S"));
            return new DateTimeImmutable($newDate->format('Y-m-d H:i:s'));
        }
        ?>
    </body>
</html>
