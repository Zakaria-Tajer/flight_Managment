const getDate = document.getElementById('currentDate')
const Time = document.getElementById('currentTime')
const DepartDate = document.getElementById('DepartDate')
const ArrDate = document.getElementById('ArrDate')
const TravelPlan = document.getElementById('TravelPlan')
const Adults = document.getElementById('Adults')
const Children = document.getElementById('Children')
let current = new Date();

getDate.textContent = current.toLocaleDateString()
Time.textContent = current.toLocaleTimeString()
console.log()

// let flightArrival = localStorage.getItem('flightArrival')
// let flightDepart = localStorage.getItem('flightDepart')
// let travlPLan = localStorage.getItem('travlPLan')
// let adult = localStorage.getItem('adult')
// let child = localStorage.getItem('child')
console.log(flightArrival,flightDepart,travlPLan,adult,child)

// DepartDate.textContent = flightDepart
// ArrDate.textContent = flightArrival
// TravelPlan.textContent = travlPLan
// Adults.textContent = adult
// Children.textContent = child
















