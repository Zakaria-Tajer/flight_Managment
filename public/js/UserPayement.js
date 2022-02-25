const container = document.getElementById('container')
const total = document.getElementById('total')
const tickets = document.getElementById('tickets')
const priceTotal = document.getElementById('priceTotal')
const Discount = document.getElementById('Discount')
let adults = JSON.parse(localStorage.getItem('adult')) 
let childs = JSON.parse(localStorage.getItem('child')) 
let flightArrival = localStorage.getItem('flightArrival')
let flightDepart = localStorage.getItem('flightDepart')
let travlPLan = localStorage.getItem('travlPLan')
let adult = localStorage.getItem('adult')
let child = localStorage.getItem('child')
var travelTicketCount = childs + adults
localStorage.setItem('travelTicketCount',travelTicketCount)
// console.log(travelTicketCount)
window.onload = ()=> {
    const req = new XMLHttpRequest();
    req.open("POST", "http://localhost:8000/userPayment", true);
    req.onload = () =>{
        if(req.readyState === XMLHttpRequest.DONE){
            if(req.status === 200){
                let data = req.response
                console.log(data)
                
                container.innerHTML = data
                total.innerHTML = priceTotal.value * 2

                
                
            }
        }
    }
    req.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
    req.send(`travelTicketCount=${travelTicketCount}&flightArrival=${flightArrival}
    &flightDepart=${flightDepart}&travlPLan=${travlPLan}&adults=${adult}&childs=${child}`)


}
         