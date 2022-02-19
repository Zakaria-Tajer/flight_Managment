const add = document.getElementById('addFlight')
const actionForm = document.getElementById('actionForm')
const update = document.getElementById('UpdateFlights')

// actionForm.onclick = (e)=> {
//     e.preventDefault()
// }
var id
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

function SendId(e){
    // const req = new XMLHttpRequest();
    // req.open("POST", "http://localhost:8000/updateFlights", true);
    // req.onload = () => {
    //     if(req.readyState === XMLHttpRequest.DONE){
    //         if(req.status === 200){
    //             let data = req.response
                
    //             console.log(data)
    //         }
    //     }
    // }
    // req.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
    // req.send("flightId=" + e)

    // console.log(e)
    id =  e
    
}
update.onclick = ()=> {
    const req = new XMLHttpRequest()
    req.open('POST', 'http://localhost:8000/updateFlights', true)
    req.onload = ()=> {
        if(req.readyState === XMLHttpRequest.DONE){
            if(req.status === 200){
                let data = req.response
                
                console.log(data)
            }
        }
    }
    req.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
    let formActions = new FormData(actionForm)
    req.send("flightId=" + id,formActions)
}
