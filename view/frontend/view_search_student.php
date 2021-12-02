<style>	
	th{
		text-align:center;
		background-color: #4CAF50;
		color: white;
		padding:5px;
	}
	.table-bordered tbody tr td {
		border: 1px solid #ccccbbd9 !important;
		padding: 10px !important;
		text-align: left;
	}
	.card .header h2{
		color: #ffa304;
		font-weight:bold;
		font-size: 20px;
	}
</style> 
<div class="col-xs-12 col-sm-12 col-md-12  " style="padding:0px;">
	<label style="margin: 0px;padding:0px;">Tìm kiếm theo:</label>
</div>
<script type="text/javascript">

  function search(){
	var key=document.getElementById("key").value;
	location.href="index.php?controller=search_student&key="+key;
  }
</script>
	<div class="col-xs-12 col-sm-12 col-md-12  " style="padding:5px;padding-bottom:0px;">
		<div class="col-xs-12 col-sm-4 col-md-4">
			<label style="padding:0px;">Mã sinh viên</label>
			<div class="col-xs-12 col-sm-12 col-md-12" style="padding: 0px;border: 1px solid #cccccc;border-radius: 6px;">
				<div class="col-xs-10 col-sm-11 col-md-11" style="padding:0px">
					<input type="text" class="form-control" name="q" id="key" placeholder="Nhập mã sinh viên..." style="padding:10px 5px;margin-top:0px;border: none !important;box-shadow: none !important;">				
				</div>	
				<div class="col-xs-2 col-sm-1 col-md-1" style="padding:0px">
					<button type="reset" class="btn btn-default" style=" box-shadow: none;border: 0px !important;background-color: initial !important;" title="Xóa tìm kiếm">
						<i class="fa fa-times"></i>
					</button>
				</div>	
			</div>	
		</div>	
		<input onclick="search();" type="submit" id="search_button" class="btn btn-primary" value="Search">
	</div>
	<div id="search_results" style="padding:5px;"></div>
<div  class="col-xs-12 col-sm-12 col-md-12  " style="padding:0px">
	<div class="col-xs-12 col-sm-12 col-md-12  " style="padding:0px;padding-top:10px;">
		<div class="col-xs-12 col-sm-7 col-md-7  " style="padding:0px;padding-bottom:5px;">
			<!--<button type="button" class="btn btn-primary" onclick="search();" >Tìm kiếm</button>
			<!--<button type="button" class="btn btn-primary" (click)="resets() " >Refresh</button>-->
			
		</div>
		<div  class="col-xs-12 col-sm-5 col-md-5  " style="text-align: right;">
			<label style="padding-top:7px;">
				<span style="padding: 3px;font-weight: bold;">Tống số: <?php echo $total; ?></span>
			</label>
			<span style="padding: 3px;font-weight: bold;">Hiển thị</span>
			<form method="post"> 
				<select class="form-control" name="pageSizeInPage"  style="width:20% !important;float:right;"> 
					<option value=4>4</option>
					<option value=10>10</option>
					<option value=50>50</option>
					<option value=100>100</option>
					<option value=500>500</option>
				</select>
			</form>
		</div>
	</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 " style="margin-top:20px">
   <table class="table table-bordered">
		<thead>
			<tr>
				<th>STT</th>
				<th>Mã sv</th>
				<th>Lớp</th>
				<th>Họ tên</th>
				<th>Ngày sinh</th>
				<th>Quê quán</th>
				<th>Khoa</th>
				
				
			</tr>
		</thead>
		<tbody>
			<?php 
				foreach($arr as $rows)
				{
			 ?>
				<tr>
					<td><?php echo ++$i; ?></td>
					<td><?php echo $rows->ma_sv; ?></td>
					<td><?php echo $converted[$rows->cl_id]->cl_name ?></td>
					<td><?php echo $rows->st_name; ?></td>
					<td><?php echo $rows->st_db; ?></td>
					<td><?php echo $rows->st_hometown; ?></td>
					<td><?php echo $converted[$rows->cl_id]->cl_facul ?></td>
					
				</tr>
			<?php } ?>
		</tbody>
	</table>
	<div class="col-xs-12 col-sm-12 col-md-12 text-center">
		<ul class="pagination " style="right: 400px; bottom: 0px; margin-top:20px">
			<li class="page-item active"><a href="#" class="page-link">Page</a></li>
			<?php 
				for($i = 1; $i <= $num_page; $i++)
				{
			 ?>
			<li class="page-item"><a href="index.php?controller=search_student&key=<?php echo $key; ?>&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
			<?php } ?>
		</ul>
	</div>
</div>
<!--<script>
    //Add a JQuery click listener to our search button.
	
    $('#search_button').click(function(){
        //If the search button is clicked,
        //get the employee name that is being search for
        //from the search_box.
        var employee_name = $('#employee_name').val().trim();
 
        //Carry out a GET Ajax request using JQuery
        $.ajax({
            //The URL of the PHP file that searches MySQL.
            url: 'search.php',
            data: {
                name: employee_name
            },
            success: function(returnData){
				
                //Set the inner HTML of our search_results div to blank to
                //remove any previous search results.
                $('#search_results').html('');
                //Parse the JSON that we got back from search.php
                var results = JSON.parse(returnData);
                //Loop through our employee array and append their
                //names to our search results div.
                $.each(results, function(key, value){
                    //The name of the employee will be present
                    //in the "name" property.
                    $('#search_results').append(value.name + '<br>');
                });
                //If no employees match the name that was searched for, display a
                //message saying that no results were found.
                if(results.length == 0){
                    $('#search_results').html('No employees with that name were found!');
                }
            }
			
        });
    });
</script>-->