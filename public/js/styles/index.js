const dashboard = document.querySelectorAll('#dashboard')
const Dashboardcontainer = document.getElementById('Dashboardcontainer')
const Listcontainer = document.getElementById('Listcontainer')
const List = document.querySelectorAll('#List')
const containerIcons = document.querySelectorAll('#containerIcons')




// Dashboardcontainer.onmouseover = ()=> {
//     dashboard.style.display = 'block'
// }

// Dashboardcontainer.onmouseout = ()=> {
//     dashboard.style.display = 'none'
// }

// Listcontainer.onmouseover = ()=> {
//     dashboard.style.display = 'block'
// }

// Dashboardcontainer.onmouseout = ()=> {
//     List.style.display = 'none'
// }

for (let i = 0; i < containerIcons.length; i++) {
    containerIcons[i].onmouseover = ()=> {
        dashboard[i].style.display = 'block'
        // List[i].style.display = 'block'
    }
    
    containerIcons[i].onmouseout = ()=> {
        dashboard[i].style.display = 'none'
        // List[i].style.display = 'none'
    }
    
}


