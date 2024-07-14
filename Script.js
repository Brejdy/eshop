 /*DROP DOWN PRO LOGIN A REGISTRACI*/
 function myFunction() {
    document.getElementById("dropdown").classList.toggle("show");
};

function myFunction1() {
    document.getElementById("dropdown1").classList.toggle("show");
};

//SORT
window.addEventListener('DOMContentLoaded', (event) => {
  const sortSelect = document.getElementById('sort-select');
  const sortLinks = document.querySelectorAll('#sort-links a');

  sortLinks.forEach((link) => {
      const option = document.createElement('option');
      option.value = link.href;
      option.text = link.textContent;
      option.selected = link.classList.contains('active');
      sortSelect.appendChild(option);
  });

  sortSelect.addEventListener('change', (event) => {
      window.location.href = event.target.value;
  });
});

//OVERLAY MENU
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}

//SIDEBAR přenos
window.addEventListener('DOMContentLoaded', function() {
var sidebarContent = document.querySelector('.sidebar').innerHTML;
document.querySelector('.sidebar-mobile').innerHTML = sidebarContent;
});

//Accordion
function Accordion(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("show") == -1) {
    x.className += "-show";
  } else { 
    x.className = x.className.replace("-show", "");
  }
}