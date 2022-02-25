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
















