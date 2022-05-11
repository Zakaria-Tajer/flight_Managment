const container = document.getElementById('container')
const MultiPassengerscontainer = document.getElementById('MultiPassengerscontainer')
const total = document.getElementById('total')
const tickets = document.getElementById('tickets')
const priceTotal = document.getElementById('priceTotal')
const Discount = document.getElementById('Discount')
const ticketFLightPriceTotal = document.getElementById('ticketFLightPriceTotal')
// const DepartDatssse = document.getElementById('DepartDate')

let adults = JSON.parse(localStorage.getItem('adult')) 
let childs = JSON.parse(localStorage.getItem('child')) 
let flightArrival = localStorage.getItem('flightArrival')
let flightDepart = localStorage.getItem('flightDepart')
let travlPLan = localStorage.getItem('travlPLan')
let adult = localStorage.getItem('adult')
let child = localStorage.getItem('child')

let travelTicketCount = JSON.parse(adult) + JSON.parse(child)
let tick = localStorage.setItem('travelTicketCount',travelTicketCount)
let count = 0

let updatedUrl = localStorage.getItem('updated')
let statusUpdate = localStorage.getItem('status')


let DepartDateInfo = localStorage.getItem('flightDepart')
let ArrivalDateInfo = localStorage.getItem('flightArrival')


// let Flightinfo = JSON.parse(sessionStorage.getItem('FlightBookingInfo'))
let obj = JSON.parse(sessionStorage.getItem('passengers'))
let unique_id = sessionStorage.getItem('SessionId')

let sum = priceTotal.value * travelTicketCount
let dis = (priceTotal.value * JSON.parse(child)) * 0.2
let prices = sum - dis


window.onload = ()=> {
    if(travelTicketCount === 1){
        // let ticketCount = localStorage.getItem('travelTicketCount')
        const req = new XMLHttpRequest();
        req.open("POST", "http://localhost:8000/userPayment", true);
        req.onload = () =>{
            if(req.readyState === XMLHttpRequest.DONE){
                if(req.status === 200){
                    let data = req.response
                    // console.log(data)
                        // let sum = priceTotal.value
                        container.innerHTML = data
                        total.textContent = `${sum} Dh`
                        ticketFLightPriceTotal.innerHTML = `${sum} Dh`

                        JSON.parse(child) === 0 ? Discount.innerHTML = 'No Discounts' : console.log('error');
                       
                }

            }
        }
        req.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
    
        req.send(`travelTicketCount=${travelTicketCount}&flightArrival=${flightArrival}
                &flightDepart=${flightDepart}&travlPLan=${travlPLan}&adults=${adult}&childs=${child}`)
  

    }else if(adult >= 1 && child >= 1 && travelTicketCount > 1 && !updatedUrl){
        location.assign('/multipulePassengers') 
    }else if(adult >= 1 && child >= 1 && travelTicketCount > 1 && statusUpdate){
        const req = new XMLHttpRequest();
        req.open("POST", "http://localhost:8000/multiPassengers", true);
        req.onload = () =>{
            if(req.readyState === XMLHttpRequest.DONE){
                if(req.status === 200){
                    let data = req.response
                    // console.log(data);

                    sessionStorage.setItem('FlightBookingInfo', data)

                    
                    total.textContent = `${sum} DH`
                    Discount.textContent = `${dis}-(20%)`

                    ticketFLightPriceTotal.innerHTML = `${prices} DH`
                    container.innerHTML = data    
                }

            }
        }
        req.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
                
        req.send(`flightDepart=${flightDepart}&flightArrival=${flightArrival}&adult=${adult}&child=${child}&travlPLan=${travlPLan}
        &Passenger_unique_id=${unique_id}&Object=${obj.length}`)
  
    }
    
}


