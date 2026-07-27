/**
 * Dashboard Analytics
 */

'use strict';

(function () {
  let cardColor, headingColor, fontFamily, labelColor;
  cardColor = config.colors.cardColor;
  labelColor = config.colors.textMuted;
  headingColor = config.colors.headingColor;

  // swiper loop and autoplay
  // --------------------------------------------------------------------
  const swiperWithPagination = document.querySelector('#swiper-with-pagination-cards');
  if (swiperWithPagination) {
    new Swiper(swiperWithPagination, {
      loop: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false
      },
      pagination: {
        clickable: true,
        el: '.swiper-pagination'
      }
    });
  }

  // Average Daily Sales
  // --------------------------------------------------------------------
  const averageDailySalesEl = document.querySelector('#averageDailySales'),
    averageDailySalesConfig = {
      chart: {
        height: 105,
        type: 'area',
        toolbar: {
          show: false
        },
        sparkline: {
          enabled: true
        }
      },
      markers: {
        colors: 'transparent',
        strokeColors: 'transparent'
      },
      grid: {
        show: false
      },
      colors: [config.colors.success],
      fill: {
        type: 'gradient',
        gradient: {
          shadeIntensity: 1,
          opacityFrom: 0.4,
          gradientToColors: [config.colors.cardColor],
          opacityTo: 0.1,
          stops: [0, 100]
        }
      },
      dataLabels: {
        enabled: false
      },
      stroke: {
        width: 2,
        curve: 'smooth'
      },
      series: [
        {
          data: [500, 160, 930, 670]
        }
      ],
      xaxis: {
        show: true,
        lines: {
          show: false
        },
        labels: {
          show: false
        },
        stroke: {
          width: 0
        },
        axisBorder: {
          show: false
        }
      },
      yaxis: {
        stroke: {
          width: 0
        },
        show: false
      },
      tooltip: {
        enabled: false
      },
      responsive: [
        {
          breakpoint: 1387,
          options: {
            chart: {
              height: 80
            }
          }
        },
        {
          breakpoint: 1200,
          options: {
            chart: {
              height: 123
            }
          }
        }
      ]
    };
  if (typeof averageDailySalesEl !== undefined && averageDailySalesEl !== null) {
    const averageDailySales = new ApexCharts(averageDailySalesEl, averageDailySalesConfig);
    averageDailySales.render();
  }

  // Earning Reports Bar Chart
  // --------------------------------------------------------------------
  const weeklyEarningReportsEl = document.querySelector('#weeklyEarningReports'),
    weeklyEarningReportsConfig = {
      chart: {
        height: 161,
        parentHeightOffset: 0,
        type: 'bar',
        toolbar: {
          show: false
        }
      },
      plotOptions: {
        bar: {
          barHeight: '60%',
          columnWidth: '38%',
          startingShape: 'rounded',
          endingShape: 'rounded',
          borderRadius: 4,
          distributed: true
        }
      },
      grid: {
        show: false,
        padding: {
          top: -30,
          bottom: 0,
          left: -10,
          right: -10
        }
      },
      colors: [
        config.colors_label.primary,
        config.colors_label.primary,
        config.colors_label.primary,
        config.colors_label.primary,
        config.colors.primary,
        config.colors_label.primary,
        config.colors_label.primary
      ],
      dataLabels: {
        enabled: false
      },
      series: [
        {
          data: [40, 65, 50, 45, 90, 55, 70]
        }
      ],
      legend: {
        show: false
      },
      xaxis: {
        categories: ['Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su'],
        axisBorder: {
          show: false
        },
        axisTicks: {
          show: false
        },
        labels: {
          style: {
            colors: labelColor,
            fontSize: '13px',
            fontFamily: fontFamily
          }
        }
      },
      yaxis: {
        labels: {
          show: false
        }
      },
      tooltip: {
        enabled: false
      },
      responsive: [
        {
          breakpoint: 1025,
          options: {
            chart: {
              height: 199
            }
          }
        }
      ],
      states: {
        hover: {
          filter: {
            type: 'none'
          }
        },
        active: {
          filter: {
            type: 'none'
          }
        }
      }
    };
  if (typeof weeklyEarningReportsEl !== undefined && weeklyEarningReportsEl !== null) {
    const weeklyEarningReports = new ApexCharts(weeklyEarningReportsEl, weeklyEarningReportsConfig);
    weeklyEarningReports.render();
  }

  // Support Tracker - Radial Bar Chart
  // --------------------------------------------------------------------
  const supportTrackerEl = document.querySelector('#supportTracker'),
    supportTrackerOptions = {
      series: [85],
      labels: ['Completed Task'],
      chart: {
        height: 337,
        type: 'radialBar'
      },
      plotOptions: {
        radialBar: {
          offsetY: 10,
          startAngle: -140,
          endAngle: 130,
          hollow: {
            size: '65%'
          },
          track: {
            background: cardColor,
            strokeWidth: '100%'
          },
          dataLabels: {
            name: {
              offsetY: -20,
              color: labelColor,
              fontSize: '13px',
              fontWeight: '400',
              fontFamily: fontFamily
            },
            value: {
              offsetY: 10,
              color: headingColor,
              fontSize: '38px',
              fontWeight: '400',
              fontFamily: fontFamily
            }
          }
        }
      },
      colors: [config.colors.primary],
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'dark',
          shadeIntensity: 0.5,
          gradientToColors: [config.colors.primary],
          inverseColors: true,
          opacityFrom: 1,
          opacityTo: 0.6,
          stops: [30, 70, 100]
        }
      },
      stroke: {
        dashArray: 10
      },
      grid: {
        padding: {
          top: -20,
          bottom: 5
        }
      },
      states: {
        hover: {
          filter: {
            type: 'none'
          }
        },
        active: {
          filter: {
            type: 'none'
          }
        }
      },
      responsive: [
        {
          breakpoint: 1025,
          options: {
            chart: {
              height: 330
            }
          }
        },
        {
          breakpoint: 769,
          options: {
            chart: {
              height: 280
            }
          }
        }
      ]
    };
  if (typeof supportTrackerEl !== undefined && supportTrackerEl !== null) {
    const supportTracker = new ApexCharts(supportTrackerEl, supportTrackerOptions);
    supportTracker.render();
  }

  // Total Earning Chart - Bar Chart
  // --------------------------------------------------------------------
  const totalEarningChartEl = document.querySelector('#totalEarningChart'),
    totalEarningChartOptions = {
      chart: {
        height: 175,
        parentHeightOffset: 0,
        stacked: true,
        type: 'bar',
        toolbar: { show: false }
      },
      series: [
        {
          name: 'Earning',
          data: [300, 200, 350, 150, 250, 325, 250, 270]
        },
        {
          name: 'Expense',
          data: [-180, -225, -180, -280, -125, -200, -125, -150]
        }
      ],
      tooltip: {
        enabled: false
      },
      plotOptions: {
        bar: {
          horizontal: false,
          columnWidth: '40%',
          borderRadius: 7,
          startingShape: 'rounded',
          endingShape: 'rounded',
          borderRadiusApplication: 'around',
          borderRadiusWhenStacked: 'last'
        }
      },

      colors: [config.colors.primary, config.colors.secondary],
      dataLabels: {
        enabled: false
      },
      stroke: {
        curve: 'smooth',
        width: 5,
        lineCap: 'round',
        colors: [cardColor]
      },
      legend: {
        show: false
      },
      colors: [config.colors.primary, config.colors.secondary],
      fill: {
        opacity: 1
      },
      grid: {
        show: false,
        padding: {
          top: -40,
          bottom: -40,
          left: -10,
          right: -2
        }
      },
      xaxis: {
        labels: {
          show: false
        },
        axisTicks: {
          show: false
        },
        axisBorder: {
          show: false
        }
      },
      yaxis: {
        labels: {
          show: false
        }
      },
      responsive: [
        {
          breakpoint: 1700,
          options: {
            plotOptions: {
              bar: {
                columnWidth: '43%'
              }
            }
          }
        },
        {
          breakpoint: 1441,
          options: {
            plotOptions: {
              bar: {
                columnWidth: '50%'
              }
            }
          }
        },
        {
          breakpoint: 1300,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 6,
                columnWidth: '60%'
              }
            }
          }
        },
        {
          breakpoint: 1200,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 6,
                columnWidth: '30%'
              }
            }
          }
        },
        {
          breakpoint: 991,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 6,
                columnWidth: '35%'
              }
            }
          }
        },
        {
          breakpoint: 850,
          options: {
            plotOptions: {
              bar: {
                columnWidth: '50%'
              }
            }
          }
        },
        {
          breakpoint: 768,
          options: {
            plotOptions: {
              bar: {
                columnWidth: '30%'
              }
            }
          }
        },
        {
          breakpoint: 476,
          options: {
            plotOptions: {
              bar: {
                columnWidth: '43%'
              }
            }
          }
        },
        {
          breakpoint: 394,
          options: {
            plotOptions: {
              bar: {
                columnWidth: '58%'
              }
            }
          }
        }
      ],
      states: {
        hover: {
          filter: {
            type: 'none'
          }
        },
        active: {
          filter: {
            type: 'none'
          }
        }
      }
    };
  if (typeof totalEarningChartEl !== undefined && totalEarningChartEl !== null) {
    const totalEarningChart = new ApexCharts(totalEarningChartEl, totalEarningChartOptions);
    totalEarningChart.render();
  }

  //  For Datatable
  // --------------------------------------------------------------------
  const dt_project_table = document.querySelector('.datatable-project');

  if (dt_project_table) {
    let tableTitle = document.createElement('h5');
    tableTitle.classList.add('card-title', 'mb-0', 'text-md-start', 'text-center', 'pt-md-0', 'pt-6');
    tableTitle.innerHTML = 'Administradores';
    var dt_project = new DataTable(dt_project_table, {
      ajax: {
        url: '/administradores/data',
        type: 'GET',
        dataSrc: ''
      },
      columns: [
        { data: 'id' },
        { data: 'id', orderable: false, render: DataTable.render.select() },
        { data: 'logo' },
        { data: 'cliente' },
        { data: 'user' },
        { data: 'password' },
        { data: 'id' }
      ],
      columnDefs: [
        {
          // For Responsive
          className: 'control',
          searchable: false,
          orderable: false,
          responsivePriority: 2,
          targets: 0,
          render: function (data, type, full, meta) {
            return '';
          }
        },
        {
          project_img: { data: 'logo' },
          render: function (data, type, full, meta) {
            return '<img src="http://127.0.0.1:8000/assets/img/avatars/1.png" alt="Avatar" class="rounded-circle">';
          }
        },
        {
          cliente: { data: 'cliente' },
          render: function (data, type, full, meta) {
            return '<span class="text-heading">' + data + '</span>';
          }
        },
        {
          user: { data: 'user' },
          render: function (data, type, full, meta) {
            return '<span class="text-heading">' + data + '</span>';
          }
        },
        {
          password: { data: 'password' },
          render: function (data, type, full, meta) {
            return '<span class="text-heading">' + data + '</span>';
          }
        },
        {
          id: { data: 'id' },
          render: function (data, type, full, meta) {
            return '<span class="text-heading">' + data + '</span>';
          }
        },
        {
          // Actions
          targets: -1,
          searchable: false,
          title: 'Action',
          orderable: false,
          render: function (data, type, full, meta) {
            return (
              '<div class="d-inline-block">' +
              '<a href="javascript:;" class="btn btn-icon btn-text-secondary waves-effect rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="icon-base ti tabler-dots-vertical icon-22px"></i></a>' +
              '<div class="dropdown-menu dropdown-menu-end m-0">' +
              '<a href="javascript:;" class="dropdown-item">Details</a>' +
              '<a href="javascript:;" class="dropdown-item">Archive</a>' +
              '<div class="dropdown-divider"></div>' +
              '<a href="javascript:;" class="dropdown-item text-danger delete-record">Delete</a>' +
              '</div>' +
              '</div>'
            );
          }
        }
      ],
      select: {
        style: 'multi',
        selector: 'td:nth-child(2)'
      },
      order: [[2, 'desc']],
      layout: {
        topStart: {
          rowClass: 'row mx-md-3 my-0 justify-content-between',
          features: [tableTitle]
        },
        topEnd: {
          search: {
            placeholder: 'Search Project',
            text: '_INPUT_'
          }
        },
        bottomStart: {
          rowClass: 'row mx-3 justify-content-between',
          features: ['info']
        },
        bottomEnd: 'paging'
      },
      displayLength: 5,
      language: {
        paginate: {
          next: '<i class="icon-base ti tabler-chevron-right scaleX-n1-rtl icon-18px"></i>',
          previous: '<i class="icon-base ti tabler-chevron-left scaleX-n1-rtl icon-18px"></i>',
          first: '<i class="icon-base ti tabler-chevrons-left scaleX-n1-rtl icon-18px"></i>',
          last: '<i class="icon-base ti tabler-chevrons-right scaleX-n1-rtl icon-18px"></i>'
        }
      },
      // For responsive popup
      responsive: {
        details: {
          display: DataTable.Responsive.display.modal({
            header: function (row) {
              const data = row.data();
              return 'Details of ' + data['project_name'];
            }
          }),
          type: 'column',
          renderer: function (api, rowIdx, columns) {
            const data = columns
              .map(function (col) {
                return col.title !== '' // Do not show row in modal popup if title is blank (for check box)
                  ? `<tr data-dt-row="${col.rowIndex}" data-dt-column="${col.columnIndex}">
                      <td>${col.title}:</td>
                      <td>${col.data}</td>
                    </tr>`
                  : '';
              })
              .join('');

            if (data) {
              const div = document.createElement('div');
              div.classList.add('table-responsive');
              const table = document.createElement('table');
              div.appendChild(table);
              table.classList.add('table');
              const tbody = document.createElement('tbody');
              tbody.innerHTML = data;
              table.appendChild(tbody);
              return div;
            }
            return false;
          }
        }
      }
    });
    //? The 'delete-record' class is necessary for the functionality of the following code.
    document.addEventListener('click', function (e) {
      if (e.target.classList.contains('delete-record')) {
        dt_project.row(e.target.closest('tr')).remove().draw();
        const modalEl = document.querySelector('.dtr-bs-modal');
        if (modalEl && modalEl.classList.contains('show')) {
          const modal = bootstrap.Modal.getInstance(modalEl);
          modal?.hide();
        }
      }
    });
  }




  // Filter form control to default size
  // ? setTimeout used for project-list table initialization
  setTimeout(() => {
    const elementsToModify = [
      { selector: '.dt-search .form-control', classToRemove: 'form-control-sm' },
      { selector: '.dt-length .form-select', classToRemove: 'form-select-sm', classToAdd: 'ms-0' },
      { selector: '.dt-length', classToAdd: 'mb-md-6 mb-0' },
      { selector: '.dt-buttons', classToAdd: 'justify-content-center' },
      { selector: '.dt-layout-table', classToRemove: 'row mt-2' },
      { selector: '.dt-layout-end', classToAdd: 'gap-md-2 gap-0 mt-0' },
      { selector: '.dt-layout-full', classToRemove: 'col-md col-12', classToAdd: 'table-responsive' }
    ];

    // Delete record
    elementsToModify.forEach(({ selector, classToRemove, classToAdd }) => {
      document.querySelectorAll(selector).forEach(element => {
        if (classToRemove) {
          classToRemove.split(' ').forEach(className => element.classList.remove(className));
        }
        if (classToAdd) {
          classToAdd.split(' ').forEach(className => element.classList.add(className));
        }
      });
    });
  }, 100);
})();
function cargarAdministradores() {
  $.ajax({
    url: "/administradores/data",
    success: function (response) {
      pintarCards(response);
    }
  });
}
function verDetallesAdministrador(admin) {
  if (
    !admin.descripcionelearning &&
    !admin.checklistelearning &&
    !admin.descripcionApp &&
    !admin.checklistApp &&
    !admin.descripcionWeb &&
    !admin.checklistWeb
  ) {
    return;
  } else {
    // Mostrar modal
    $('#detallesAdministrador').modal('show');

    $('#detallesAdministrador .titulo').text('Detalles del administrador');
    $('#detallesAdministrador .instrucciones').text('Aqui se muestran los detalles/Checklist del administrador');

    for (const key in admin) {
      if (admin[key] !== '' && key != 'id' && key != 'logo' && key != 'cliente' && key != 'user' && key != 'password' && key != 'url' && key != 'activo' && key != 'updated_at' && key != 'created_at' && key != 'checklistelearning' && key != 'checklistApp' && key != 'checklistWeb') {
        let titulo = key;
        let descripcion = '';
        let checklist = '';
        if (key === 'descripcionelearning') {
          titulo = 'Elearning';
          descripcion = admin.descripcionelearning;
          checklist = admin.checklistelearning;
        } else if (key === 'descripcionApp') {
          titulo = 'App';
          descripcion = admin.descripcionApp;
          checklist = admin.checklistApp;
        } else if (key === 'descripcionWeb') {
          titulo = 'Web';
          descripcion = admin.descripcionWeb;
          checklist = admin.checklistWeb;
        }

        const stepperHeader = `
        <div class="step" data-target="#${titulo}">
          <button type="button" class="step-trigger">
            <span class="bs-stepper-circle"><i class="icon-base ti tabler-file-text icon-md"></i></span>
            <span class="bs-stepper-label">
              <span class="bs-stepper-title text-uppercase">${titulo}</span>
              <span class="bs-stepper-subtitle">Ingrese los datos generales.</span>
            </span>
          </button>
        </div>
        `;
        $('#detallesAdministrador .stepperHeader').append(stepperHeader);

        const stepperContent = `
          <div id="${titulo}" class="content pt-4 pt-lg-0">
             <div class="mb-6">
               <label for="exampleInputEmail1" class="form-label">Descripción del ${titulo}</label>
               <textarea class="form-control" rows="3" disabled>${descripcion}</textarea>
             </div>
             <div class="mb-6">
               <label for="exampleInputEmail1" class="form-label">Checklist del ${titulo}</label>
               <textarea class="form-control" rows="3" disabled>${checklist}</textarea>
             </div>
             <div class="col-12 d-flex justify-content-between mt-6">
               <button class="btn btn-label-secondary btn-anterior" disabled>
                 <i class="icon-base ti tabler-arrow-left icon-xs me-sm-2 me-0"></i>
                 <span class="align-middle d-sm-inline-block d-none">Anterior</span>
               </button>
               <button class="btn btn-primary btn-siguiente" type="button">
                 <span class="align-middle d-sm-inline-block d-none me-sm-2">Siguiente</span>
                 <i class="icon-base ti tabler-arrow-right icon-xs"></i>
               </button>
             </div>
          </div>
        `;
        $('#detallesAdministrador .stepperContent').append(stepperContent);
      }
    }
  }
}

