<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Highschool Sweetheats</title>
    </head>
    <body>
        <?php
        /*
          1. Implement the HighSchoolSweetheart::firstLetter function. It should take a name and return
         * its first letter. It should clean up any unnecessary whitespace from the name.
         * 
         * 
         * */

        class HighSchoolSweetheart {

            public function firstLetter(string $name): string {
                return $name[0];
            }

            public function initial(string $name): string {
                return strtoupper($this->firstLetter($name)) . ".";
            }

            public function initials(string $name): string {
                $fullName = explode(' ', $name);
                return $this->initial($name) . " " . $this->initial($fullName[1][0]);
            }

            public function pair(string $sweetheart_a, string $sweetheart_b): string
            {
                $firstName = $this->initials($sweetheart_a);
                $secondName = $this->initials($sweetheart_b);
                return
        "     ******       ******
           **      **   **      **
         **         ** **         **
        **            *            **
        **                         **
        **     $firstName  +  $secondName     **
         **                       **
           **                   **
             **               **
               **           **
                 **       **
                   **   **
                     ***
                      *";
            }
        }

        $sweetheart = new HighSchoolSweetheart();
        $sweetheart->firstLetter("Jane");                   //"J"
        $sweetheart->initial("jane");                       //"J."
        $sweetheart->initials("Jane Doe");                  //"J. D."
        $sweetheart->pair("Blake Miller", "Riley Lewis")    //B. M.  +  R. L.
        ?>
    </body>
</html>
