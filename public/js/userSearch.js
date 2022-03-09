const searchFlight = document.querySelectorAll('#searchFlight')
const container = document.getElementById('container')
const flightContainer = document.getElementById('flightContainer')
// const searchFlight = document.querySelectorAll('#searchFlight')


for (let i = 0; i < searchFlight.length; i++) {
   searchFlight[i].onkeyup = ()=> {
        container.classList.toggle('active')
       let SearchValue = searchFlight[i].value
       const req = new XMLHttpRequest();
       req.open("POST", "http://localhost:8000/userSearch", true);
       req.onload = () =>{
           if(req.readyState === XMLHttpRequest.DONE){
               if(req.status === 200){
                   let data = req.response
                   flightContainer.innerHTML = data
                //    console.log(data)
                //    console.clear()
               }
               
           }
       }
       req.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
       req.send("SearchValue=" + SearchValue)
    }

}

