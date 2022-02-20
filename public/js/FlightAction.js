const add = document.getElementById('addFlight')
const actionForm = document.getElementById('actionForm')
const update = document.getElementById('UpdateFlights')
const RmvFlights = document.querySelectorAll('#RemoveFlights')
const flightCookieId = document.querySelectorAll('#flight_id')




add.onclick = ()=> {
    const req = new XMLHttpRequest()
    req.onreadystatechange = async ()=> {
        if(req.readyState === XMLHttpRequest.DONE && req.status === 200){
            let data = req.responseText
            console.log(data)
            
        }
    }
    req.open('POST', 'http://localhost:8000/addFlight', true)
    let formAction = new FormData(actionForm)
    req.send(formAction)
}


update.onclick = ()=> {
    const req = new XMLHttpRequest()
    req.onreadystatechange = ()=> {
        if(req.readyState === XMLHttpRequest.DONE && req.status === 200){
            let data = req.responseText
            console.log(data)
            
        }
    }
    req.open('POST', 'http://localhost:8000/updateFlights', true)
    let formAction = new FormData(actionForm)
    req.send(formAction)
}

for (let i = 0; i < RmvFlights.length; i++) {
    let unique_flight_id = flight_id[i].value

    RmvFlights[i].onclick = ()=> {
        document.cookie = `Flight_id=${unique_flight_id}`
        const req = new XMLHttpRequest()
        req.onreadystatechange = ()=> {
            if(req.readyState === XMLHttpRequest.DONE && req.status === 200){
                let data = req.responseText
                console.log(data)
                
            }
        }
        req.open('POST', 'http://localhost:8000/removeFlights', true)
        // let formAction = new FormData(actionForm)
        req.send()
    }
    
}
