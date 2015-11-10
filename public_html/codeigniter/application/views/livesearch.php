<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	
	<title>Livesearch with Codeigniter and Mootools JSON example</title>
	<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>views/style.css" />
	<script type="text/javascript" src="<?php echo site_url(); ?>views/js/mootools.v1.1.js"></script>
	<!--script type="text/javascript" src="http://pr0digy.com/mint/?js"></script-->
	
<script type="text/javascript">
//<![CDATA[	
	var Site = {

		start: function(){
			Site.liveSearch();
		},
		
		liveSearch: function(){
			//set focus on the search form
			$('searchterm').focus();
			
			//attach a keyup event to the searchfield
			$('searchterm').addEvent('keyup', function(event){
				
				//controller's URI
				var url = '<?php echo site_url('livesearch/json'); ?>';
				
				//AJAX request
				new Ajax(url, {

					method: 'post',
					onComplete: function(request){
						//prepare search container for new results
						$('search-results').empty();
						
						//if controller returned some results decode them
						if(request) var results = Json.evaluate(request);
						//pass results object to the output method
						if(results) Site.buildSearchResults(results);
					}, 
					//post search form
					postBody: $('ls-form')				
					
				}).request();
				
				//return false;
			});
		},
		
		buildSearchResults: function(results){
			//prepare the container for newly fetched results
			var container = $('search-results');
			var heading = new Element('h2').setHTML('Search results:').injectInside(container);

			//output the results
			results.each(function(result, i) {
				var title = new Element('h3').injectInside(container);
				var link = new Element('a', {'href': '#post-'+result.id}).setHTML((i+1)+'. '+result.title).injectInside(title);
				var body = new Element('p').setHTML(result.body).injectAfter(title);
				var br = new Element('br').injectAfter(body);
			});
		}

	};
	window.addEvent('domready', Site.start);
//]]>	
</script>
</head>

<body>

<div id="container">
	
	<div id="header">
		<h1>Livesearch with Codeigniter and Mootools JSON</h1>
	</div>
	
	<div id="form-container-wrapper">
		<div id="form-container">
			<form method="post" id="ls-form" action="<?php site_url('ajax'); ?>">
				<p>
					<label for="searchterm" class="heading">Start typing in the bessage box. Try <strong>CodeIgniter</strong>, for example.</label>
				</p>	
				<p>
					<input type="text" name="searchterm" id="searchterm" value="" />
					<input type="submit" name="Submit" id="submit" value="Submit" />
				</p>

			</form>
		</div><!-- form-container -->
	</div><!-- form-container-wrapper -->
	
	<div id="search-results-wrapper">
		<div id="search-results">
		
		<?php if($posts): ?>
			<h2>Search results:</h2>
			<?php $count = 1; foreach($posts as $key => $post) : ?>
			
			<h3><?php echo $count; ?>. <?php echo $post['title']; ?></h3>
			<p><?php echo $post['body']; ?></p>

			<?php $count++; endforeach; ?>
		<?php else: ?>	
		
			<h2>Search results:</h2>
			<p>Your query did not match any posts.</p>
			
		<?php endif; ?>	
		
		</div><!-- end search-results -->
	</div><!-- end search-results-wrapper -->

</div><!-- end container -->

<br/>
<div id="footer">
	<p>
		<a href="http://pr0digy.com/codeigniter/live-search-with-codeigniter-and-mootools/" title="Go to the related article">
			Related article - Livesearch with Codeigniter and Mootools JSON
		</a>
	</p>
</div>

</body>
</html>