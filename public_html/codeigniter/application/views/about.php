
<div id="content">
		<?php
			foreach($results as $row){
				$title = $row->title;
				$information = $row->information;
				                             
                                
			}

		?>
  

    
<div class="container">
    <div class ="row">
        <div class ="col-lg-9">
            
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class ="page-header">
                            <?php echo heading($title, 3); ?>
                        </div>
                        <video width="100%" height="100%" controls>
  <source src="http://nyanpasu.jp/image/What's%20a%20Visual%20Novel.mp4" type="video/mp4">
  
Your browser does not support the video tag.
</video>                      
                        <h4>Information</h4>
                        <p><?php echo $information; ?></p>
                        <h4>Geolocation</h4>
                        <p id="demo">Click the button to get your position:</p>
                        <button class = "btn btn-default" onclick="getLocation()">Try It</button>
                        <div id="mapholder"></div>
                        <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
                        <script src="<?php echo base_url();?>js/geolocation.js"></script>
                        
                        </article>

                    </div>
                </div>        
                        
        </div>
        
                
    </div>
</div>
    
</div>

