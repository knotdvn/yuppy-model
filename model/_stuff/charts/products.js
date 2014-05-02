function listProducts () {

    var categories =  [
        "Electronics",
        "MP3Downloads",
        "Video",
        "VideoGames", 
        "Grocery",  
        "Industrial"
      ];//end categories

    



    var prodList = $('#product_list');
    //calculate for each category
    for(var i = 0; i < 6; i++){
     
     $(prodList).append('<br><h3>' + categories[i] + '</h3>');
      var tenItems = window[categories[i]];
     
        for(var j = 0; j < 10; j++){
          
          var individual = '<div class="prod-item"><p>' +
          tenItems[j].name +
          '</p><img src="' + tenItems[j].image +
          '" /><span>$' + tenItems[j].price/100 + '</span></div>';

          prodList.append(individual);
        }//end for all users random product purchase    
    }//end for 6 categories
    


};//end function listProducts