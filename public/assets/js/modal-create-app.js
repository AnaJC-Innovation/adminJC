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

      if (input.required && !input.value.trim()) {

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
document.getElementById('formAdministrador').addEventListener('submit', async function (e) {
  e.preventDefault();

  const form = this;
  const formData = new FormData(form);

  try {
      const response = await fetch('administradores/Guardar', {
          method: 'POST',
          headers: {
              'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
              'Accept': 'application/json'
          },
          body: formData
      });

      const data = await response.json();

      if (data.success) {
        const modalElement = document.getElementById('createApp');
        const modal = bootstrap.Modal.getInstance(modalElement);

        if (modal) {
            modal.hide();
        }
        Swal.fire({
            icon: 'success',
            title: '¡Guardado correctamente!',
            text: data.message || 'El administrador se guardó correctamente.',
            confirmButtonText: 'Aceptar'
        }).then((result) => {

            if (result.isConfirmed) {
                window.location.reload();
            }

        });

      } else {
          alert(data.message || 'Ocurrió un error al guardar.');
      }

  } catch (error) {
      console.error(error);
      alert('Error al enviar el formulario.');
  }
});