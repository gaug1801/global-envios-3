let btn = document.querySelector('#btn')
let sidebar = document.querySelector('.dropdown-menu')

btn.onclick = function() {
  sidebar.classList.toggle('active');
};