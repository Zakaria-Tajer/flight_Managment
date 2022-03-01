<?php


include 'autoload.php';

$flight = new flightController();

$data = $flight->ArrivalAirport();
$NumRows = $data->num_rows;
$output = '';



if($NumRows > 0){
while($rows = $data->fetch_assoc()){
    $output .= '
    <li onclick="updateArrival(this)" 
        class="text-center py-1 list-none bg-white font-openSans  hover:bg-gray-200 duration-700 cursor-pointer">
        '.$rows['ArrivalAirport'].'
    </li>
    ';
    
}

}else {
    echo 'not found';
}

echo $output.trim('');
