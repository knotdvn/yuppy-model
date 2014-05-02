//public scope functions
//Ajax Request function
  function ajaxRequest(url){
    var ajaxJson = new XMLHttpRequest();
    ajaxJson.open("GET", url, true);
    ajaxJson.setRequestHeader("Content-type", "application/json");

    //return function handler
    ajaxJson.onreadystatechange = function(){
      if(ajaxJson.readyState ==4 && ajaxJson.status == 200){
        var response = JSON.parse( ajaxJson.responseText);
        return response;
      }//end if success
    }//end response function
    //we define the response function
    //then we execute the request
    //prevents race condition
    ajaxJson.send();
  }//end function ajax request








//Front End Functionality for yuppy data report
$( document ).ready(function() {

  //ready flow 
  //1add click handlers
  //color code
  //chart time

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



  //2

  //do we have code? color it
  Rainbow.color();

  



});//end doc ready

