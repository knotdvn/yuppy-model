<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Yuppy Data Model</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="_stuff/normalize.css">
        <link rel="stylesheet" href="_stuff/main.css">
        <link rel="stylesheet" href="_stuff/zen.css">

        <!-- Be lazy load data here-->
        <!-- Data Files -->
        <script src="_stuff/charts/catdata/Electronics.js" type="text/javascript"></script>
        <script src="_stuff/charts/catdata/Grocery.js" type="text/javascript"></script>
        <script src="_stuff/charts/catdata/Industrial.js" type="text/javascript"></script>
        <script src="_stuff/charts/catdata/MP3Downloads.js" type="text/javascript"></script>
        <script src="_stuff/charts/catdata/Video.js" type="text/javascript"></script>
        <script src="_stuff/charts/catdata/VideoGames.js" type="text/javascript"></script>
        
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    
        

        <div class="ribbon">
        <div class="wrap">

        <h1 id="title">Yuppy Data Model: A Report</h1>
        <h4 id="byline">-Deven Edward Pitcher : <a href="http://OhDeven.com">OhDeven.com</a></h4>
        <p>This web-enhanced report aims to cultivate a semesters worth of thought and work into an informative and interesting narrative. Follow along as we formulate our problem, acquire our data, construct our model, and provide analysis into the intriguing world of e-commerce referral sales. With a few known analytics it is possible to identify a potentially profitable drop ship website. Let's begin:</p><br>

        
        </div>
        </div>

        <div class="ribbon">
        <div class="wrap">
        <p>This is a data modeling report. Please click on a headline to expand that sections content.</p>

        <div id="report">

            <?php include("sections/author.php"); ?>
            <?php include("sections/task.php"); ?>
            <?php include("sections/context.php"); ?>
            <?php include("sections/methods.php"); ?>
            <?php include("sections/modeling.php"); ?>
            <?php include("sections/conclusions.php"); ?>


        </div><!--report-->

        </div>
        </div>


























        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="_stuff/jq.1.11.min.js"><\/script>')</script>
        <script src="_stuff/rainbow.js"></script>
        <script src="_stuff/dvn.js"></script>
        <script src="_stuff/charts/highcharts.js"></script>


        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-17406195-3', 'ohdeven.com');
          ga('send', 'pageview');
        </script>
    </body>
</html>
