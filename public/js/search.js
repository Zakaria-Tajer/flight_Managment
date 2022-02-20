const searchFlightAdmin = document.getElementById('searchFlightAdmin')
const tbody = document.getElementById('tbody')

searchFlightAdmin.onkeyup = ()=> {
    let SearchValue = searchFlightAdmin.value
    // console.log(searchFlightAdmin.value)
    const req = new XMLHttpRequest();
    req.open("POST", "http://localhost:8000/search", true);
    req.onload = () =>{
        if(req.readyState === XMLHttpRequest.DONE){
            if(req.status === 200){
                let data = req.response
                tbody.innerHTML = data
                console.log(data)
            }
        }
    }
    req.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
    req.send("SearchValue=" + SearchValue)

}

