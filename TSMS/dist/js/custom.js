$(document).ready(function(){

    // Country Picker
    $(".niceCountryInputSelector").each(function(i,e){
        new NiceCountryInput(e).init();
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

  // Carousel Change Image Speed
  $(function(){
      $('.carousel').carousel({
          interval: 1800
      });
  });
  
  // Smart Wizard
    // Step show event
    $(".smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection, stepPosition) {
      //alert("You are on step "+stepNumber+" now");
      if(stepPosition === 'first'){
          $("#prev-btn").addClass('disabled');
      }else if(stepPosition === 'final'){
          $("#next-btn").addClass('disabled'); 
      }else{
          $("#prev-btn").removeClass('disabled');
          $("#next-btn").removeClass('disabled');
      }
      if($('button.sw-btn-next').hasClass('disabled')){
        $('.sw-btn-group-extra').show();
        }else{
        $('.sw-btn-group-extra').hide();
        }
    });
  
    // Toolbar extra buttons
    var btnViewSummary = $('<button class="btn btn-primary" >View Summary</button>')
      .on('click',function(){
        $('#viewSummaryModal').modal('show');
        });
    // Smart Wizard 
    $('.smartwizard').smartWizard({
            selected: 0,
            theme: 'arrows',
            transitionEffect:'fade',
            showStepURLhash: false,
            toolbarSettings: {
              toolbarButtonPosition: 'end',
              toolbarExtraButtons: [btnViewSummary]
            },
            enableFinishButton: false
            
    });

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
  
  // Change Sort Text
  $('.sortName').on('click',function() {
      document.getElementsByClassName("sortDdown")[0].innerHTML = "Name";
      $('.sortName').addClass('active');
      $('.sortHP').removeClass('active');
  });
  $('.sortHP').on('click',function() {
      document.getElementsByClassName("sortDdown")[0].innerHTML = "Horse Power";
      $('.sortHP').addClass('active');
      $('.sortName').removeClass('active');
  });

  // Change to Data Table View
  $('.detView').on('click',function(e) {
      e.preventDefault();
      $('.cardView').css('border-radius', '0px 4.5px 4.5px 0px');
      $('.cardView').removeClass('active');
      $('.detView').addClass('active');
      $('.detLayout').css('display', 'block');
      $('.editLayout').css('display', 'none');
      $('.cardLayout').css('display', 'none');
      $('.sortSelect').css('display', 'none');
  });
  // Change to Card View
  $('.cardView').on('click',function(g) {
      g.preventDefault();
      $('.cardView').css('border-radius', '0px');
      $('.detView').removeClass('active');
      $('.cardView').addClass('active');
      $('.cardLayout').css('display', 'block');
      $('.editLayout').css('display', 'none');
      $('.detLayout').css('display', 'none');
      $('.sortSelect').css('display', 'block');
  });
  // Open Edit from Card
  $('.editItem').on('click',function(e) {
      e.preventDefault();
      $('#infoModal').modal('hide');
      $('.editLayout').css('display', 'block');
      $('.cardLayout').css('display', 'none');
      $('.detLayout').css('display', 'none');
      $('.selectViews').css('display', 'none');
  });
  // Close Modal
  $('.modalClose').on('click',function() {
      $('#infoModal, #viewSummaryModal').modal('hide');
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
// Validate if the pictures have the proper file extension
var _validFileExtensions = [".jpg", ".jpeg", ".png"];    
function ValidateSingleInput(oInput) {
  if (oInput.type == "file") {
    var sFileName = oInput.files[0].name; ;
      if (sFileName.length > 0) {
        var blnValid = false;
        for (var j = 0; j < _validFileExtensions.length; j++) {
          var sCurExtension = _validFileExtensions[j];
          if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
              blnValid = true;
              break;
          }
        }
        
        if (!blnValid) {
          swal({
            title: "Invalid File Extension!",
            text:"Sorry, " + sFileName + " is invalid. \n Allowed extensions are: " + _validFileExtensions.join(", "),
            type: "error",
            showCancelButton: false,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Ok",
            closeOnConfirm: false
          });
            oInput.value = "";
            return false;
        }
    }
}
    return true;
}