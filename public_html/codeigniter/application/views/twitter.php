<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Twitter Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {

      }
      .sidebar-nav {
        padding: 9px 0;
      }

      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
    </style>
    

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>

    <div class="container-fluid">
      
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Recent Tweets</li>
              <?php $counter=0; ?>
              <?php foreach(array_slice($tweets,0,20) as $tweet) : ?>              
                  <li><a style="cursor:pointer" onclick=openTweet("<?php echo $counter; ?>")><?php echo $tweet->created_at; ?></a></li>
                  <?php $counter++; ?>
          	  <?php endforeach; ?>
            </ul>
          </div>
        </div>
        
        <div class="span9" id="tweet_box">
          <div class="hero-unit">
            
          </div>
        </div><!--/span-->

        <?php $counter2=0; ?>
        <?php foreach(array_slice($tweets,0,20) as $tweet) : ?>
          <div class="span9" id="<?php echo $counter2; ?>" style="display:none;">
            <div class="container">
    <div class="row">
        <div class ="col-lg-9">
            <div class="panel panel-default">
                    <div class="panel-body">
              <div class="hero-unit">
              
                <div class="page-header">
                <h3><?php echo $tweet->created_at; ?></h3>
              </div>
              <p><?php echo $tweet->text; ?></p>
            </div>
          </div><!--/span-->
          <?php $counter2++; ?>
        <?php endforeach; ?>
</div>
</div>
</div>
    </div>
</div>
      </div>

    </div>

    <script type="text/javascript">
      function openTweet(tweet) {
        document.getElementById("tweet_box").innerHTML = document.getElementById(tweet).innerHTML;
      }
    </script>
  </body>
</html>