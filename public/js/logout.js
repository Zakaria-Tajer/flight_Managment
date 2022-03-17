const logout = document.getElementById('logoutBtn')


logout.onclick = ()=> {
    console.log(1)
    const req = new XMLHttpRequest()
    req.onreadystatechange = async ()=> {
        if(req.readyState === XMLHttpRequest.DONE && req.status === 200){
            let data = req.responseText
            console.log(data)
            
            if(data == 'success'){
                location.reload()
            }
        }
    }
    req.open('POST', 'http://localhost:8000/logout', true)
    req.send()
}