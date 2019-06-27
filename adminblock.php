<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>

<?php
include 'connection.php';
include 'dbconnection.php';
$db= new DbConnection;
session_start();



?>
<table width="682" border="0" align="center" cellpadding="3" cellspacing="0">

<caption>
<h2><font color="#660000">Users</font></h2>
</caption>
<tr bgcolor="#c01e46">
  <td align="center" width="10"><b><font color="#000000">firstname</font></b></td>
  <td align="center" width="25" ><b><font color="#000000">lastname<br />Code</font></b></td>
  <td align="center" width="25"><b><font color="#000000">phone<br />Name</font></b></td>
  <td align="center" width="25"><b><font color="#000000">gender</font></b></td>
  <td align="center" width="40"><b><font color="#000000">dob</font></b></td>
  <td align="center" width="30"><b><font color="#000000">housenumber</font></b></td>
  <td align="center" width="25"><b><font color="#000000">wardnumber</font></b></td>
  <td align="center" width="40"><b><font color="#000000">locality</font></b></td>
  <td align="center" width="30"><b><font color="#000000">district</font></b></td>
  <td align="center" width="25"><b><font color="#000000">email</font></b></td>
  <td align="center" width="40"><b><font color="#000000">idproof</font></b></td>
  <td align="center" width="30"><b><font color="#000000">profilepic</font></b></td>
   <td width="20">&nbsp;</td>
  <td width="20">&nbsp;</td>
  <td width="20" >&nbsp;</td>
 
</tr>
<?php
  $sql="select * from tbl_userreg as u, login as l where l.lid=u.lid";
  $result=mysqli_query($con,$sql);
  
  $i=0;
  while($row=mysqli_fetch_array($result))
  {

	  ?>
<tr>
  <td align="center"><?php echo $row['firstname'];?></td>
  <td align="center"><?php echo $row['lastname'];?></td>
  <td align="center"><?php echo $row['phone'];?></td>
  <td align="center"><?php echo $row['gender'];?></td>
  <td align="center"><?php echo $row['dob'];?></td>
  <td align="center"><?php echo $row['housenumber'];?></td>
    <td align="center"><?php echo $row['wardnumber'];?></td>
  <td align="center"><?php echo $row['locality'];?></td>
  <td align="center"><?php echo $row['district'];?></td>
   <td align="center"><?php echo $row['email'];?></td>
  <td align="center"><?php echo $row['idproof'];?></td>
 
  <td align="center"><img src="uploads/<?php echo $row['profilepic'];?>" width="80" height="80" /></td>
  
  <td align="center">
  <?php if($row["status"]=='1')
		 {
			 ?>
    <a href="block.php?view=2&flag=block&id=<?php echo $row['lid'];?>"><font color="#FF0000">unblock</font></a>
    <?php
		 }
		 else if($row["status"]=='2')
		 {
			 ?>
    <a href="block.php?view=1&id=<?php echo $row['lid'];?>"><font color="#006600">block</font></a>
    <?php } ?></td>
  
  <?php
		 
		 $i++;
		 ?>
</tr>
<?php
  }
  ?>
</table>
</body>
</html>
