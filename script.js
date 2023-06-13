searchForm = document.querySelector('.search-form');
document.querySelector('#search-btn').onclick = () => {
    searchForm.classList.toggle('active');
}






window.onscroll = () =>{
    searchForm.classList.remove('active');
    if(window.scrollY > 80){
        document.querySelector('.header .header-1').classList.add('active');
     }else{
        document.querySelector('.header .header-1').classList.add('active');
     }
}