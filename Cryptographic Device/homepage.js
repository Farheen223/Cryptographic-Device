const previous = document.getElementById('previousbtn')
const next = document.getElementById('nextbtn')
const eventlist = document.getElementById('eventlist')
const Width = 150
const padding = 10

previous.addEventListener('click',()=>{
    eventlist.scrollLeft -= (Width + padding)
})
next.addEventListener('click',()=>{
    eventlist.scrollLeft += (Width + padding)
})
