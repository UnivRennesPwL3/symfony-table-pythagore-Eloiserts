<?php
namespace App\classes;
    class PythagoreUtility {

        public function display () {

            $chaine =
            "<html> <head>
            <title> Symfony & table de pythagore </title>
            </head> <body>
            <h1> Artus Eloise </h1>
            <table border = 1px padding = 5px>";

             for($i = 0; $i <= 10; $i++) {
                $chaine .= "<tr>";

                for($j = 0; $j <= 10; $j++) {
                $chaine .= "<td>";

                if($i == 0 || $j == 0) $chaine .= $i + $j;

                else $chaine .= $i * $j;
                $chaine .= "</td>";
                }
        $chaine .="</tr>";
            }
            $chaine .= "</table> </body> </html>";
            return $chaine;
        }
    }
?>
