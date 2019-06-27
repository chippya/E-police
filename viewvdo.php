
<?php
include 'connection.php';
  $sql="select * from videos as u, login as l where l.lid=u.lid";
  $result=mysqli_query($con,$sql);
  
  $i=0;
  while($row=mysqli_fetch_array($result))
  {

	  ?>
	  <table>
<tr>
  <td align="center"><?php echo $row['description'];?></td>
  <td> <video width="300" height="200" controls>
	<source src="uploads/<?php echo $row['file']; ?>" type="video/mp4">
	</video> </td>

  
  
  
  
  
  <?php
		 
		 $i++;
		 ?>
</tr>
<?php
  }
  ?>