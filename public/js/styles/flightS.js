const addFlight = document.getElementById('addFlight')
const formPopUp = document.getElementById('formPopUp')
const PopForm = document.querySelectorAll('#PopForm')
const UpdateFlightsForm = document.getElementById('UpdateFlights')
const RemoveFlights = document.getElementById('RmvFlights')
const addFlights = document.querySelectorAll('#addFlight')
const UpdateForm = document.querySelectorAll('#UpdateFlightsForm')
const RemoveForm = document.querySelectorAll('#RemoveFlights')
const flight_id = document.querySelectorAll('#flight_id')

// var id;

    
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
// function SendId(e){
//     id =  e
    
// }
for (let i = 0; i < UpdateForm.length; i++) {
    let unique_flight_id = flight_id[i].value

    UpdateForm[i].addEventListener('click', ()=> {
        // console.log(unique_flight_id);
        formPopUp.style.visibility = 'visible'
        RemoveFlights.style.display = 'none'
        addFlight.style.display = 'none'
        document.cookie = `Flight_id=${unique_flight_id}`
        
    })    


}



