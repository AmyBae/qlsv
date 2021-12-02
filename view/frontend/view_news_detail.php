<div class="row" style="margin-top: 20px;"> 
        <!-- news -->
        <div class="col-md-12 col-sm-12">
          <div><a href="#">
            <h5><?php echo $arr->c_name; ?></h5>
            </a></div>
          <article class="news">
            <figure> <img class="img-thumbnail text-center" src="public/upload/news/<?php echo $arr->c_img; ?>"> </figure>
            <p><?php echo $arr->c_description; ?></p>
            <?php echo $arr->c_content; ?>
          </article>
        </div>
        <!-- end news --> 
        
      </div>