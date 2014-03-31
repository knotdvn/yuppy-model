Data
=====

All data should be formatted in json


Payout Data
============
https://affiliate-program.amazon.com/gp/associates/help/operating/advertisingfees

This data determines the percentage of payout. 



Product Data
=============
Snag makes requests to the amazon product DB
it requires a php library 
https://github.com/Exeu/apai-io
install via http://exeu.github.io/apai-io/installation.html

it references auth.php which is not committed as it contains security keys.

The Product Advertising API is available here:
http://docs.aws.amazon.com/AWSECommerceService/latest/DG/ItemSearch.html

We care about categorical items so the SearchIndex paramater is particularly useful.

They approved Search Index Categories are:
http://docs.aws.amazon.com/AWSECommerceService/latest/DG/USSearchIndexParamForItemsearch.html

We want the most popular items, so this page is particularly useful.

http://docs.aws.amazon.com/AWSECommerceService/latest/DG/SortingbyPopularityPriceorCondition.html








Data Points:
==============

-[0]-Number of monthly users, data from site analytics is used 

-[1]-Number of users who click through and purchase something. Unknown, this variable will be a percentage of data point [0], adjusting this is the primary means of realizing profitability and increasing this percentage is Yuppy's major goal. 

-[2]-Sales Referral % paid back to Yuppy - Amazon has their rates listed here: https://affiliate-program.amazon.com/gp/associates/help/operating/advertisingfees
and vary depending on category. Comparing categorical differences could help Yuppy target a specific user-base to maximize profitability.



-[3]- Kickback Amount paid to users of Yuppy who help refer another user of Yuppy into purchasing something. Could be $0, a percentage of [2], or a flat fee. This lets the model predict success of “meta-level referrals”. That is to say, a referral within a referential website.

-[4]-Cost of site operation: Hosting, domain name registration, advertising fees, These are well disclosed and easily available from publicly advertised rates.

-[5]-Cost of site creation and Maintenance: site upkeep, development costs, expansions from adding new e-commerce referral platforms requires additional development costs. This is more difficult to pin down. A DIY web developer could spend very little other than time, hiring professionals will provide additional significant costs.
 
