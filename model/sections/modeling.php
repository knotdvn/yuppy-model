<div class="report-section">
                <h1>Modeling Yuppy</h1>
                    <section>

                        <div id="percentage_payouts"></div>
                        <button onclick="percentagePayouts()">Draw Chart</button>
                        <br>


                        <div id="analytics_chart"></div>
                        <button onclick="analyticsChart()">Draw Chart</button>
                        <br>



                        <div id="amazon_revenue_chart"></div>
                        <div id="yuppy_revenue_chart"></div>
                        <button onclick="revenueChart()">Draw Chart</button>
                        <br>
                        <div id="profitability_chart"></div>
                        <form id="user_input">
                        <label>Enter a number between 0 and 10000 representing Monthly Visitors 
                        <input id="user_visitors" value="0" type="number" name="count" min="0" max="10000"></label>
                        <label>Enter a number between 0 and 1000 representing magicX: 
                        <input id="user_magicX" value="0" type="number" name="count" min="0" max="1000"></label>
                        <label>Enter a number between 0 and 1000 representing Monthly Site Cost: 
                        <input id="user_cost" value="0" type="number" name="count" min="0" max="1000"></label>
                        </form>

                        
                        <button onclick="validForm()">Draw Chart</button>




                        <p class="minimizer">
                            <span>MINIMIZE</span>
                        </p>
                    </section>
</div><!--report section-->
<script src="_stuff/charts/percentage_payouts.js" type="text/javascript"></script>
<script src="_stuff/charts/analytics.js" type="text/javascript"></script>
<script src="_stuff/charts/revenue.js" type="text/javascript"></script>
<script src="_stuff/charts/profitability.js" type="text/javascript"></script>
