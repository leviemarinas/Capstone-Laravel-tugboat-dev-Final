$(document).ready(function(){

  // Custom tooltip selector
  $('[data-tooltip="tooltip"]').tooltip();

  // Initialize Summernote
  $(".summernoteQuote").summernote({
    minHeight: 350,
    disableDragAndDrop: true,
    fontSizes: ['8', '9', '10', '11', '12', '14', '16', '18','20','22','24','26','28', '36', '48' , '72'],
    toolbar: [
      // [groupName, [list of button]]
      ['style', ['bold', 'italic', 'underline', 'clear']],
      ['fontname'],
      ['font', ['strikethrough', 'superscript', 'subscript']],
      ['fontsize'],
      ['color', ['color']],
      ['para', ['ul', 'ol', 'paragraph']],
      ['height', ['height']],
      ['insert',['table','link']],
      ['help']
    ]
  });
  // Close Modal
  $('.modalClose').on('click',function() {
    $('#viewQuoteInfo').modal('hide');
    $('#editQuoteInfo').modal('hide');
  });
  // Modal Edit
  $('#modalEdit').on('click',function() {
    $('#viewQuoteInfo').modal('hide');
    $('#editQuoteInfo').modal('show');
  });
  // Sweet Alerts
  $('.delItem').on('click',function() {
    swal({
        title: "Are you sure?",
        text: "You will not be able to recover this Quotation.",
        type: "error",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Yes, delete it!",
        closeOnConfirm: false
    },
    function(){
        swal("Deleted!", "Quotation has been deleted.", "success");
    });
  });
  $('#editSave').on('click',function(e) {
    $('#editQuoteInfo').modal('hide');
    e.preventDefault();
    swal({
      title: "Changes won't be undone.",
      text: "Save Changes?",
      type: "info",
      showCancelButton: true,
      confirmButtonClass: "btn-primary waves-effect",
      confirmButtonText: "Ok",
      closeOnConfirm: false
  },
    function(isConfirm) {
      if (isConfirm) {
        swal("Updated!", "Quotation has been updated.", "success");
      } else {
        $('#editQuoteInfo').modal('show');
      }
    });
  });

});