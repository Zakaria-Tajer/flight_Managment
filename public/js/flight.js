// const n = document.getElementById('n')
// const add = document.getElementById('add')



// fetch("https://aerodatabox.p.rapidapi.com/flights/airports/icao/EHAM/2021-10-04T20:00/2021-10-05T08:00?withLeg=true&withCancelled=true&withCodeshared=true&withCargo=true&withPrivate=true&withLocation=false", {
// 	"method": "GET",
// 	"headers": {
// 		"x-rapidapi-host": "aerodatabox.p.rapidapi.com",
// 		"x-rapidapi-key": "bb515fd313mshcea2f5d4464648bp1e917djsnc8bcd76572b1"
// 	}
// })
// .then(response => {
// 	return response.json();
// }).then(items => {
    
//     console.log(items);
//     // console.log(items.arrivals[2]);

    
//     for (let i = 0; i < Math.floor(Math.random()*200); i++) {
//         var Fnumber = items.arrivals[i].number

//         var DepartGate = items.arrivals[i].departure.airport.name
//         var arrival = items.arrivals[i].arrival.gate
//         var aircraft = items.arrivals[i].aircraft.reg
//         var airline  = items.arrivals[i].airline.name

//         var status  = items.arrivals[i].status
        
        
//     }
//     // add.onclick = ()=> {                
    
//         const req = new XMLHttpRequest();
//         req.open("POST", "http://localhost:8000/flightsInsert", true);
//         req.onload = () =>{
//             if(req.readyState === XMLHttpRequest.DONE){
//                 if(req.status === 200){
//                     let data = req.response
                    
//                     console.log(data)
//                 }
//             }
//         }
//         req.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
//         req.send(`Fnumber=${Fnumber}&DepartGate= ${DepartGate}&arrival= ${arrival} &aircraft= ${aircraft}&airline= ${airline}&status= ${status}`)
//     // // }
        
        
        
//     })