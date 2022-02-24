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
                    <button id="book_flight" onclick="bookingId('.$rows['id'].') " 
                        class="py-3 px-6 bg-indigo-600 hover:bg-indigo-900 text-white duration-700 rounded-lg "
                    >Book Now</button>
                    </td>
                            
                </tr>
            ';
        }    
    }else {
        $output = '
            <div class="w-[500px]  bg-red-400 flex items-center justify-center py-3 mx-auto translate-x-[40rem] absolute">
                <h1 class="text-lg font-mono text-white">Dosnt Exist</h1>
            </div>
        ';
    }
    echo $output;
?>