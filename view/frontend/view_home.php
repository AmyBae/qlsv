
<div class="row" style="position: relative;">
  <?php 
    //liet ke cac danh muc tin tuc
    $category = $this->model->get_all("select * from tbl_category_news order by pk_category_news_id desc limit 3,1");
    foreach($category as $rows_category)
    {
      //kiem tra trong tbl_news, neu co cac bai tin thuoc danh muc thi moi show danh muc do len
      $check = $this->model->num_rows("select pk_news_id from tbl_news where fk_category_news_id=".$rows_category->pk_category_news_id);
      if($check > 0)
      {
 ?>
    <div class="col-md-12 popular ">
      <h2>Tin mới nhất</h2>
      <?php 
          $news = $this->model->get_all("select * from tbl_news where fk_category_news_id=".$rows_category->pk_category_news_id." order by pk_news_id desc limit 0,4");
          foreach($news as $rows)
          {
         ?>
      <!-- list news -->
      <div class="col-md-3 pnews"> <img src="public/upload/news/<?php echo $rows->c_img; ?>"  width="250"height="200" style="float:left; margin-right:15px;">
        <h3><a href="index.php?controller=news_detail&id=<?php echo $rows->pk_news_id; ?>"><?php echo $rows->c_name; ?></a></h3>
        <p><?php echo $rows->c_description; ?></p>
      </div>
         <?php } ?>
      <!-- end list news -->
    </div>
     <?php } ?>
  <?php } ?>
  </div>      
 <!-- rơws -->
  <div class="row"> 
    <?php 
    //liet ke cac danh muc tin tuc
    $category = $this->model->get_all("select * from tbl_category_news order by pk_category_news_id desc ");
    foreach($category as $rows_category)
    {
      //kiem tra trong tbl_news, neu co cac bai tin thuoc danh muc thi moi show danh muc do len
      $check = $this->model->num_rows("select pk_news_id from tbl_news where fk_category_news_id=".$rows_category->pk_category_news_id);
      if($check > 0)
      {
 ?>
<!-- category -->
    <div class="col-md-6 popular ">
      <h2><a href="index.php?controller=category_news&id=<?php echo $rows_category->pk_category_news_id; ?>"><?php echo $rows_category->c_name; ?></a></h2>
      <!--news-->
      
      <div class="col-md-6 psnelnews"> 
        <?php 
        // lay tin dau
         $first_news = $this->model->get_a_record("select * from tbl_news where fk_category_news_id=".$rows_category->pk_category_news_id." order by pk_news_id desc limit 0,1");
       ?><img src="public/upload/news/<?php echo $first_news->c_img; ?>" width="250" height="200">
        <h3><a href="index.php?controller=news_detail&id=<?php echo $first_news->pk_news_id; ?>"><?php echo $first_news->c_name; ?></a></h3>
        <p><?php echo $first_news->c_description; ?></p>
      </div>      
      <!--end news--> 
      <!--news-->
      <div class="col-md-6 psnelnews"> 
        <?php 
          //lay tu tin thu 2
           $sc_news = $this->model->get_a_record("select * from tbl_news where fk_category_news_id=".$rows_category->pk_category_news_id." order by pk_news_id desc limit 1,1");
         ?>
         <img src="public/upload/news/<?php echo $sc_news->c_img; ?>"  width="250"height="200">
        <h3><a href="index.php?controller=news_detail&id=<?php echo $sc_news->pk_news_id; ?>"><?php echo $sc_news->c_name; ?></a></a></h3>
        <p><?php echo $sc_news->c_description; ?></p>
      </div>      
      <!--end news--> 
      <!-- other news -->
      <div class="col-md-12 news">
        <?php 
          //lay tu tin thu 3 
          $news = $this->model->get_all("select * from tbl_news where fk_category_news_id=".$rows_category->pk_category_news_id." order by pk_news_id desc limit 2,4");
          foreach($news as $rows)
          {
         ?>
        <div class="line"></div>
        <!-- list news -->
        <div class="caption ">
          <div class="row post">
            <h4><a href="index.php?controller=news_detail&id=<?php echo $rows->pk_news_id; ?>"><?php echo $rows->c_name; ?></a></h4>
            <img src="public/upload/news/<?php echo $rows->c_img; ?>" width="120" style="float:left; margin-right:15px; margin-top: 17px;">
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
 <?php } ?>
  <?php } ?>
        <div class="col-md-3" style="margin-top: 15px; position: absolute;right: 0px;">
    <aside class="sticky">
    <!-- adv -->
    
    <!-- end adv -->
    </aside>
  </div>
  </div>
  <!-- end rows --> 
   