
function analyticsChart () {

    //calculate 12 random users
    //calculate 12 levels of customers
    var startNum = Math.floor( Math.random()  * 5000) + 5000;
    var visitors = new Array(12);
    var customers = new Array();
    var magicX = .5;
    visitors[0] = startNum;
    customers[0] = visitors[0] * magicX;
    for(var i = 1; i < 12; i++){
        
        if(Math.random() > .5){
            visitors[i] = visitors[i-1] + Math.floor( Math.random() * 200 );
        }else{
            visitors[i] = visitors[i-1] - Math.floor( Math.random() * 200 );
        }//end if up or down
        customers[i] = visitors[i] * magicX;
    }//end for 12 months
    console.log(visitors);
    console.log(customers);
        $('#analytics_chart').highcharts({
            chart: {
              type: 'line',
              backgroundColor: "rgba(255, 255, 255, 0.02)"
            },
            title: {
                text: 'Random Visitors and Customers',
                x: -20 //center
            },
            subtitle: {
                text: 'Source: Math.random',
                x: -20
            },
            xAxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                    'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            yAxis: {
                title: {
                    text: '# of Users'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle',
                borderWidth: 0
            },
            series: [{
                name: 'Visitors',
                data: visitors
            }, {
                name: 'Customers',
                data: customers
            }]
        });
    };