const ModifierUserFlight = document.getElementById('ModifierUserFlight')
const CancelUserFlight = document.getElementById('CancelUserFlight')
const closeIcon = document.getElementById('closeIcon')
const containerModifierForm = document.getElementById('containerModifierForm')
const redirectPage = document.getElementById('redirectPage')


ModifierUserFlight.onclick = ()=> {
    containerModifierForm.style.display = 'flex'
}
closeIcon.onclick = ()=> {
    console.log(1);
    containerModifierForm.style.display = 'none'
}

CancelUserFlight.onclick = ()=> {
    redirectPage.style.display = 'flex'

    setTimeout(() => {
        location.assign('/')
    },3000)
}