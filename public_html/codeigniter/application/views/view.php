		<?php
			foreach($results as $row){
				$title = $row->title;
				$synopsis = $row->synopsis;
				$developer = $row->developer;
                                $genre = $row->genre;
                                $image = $row->image;
                                $page = $row->page;
                                
			}

		?>


<div class="container">
    <div class ="row">
        <article>
        <div class ="col-lg-9">
            
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class ="page-header">
                            <h3><?php echo $news_item['title']; ?></h3>
                        </div>                        
                        <img class ="featuredImg" src="<?php echo $news_item['image'];?>" width="100%">
                        <h4>Developer</h4>
                        <p><?php echo $news_item['developer']; ?></p>
                        <h4>Genre</h4>
                        <p><?php echo $news_item['genre']; ?></p>
                        <h4>Synopsis</h4>
                        <p><?php echo $news_item['synopsis']; ?></p>                        
                    </div>
                </div>        
                        
        </div>
        </article>
        <aside>    
        <div class ="col-lg-3">
                    <div class ="list-group">
                        <a href="<?php echo base_url("content/$page");?>" class ="list-group-item">
                            <h4 class =list-group-item-heading><?php echo $title ?></h4>
                            <details><p class =list-group-item-heading><?php echo word_limiter($synopsis, 50); ?></p></details>
                            
                        </a>
                    </div>
                    </div>
        </aside>
                
    </div>
</div>
</div>

