//Navigation menu js
    window.addEventListener("scroll", function(){
     var header = document.querySelector("header");
     header.classList.toggle("sticky", window.scrollY > 0);
    });

  function toggleMenu(){
    var menuToggle = document.querySelector('.toggle');
    var menu = document.querySelector('.menu');
    menuToggle.classList.toggle('active');
    menu.classList.toggle('active');
   }




   
const sections = document.querySelectorAll('section');
const navLi = document.querySelectorAll('header ul li');

window.addEventListener('scroll', ()=> {
  let current = '';
  sections.forEach( section =>{
    const sectionTop = section.offsetTop;
    const sectionHeight = section.clientHeight;
    if(pageYOffset >= sectionTop - sectionHeight / 3){
      current = section.getAttribute('id');
    }
  })
  navLi.forEach( li =>{
    li.classList.remove('active');
    if(li.classList.contains(current)){
      li.classList.add('active')
    }
  })
})