function pintarCards(datos) {
  let html = '';
  datos.forEach(admin => {
    html += `
    <div class="card mb-3 col-md-4 col-3 col-sm-6">
      <div class="card-header text-center p-4">
        <img src="./logos/${admin.logo}" alt="Logo" class="img-fluid">
      </div>
      <div class="card-body text-center p-4">
        <h5 class="card-title">${admin.cliente}</h5>
        <p class="card-text">Super Administrador</p>
        <p class="card-text">${admin.user}</p>
      </div>
      <div class="card-footer text-center p-4">
        <button class="btn btn-primary w-100 mb-2" onclick="ingresarAdministradorURL('${admin.url}')">
          <i class="ti tabler-login icon-base"></i> Ingresar
        </button>
        ${admin.descripcionelearning != '' ||
        admin.checklistelearning != '' ||
        admin.descripcionApp != '' ||
        admin.checklistApp != '' ||
        admin.descripcionWeb != '' ||
        admin.checklistWeb != ''
        ? `
              <button class="btn btn-outline-primary w-100 mb-2" onclick='verDetallesAdministrador(${JSON.stringify(admin)})'>
                <i class="ti tabler-eye icon-base"></i> Ver detalles
              </button>
            `
        : ''
      }
      </div>
    </div>
  `;
  });
  $('#contenedorAdministradores').html(html);
}
$(function () {
  cargarAdministradores();
});


