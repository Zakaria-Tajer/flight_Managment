<?php


include 'autoload.php';

$flight = new flightController();

$data = $flight->DepartAirport();
$NumRows = $data->num_rows;
$output = '';



if($NumRows > 0){
while($rows = $data->fetch_assoc()){
    $output .= '
    <li onclick="update(this)" 
        class="text-center py-1 list-none bg-white font-openSans  hover:bg-gray-200 duration-700 cursor-pointer">
        '.$rows['Depart'].'
    </li>
    ';
    
}

}else {
    echo 'not found';
}

echo $output;


?>