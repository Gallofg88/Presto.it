
let containerNavbar = document.querySelector('.container-navbar');
let navbar = document.querySelector('.mynavbar');
let logo = document.querySelector('#logo');
let list = document.querySelectorAll('#list');


window.addEventListener( 'scroll', ()=>{
    let scrolled = window.scrollY;
    // console.log(scrolled);
    
    if (scrolled > 0) {
        containerNavbar.classList.add('sticky-top');
        navbar.style.backgroundColor = 'var(--main2)';
        navbar.classList.add('fadeIn')
        list.forEach((list)=>{
            list.style.color='black'
        })
        
        
    } else {
        containerNavbar.classList.remove('sticky-top');
        navbar.style.backgroundColor = 'var(--grad1)';
        navbar.classList.remove('fadeIn')
        list.forEach((list)=>{
            list.style.color='white'
        })
    }
    
})

   // Funzione per mostrare/nascondere la password
   function togglePassword() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}