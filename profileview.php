<?php
include 'connection.php';
session_start();
if(!(isset($_SESSION['lid'])))
{
	header('location:index.php');
}

     $lid=$_SESSION['lid'];               
                    $sql = "select firstname from tbl_userreg where lid='$lid'";

                    $q = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($q)) {
                        ?>
                        <tr>

                            <td><?php echo $row['firstname']; ?></td>
                            





                        </tr>
                        <?php }
                        ?>


