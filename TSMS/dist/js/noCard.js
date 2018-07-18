$(document).ready(function(){
// Go back
$('.btnBack').on('click',function(s) {
  s.preventDefault();
  swal({
      title: "You haven't saved your changes",
      text: "Are you sure you want to go back?",
      type: "error",
      showCancelButton: true,
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Ok",
      closeOnConfirm: false
  },
  function(){
    if(window.location.href.indexOf("tugboat.html") > -1) {
      window.location = "tugboat.html"
    }
    else if(window.location.href.indexOf("position.html") > -1) {
    window.location = "position.html"
    }
  });
});

  // Add button for all add views
  $('.btnAdd').on('click',function() {
    swal({
      title: "New Tugboat Successfully Added!",
      type: "success",
      showCancelButton: false,
      confirmButtonClass: "btn-primary",
      confirmButtonText: "Ok",
      closeOnConfirm: false
  },
    function(){
      if(window.location.href.indexOf("tugboat.html") > -1) {
        window.location = "tugboat.html"
      }
      else if(window.location.href.indexOf("position.html") > -1) {
      window.location = "position.html"
      }
    });
  });
// Initialize Tooltip
$('[data-toggle="tooltip"]').tooltip();

// Initialize Data Table
var dtTitle = "Tugboat Services Management System"
var table = $('.detailedTable').DataTable( {
columnDefs: [
    { targets: 'noSortAction', orderable: false }
], 
buttons: [
    {
        extend: 'copy',
        text: '&mdash; Copy &mdash;',
        title: dtTitle,
        className: 'btn btn-primary',
        exportOptions: {
        columns: 'th:not(:last-child)',
        }
        },
        {
        extend: 'print',
        text: '&mdash; Print &mdash;',
        title: dtTitle,
        className: 'btn btn-primary',
        exportOptions: {
        columns: 'th:not(:last-child)'
        }
        },
        {
        extend: 'pdf',
        text: '&mdash; PDF &mdash;',
        title: dtTitle,
        className: 'btn btn-primary',
        exportOptions: {
        columns: 'th:not(:last-child)'
        }
        }
],
  "language": {
      "lengthMenu": 'Display <select class="custom-select custom-select form-control form-control">'+
      '<option hidden>1000</option>'+
      '<option value="10">10</option>'+
      '<option value="20">25</option>'+
      '<option value="50">50</option>'+
      '<option value="100">100</option>'+
      '<option value="-1">All</option>'+
      '</select> records'},

  responsive: true,
  fade:true
  });

  table.buttons().container().appendTo('.exportButtons');

  $('.editItem').on('click',function(e) {
    e.preventDefault();
    $('#infoModal').modal('hide');
    $('.editLayout').css('display', 'block');
    $('.cardLayout').css('display', 'none');
    $('.detLayout').css('display', 'none');
    $('.selectViews').css('display', 'none');
  });

  $('.addCard , .detAdd').on('click',function(e) {
    e.preventDefault();
    $('.addLayout').css('display', 'block');
    $('.editLayout').css('display', 'none');
    $('.cardLayout').css('display', 'none');
    $('.detLayout').css('display', 'none');
    $('.selectViews').css('display', 'none');
  });

  $('.delItem').on('click',function(q) {
    q.preventDefault();
    swal({
        title: "Are you sure?",
        text: "You will not be able to recover Energy Sun.",
        type: "error",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Yes, delete it!",
        closeOnConfirm: false
    },
    function(){
        swal("Deleted!", "Energy Sun has been deleted.", "success");
    });
});

});