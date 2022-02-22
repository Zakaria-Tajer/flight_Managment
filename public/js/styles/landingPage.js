const btn = document.getElementById('btn')
const down = document.getElementById('down')
const show_nav = document.getElementById('show_nav')
const DropMenu = document.getElementById('DropMenu')
const showMenu = document.getElementById('showMenu')
const showMenus = document.getElementById('showMenus')
const plus = document.querySelectorAll('#plus')
const minus = document.querySelectorAll('#minus')
const Chevronup = document.getElementById('Chevronup')

btn.onclick = ()=> {
    show_nav.classList.toggle('active')
    if(show_nav.classList.contains('active')){

        show_nav.style.display = 'block'
    }else if(show_nav.style.display = 'block'){
        show_nav.style.display = 'none'

    }
    
}

down.onclick = ()=> {
    
    showMenu.classList.toggle('active')
    showMenus.classList.toggle('active')
    console.log(1)
    Chevronup.style.display = 'flex'
    down.style.display = 'none'
}
Chevronup.onclick = ()=> {
    
    showMenu.classList.toggle('active')
    showMenus.classList.toggle('active')
    console.log(1)
    down.style.display = 'flex'
    Chevronup.style.display = 'none'
}


countMENu = 1
countMENuChild = 1
for (let i = 0; i < plus.length; i++) {
    plus[0].onclick = ()=> {
        countMENu+=1
        document.getElementById('adults').innerHTML = countMENu
        document.getElementById('Mainadults').innerHTML = countMENu + countMENuChild
        console.log(countMENu)
    }
    
    minus[0].onclick = ()=> {
            countMENu-=1
            if(countMENu < 1){
                countMENu=1
            }else {
                document.getElementById('adults').innerHTML = countMENu
                document.getElementById('Mainadults').innerHTML = countMENu
            }
        // console.log(countMENu)
    }
    plus[1].onclick = ()=> {
        countMENuChild+=1
        document.getElementById('Children').innerHTML = countMENuChild
        document.getElementById('Mainadults').innerHTML = countMENuChild + countMENu
        console.log(countMENuChild)
    }
    
    minus[1].onclick = ()=> {
        countMENuChild-=1
        if(countMENuChild < 1){
            countMENuChild=1
        }else {
            document.getElementById('Children').innerHTML = countMENuChild
            document.getElementById('Mainadults').innerHTML = countMENuChild
            // console.log(countMENu)
        }
    }
    
    
}