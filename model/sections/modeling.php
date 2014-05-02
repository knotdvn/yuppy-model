<div class="report-section">
                <h1>Modeling Yuppy</h1>
                    <section>
                    <p>As I model yuppy I begin by modeling individual data points. The rate which Amazon pays to yuppy is different according to category. Modeling these rates allow us to target yuppy to potential higher-yeild payouts.</p>
                    <p>Please click on the [Draw Chart] button below to model the Amazon payout rate per category. </p>
                    <div id="percentage_payouts"></div>
                    <button onclick="percentagePayouts()">Draw Chart</button>
                    <br>
                    <h3>Analyze:</h3>
                    <p>You can see that Industrial is a category with the highest rate of 8% selecting it for further study seems intuitive. Lets also grab the lowest rate Video Game Consoles. Since we are testing the yuppy model I decided to include Electronics, Amazon MP3, Instant Video, and Grocery. These were selected because they evened out the category rate range and had robust product data available. Additionally the Grocery category is rather new and new domains provide interesting oppurunties. The digital goods categories were selected for this reason as well.</p>

                    <h2>Product Data</h2>
                    <p>What good is payout rates without product data? The ten most popular items from each category was queried. For each item we have name, price, and an image.</p>

                    <div id="product_list"></div>
                    <button onclick="listProducts()">Draw Items</button>

                    <h3>Analyze:</h3>
                    <p>The first thing that should jump out at any competent analyst is the prevalence of $0.00 priced items. Amazons API did in fact return these items, it is not fault in my code. Some items might be given away in promotions in conjuction with other products, while some free items are available especially in the digital goods market place.</p>

                    <p>A clever yuppy operator will then identify the value in carefully selecting products to sell. Wasted effort is usually rather inefficent.</p>



                    <h2>Analytics Data</h2>
                    <p>Google and a host of startups offer site and mobile app analytics data. I would guarntee that every for profit site in existence employs user data collection. Intelligence agencies, governments, and university IT administrators are all desperating gather as much user analytics as possible over the web. Needless to say its quite valuable.</p>
                    <p>In todays Internet economy visitors to a website equals revenue potential. Advertising payout rates are based on numbers of faces and facetime spent eye crawling. Accusations of click fraud and botnet inflated analytics data is <a href="http://www.nasdaq.com/article/facebook-click-fraud-and-advertising-on-the-internet-cm162714">quite common</a>.</p>
                    <p>Yuppy has its strength in the fact that it only recievs revenue from actual purchases. Pay Per Click is a rather meaningless statistic and yuppy completely ignores it in its business model.</p>
                    <p>Click the [Draw Chart] button below to generate some randomized yuppy analytics.</p>


                    <div id="analytics_chart"></div>
                    <button onclick="analyticsChart()">Draw Chart</button>
                    <p>Feel free to re-click for different results.</p>
                    <h3>Analyze:</h3>
                    <p>This traffic data was generated psudeorandomly from very simple heuristics that keeps each month close to the other. This simmulates a site with a consistent amount of steady visitors. The magicX, (rate at which [Visitors] become [Customers]) is set to 500/1000 or .5 or 50%. I would very much love to operate a yuppy with a magicX of 500. However what creates a high magicX is very much a mystery and is not the target of this report. My opinnionns on this matter are irrelevant compared to good A/B testing and extensive market research data.</p>
                    <br>


                    <h2>Calculating Revenue</h2>
                    <p>We've successfully acquired and modeled 5 data points so far. Visitors, Customers, magicX, Product Data and Payout rates. I believe it is time to push the model one step further. Let's take customer data, product data, and payout rate and calculate the revenue yuppy earns for Amazon and what yuppy earns for itself. Click the [Draw Chart] button below.</p>
                    <div id="amazon_revenue_chart"></div>
                    <div id="yuppy_revenue_chart"></div>
                    <button onclick="revenueChart()">Draw Chart</button>
                    <h3>Analyze:</h3>
                    <p>The number of customers is random, so you're encouraged to re-click for different results. The number of customers purchasing products from each category is identical, so each category is on equal footing in terms of revenue potential. The only variables to effect the differences witnessed is the cost of items within that category and the percentage rate at which Amazon pays yuppy.</p>
                    <p>With this in mind we see the categories with lots of $0.00 items; MP3, Game Downloads, and Grocery are all very low. Electronics and Industrial have high priced products in their repetoire. Scrolling up we remember that Electronics has half the payout rate of Industrial. Electronics might well indeed be an excellent target of a successful yuppy.</p>

                    <p>Note the difference of scale between Amazon and yuppy. When Amazon makes $5,000 yuppy makes $200. There is more revenue for doing the hard work Amazon does, but it also requires more effort. An ambitious yet lazy yuppy operator would seek to obtain the most amount of revenue for the least amount of work.</p>
                    <br>



                    <h2>Profitability</h2>
                    <p>Ok lets find out if any of this yuppy effort is worth it. Running a yuppy site is not free. Paying technical staff, bandwidth, name registration, and advertising are all likely costs to yuppy operation.</p>
                    <p>Below I'll ask you potential yuppy operator to enter in the number of monthly users you have or expect to your site. Let's limit this to 10,000 maximum for purposes of academic exercise.</p>
                    <p>Additionally I need a magicX. This determines how many visitors become customers. A magicX of 1000 means all visitors become customers and a magicX of 0 means no visitors become customers.</p>
                    <p>Finally enter how much your site costs to operate per month. Max at $1,000.</p>
                    <p>No symbols please: [$ , .]</p>
                    
                    <div id="profitability_chart"></div>
                    <form id="user_input">
	                    <label>Enter a number between 0 and 10000 representing Monthly Visitors 
	                    <input id="user_visitors" value="1000" type="number" name="count" min="0" max="10000"></label>
	                    <label>Enter a number between 0 and 1000 representing magicX: 
	                    <input id="user_magicX" value="100" type="number" name="count" min="0" max="1000"></label>
	                    <label>Enter a number between 0 and 1000 representing Monthly Site Cost: 
	                    <input id="user_cost" value="15" type="number" name="count" min="0" max="1000"></label>
                    </form>

                        
                    <button onclick="validForm()">Draw Chart</button>
                    <h3>Analyze:</h3>
                    <p>With the default values and most other ranges, we see that Electronics, Industrial, and Instant Videos are profitable categories.</p>

                    <p>It's really up to you, potential yuppy pilot to determine to what extent this model can influence your decision making. Obviously this is an analytical tool whose intention is to create the important questions for your business model. I've found questions to be more valuable than answers in my experience. Where are the weakness's in this model? We'll have to conclude.</p>




                        <p class="minimizer">
                            <span>MINIMIZE</span>
                        </p>
                    </section>
</div><!--report section-->
<script src="_stuff/charts/percentage_payouts.js" type="text/javascript"></script>
<script src="_stuff/charts/products.js" type="text/javascript"></script>
<script src="_stuff/charts/analytics.js" type="text/javascript"></script>
<script src="_stuff/charts/revenue.js" type="text/javascript"></script>
<script src="_stuff/charts/profitability.js" type="text/javascript"></script>
