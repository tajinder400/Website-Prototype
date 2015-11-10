
<div id="content">
		<?php
			foreach($results as $row){
				$title = $row->title;
				$synopsis = $row->synopsis;
				$developer = $row->developer;
                                $genre = $row->genre;
                                $image = $row->image;                              
                                
			}

		?>
  
	<div class = "container">

		<div class = "jumbotron">
			<div id="container">
    <canvas id="canvas" width="600" height="80"></canvas>
</div>
			
		</div>
	</div>
    
<div class="container">
    <div class ="row">
        <div class ="col-lg-9">
            
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class ="page-header">
                            <?php echo heading($title, 3); ?>
                        </div>
                        <img class ="featuredImg" src="<?php echo $image; ?>" width="100%">                        
                        <h4>Developer</h4>
                        <p><?php echo $developer; ?></p>
                        <h4>Genre</h4>
                        <p><?php echo $genre; ?></p>
                        <h4>Synopsis</h4>
                        <p><?php echo $synopsis; ?></p>
                        </article>

                    </div>
                </div>        
                        
        </div>
        
                
    </div>
</div>
</div>

<script src="<?php echo base_url();?>js/canvas.js"></script>
