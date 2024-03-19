$(document).ready(function () {
  $("#tabla").DataTable({
    initComplete: function () {
      this.api()
        .columns([0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11])
        .every(function () {
          var column = this;
          var select = $('<select><option value=""></option></select>')
            .appendTo($(column.footer()).empty())
            .on("change", function () {
              var val = $.fn.dataTable.util.escapeRegex($(this).val());

              column.search(val ? "^" + val + "$" : "", true, false).draw();
            });

          column
            .data()
            .unique()
            .sort()
            .each(function (d, j) {
              select.append('<option value="' + d + '">' + d + "</option>");
            });
        });
    },
    language: {
      processing: "Traitement en cours...",
      search: "Buscar :",
      lengthMenu: "Mostrar _MENU_ registros por página",
      info: "Mostrando página _PAGE_ de _PAGES_ de _TOTAL_ Registros",
      infoEmpty: "No se encontraron registros disponibles",
      infoFiltered: "(Filtrando de _MAX_  registros)",
      infoPostFix: "",
      loadingRecords: "Chargement en cours...",
      zeroRecords: "No se encontró nada - lo siento",
      emptyTable: "No se encontro registros disponibles",
      paginate: {
        first: "Primero",
        previous: "Anterior",
        next: "Siguiente",
        last: "Despues",
      },
      aria: {
        sortAscending: ": activer pour trier la colonne par ordre croissant",
        sortDescending: ": activer pour trier la colonne par ordre décroissant",
      },
    },
    bDestroy: true,
    responsive: true,
    pageLength: 15,
    dom: "Bfrtip",
    buttons: [
      {
        extend: "copy",
        text: "Copiar",
      },
      {
        extend: "csv",
        text: "CSV",
      },
      {
        extend: "excel",
        text: "Excel",
      },
      {
        extend: "pdf",
        text: "PDF",
        orientation: "landscape",
        pageSize: "a2",
      },
      {
        extend: "print",
        text: "Imprimir",
      },
      {
        extend: "colvis",
        text: "Visibilidad de columna",
      },
    ],
  });
});
