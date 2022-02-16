const register = document.getElementById('register')
const login = document.getElementById('login')
const formRegister = document.getElementById('formRegister')
const errorContainer = document.getElementById('errorContainer')
const errorText = document.getElementById('error')
const loginForm = document.getElementById('loginForm')
const loginHref = document.getElementById('loginHref')

formRegister.onclick = (e)=> {
    e.preventDefault()
}
loginHref.onclick = ()=> {
    location.assign('/login')
}


register.onclick = ()=> {
    // console.log(1)
    const req = new XMLHttpRequest()
    req.onreadystatechange = async ()=> {
        if(req.readyState === XMLHttpRequest.DONE && req.status === 200){
            let data = req.responseText
            console.log(data)
            
            if(data == 'succes'){
                location.assign('/login')
            }else {
                errorContainer.style.display = 'flex'
                errorText.textContent = data
            }
            
        }
    }
    req.open('POST', 'http://localhost:8000/insert', true)
    let registerForm = new FormData(formRegister)
    req.send(registerForm)
}
