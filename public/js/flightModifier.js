const ModifierUserFlight = document.getElementById('ModifierUserFlight')
const CancelUserFlight = document.getElementById('CancelUserFlight')
const closeIcon = document.getElementById('closeIcon')
const containerModifierForm = document.getElementById('containerModifierForm')
const redirectPage = document.getElementById('redirectPage')
const DepartSearchModifier = document.getElementById('DepartSearchModifier')
const departList = document.querySelector('#departList')

const ArrivalList = document.getElementById('ArrivalList')
const arrivalAirportSearch = document.getElementById('arrivalAirportSearch')
const seatNumber = document.getElementById('seatNumber')
const ModifiedDepartDate = document.getElementById('ModifiedDepartDate')
const ModifiedArrivalDate = document.getElementById('ModifiedArrivalDate')
const ModBtn = document.getElementById('ModBtn')
const flightModifierForm = document.getElementById('flightModifierForm')
const AdultsNumbers = document.getElementById('Adults')
const ChildrenNumbers = document.getElementById('Children')
const Customers = document.getElementById('Customers')


console.log(Customers);

flightModifierForm.onclick = (e) => {
    e.preventDefault()
}


ModifierUserFlight.onclick = ()=> {
    containerModifierForm.style.display = 'flex'
}
closeIcon.onclick = ()=> {
    containerModifierForm.style.display = 'none'
}

CancelUserFlight.onclick = ()=> {
    redirectPage.style.display = 'flex'

    setTimeout(() => {
        location.assign('/')
    },3000)
}  


ModBtn.onclick = ()=> {
    let seat = seatNumber.value
    let NumAdults = AdultsNumbers.value
    let NumChildren = ChildrenNumbers.value

    localStorage.setItem('seatNumber', seat)
    localStorage.setItem('NumAdults', NumAdults)
    localStorage.setItem('NumChildren', NumChildren)
}


DepartSearchModifier.onkeyup = ()=> {
    departList.classList.toggle('active')

    let searchedCountry = DepartSearchModifier.value
    const req = new XMLHttpRequest();
    req.open("POST", "http://localhost:8000/modifierFlightUser", true);
    req.onload = () =>{
        if(req.readyState === XMLHttpRequest.DONE){
            if(req.status === 200){
                let data = req.response
                departList.innerHTML = data
                // console.log(data)
                // console.clear()
            }
            
        }
    }
    req.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
    req.send("searchedCountry=" + searchedCountry)
}



function update(SelectedLi){
    departList.classList.remove('active')
    let slectedData = DepartSearchModifier.value = SelectedLi.innerText.trim()
    localStorage.setItem('NewDepart', slectedData)
}

arrivalAirportSearch.onkeyup = ()=> {

    ArrivalList.classList.toggle('active')

    let arrivalAirport = arrivalAirportSearch.value
    const req = new XMLHttpRequest();
    req.open("POST", "http://localhost:8000/arrivalUserModifier", true);
    req.onload = () =>{
        if(req.readyState === XMLHttpRequest.DONE){
            if(req.status === 200){
                let data = req.response
                ArrivalList.innerHTML = data
                console.log(data)
                // console.clear()
            }
            
        }
    }
    req.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
    req.send("arrivalAirport=" + arrivalAirport)

}


function updateArrival(SelectedLi){
    ArrivalList.classList.remove('active')
    let newArrival = arrivalAirportSearch.value = SelectedLi.innerText.trim()
    localStorage.setItem('newArrival', newArrival)
}

ModBtn.onclick = ()=> {
    
    let ModDepartDate = ModifiedDepartDate.value
    let ModArrivalDate = ModifiedArrivalDate.value
    localStorage.setItem('ModifiedDepartDate',ModDepartDate)
    localStorage.setItem('ModifiedArrivalDate',ModArrivalDate)

}