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
// document.getElementById('alertLogin').style.display = 'none'

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
        document.getElementById(divId).style.display = 'none'
    }else if(element.value == 0){
        localStorage.setItem('travlPLan','Round Trip')
        document.getElementById(divId).style.display = ''
    }
    // console.log(one.value,round.value)
    // document.getElementById(divId).style.display = element.value == 1 ? 'block' : 'none'
}
function bookingId(e){
    var bookingRowId = e
    let flightDepart = searchFlightDepart.value
    let flightArrival = searchFlightArrival.value
    if(flightDepart !== '', flightArrival !== ''){
        localStorage.setItem('flightDepart',flightDepart)
        localStorage.setItem('flightArrival',flightArrival)
    }
    console.log(e)
    // const arr = []
    const req = new XMLHttpRequest();
    req.open("POST", "http://localhost:8000/reservationHomePage", true);
    req.onload = () =>{
        if(req.readyState === XMLHttpRequest.DONE){
            if(req.status === 200){
                let data = req.response
                console.log(data)
                // arr.push(data)
                // localStorage.setItem('flights',arr)
                if(data == 'Session Not Set'){
                    console.log(1234);
                    location.assign('/login')

                }else if(searchFlightDepart.value == '', searchFlightArrival.value == ''){
                    alertdiv.classList.add('displayAlert')
                }else if(alertdiv.classList.contains('displayAlert')){
                    alertdiv.classList.remove('displayAlert')
                }

                
            }
        }
    }
    req.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
    req.send("rowBooked=" + bookingRowId)
 }


 function clicked(e){
    e.preventDefault()
    console.log(1);
 }

