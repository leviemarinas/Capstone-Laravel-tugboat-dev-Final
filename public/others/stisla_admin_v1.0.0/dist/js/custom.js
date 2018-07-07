$(document).ready(function(){

// Smart Wizard

  // Step show event
  $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection, stepPosition) {
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
    .click(function(){
      $('#viewSummaryModal').modal('show');
      });
  // Smart Wizard 
  $('#smartwizard').smartWizard({
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
       
  $('#addFinish').click(function() {
    swal({
      title: "New Tugboat Successfully Added!",
      type: "success",
      showCancelButton: false,
      confirmButtonClass: "btn-primary",
      confirmButtonText: "Ok",
      closeOnConfirm: false
  },
    function(){
        window.location = "/tugboat/create"
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