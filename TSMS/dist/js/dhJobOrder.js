$(document).ready(function(){
  // Date Picker
  $('#transacDate').datetimepicker({
    format: 'L'
  });
  $('#haulingETA').datetimepicker({
    format:'HH:mm'
  });
  // Custom Select
  $('select').niceSelect();
  // Filter
  var jobOrders = " Job Orders ";
  $('#createdJO').on('click',function() {
    document.getElementById("ddJobOrder").innerHTML = "Created" + jobOrders;
    $('#declinedJO,#pendingJO,#forwardJO').removeClass('active');
    $('#createdJO').addClass('active');
    $('.createdCards').addClass('animated zoomIn faster');
    $('.createdCards').css('display', 'block');
    $('.pendingCards,.forwardedCards,.declinedCards').css('display', 'none');
  });
  $('#pendingJO').on('click',function() {
    document.getElementById("ddJobOrder").innerHTML = "Pending" + jobOrders;
    $('#pendingJO').addClass('active');
    $('#createdJO,#declinedJO,#forwardJO').removeClass('active');
    $('.pendingCards').addClass('animated zoomIn faster');
    $('.pendingCards').css('display', 'block');
    $('.createdCards,.forwardedCards,.declinedCards').css('display', 'none');
  });
  $('#forwardJO').on('click',function() {
    document.getElementById("ddJobOrder").innerHTML = "Forwarded" + jobOrders;
    $('#forwardJO').addClass('active');
    $('#createdJO,#pendingJO,#declinedJO').removeClass('active');
    $('.forwardedCards').addClass('animated zoomIn faster');
    $('.forwardedCards').css('display', 'block');
    $('.createdCards,.pendingCards,.declinedCards').css('display', 'none');
  });
  $('#declinedJO').on('click',function() {
    document.getElementById("ddJobOrder").innerHTML = "Declined" + jobOrders;
    $('#declinedJO').addClass('active');
    $('#createdJO,#pendingJO,#forwardJO').removeClass('active');
    $('.declinedCards').addClass('animated zoomIn faster');
    $('.declinedCards').css('display', 'block');
    $('.createdCards,.forwardedCards,.pendingCards').css('display', 'none');
  });
  // Add Fields
  var ctrID = 2;
  
    
  $('.btnAddFields').on('click',function() {
    var appendFields = '<div class="col-12 col-sm-12 col-lg-4">' +
  '<div class="form-group">' +
    '<label for="cargoName'+ ctrID +'">Cargo Name '+ ctrID +'<sup class="text-primary">&#10033;</sup></label>' +
      '<input type="text" class="form-control" id="cargoName'+ ctrID +'" placeholder="Energy Moon" required>' +
      '<div class="invalid-feedback">' +
        'Please fill in the Cargo Name '+ ctrID +'.' +
      '</div>' +
    '</div>' +
  '</div>' +
  '<div class="col-12 col-sm-12 col-lg-4">' +
    '<div class="form-group">' +
      '<label for="cargoWeight'+ ctrID +'">Cargo Weight '+ ctrID +'<sup class="text-primary">&#10033;</sup></label>' +
      '<div class="input-group">' +
        '<input  id="cargoWeight'+ ctrID +'" type="number" class="form-control" placeholder="20" required>' +
        '<div class="input-group-append">' +
          '<span class="input-group-text">Tons</span>' +
        '</div>' +
        '<div class="invalid-feedback">' +
          'Please fill in the Cargo Weight '+ ctrID +'.' +
        '</div>' +
      '</div>' +
    '</div>' +
  '</div>' +
  '<div class="col-12 col-sm-12 col-lg-4">' +
    '<div class="form-group">' +
      '<label for="addGoods'+ ctrID +'">Goods to be delivered '+ ctrID +'<sup class="text-primary">&#10033;</sup></label>' +
        '<input type="text" class="form-control" id="addGoods'+ ctrID +'" placeholder="BAD" required>' +
        '<div class="invalid-feedback">' +
          'Please fill in the Estimated Goods to be delivered.' +
        '</div>' +
    '</div>' +
  '</div>';
  $( "#firstRow" ).append( $( appendFields ).addClass( "animated fadeIn fast" ) );
    ctrID++;
  });
  // $('.btnRemoveFields').on('click',function() {
  //  $( '#cargoName'+ ctrID +'#cargoWeight'+ ctrID +'#addGoods'+ ctrID ).remove();
  //   ctrID--;
  // });
  // Modal Close
  $('.modalClose').on('click',function() {
    $('#forwardModal').modal('hide');
    $('#moreInfoModal').modal('hide');
  });

  // Add Job Order
  $('.btnAddJO').on('click',function() {
    $('.jobOrderList').css('display','none');
    $('.addJobOrder').css('display','block');
  });
  // Back 
  $('.btnBack').on('click',function() {
    $('.jobOrderList').css('display','block');
    $('.addJobOrder').css('display','none');
  });
  // Toastr
  $('.btnAcceptJO').on('click',function() {
    $('#forwardModal').modal('hide');
    toastr.success('Job Order # 4 Accepted.', 'Accepted!',{ closeButton: true, preventDuplicates: true });
  });
  // Sweet Alerts
  $('.submitForward').on('click',function() {
    $('#forwardModal').modal('hide');
    swal({
        title: "Forward to Affiliates",
        text: "Are you sure?",
        type: "info",
        showCancelButton: true,
        confirmButtonClass: "btn-primary waves-effect",
        confirmButtonText: "Submit",
        closeOnConfirm: false
    },
    function(isConfirm) {
      if (isConfirm) {
        swal("Forward Success!", "Job Order has been successfully forwarded.", "success");
      } else {
        $('#forwardModal').modal('show');
      }
    });
  });
  // $('.submitJO').on('click',function(e) {
  //   e.preventDefault();
  //   swal({
  //       title: "Are you sure?",
  //       text: "New Job Order will be created.",
  //       type: "info",
  //       showCancelButton: true,
  //       confirmButtonClass: "btn-primary waves-effect",
  //       confirmButtonText: "Submit",
  //       closeOnConfirm: false
  //   },
  //   function() {
  //     swal("Job Order Created!", "Job Order has been successfully created.", "success");
  //   });
  // });
  $('.btnDeclineJO').on('click',function(s) {
    s.preventDefault();
    swal({
        title: "Are you sure?",
        text: "Decline Job Order.",
        type: "error",
        showCancelButton: true,
        confirmButtonClass: "btn-danger waves-effect",
        confirmButtonText: "Submit",
        closeOnConfirm: false
    },
    function() {
      swal("Decline Success!", "Job Order declined successfully.", "success");
    });
  });
});
