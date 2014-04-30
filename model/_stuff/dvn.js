//Front End Functionality for yuppy data report
$( document ).ready(function() {

  //expand close on title click
  $('#report .report-section h1').on('click', function(){
    var target = $(this).next();
     if ( $(target).hasClass('open') ){
      $(target).removeClass('open');       
     }else{
      $(target).addClass('open');
     }
  });//end h1 click event

  //close on bottom click
  $('#report .report-section .minimizer').on('click', function(){
    var target = $(this).parent();
    $(target).removeClass('open');
  });//end minimizer click


});//end doc ready