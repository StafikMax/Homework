<?php
$html = "<table border='1'>";
for ($i=1;$i<10;$i++){
    $html .= "<tr>";
    for($a=1; $a<10;$a++) {
        $html .="<td>".($i*$a)."</td>";
    }
    $html .="</tr>";
}
$html .= "</table>";
echo $html;