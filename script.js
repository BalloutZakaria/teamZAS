searchForm = document.querySelector('.search-form');
document.querySelector('#search-btn').onclick = () => {
    searchForm.classList.toggle('active');
}

let subMenu = document.getElementById("subMenu");
function toggleMenu(){
    subMenu.classList.toggle("open-menu");
}


const btns=[
    {
        id: 1,
        name: 'Cars'
    },
    {
        id: 2,
        name: 'tiyara'
    },
    {
        id: 3,
        name: 'bateau'
    },
    {
        id: 4,
        name: 'sperdila'
    },
    {
        id: 5,
        name: 'm3rftsh'
    },
    {
        id: 6,
        name: 'shoflhih'
    },
]