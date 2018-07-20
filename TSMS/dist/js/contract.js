$(document).ready(function(){
  // Initialize Summernote
  
  $(".summernoteContract").summernote({
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
    $('#viewContractInfo').modal('hide');
  });

  // Sweet Alerts
  $('.delItem').on('click',function() {
    swal({
        title: "Are you sure?",
        text: "You will not be able to recover this Contract.",
        type: "error",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Yes, delete it!",
        closeOnConfirm: false
    },
    function(){
        swal("Deleted!", "Contract has been deleted.", "success");
    });
});

});