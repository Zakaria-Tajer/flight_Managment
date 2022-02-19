const addFlight = document.getElementById('addFlight')
const formPopUp = document.getElementById('formPopUp')
const PopForm = document.querySelectorAll('#PopForm')
const UpdateFlightsForm = document.getElementById('UpdateFlights')
const RemoveFlights = document.getElementById('RmvFlights')
const addFlights = document.querySelectorAll('#addFlight')
const UpdateForm = document.querySelectorAll('#UpdateFlightsForm')
const RemoveForm = document.querySelectorAll('#RemoveFlights')

    
addFlight.addEventListener('click', ()=> {
    formPopUp.style.visibility = 'invisible'

})

for (let i = 0; i < PopForm.length; i++) {
    PopForm[i].addEventListener('click', ()=> {
        formPopUp.style.visibility = 'visible'
        UpdateFlightsForm.style.display = 'none'
        RemoveFlights.style.display = 'none'
    })    
}
for (let i = 0; i < UpdateForm.length; i++) {
    UpdateForm[i].addEventListener('click', ()=> {
        formPopUp.style.visibility = 'visible'
        RemoveFlights.style.display = 'none'
        addFlight.style.display = 'none'
    })    
}



