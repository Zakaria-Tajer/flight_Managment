const errorContainer = document.getElementById('errorContainer')
const errorText = document.getElementById('error')
const loginForm = document.getElementById('loginForm')
const regHref = document.getElementById('regHref')


regHref.onclick = ()=> {
    location.assign('/register')
}

loginForm.onclick = (e) =>{
    e.preventDefault()
}


login.onclick = ()=> {
    // console.log(1)
    const req = new XMLHttpRequest()
    req.onreadystatechange = async ()=> {
        if(req.readyState === XMLHttpRequest.DONE && req.status === 200){
            let data = req.responseText
            console.log(data)
            
            if(data == 'success'){
                location.assign('/UserHomePage')
            }else if(data == 'admin') {
                location.assign('/')
            }else {
                errorContainer.style.display = 'flex'
                errorText.innerHTML = data
            }
        }
    }
    req.open('POST', 'http://localhost:8000/log', true)
    let Formlog = new FormData(loginForm)
    req.send(Formlog)
}
login.onclick = ()=> {
    // console.log(1)
    const req = new XMLHttpRequest()
    req.onreadystatechange = async ()=> {
        if(req.readyState === XMLHttpRequest.DONE && req.status === 200){
            let data = req.responseText
            console.log(data)
            
            if(data == 'success'){
                location.assign('/UserHomePage')
            }else if(data == 'admin') {
                location.assign('/')
            }else {
                errorContainer.style.display = 'flex'
                errorText.innerHTML = data
            }
        }
    }
    req.open('POST', 'http://localhost:8000/adminlogin', true)
    let Formlog = new FormData(loginForm)
    req.send(Formlog)
}

