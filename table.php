<?php  
    require_once("functions.php");
    
    // kõik autod objektide kujul massiivis
    $car_array = getAllData();
?>

<h1>Tabel</h1>
<table border=1>
<tr>
    <th>id</th>
    <th>kasutaja id</th>
    <th>auto numbrimärk</th>
    <th>värv</th>
    <th></th>
</tr>
<?php 
    
    // autod ükshaaval läbi käia
    for($i = 0; $i < count($car_array); $i++){
        echo "<tr>";
        echo "<td>".$car_array[$i]->id."</td>";
        echo "<td>".$car_array[$i]->user_id."</td>";
        echo "<td>".$car_array[$i]->number_plate."</td>";
        echo "<td>".$car_array[$i]->color."</td>";
        echo "<td><a href='?delete=".$car_array[$i]->id."'>X</a></td>";
        echo "</tr>";
        
        
    }
    
?>
</table>