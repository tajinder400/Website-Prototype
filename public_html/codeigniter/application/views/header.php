<!DOCTYPE html>
<html>
	<header>
		<title>Visual Novel Database</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href = "<?php echo base_url();?>css/bootstrap.min.css" rel ="stylesheet"> 
		<link href = "<?php echo base_url();?>css/styles.css" rel ="stylesheet">
                <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
                <script src="<?php echo base_url();?>js/bootstrap.js"></script>
                <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
                <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
                 <link href="css/bootstrap-responsive.css" rel="stylesheet">
                 <script src="<?php echo base_url();?>js/localstorage.js"></script>

                <script>
                    $(function(){
                  $("#searchterm").autocomplete({
                    source: "<?php echo base_url();?>search/get_search" // path to the get_birds method
                  });
                });</script>	

                
	</header>
	<body>
	





