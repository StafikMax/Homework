<?php
echo "<form action='27.php' method='post'>
        <p>Row</p><input type='text' name='row' /><br/>
        <p>Cols</p><input type='text' name='cols'/> <br/> 
        <input type='submit' />     
      </form>";
$row = $_POST['row'];
$cols = $_POST['cols'];
$colors = ['red','yellow','blue','gray','maroon','brown','green'];
echo  "<table>";
for ($i=0; $i < $row; $i++){
    $runNum = rand(0,30000);
    $ranColor = rand(0,6);
    echo   "<tr><td style='background-color: $colors[$ranColor]'>{$runNum}</td> ";
        for ($j=0;$j < $cols -1;$j++){
            $ranColorTwo = rand(0,6);
            $runNumTwo = rand(0,30000);
        echo "<td style='background-color: $colors[$ranColorTwo]'>{$runNumTwo}</td> ";
    }
    echo  "</tr>";
}
echo "</table>";