'use strict';

let wizardDetails = null;

// ===============================
// Inicializar Stepper
// ===============================
function inicializarWizardDetalles() {

  const wizard = document.querySelector('#wizard-details');

  if (!wizard) return;

  if (wizardDetails) {
    wizardDetails.destroy();
  }

  wizardDetails = new Stepper(wizard, {
    linear: false,
    animation: true
  });

}

// ===============================
// Obtener pasos dinámicamente
// ===============================
function obtenerPasos() {
  return [...document.querySelectorAll('#wizard-details .content')];
}

// ===============================
// Validar paso actual
// ===============================
function validarPasoActual() {

  const pasos = obtenerPasos();

  if (!pasos.length) return true;

  const paso = pasos[wizardDetails._currentIndex];

  if (!paso) return true;

  let valido = true;

  paso.querySelectorAll('input, textarea, select').forEach(input => {

    // Ignorar campos deshabilitados
    if (input.disabled) return;

    // Ignorar checkbox opcionales
    if (input.type === 'checkbox' && !input.required) return;

    const valor = input.value ? input.value.trim() : '';

    if (input.required && valor === '') {

      input.classList.add('is-invalid');
      valido = false;

    } else {

      input.classList.remove('is-invalid');

    }

  });

  return valido;

}

// ===============================
// Cuando se abre el modal
// ===============================
$('#detallesAdministrador').on('shown.bs.modal', function () {

  inicializarWizardDetalles();

});

