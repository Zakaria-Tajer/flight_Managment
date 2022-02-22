<?php

    include 'autoload.php';

    $flight = new flightController();

    $data = $flight->getUserSearch();

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
                    <button onclick="bookingId('.$rows['id'].')" 
                        class="py-3 px-6 bg-indigo-600 hover:bg-indigo-900 text-white duration-700 rounded-lg "
                    >Book Now</button>
                    </td>
                            
                </tr>
            ';
        }    
    }else {
        $output=  'dosnt exist';
    }
    echo $output;
?>