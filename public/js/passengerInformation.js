let children = localStorage.getItem('travelTicketCount')
let passengerFiller = document.getElementById('passengerFiller')
let errorText = document.getElementById('errorText')
let eroorContainer = document.getElementById('eroorContainer')
let FormDoneButton = document.getElementById('FormDone')
let successAlert = document.getElementById('successAlert')


window.onload =()=> {
    // localStorage.removeItem('updated')
    // localStorage.removeItem('status')
}

passengerFiller.addEventListener('submit', (e)=> {
    e.preventDefault()
})

for (let i = 0; i < children; i++) {
    
    let dc = document.createElement('div')
    passengerFiller.appendChild(dc)

    dc.innerHTML = `
    <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
        <div class="flex flex-col">
            <label class="leading-loose text-sm">First Name</label>
            <input type="text" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" id="Fname" name="Fname[]" placeholder="First Name">
        </div>
        <div class="flex flex-col">
            <label class="leading-loose text-sm">Last Name</label>
            <input type="text" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" id="lname" name="lname[]" placeholder="Last Name">
        </div>
        <div class="flex items-center space-x-4">
            <div class="flex flex-col">
            <label class="leading-loose text-sm">Email</label>
            <div class="relative focus-within:text-gray-600 text-gray-400">
                <input type="date" class="pr-4 pl-4 w-48 py-2 border focus:ring-gray-500 focus:border-gray-900 sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" name="BirthDay[]" id="BirthDay" placeholder="17/04/2002" >
            </div>
            </div>
            <div class="flex flex-col">
            <label class="leading-loose text-sm">Gender</label>
            <div class="relative focus-within:text-gray-600 text-gray-400">
                <select name="selectGender[]" id="selectGender"
                class="border-2 py-2 px-2 w-48 outline-none pl-4 text-sm"
                >
                    <option value="Male" class="">Male</option>
                    <option value="Female" class="">Female</option>
                </select>
            </div>
            </div>
            </div>
            <div class="w-full flex justify-center">
                <button class="text-sm font-poppins px-4 rounded-lg h-12 text-white hover:bg-blue-800 duration-700 bg-blue-500"  id="addPassengersButton" type="submit">Confirm Passeneger</button>
            </div>
        
    `
}
let addPassengersButton = document.querySelectorAll('#addPassengersButton')
let Fname = document.querySelectorAll('#Fname')
let lname = document.querySelectorAll('#lname')
let BirthDay = document.querySelectorAll('#BirthDay')
let selectGender = document.querySelectorAll('#selectGender')
// let addPassengersButton = document.querySelectorAll('#addPassengersButton')

let array = []
let sessionArray = []
for (let i = 0; i < addPassengersButton.length; i++) {
    addPassengersButton[i].onclick = ()=> {
        let FirstName = Fname[i].value
        let LastName = lname[i].value
        let BirthDays = BirthDay[i].value
        let selectGenders = selectGender[i].value

        let obj = {
            fName: FirstName,
            lName: LastName,
            BirthD: BirthDays,
            Gendre: selectGenders,
        }
        array.push(obj)
        console.log(array);
       
        console.log(sessionArray);
        const req = new XMLHttpRequest();
        req.open("POST", "http://localhost:8000/passenger", true);
        req.onload = () =>{
            if(req.readyState === XMLHttpRequest.DONE){
                if(req.status === 200){
                    let data = req.response
                    console.log(data)
                    if(data != 'All fields are Required'){
                        // let sessionIds = data
                        sessionArray.push(data)
                        sessionStorage.setItem('passengers',JSON.stringify(array))
                        sessionStorage.setItem('SessionId', JSON.stringify(sessionArray))
                        
                        localStorage.setItem('updated','updated')
                        localStorage.setItem('status','success')

                        setTimeout(()=> {
                            // location.assign('/payment')
                        },2000)

                    }else if(data == 'All fields are Required'){
                        eroorContainer.style.display = 'flex'
                        errorText.innerHTML = data
                    }
                }
            }
        }
        req.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
        // let formData =  new FormData(passengerFiller)
        req.send(`Fname=${FirstName}&lname=${LastName}&BirthDay=${BirthDays}&selectGender=${selectGenders}`)
    
    }
    
}

FormDoneButton.onclick = ()=> {
    let unique_id = sessionStorage.getItem('SessionId')

    console.log(unique_id);
    const req = new XMLHttpRequest();
        req.open("POST", "http://localhost:8000/multiPassengers", true);
        req.onload = () =>{
            if(req.readyState === XMLHttpRequest.DONE){
                if(req.status === 200){
                    let data = req.response
                    console.log(data);
                        
                }

            }
        }
        req.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
                
        req.send(`Passenger_unique_id=${unique_id}`)
  

    for (let index = 0; index < localStorage.length; index++) {
        if (localStorage.getItem("status") === null) {
            eroorContainer.style.display = 'flex'
            errorText.innerHTML = 'All Fields Are Required'
        }else {
            // console.log(localStorage.getItem("status"));
            location.assign('/payment')
        }
        
    }
}
