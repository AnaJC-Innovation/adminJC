/**
 *  Modal Example Create App
 */

'use strict';


const switchElearning = document.getElementById('activoElearning');
const contenedor = document.getElementById('datosElearning');
const switchApp = document.getElementById('activoApp');
const contenedorApp = document.getElementById('datosApp');
const switchPlataforma = document.getElementById('activoPlataforma');
const contenedorPlataforma = document.getElementById('datosPlataforma');

const campos = [
  document.getElementById('urlElearning'),
  document.getElementById('detallesElearning'),
  document.getElementById('checklistElearning')
];

const camposApp = [
  document.getElementById('detallesApp'),
  document.getElementById('checklistApp')
];

const camposPlataforma = [
  document.getElementById('detallesPlataforma'),
  document.getElementById('checklistPlataforma')
];

function actualizarElearning() {
  if (switchElearning.checked) {
    contenedor.style.display = 'block';
    campos.forEach(campo => {
      campo.required = true;
    });
  } else {
    contenedor.style.display = 'none';
    campos.forEach(campo => {
      campo.required = false;
      campo.value = '';
    });
  }
}

function actualizarApp() {
  if (switchApp.checked) {
    contenedorApp.style.display = 'block';
    camposApp.forEach(campo => {
      campo.required = true;
    });
  } else {
    contenedorApp.style.display = 'none';
    camposApp.forEach(campo => {
      campo.required = false;
      campo.value = '';
    });
  }
}

function actualizarPlataforma() {
  if (switchPlataforma.checked) {
    contenedorPlataforma.style.display = 'block';

    camposPlataforma.forEach(campo => {
      campo.required = true;
    });
  } else {
    contenedorPlataforma.style.display = 'none';

    camposPlataforma.forEach(campo => {
      campo.required = false;
      campo.value = '';
    });
  }
}
// Estado inicial
actualizarElearning();
actualizarApp();
actualizarPlataforma();

// Cambio del switch
switchElearning.addEventListener('change', actualizarElearning);
switchApp.addEventListener('change', actualizarApp);
switchPlataforma.addEventListener('change', actualizarPlataforma);

document.addEventListener('DOMContentLoaded', function () {

  const wizard = document.querySelector('#wizard-create-app');
  const stepper = new Stepper(wizard, {
    linear: true,
    animation: true
  });

  const steps = [
    'details',
    'frameworks',
    'database',
    'billing',
    'plataforma'
  ];

  function validarPassword() {
    const password = document.getElementById('contrasenia');
    const error = document.getElementById('passwordError');

    // Mínimo 8 caracteres, al menos una letra y un número, solo alfanumérico
    const regex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;

    const valido = regex.test(password.value);

    if (valido) {
      password.classList.remove('is-invalid');
      password.classList.add('is-valid');
      error.classList.add('d-none');
    } else {
      password.classList.remove('is-valid');
      password.classList.add('is-invalid');
      error.classList.remove('d-none');
    }

    return valido;
  }

  password.addEventListener('input', validarPassword);
  // Validar campos del paso actual
  function validarPaso(stepId) {

    const paso = document.getElementById(stepId);
    const inputs = paso.querySelectorAll('input, textarea, select');

    let valido = true;

    inputs.forEach(input => {

      // Ignorar checkbox que no sean obligatorios
      if (input.type === 'checkbox' && !input.required) {
        return;
      }

      // Validación para la contraseña
      if (input.id === 'contrasenia') {

        const regex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]+$/;

        if (!regex.test(input.value)) {
          input.classList.add('is-invalid');
          input.classList.remove('is-valid');
          valido = false;
        } else {
          input.classList.remove('is-invalid');
          input.classList.add('is-valid');
        }

      } else if (input.required && !input.value.trim()) {

        input.classList.add('is-invalid');
        valido = false;

      } else {

        input.classList.remove('is-invalid');

      }
    });

    return valido;
  }


  // Botones siguiente
  document.querySelectorAll('.btn-next').forEach(btn => {

    btn.addEventListener('click', function (e) {

      const pasoActual = steps[stepper._currentIndex];

      if (validarPaso(pasoActual)) {

        stepper.next();

      } else {

        e.preventDefault();

        const primerError = document.querySelector('.is-invalid');

        if (primerError) {
          primerError.focus();
        }
      }

    });

  });


  // Botones anterior
  document.querySelectorAll('.btn-prev').forEach(btn => {

    btn.addEventListener('click', function () {
      stepper.previous();
    });

  });

  // Bloquear cambio directo desde los tabs superiores
  document.querySelectorAll('.step-trigger').forEach((tab, index) => {

    tab.addEventListener('click', function (e) {

      const pasoActual = steps[stepper._currentIndex];

      // Si intenta saltar hacia adelante
      if (index > stepper._currentIndex) {

        if (!validarPaso(pasoActual)) {

          e.preventDefault();
          e.stopPropagation();

          const primerError = document.querySelector('.is-invalid');

          if (primerError) {
            primerError.focus();
          }

          return false;
        }
      }

    });

  });
});