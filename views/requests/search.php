<?php

    include 'autoload.php';

    $flight = new flightController();

    $data = $flight->searchFlight();
 
    $NumRows = $data->num_rows;
    

    $output = '';

    if($NumRows > 0){
        while($rows = $data->fetch_assoc()){
            $output .= '
                    <tr>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex items-center">
                            <p>'.$rows['FlighNumber'].'</p>
                            </div>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">'.$rows['Depart'].'</p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">
                            '.$rows['ArrivalAirport'].'
                        </p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">
                            '.$rows['Seats'].'
                        </p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">
                            '.$rows['aircraft'].'
                        </p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">
                            '.$rows['airline'].'
                        </p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">
                            '.$rows['status'].'
                        </p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">
                            '.$rows['price'].'
                        </p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <button class="bg-green-300 px-4 py-2 rounded-md text-green-800 font-semibold tracking-wide cursor-pointer" id="PopForm" >Add</button>
                        <button class="bg-orange-200 px-4 py-2 rounded-md text-orange-900 font-semibold tracking-wide cursor-pointer" id="UpdateFlightsForm">Update</button>
                        <input type="text" value="'.$rows['id'].'" id="flight_id" type="hidden" class="hidden">
                        <a href="" class="bg-red-500 px-4 py-2 rounded-md text-red-900 font-semibold tracking-wide cursor-pointer" id="RemoveFlights">Remove</a>
                    </td> 
                </tr>
            ';
        }    
    }else {
        $output=  'dosnt exist';
    }
    echo $output;








?>