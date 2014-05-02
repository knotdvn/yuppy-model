<div class="report-section">
                <h1>Methods and Design</h1>
                    <section>
                        <p>This very well might be the most important section of the report. As is often the case it is how one accomplishes something that is meaningful, to borrow truth from cliche, it is the journey not the destination.</p>

                        <h2>Data Points</h2>
                        <p>These values represent the components of our model which we have available to manipulate to serve our analysis. The following list includes the defintion of the datapoint, where the data can be obtained, and hypothesis to explore with our model.</p>

                        <ul>
                        	<li>Visitors: Number of monthly users, data from site analytics is used</li>
                        	<li>Customers: Number of users who click through and purchase something. This variable will be a percentage of data point [Visitors], adjusting this is the primary means of realizing profitability and increasing this percentage should be the major goal of a yuppy operator.</li>
                        	<li>Product Data: This is a list of the 10 most popular products from a variety Amazon categories. The name, price, and picture are important for this excercise.</li>
                        	<li>Payout Rate: A sales referral percentage paid back to Yuppy - Amazon has their rates listed <a target="new" href="https://affiliate-program.amazon.com/gp/associates/help/operating/advertisingfees" >at this address</a>. they vary depending on category. Comparing categorical differences could help Yuppy target a specific user-base to maximize profitability.</li>
                        </ul>


                        <h2>Tone and Language</h2>
                        <p>The written word is a tool to convey information from the writer to the reader. I prefer to utilize my natural writing style. One that lacks the pomp and circumstance of robotic drone. You will not find use of any majestic third person royal "we". I will speak as myself to you, the reader as if you were an actual human being I wished to share my thoughts with. It could be argued that this demonstrates my lack of knowledge about <i>the</i> audience, however I would offer that I am considering <i>my</i> audience. I will adapt to whatever writing style my patron or employer prefers. Yet since in this matter I am working for myself and not some replaceable necktied firm of "Lastname and Lastname", I need not adapt at all.</p>

                        <h2>Application Programming Interfaces</h2>
                        <p>Product data from <a href="http://amazon.com">Amazon.com</a> is utilized for purposes of this excercise. The data was gather from the <a target="new" href="http://docs.aws.amazon.com/AWSECommerceService/latest/DG/ItemSearch.html">Product Advertising API</a>. Specifically to target the payout rates for specific categories we need products from those categories, and that information was provided <a href="http://docs.aws.amazon.com/AWSECommerceService/latest/DG/USSearchIndexParamForItemsearch.htm">at this location</a>. Now we are specifically targeting the most popular products because they are proven to be quite purchaseable, that data is available <a target="new" href="http://docs.aws.amazon.com/AWSECommerceService/latest/DG/SortingbyPopularityPriceorCondition.html"> at this location</a>.</p>

                        <p>To request and parse this data programatically the open-source library <a target="new" href="https://github.com/Exeu/apai-io">ApaiIO</a> from <a target="new" href="https://github.com/Exeu/">github user Exeu</a>.</p>


<p> With authentication keys from Amazon and effective use of the ApaiIO library writing some php code yeilds our data. 
<pre><code data-language="php">foreach ($cats as $catName => $catID) {

	//a search for each category
	$search = new Search();
	$search->setCategory($catName);
	$search->setSort('salesrank');
	$search->setBrowseNode($catID);
	$search->setResponseGroup(array('Large'));
	
	//now we have the xml
	$response = $apaiIo->runOperation($search);</code></pre>
</p>
<p>That raw data is rather cumbersome, the response for ten items from a single category yeilds 3,000 lines of xml data. A sample request is availble <a target="new" href="https://github.com/knotdvn/yuppy-model/blob/master/data/sample-raw-request.xml">in the project repo here</a>. Parsed out to a single item gives us <a target="new" href="https://github.com/knotdvn/yuppy-model/blob/master/data/sample-single-item.xml">this xml data</a>.</p>

<p>Of course this data is now written out to our <a href="https://github.com/knotdvn/yuppy-model/tree/master/model/_stuff/charts/catdata">catdata directory</a> in a format that can be manipulated by front end browser code.</p>

<h2>Modeling Tools</h2>

<p>From my perspective <a href="http://www.highcharts.com/">HighCharts</a> is the best open-source and free for non-commercial use software to render resizable charts in a web browser. The <a href="http://api.highcharts.com/highcharts">HighCharts API</a> is extensive and useful. The <a href="https://github.com/highslide-software/highcharts.com/tree/master/samples/highcharts/demo"> demo examples</a> provide simple guidelines for quick execution.</p>

<p>Structuring our data for graphing is rather simple, as this sample demonstrates.
<pre><code data-language="javascript">$('#percentage_payouts').highcharts({
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
    series: [{
      name: 'Rate',
      data: [4.00, 5.00, 5.00, 4.00, 6.00, 4.00, 1.00, 6.00, 8.00, 8.00, 6.00]
    }]
  });</code></pre>
</p>

<p> To run our model calculations, gather user input, and generate random values when needed, the JavaScript programming language and the jQuery library were utilized. An example of calculating revenue data follows:


<pre><code data-language="javascript">
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
      //for each customer
        for(var j = 0; j < customers; j++){
          var rndProduct = Math.floor( Math.random()  * 10);
          var individual = +tenItems[rndProduct].price;
          revenueSum += individual;
        }//end for all users random product purchase
        revenueSum = revenueSum /10;

      revenue[i] = +revenueSum.toFixed(2);
      //we've calculated amazons revenue, lets calculate ours
      yuppyRevenue[i] = revenue[i] * rates[i];
            
    }//end for 6 categories
    </code></pre></p>

    <h2>Code Repository and Project Organization</h2>
    <p><a href="https://github.com">GitHub</a> for programmers is currently the end all be all for managing projects. My repo is available at <a href="https://github.com/knotdvn/yuppy-model">. Utilizing the github paradigm provides for local to the machine and cloud copies of the source code. Additionally the entire version history is preserved by the git protocol. This allows you to roll back through each step in the project and provides the <a href="https://github.com/knotdvn/yuppy-model/graphs/contributors">timeline of progress</a>.</p>

    <h2>Make It Look Easy</h2>
    <p>If I made it look easy, it's not. I spent a lot of mental cycle ticks uncovering, discovering, doing, re-doing, writing, and bug fixing throughout this process. Thats why I felt it was so necessary to document everything. Hopefully the next poor chump that comes along finds something useful here. Then again suffering alone is fun.</p>
                        <p class="minimizer">
                            <span>MINIMIZE</span>
                        </p>
                    </section>
</div><!--report section-->