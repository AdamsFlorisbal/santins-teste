const btnMobile = document.getElementById('btn-mobile');

function toggleMenu(event) {
  if (event.type === 'touchstart') event.preventDefault();
  const nav = document.getElementById('nav');
  nav.classList.toggle('active');
  const active = nav.classList.contains('active');
  event.currentTarget.setAttribute('aria-expanded', active);
  if (active) {
    event.currentTarget.setAttribute('aria-label', 'Fechar Menu');
  } else {
    event.currentTarget.setAttribute('aria-label', 'Abrir Menu');
  }
}

btnMobile.addEventListener('click', toggleMenu);
btnMobile.addEventListener('touchstart', toggleMenu);

$(function() {
  $('#login-show').click(function() {
    $('#login-modal').fadeIn().css("display", "flex");
  });

  $('.close-modal').click(function() {
    $('#login-modal').fadeOut();
  });
});


function local(){
  let email = document.getElementById('email').value
  let convertData = JSON.stringify(email)
  localStorage.setItem('lead', convertData)  
}


