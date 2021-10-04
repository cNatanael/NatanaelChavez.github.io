const open = document.getElementById('open');
const modal_container = document.getElementById('modal_container');
const close = document.getElementById('close');

open.addEventListener('click', () => {
  modal_container.classList.add('show');  
});

close.addEventListener('click', () => {
  modal_container.classList.remove('show');
});


const opening = document.getElementById('opening');
const modal_containerr = document.getElementById('modal_containerr');
const closening = document.getElementById('closening');

opening.addEventListener('click', () => {
  modal_containerr.classList.add('show');  
});

closening.addEventListener('click', () => {
  modal_containerr.classList.remove('show');
});