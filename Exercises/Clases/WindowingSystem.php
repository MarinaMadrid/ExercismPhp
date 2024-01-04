<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Windowing System</title>
    </head>
    <body>
        <?php
        /*
         * In this exercise, you will be simulating a windowing based computer system. 
         * You will create some windows that can be moved and resized. The following image 
         * is representative of the values you will be working with below.
         * 
         * 1. Define the properties of the Program Window
         * Using the provided class scaffold, provide the properties for the x, y, height, and 
         * width values.
         * 
         * 2. Define the initial values for the program window
         * Define a constructor function for ProgramWindow. It should not take any arguments, 
         * but during the constructor execution set the default values for its properties. 
         * It should set the initial x and y values to 0. It should set the initial width and height 
         * to an 800x600 screen size.
         * 
         * 3. Define a new class in Size.php for a Size class. It should take constructor arguments 
         * to set an height and width property. Additionally ProgramWindow requires a resize function, 
         * which receives the Size object instance and updates its own properties.
         * 
         * 4. Define a function to move the window
         * Define a new class in Position.php for a Position class. It should take constructor arguments 
         * to set a y and x property. Additionally ProgramWindow requires a move function, which receives
         * the Position object instance and updates its own properties.
         */

        class Size {

            public $height;
            public $width;

            public function __construct($height, $width) {
                $this->height = $height;
                $this->width = $width;
            }

            public function getWidth() {
                return $this->width;
            }

            public function getHeight() {
                return $this->height;
            }
        }

        class Position {

            public $y;
            public $x;

            public function __construct($y, $x) {
                $this->y = $y;
                $this->x = $x;
            }

            public function getY() {
                return $this->y;
            }

            public function getX() {
                return $this->x;
            }
        }

        class ProgramWindow {

            public $x;
            public $y;
            public $width;
            public $height;

            public function __construct() {
                $this->x = 0;
                $this->y = 0;
                $this->width = 800;
                $this->height = 600;
            }

            public function getWidth() {
                return $this->width;
            }

            public function getHeight() {
                return $this->height;
            }

            public function resize($size) {
                if ($size !== null) {
                    $this->height = $size->getHeight();
                    $this->width = $size->getWidth();
                }
            }
            
            public function move($position){
                if ($position !== null) {
                    $this->y = $position->getY();
                    $this->x = $position->getX();
                }
            }

            public function __toString() {
                return "ProgramWindow [x={$this->x}, y={$this->y}, height={$this->height}, width={$this->width}]";
            }
        }

        $window = new ProgramWindow();
        echo $window;
        $size = new Size(764, 1080);
        $window->resize($size);
        echo $window;
        $position = new Position(80, 313);
        $window->move($position);
        echo $window;
        ?>
    </body>
</html>
