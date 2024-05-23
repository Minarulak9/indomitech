window.addEventListener('load',()=>{
    const loader = document.querySelector('#loader');
    setTimeout(()=>{
        loader.classList.add('fadeOut');
        AOS.init({
            once: true,
        });
    }, 500);
    setTimeout(()=>{
        loader.style.display = 'none';
    }, 1000);
})

const tabs = document.querySelectorAll('.tab');
tabs.forEach((tab)=>{
    tab.addEventListener('click',()=>{
        tabs.forEach((tab)=>{
            tab.classList.remove('active');
        })
        tab.classList.add('active');
        const tabContent = document.querySelector(`.tab-content[data-tab="${tab.id}`);
        const tabContents = document.querySelectorAll(`.tab-content`);
        tabContents.forEach((tabContent)=>{
            tabContent.classList.remove('active');
        })
        tabContent.classList.add('active');
    })
})

const navToggler = document.querySelector('.nav-toggler');
const menus = document.querySelector('.links');
navToggler.addEventListener('click',()=>{
    menus.classList.toggle('active');
    navToggler.classList.toggle('opened');
})


const nav = document.getElementById('navbar');
const hero = document.querySelector('.hero');
const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if(!entry.isIntersecting){
        nav.classList.add('small-nav');
    }else{
        nav.classList.remove('small-nav');
    }
  });
},{
    root: null,
    rootMargin: '0px',
    threshold: 0.90
});
hero && observer.observe(hero);
