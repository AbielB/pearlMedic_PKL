const sidebarmenu = document.querySelector(".adminmenu");
const tombolmenu = document.querySelector("#menu-btn");
const tombolclose = document.querySelector("#close-btn");


// buka sidebar
tombolmenu.addEventListener('click', () => {
    sidebarmenu.style.display = 'block';
})
// tutup sidebar
tombolclose.addEventListener('click', () => {
    sidebarmenu.style.display = 'none';
})