// ===============================
// Botón siguiente
// ===============================
$(document).off('click', '.btn-siguiente').on('click', '.btn-siguiente', function (e) {

  e.preventDefault();

  if (!wizardDetails) return;

  if (validarPasoActual()) {

    wizardDetails.next();

  } else {

    const primerError = document.querySelector('#wizard-details .is-invalid');

    if (primerError) {
      primerError.focus();
    }

  }

});

// ===============================
// Botón anterior
// ===============================
$(document).off('click', '.btn-anterior').on('click', '.btn-anterior', function (e) {

  e.preventDefault();

  if (!wizardDetails) return;

  wizardDetails.previous();

});

// ===============================
// Bloquear click en los headers
// ===============================
$(document).off('click', '#wizard-details .step-trigger').on('click', '#wizard-details .step-trigger', function (e) {

  if (!wizardDetails) return;

  const pasos = obtenerPasos();

  const step = $(this).closest('.step')[0];

  const indice = $('#wizard-details .step').index(step);

  if (indice > wizardDetails._currentIndex) {

    if (!validarPasoActual()) {

      e.preventDefault();
      e.stopPropagation();

      const primerError = document.querySelector('#wizard-details .is-invalid');

      if (primerError) {
        primerError.focus();
      }

      return false;
    }

  }

});