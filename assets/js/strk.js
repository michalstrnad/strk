
// animace hamburgeru
document.querySelector('.navbar-toggler').addEventListener('click', function () {

    document.querySelector('.animated-icon3').classList.toggle('open');

    document.querySelector('#navbarToggleExternalContent11').classList.toggle('show');
    });

// aktuální rok do copyrightu
const year = new Date().getFullYear();
document.querySelector("#year").innerHTML = year;
