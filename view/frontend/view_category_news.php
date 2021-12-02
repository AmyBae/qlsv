  <div class="row" style="position: relative;"> 
    <?php 
   //lay mot ban ghi
    $category = $this->model->get_a_record("select c_name from tbl_category_news where pk_category_news_id=$id");
 	?>
<!-- category -->
    <div class="col-md-6 popular ">
      <h2><a href="#"><?php echo isset($category->c_name) ? $category->c_name : ""; ?></a></h2>
      <!--news-->
      <!-- other news -->

    <div class="col-md-12 news">
        <?php 
        foreach($arr as $rows)
          {
         ?>
        <div class="line"></div>
        <!-- list news -->
        <div class="caption ">
          <div class="row post">
            <h4><a href="index.php?controller=news_detail&id=<?php echo $rows->pk_news_id; ?>"><?php echo $rows->c_name; ?></a></h4>
            <img src="public/upload/news/<?php echo $rows->c_img; ?>" width="120" style="float:left; margin-right:15px;">
            <p><?php echo $rows->c_description; ?></p>
          </div>
          <div class="line"></div>
        </div>
        <!-- end list news -->
        <?php } ?>
      </div>	

      <!-- end other news --> 
    </div>
    <!-- end category -->

<ul class="pagination" style="position: absolute;right: 400px; bottom: 0px;">
        <li class="page-item active"><a href="#" class="page-link">Page</a></li>
        <?php 
            for($i = 1; $i <= $num_page; $i++)
            {
         ?>
        <li class="page-item"><a href="index.php?controller=category_news&id=<?php echo $id; ?>&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
        <?php } ?>
      </ul>
      <div class="col-md-3" style="margin-top: 15px; position: absolute;right: 0px;">
		<aside class="sticky">
		<!-- adv -->
		<div class="panel panel-default" >
			<div class="panel-body">
				<div class="adv"><a href="#" target="_blank"><img class="img-responsive" src="public/frontend/images/adv1.gif"></a></div>
				<div class="adv"><a href="#" target="_blank"><img class="img-responsive" src="public/frontend/images/adv2.png"></a></div>
				<div class="adv"><a href="#" target="_blank"><img class="img-responsive" src="public/frontend/images/adv3.png"></a></div>
				<div class="adv"><a href="#" target="_blank"><img class="img-responsive" src="public/frontend/images/adv4.jpg"></a></div>
				
			</div>
		</div>
		<!-- end adv -->
		</aside>
	</div>
	<!-- end 3 col -->
  </div>
  <!-- end rows --> 
  



 
   