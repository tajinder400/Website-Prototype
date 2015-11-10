<div id="content">

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
        <div class ="col-lg-9">
            
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class ="page-header">
                            <form class="navbar-form navbar-center" action ="<?=base_url()?>search" method="post" id="searchform">
Search the database:&nbsp;<input type="text" class="form-control" name="searchterm" id="searchterm" value="<?=$searchterm?>" />&nbsp;
<input class = "btn btn-default" type="submit" value="Search >>" id="submit" />
</form>
                        </div>
                        <ul class ="pagination">
                        <?php if($results == 0):?>
No records found.
<?php else:?>
<?php foreach($results as $r):?>
<?=$r->title2?><br />
<?php endforeach;?>
<?php endif;?>
<p>
<?=$links?>
</p>
                        </ul>
<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
<?php $this->session->unset_userdata('searchterm'); ?>
                    </div>
                </div>        
                        
        </div>
        

</div>
</div>
