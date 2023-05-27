
$(function () {
    'use strict';

    
  
    var dt_basic_table = $('.datatables-basic'),
      dt_date_table = $('.dt-date'),
      dt_complex_header_table = $('.dt-complex-header'),
      dt_row_grouping_table = $('.dt-row-grouping'),
      dt_multilingual_table = $('.dt-multilingual'),
      assetPath = '../../../admin/';
  
    if ($('body').attr('data-framework') === 'laravel') {
      assetPath = $('body').attr('data-asset-path');
    }
  
    // DataTable with buttons
    // --------------------------------------------------------------------
  
    if (dt_basic_table.length) {
      var dt_basic = dt_basic_table.DataTable({
        ajax: assetPath + 'tesoreria/viewtesoreriavali',
        columns: [
            { data: 'id' },
            { data: 'dni' }, // used for sorting so will hide this column
          { data: 'name' },
          { data: 'cel' },
          { data: 'fnac' },
          { data: 'email' },
          { data: '' }
        ],
        columnDefs: [
          
          {
            // Actions
            targets: -1,
            title: 'Actions',
            orderable: false,
            render: function (data, type, full, meta) {
              return (
                '<div class="d-inline-flex">' +
                '<a class="pe-1 dropdown-toggle hide-arrow text-primary" data-bs-toggle="dropdown">' + feather.icons['more-vertical'].toSvg({ class: 'font-small-4' }) +
                '</a>' +

                '<div class="dropdown-menu dropdown-menu-end">' +
                '<a href="javascript:;" class="dropdown-item">' + feather.icons['file-text'].toSvg({ class: 'font-small-4 me-50' }) +
                'Details</a>' +
                '<a href="javascript:;" class="dropdown-item">' + feather.icons['archive'].toSvg({ class: 'font-small-4 me-50' }) +
                'Archive</a>' +
                '<a href="javascript:;" class="dropdown-item delete-record">' + feather.icons['trash-2'].toSvg({ class: 'font-small-4 me-50' }) +
                'Delete</a>' +
                '</div>' +
                '</div>' +
                '<a href="javascript:;" class="item-edit">' +
                feather.icons['edit'].toSvg({ class: 'font-small-4' }) +
                '</a>'
              );
            }
          }
        ],
        dom: '<"card-header border-bottom p-1"<"head-label"><"dt-action-buttons text-end"B>><"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
        displayLength: 50,
        lengthMenu: [50, 75, 100,500],
        buttons: [
          {
            extend: 'collection',
            className: 'btn btn-outline-secondary dropdown-toggle me-2',
            text: feather.icons['share'].toSvg({ class: 'font-small-4 me-50' }) + 'Descargar',
            buttons: [
              {
                extend: 'excel',
                text: feather.icons['file'].toSvg({ class: 'font-small-4 me-50' }) + 'Excel',
                className: 'dropdown-item',
                exportOptions: { columns: [3, 4, 5, 6, 7] }
              },
              {
                extend: 'pdf',
                text: feather.icons['clipboard'].toSvg({ class: 'font-small-4 me-50' }) + 'Pdf',
                className: 'dropdown-item',
                exportOptions: { columns: [3, 4, 5, 6, 7] }
              },
            ],
          },
          
        ],
        language: {
          paginate: {
            // remove previous & next text from pagination
            previous: '&nbsp;',
            next: '&nbsp;'
          }
        }
      });
      $('div.head-label').html('<h6 class="mb-0">Lista</h6>');
      
    }

    // Delete Record
  $('.datatables-basic tbody').on('click', '.delete-record', function () {
    dt_basic.row($(this).parents('tr')).remove().draw();
  });

  
    
});


