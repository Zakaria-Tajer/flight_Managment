window.onload = () => {
    const RowBooked = localStorage.getItem('RowBooked')

    const req = new XMLHttpRequest();
    req.open("POST", "http://localhost:8000/reservationAll", true);
    req.onload = () =>{
        if(req.readyState === XMLHttpRequest.DONE){
            if(req.status === 200){
                let data = req.response
                console.log(data)

                
                
            }
        }
    }
    req.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
    req.send("RowBooked=" + RowBooked)



}