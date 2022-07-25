<!DOCTYPE html>
     <html> 
     <head> 
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>

  <style>
    body{
        background-color: gray;
    }
  </style>
  <body> 
  <table>
      <?php
      for($row=1;$row<=8;$row++)
	  {
          
          echo "<tr>";
          echo "<td>$row";
        for($col=1;$col<=8;$col++)
        {
            $total=$row+$col;
            

            if($total%2==0)
            {
                echo "<td height=35px width=30px bgcolor=#FFFFFF></td>";
            }
            else
            {
                echo "<td height=35px width=30px bgcolor=#000000></td>";
            }
        }
        echo "</tr>";
        echo "</td>";
    }
          ?>
  </table>


  </body>
  </html>