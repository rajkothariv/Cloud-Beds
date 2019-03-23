<?php
include "connection.php";  //database connection
$fieldname = $_POST['value']; ?> <br>
	
  <table id="example1" class="table table-bordered table-striped">
                <thead>
				
                <tr>
                  <th>Food Name</th>
                  <th>Category</th>
                  <th>Rate</th>
                  <th>Image</th>
				  <th>Action</th>
                </tr>
                </thead>
                
				<tbody>
                <?php 
			if($fieldname!=0)
			{
			$sql="select * from food where cid=$fieldname";
			}
			else
			{
			$sql="select * from food";
			}
			$result=mysql_query($sql);
			while($row=mysql_fetch_array($result))
			{
			?>
				<tr>
                  <td><?php echo $row['fname']; ?></td>
                  <?php 
						$raj=$row['fid'];
					
						$temp=$row['cid'];
						$sql1="select * from fcategory where cid=$temp"; 
						
						$result1=mysql_query($sql1);
						$row1=mysql_fetch_array($result1);
						$price=$row['price'];
						?>
				  <td><?php echo $row1['cname']; ?> 
                  </td>
                  <td><?php echo $price; ?></td>
                  <td><img src="../../Images/<?php echo $row['image'];?>" height="100" width="150"></td>
				  <td> <a href="editfoods.php?id=<?php echo $row['fid']; ?>"><i class="fa fa-pencil-square-o"></i> Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="deletefoods.php?i3=<?php echo $row['fid']; ?>"><i class="fa fa-trash-o"></i> Delete</a> </td>
			</tr> <?php } ?>
                 </tbody>
              </table>
          
 