<!DOCTYPE html>
     <html> 
     <head> 
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body> 
   <table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
   <!-- cell 270px wide (8 columns x 60px) -->
      <?php

    $chess = [
    "A" => [
        "White",
        "Black",
        "White",
        "Black",
        "White",
        "Black",
        "White",
        "Black"
        
    ],
    "B" => [
        "Black",
        "White",
        "Black",
        "White",
        "Black",
        "White",
        "Black",
        "White",
    ],
    "C" => [
        "White",
        "Black",
        "White",
        "Black",
        "White",
        "Black",
        "White",
        "Black"
    ],
    "D" => [
        "Black",
        "White",
        "Black",
        "White",
        "Black",
        "White",
        "Black",
        "White",
    ],
    "E" => [
        "White",
        "Black",
        "White",
        "Black",
        "White",
        "Black",
        "White",
        "Black"
    ],
    "F" => [
        "Black",
        "White",
        "Black",
        "White",
        "Black",
        "White",
        "Black",
        "White",
    ],
    "G" => [
        "White",
        "Black",
        "White",
        "Black",
        "White",
        "Black",
        "White",
        "Black"
    ],
    "H" => [
        "Black",
        "White",
        "Black",
        "White",
        "Black",
        "White",
        "Black",
        "White",
    ]
];



        foreach ($chess as $herf => $a) {
            
            echo "<tr>";
            foreach ($a as $color => $c) {
              echo "<td height=30px width=30px bgcolor=$c></td>";
              
            }
            echo "</tr>";

    }
    echo "</ol>";


          ?>
  </table>




  </body>
  </html>