$(document).ready(function(){
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
// Isotope
  var teamBuilderIsotope = $('#teamCard').isotope({
    filter: '*',
    itemSelector: '.team-item',
    layoutMode: 'fitRows'
  });

  $('#teamChoices a').on( 'click', function() {
    $("#teamChoices a").removeClass('filter-active');
    $(this).addClass('filter-active');

    teamBuilderIsotope.isotope({ filter: $(this).data('filter') });
  });
  // Filter Select
  $('#ddAll').on('click',function() {
    document.getElementById("ddChoices").innerHTML = "All";
    $("#filterName").empty();
    $("#filterName").removeClass("text-info text-success text-secondary text-primary");
    $("#filterName").addClass("text-primary");
    $("#filterName").append("All");
  });
  $('#ddCapt').on('click',function() {
    document.getElementById("ddChoices").innerHTML = "Captain";
    $("#filterName").empty();
    $("#filterName").removeClass("text-info text-success text-secondary text-primary");
    $("#filterName").addClass("text-success");
    $("#filterName").append("Captain");
  });
  $('#ddChiefEng').on('click',function() {
    document.getElementById("ddChoices").innerHTML = "Chief Engineer";
    $("#filterName").empty();
    $("#filterName").removeClass("text-info text-success text-secondary text-primary");
    $("#filterName").addClass("text-info");
    $("#filterName").append("Chief Engineer");
  });
  $('#ddCrew').on('click',function() {
    document.getElementById("ddChoices").innerHTML = "Crew";
    $("#filterName").empty();
    $("#filterName").removeClass("text-info text-success text-secondary text-primary");
    $("#filterName").addClass("text-secondary");
    $("#filterName").append("Crew");
  });

  $('.modalClose').on('click',function() {
    $('#addTeam').modal('hide');
  });
});