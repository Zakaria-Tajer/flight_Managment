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

var travelTicketCount = childs + adults
localStorage.setItem('travelTicketCount',travelTicketCount)

window.onload = ()=> {
    const req = new XMLHttpRequest();
    req.open("POST", "http://localhost:8000/userPayment", true);
    req.onload = () =>{
        if(req.readyState === XMLHttpRequest.DONE){
            if(req.status === 200){
                let data = req.response
                console.log(data)
                console.clear()
                let dis = (priceTotal.value * child) * 0.2
                let sum
                container.innerHTML = data

                if(adult == 1 && child == 0 && travelTicketCount == 1){
                    sum = priceTotal.value
                    total.innerHTML = sum
                    ticketFLightPriceTotal.innerHTML = sum

                }else if(adult > 1){
                    sum = priceTotal.value * adult
                    total.innerHTML = sum
                    ticketFLightPriceTotal.innerHTML = sum

                }else if(child >= 1){
                    Discount.innerHTML = `${dis} (-20%)`
                    ticketFLightPriceTotal.innerHTML = sum - dis
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
         
