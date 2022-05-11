const info = document.getElementById('info')
const button = document.getElementById('buttonLo')
document.getElementById('buttonLo').style.display = 'none'
document.getElementById('info').style.display = 'none'
const username = document.getElementById('username')
const searchFlightDepart = document.getElementById('searchFlightDepart')
const searchFlightArrival = document.getElementById('searchFlightArrival')
const alertdiv = document.getElementById('alert')
const alertLogin = document.getElementById('alertLogin')
const round = document.getElementById('round')
const one = document.getElementById('one')
const selectMenu = document.getElementById('selectMenu')
const logoutBtn = document.getElementById('logoutBtn')

window.onload =  ()=> {
    const req = new XMLHttpRequest();
        req.open("POST", "http://localhost:8000/checkIflogged", true);
        req.onload = () =>{
        if(req.readyState === XMLHttpRequest.DONE){
            if(req.status === 200){
                let data = req.response
                console.log(data)
                if(data == 'not set'){
                    alertLogin.style.display = 'flex'
                    button.style.display = 'block'

                    setTimeout(() => {
                        alertLogin.style.display = 'none'
                    },8000)
                }else if(data == 'set'){
                    logoutBtn.style.display = 'block'
                }
            }
        }
    }
    req.send()
    
}
localStorage.setItem('travlPLan','Round Trip')
function showDiv(divId, element){
    if(element.value == 1){
        localStorage.setItem('travlPLan','one Way')
        localStorage.setItem('flightArrival', 'No Flight Arrival Date(One Way)')
        document.getElementById(divId).style.display = 'none'
    }else if(element.value == 0){
        localStorage.setItem('travlPLan','Round Trip')
        document.getElementById('searchFlightArrival').style.display = ''
    }

}
function bookingId(e){
    let flightDepart = searchFlightDepart.value
    
    let flightArrival = searchFlightArrival.value
    var bookingRowId = e
    localStorage.setItem('RowBooked',bookingRowId)
    if(flightDepart !== '' , flightArrival !== ''){
        sessionStorage.setItem('flightDepart',searchFlightDepart.value)
        localStorage.setItem('flightArrival',searchFlightArrival.value)
        console.log(flightDepart,flightArrival);
    }
    const req = new XMLHttpRequest();
    req.open("POST", "http://localhost:8000/reservationHomePage", true);
    req.onload = () =>{
        if(req.readyState === XMLHttpRequest.DONE){
            if(req.status === 200){
                let data = req.response
                console.log(data)

                if(data == 'Session Not Set'){
                    location.assign('/login')
                }else if(selectMenu.value == 0 && searchFlightDepart.value == '' && searchFlightArrival.value == ''){
                    alertdiv.classList.add('displayAlert')
                }else if(selectMenu.value == 1 && searchFlightArrival.value !== '' && searchFlightDepart.value !== ''){
                    localStorage.setItem('flightArrival','No Arrival Date')
                    localStorage.setItem('flightDepart',flightDepart)
                }else if(selectMenu.value == 1 && searchFlightDepart.value == '' && searchFlightArrival.value == ''){
                    alertdiv.classList.add('displayAlert')
                }else if(selectMenu.value == 1 && searchFlightDepart.value !== '' && data == 'setted'){
                    localStorage.setItem('flightDepart',flightDepart)
                    location.href = 'http://localhost:8000/payment'

                }else if(alertdiv.classList.contains('displayAlert')){
                    alertdiv.classList.remove('displayAlert')
                }else {
                    
                    location.href = 'http://localhost:8000/payment'
                }
                // }else if(data == 'setted'){
                // }
                console.log(searchFlightDepart.value);
                
            }
        }
    }
    req.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
    req.send("rowBooked=" + bookingRowId)

    // searchFlightArrival.value ==  ''
 }


 function clicked(e){
    e.preventDefault()
    console.log(1);
 }

