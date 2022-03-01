const container = document.getElementById('container')
const total = document.getElementById('total')
const tickets = document.getElementById('tickets')
const priceTotal = document.getElementById('priceTotal')
const Discount = document.getElementById('Discount')
const ticketFLightPriceTotal = document.getElementById('ticketFLightPriceTotal')

let adults = JSON.parse(localStorage.getItem('adult')) 
let childs = JSON.parse(localStorage.getItem('child')) 
let flightArrival = localStorage.getItem('flightArrival')
let flightDepart = localStorage.getItem('flightDepart')
let travlPLan = localStorage.getItem('travlPLan')
let adult = localStorage.getItem('adult')
let child = localStorage.getItem('child')

let travelTicketCount = JSON.parse(adult) + JSON.parse(child)
let tick = localStorage.setItem('travelTicketCount',travelTicketCount)

window.onload = ()=> {
    let ticketCount = localStorage.getItem('travelTicketCount')
    const req = new XMLHttpRequest();
    req.open("POST", "http://localhost:8000/userPayment", true);
    req.onload = () =>{
        if(req.readyState === XMLHttpRequest.DONE){
            if(req.status === 200){
                let data = req.response
                // console.log(data)
                // console.clear()
                let dis = (priceTotal.value * JSON.parse(child)) * 0.2
                let sum = priceTotal.value
                
                container.innerHTML = data
                
                if(adult == 1 && child == 0 && ticketCount == 1){
                    total.textContent = sum
                    ticketFLightPriceTotal.innerHTML = sum
                }else if(adult >= 1 && child >= 1 && ticketCount > 1){
                    total.innerHTML = priceTotal.value * ticketCount
                    Discount.innerHTML = `${dis}-(20%)`
                    let prices = (priceTotal.value * ticketCount) - dis
                    ticketFLightPriceTotal.innerHTML = prices
                }
                if(child == 0){
                    Discount.innerHTML = 'No Discounts'
                }  
            }
        }
    }
    req.setRequestHeader("Content-type", "application/x-www-form-urlencoded")

    req.send(`travelTicketCount=${travelTicketCount}&flightArrival=${flightArrival}
            &flightDepart=${flightDepart}&travlPLan=${travlPLan}&adults=${adult}&childs=${child}`)


}
         
