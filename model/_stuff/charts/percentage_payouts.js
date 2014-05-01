function percentagePayouts () {
  $('#percentage_payouts').highcharts({
    chart: {
      type: 'column',
      backgroundColor: "rgba(255, 255, 255, 0.02)"
    },
    title: {
      text: 'Percentage of Referall Payout'
    },
    subtitle: {
      text: 'Source: Associates Program Advertising Fee Schedule'
    },
    xAxis: {
      categories: [
        "Electronics",
        "Amazon MP3",
        "Amazon Instant Video",
        "Game Downloads",
        "Gift Cards",
        "Grocery",
        "Video Game Console",
        "Headphones",
        "Industrial",
        "MyHabbit",
        "AmazonLocal"
      ]
    },
    yAxis: {
      min: 0,
      title: {
        text: 'Percentage Paid'
      }
    },
    tooltip: {
      headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
      pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
      '<td style="padding:0"><b>{point.y:.1f} %</b></td></tr>',
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
      name: 'Rate',
      data: [4.00, 5.00, 5.00, 4.00, 6.00, 4.00, 1.00, 6.00, 8.00, 8.00, 6.00]
    }]
  });


};//end function percentage Payouts 