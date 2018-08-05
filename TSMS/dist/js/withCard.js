$(document).ready(function(){
    // Custom Select
    $('select').niceSelect();

    /* START --- New update August 5, 2018 */
  //Initialize Date Picker for Last Dry Docked
  $('#AddLastDryDocked,#AddDateBuilt,#AddLicenseExpDate,#editLastDryDocked,#editDateBuilt,#editLicenseExpDate').datetimepicker({
    format: 'L'
  });
  /* Removed old datepicker
    END --- New update August 5, 2018 */
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
          className: 'btn btn-primary waves-effect',
          exportOptions: {
          columns: 'th:not(:last-child)',
          }
          },
          {
          extend: 'print',
          text: '&mdash; Print &mdash;',
          title: dtTitle,
          className: 'btn btn-primary waves-effect',
          exportOptions: {
          columns: 'th:not(:last-child)'
          }
          },
          {
          extend: 'pdf',
          text: '&mdash; PDF &mdash;',
          title: dtTitle,
          className: 'btn btn-primary waves-effect',
          exportOptions: {
          columns: 'th:not(:last-child)'
          }
          }
  ],
  "language": {
    "lengthMenu": 'Display <select class="custom-select custom-select form-control form-control">'+
    '<option hidden>1000</option>'+
    '<option value="-1">All</option>'+
    '<option value="10">10</option>'+
    '<option value="20">25</option>'+
    '<option value="50">50</option>'+
    '<option value="100">100</option>'+
    '</select> records'},

  responsive: true,
  fade:true
});

  table.buttons().container().appendTo('.exportButtons');
  $('.toast-close-button').css('color','black');
  toastr.options = {
    "closeButton": true,
    "positionClass": "toast-top-center",
    "showDuration": "5000",
    "hideDuration": "1000",
    "timeOut": "2000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }
  $('.buttons-pdf').on('click',function() {
    toastr.success('PDF Downloaded!');
  });
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
    
    $(".sw-btn-next").addClass('waves-effect');
    $(".sw-btn-prev").addClass('waves-effect');
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
  var btnViewSummary = $('<button class="btn btn-primary waves-effect" >View Summary</button>')
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
  ////////////////////////////// Add Insurance for Edit
  //Append another field for insurance
    var EditctrAdd = 2;
    var EditTClassCtr = 1;
    $("#btnEditInsuranceAdd").on('click',function () {
        
    if(EditctrAdd>4 && EditTClassCtr > 3){
        swal({
            title: "Only 3 Additional Insurance Fields are allowed",
            type: "info",
            showCancelButton: false,
            confirmButtonClass: "btn-primary waves-effect",
            confirmButtonText: "Ok",
            closeOnConfirm: false
        });
            return false;
    }   
    var txtTbInsurance = $(document.createElement('div'))
        .attr("id", 'TextBoxDiv' + EditctrAdd);
    txtTbInsurance.after().html('<label>Insurance #'+ EditctrAdd + ' </label>' +
        '<input class="form-control" type="text" name="editInsurance'+ EditctrAdd +'"  placeholder="Tugboat Insurance # ' + EditctrAdd + 
        '" id="editInsurance' + EditctrAdd + '" value="" >');
            
    txtTbInsurance.appendTo('#editTClassInsurance' + EditTClassCtr).addClass( "animated fadeIn fast" );

        EditTClassCtr++;	
        EditctrAdd++;
    });
    ////////////////////////////// Add Insurance for Add

    var AddctrAdd = 2;
    var AddtClassCtr = 1;
    $("#btnAddInsuranceAdd").on('click',function () {
		
    if(AddctrAdd>4 && AddtClassCtr > 3){
          swal({
              title: "Only 3 Additional Insurance Fields are allowed",
              type: "info",
              showCancelButton: false,
              confirmButtonClass: "btn-primary waves-effect",
              confirmButtonText: "Ok",
              closeOnConfirm: false
          });
              return false;
    }   
      
    var txtTbInsurance = $(document.createElement('div'))
        .attr("id", 'TextBoxDiv' + AddctrAdd);
    txtTbInsurance.after().html('<label>Insurance #'+ AddctrAdd + ' </label>' +
          '<input class="form-control" type="text" name="AddInsurance'+ AddctrAdd +'"  placeholder="Tugboat Insurance # ' + AddctrAdd + 
          '" id="AddInsurance' + AddctrAdd + '" value="" >');
              
    txtTbInsurance.appendTo('#AddTClassInsurance' + AddtClassCtr).addClass( "animated fadeIn fast" );

          AddtClassCtr++;	
          AddctrAdd++;
      });

    //Function to show image before upload
    function editfPictureUpload(input) {
      if (input.files && input.files[0]) {
          var editfPicReader = new FileReader();

          editfPicReader.onload = function (e) {
              $('#editfPic').attr('src', e.target.result).fadeIn('slow');
          }
          editfPicReader.readAsDataURL(input.files[0]);
      }
    }
    function editsPictureUpload(input) {
      if (input.files && input.files[0]) {
          var editsPicReader = new FileReader();

          editsPicReader.onload = function (e) {
              $('#editsPic').attr('src', e.target.result).fadeIn('slow');
          }
          editsPicReader.readAsDataURL(input.files[0]);
      }
    }
    function edittPictureUpload(input) {
      if (input.files && input.files[0]) {
          var edittPicReader = new FileReader();

          edittPicReader.onload = function (e) {
              $('#edittPic').attr('src', e.target.result).fadeIn('slow');
          }
          edittPicReader.readAsDataURL(input.files[0]);
      }
    }

    // Prepare the preview for profile picture
  $("#AddfirstPic").change(function(){
    addfPictureUpload(this);
  });

  $("#AddsecPic").change(function(){
      addsPictureUpload(this);
  });

  $("#AddthirdPic").change(function(){
      addtPictureUpload(this);
  });

  // Get Image Name 
  $('#AddfirstPic').change(function(e){
      var fileName = e.target.files[0].name;
      document.getElementById("AddfirstFileChosen").innerHTML = fileName;
  });
  $('#AddsecPic').change(function(e){
      var fileName = e.target.files[0].name;
      document.getElementById("AddsecFileChosen").innerHTML = fileName;
  });
  $('#AddthirdPic').change(function(e){
      var fileName = e.target.files[0].name;
      document.getElementById("AddthirdFileChosen").innerHTML = fileName;
  });


  // Prepare the preview for profile picture
  $("#editFirstPic").change(function(){
    editfPictureUpload(this);
    });

    $("#editSecPic").change(function(){
        editsPictureUpload(this);
    });

    $("#editThirdPic").change(function(){
        edittPictureUpload(this);
    });

    // Get Image Name 
    $('#editFirstPic').change(function(e){
      var fileName = e.target.files[0].name;
      document.getElementById("editFirstFileChosen").innerHTML = fileName;
  });
  $('#editSecPic').change(function(e){
      var fileName = e.target.files[0].name;
      document.getElementById("editSecFileChosen").innerHTML = fileName;
  });
  $('#editThirdPic').change(function(e){
      var fileName = e.target.files[0].name;
      document.getElementById("editThirdFileChosen").innerHTML = fileName;
  });

  //Sweet Alerts!!!
// Go back
$('.btnBack').on('click',function(s) {
  s.preventDefault();
  swal({
      title: "You haven't saved your changes",
      text: "Are you sure you want to go back?",
      type: "error",
      showCancelButton: true,
      confirmButtonClass: "btn-danger waves-effect",
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
    confirmButtonClass: "btn-primary waves-effect",
    confirmButtonText: "Ok",
    closeOnConfirm: false
},
  function(){
      window.location = "tugboat.html"
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
          confirmButtonClass: "btn-danger waves-effect",
          confirmButtonText: "Yes, delete it!",
          closeOnConfirm: false
      },
      function(){
          swal("Deleted!", "Energy Sun has been deleted.", "success");
      });
  });

    $('#btnEItemPics').on('click',function(s) {
      s.preventDefault();
      swal({
          title: "Changes won't be undone.",
          text: "Save changes?",
          type: "info",
          showCancelButton: true,
          confirmButtonClass: "btn-primary waves-effect",
          confirmButtonText: "Confirm",
          closeOnConfirm: false
      },
      function(){
          swal("Updated!", "Energy Sun's Pictures has been updated.", "success");
      });
  });
  $('#btnEmInfoSubmit').on('click',function(s) {
      s.preventDefault();
      swal({
          title: "Changes won't be undone.",
          text: "Save changes?",
          type: "info",
          showCancelButton: true,
          confirmButtonClass: "btn-primary",
          confirmButtonText: "Confirm",
          closeOnConfirm: false
      },
      function(){
          swal("Updated!", "Energy Sun's Main Information has been updated.", "success");
      });
  });
  $(document).ready(function() {
      $('#btnETSpecSubmit').on('click',function(s) {
          s.preventDefault();
          swal({
              title: "Changes won't be undone.",
              text: "Save changes?",
              type: "info",
              showCancelButton: true,
              confirmButtonClass: "btn-primary waves-effect",
              confirmButtonText: "Confirm",
              closeOnConfirm: false
          },
          function(){
              swal("Updated!", "Energy Sun's Tugboat Specification has been updated.", "success");
          });
      });
  });
  $('#btnETClassSubmit').on('click',function(s) {
      s.preventDefault();
      swal({
          title: "Changes won't be undone.",
          text: "Save changes?",
          type: "info",
          showCancelButton: true,
          confirmButtonClass: "btn-primary waves-effect",
          confirmButtonText: "Confirm",
          closeOnConfirm: false
      },
      function(){
          swal("Updated!", "Energy Sun's Tugboat Classication has been updated.", "success");
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
          confirmButtonClass: "btn-danger waves-effect",
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

//Function to show image before upload
function editfPictureUpload(input) {
  if (input.files && input.files[0]) {
      var editfPicReader = new FileReader();

      editfPicReader.onload = function (e) {
          $('#editfPic').attr('src', e.target.result).fadeIn('slow');
      }
      editfPicReader.readAsDataURL(input.files[0]);
  }
}
function editsPictureUpload(input) {
  if (input.files && input.files[0]) {
      var editsPicReader = new FileReader();

      editsPicReader.onload = function (e) {
          $('#editsPic').attr('src', e.target.result).fadeIn('slow');
      }
      editsPicReader.readAsDataURL(input.files[0]);
  }
}
function edittPictureUpload(input) {
  if (input.files && input.files[0]) {
      var edittPicReader = new FileReader();

      edittPicReader.onload = function (e) {
          $('#edittPic').attr('src', e.target.result).fadeIn('slow');
      }
      edittPicReader.readAsDataURL(input.files[0]);
  }
}

//Function to show image before upload
function addfPictureUpload(input) {
  if (input.files && input.files[0]) {
      var addfPicReader = new FileReader();

      addfPicReader.onload = function (e) {
          $('#AddfPic').attr('src', e.target.result).fadeIn('slow');
      }
      addfPicReader.readAsDataURL(input.files[0]);
  }
}
function addsPictureUpload(input) {
  if (input.files && input.files[0]) {
      var addsPicReader = new FileReader();

      addsPicReader.onload = function (e) {
          $('#AddsPic').attr('src', e.target.result).fadeIn('slow');
      }
      addsPicReader.readAsDataURL(input.files[0]);
  }
}
function addtPictureUpload(input) {
  if (input.files && input.files[0]) {
      var addtPicReader = new FileReader();

      addtPicReader.onload = function (e) {
          $('#AddtPic').attr('src', e.target.result).fadeIn('slow');
      }
      addtPicReader.readAsDataURL(input.files[0]);
  }
}