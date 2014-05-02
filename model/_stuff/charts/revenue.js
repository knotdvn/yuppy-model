function revenueChart () {

    //calculate 12 months of random users
    //calculate 12 levels of customers
    var startNum = Math.floor( Math.random()  * 100) + 100;
    var magicX = .5;
    var customers = Math.floor(startNum * magicX);
    var categories =  [
        "Electronics",
        "MP3Downloads",
        "Video",
        "VideoGames", 
        "Grocery",  
        "Industrial"
      ];//end categories

      var rates = [ .04, .05, .05, .01 , .04, .08 ];//end rates  
      var revenue = new Array(6);
      var yuppyRevenue = new Array(6);




    
    //calculate for each category
    for(var i = 0; i < 6; i++){
     
      var tenItems = window[categories[i]];
      var revenueSum = 0;
        for(var j = 0; j < customers; j++){
          var rndProduct = Math.floor( Math.random()  * 10);
          var individual = +tenItems[rndProduct].price;
          revenueSum += individual;
        }//end for all users random product purchase
        revenueSum = revenueSum /100 //cents to dollars;

      revenue[i] = +revenueSum.toFixed(2);
      //we've calculated amazons revenue, lets calculate ours
      yuppyRevenue[i] = revenue[i] * rates[i];
            
    }//end for 6 categories
    




    
         $('#yuppy_revenue_chart').highcharts({
    chart: {
      type: 'column',
      backgroundColor: "rgba(255, 255, 255, 0.02)"
    },
    title: {
      text: 'Monthly Revenue per Category'
    },
    subtitle: {
      text: 'Random Customer Data from Popular Items'
    },
    xAxis: {
      categories: [
        "Electronics",
        "Amazon MP3",
        "Amazon Instant Video",
        "Game Downloads", 
        "Grocery",  
        "Industrial"
      ]
    },
    yAxis: {
      min: 0,
      title: {
        text: 'Revenue in $'
      }
    },
    tooltip: {
      headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
      pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
      '<td style="padding:0"><b>${point.y:.1f}</b></td></tr>',
      footerFormat: '</table>',
      shared: true,
      useHTML: true
    },
    plotOptions: {
      column: {
        pointPadding: 0.2,
        borderWidth: 0
      }
    },
    series: [{
      name: 'Yuppy Revenue',
      data: yuppyRevenue,
      color: "green"
    }]
  });

 $('#amazon_revenue_chart').highcharts({
    chart: {
      type: 'column',
      backgroundColor: "rgba(255, 255, 255, 0.02)"
    },
    title: {
      text: 'Monthly Revenue per Category'
    },
    subtitle: {
      text: 'Random Customer Data from Popular Items'
    },
    xAxis: {
      categories: [
        "Electronics",
        "Amazon MP3",
        "Amazon Instant Video",
        "Game Downloads", 
        "Grocery",  
        "Industrial"
      ]
    },
    yAxis: {
      min: 0,
      title: {
        text: 'Revenue in $'
      }
    },
    tooltip: {
      headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
      pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
      '<td style="padding:0"><b>${point.y:.1f}</b></td></tr>',
      footerFormat: '</table>',
      shared: true,
      useHTML: true
    },
    plotOptions: {
      column: {
        pointPadding: 0.2,
        borderWidth: 0
      }
    },
    series: [{
      name: 'Amazons Revenue',
      data: revenue
    }]
  });


};//end function percentage Payouts 