let navbar = document.querySelector('.navigation_bar .navbar');
// let navigationanimation = document.getElementById('navigation_bar');

document.querySelector('#menu-btn').onclick = () =>{
  navbar.classList.toggle('active');
}

document.querySelectorAll('.about .image-container .controls .control-btn').forEach(btn => {
  btn.onclick = () =>{
    let src = btn.getAttribute('data-src');
    document.querySelector('.about .image-container img').src = src;
  }
});

function navcolor() {
  let navigationanimation = document.getElementById('navbar_color');
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    // navigation background color rgba 
    navigationanimation.style.backgroundColor = "rgba(160, 132, 119, 0.9)";
    // transition
    navigationanimation.style.transition = "all 0.2s ease";
  }
  else {
    navigationanimation.style.backgroundColor = "transparent";
  }
}

window.onscroll = function() {navcolor()};


// create dropdown menu
let dropdown = document.getElementsByClassName('menu_dropdown')[0];
let dropdownBtn = document.getElementsByClassName('menu-button')[0];

// dropdown menu on hover, visibility on
dropdownBtn.onmouseover = function() {
  dropdown.style.visibility = "visible";
}

// dropdown menu on click, visibility off
dropdownBtn.onclick = function() {
  dropdown.style.visibility = "hidden";
}


// create dropdown menu
let dropdown2 = document.getElementsByClassName('profiledropdown')[0];
let dropdownBtn2 = document.getElementsByClassName('profilelogo')[0];

// dropdown menu on hover, visibility on
dropdownBtn2.onmouseover = function() {
  dropdown2.style.visibility = "visible";
}

// dropdown menu on click, visibility off
dropdownBtn2.onclick = function() {
  dropdown2.style.visibility = "hidden";
}


function loader(){
  document.querySelector('.loader-container').classList.add('active');
}

function fadeOut(){
  setTimeout(loader, 3000);

}

window.onload = fadeOut;


let popup = document.getElementById("popup");

      function openPopup() {
        popup.classList.add("open-popup");
      }
      function closePopup() {
        popup.classList.remove("open-popup");
      }

      // background popup
      let container_popup = document.querySelector(".container_popup");
      let btn_popup = document.querySelector(".btn_popup");

      btn_popup.addEventListener("click", function () {
        container_popup.classList.add("active");
      });

      // close popup
      let btn_remove = document.querySelector(".btn-remove");
      btn_remove.addEventListener("click", function () {
        container_popup.classList.remove("active");
      });


