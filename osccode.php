<?php include_once("config/config.php"); isAdminLoggedIn(); include_once("common/header.php"); include_once("common/left_navi.php");


$query = "select * from category ";

$result = mysql_query($query) or die(mysql_error()); while($row = mysql_fetch_assoc($result)){
$category[] = $row;

}

if(isset($_POST['category'])){

$category_id = $_POST['category'];

}

else{

$category_id = $category[0]['id'];

}

$subcategory = array();

$query = "select * from sub_category where category_id='".$category_id."'";

$result = mysql_query($query); while($row = mysql_fetch_assoc($result)){
$subcategory[] = $row;

}
 
$i=1;?>

<div id="right_navi">

<br /><br />

<a href="add_edit_subcategory.php" class="btn_sm">Add</a>

<div align="center">

<form action="" method="post" id="subcategoryform"> Category :
<select name="category" onchange="document.getElementById('subcategoryform').submit();">

<?php

foreach($category as $cat){

if($cat['id'] == $category_id){$selected= 'selected="selected"';} else $selected = '';
echo '<option '.$selected.' value="'.$cat['id'].'">'.$cat['category'].'</option>';

}

?>

</select>

</form>

</div>

<table border="0" cellspacing="0" class="displaycontent" width="400">

<tr>

<th>S no</th>

<th>Subcategory</th>

<th>Status</th>

<th>Edit</th>
 


</tr>

<?php if(count($subcategory)>0){
foreach($subcategory as $subcat){?>

<tr>



<td><?php echo $i++; ?></td>

<td><?php echo $subcat['name']; ?></td>

<td><?php if($subcat['status']==0) echo 'Active';else 'Deactive'; ?></td>

<td><a href='add_edit_subcategory.php?sub_id=<?php echo
$subcat['id'];?>'>Edit</a></td>

</tr>

<?php }} ?>



</table>

</div>

</div>

<?php include_once("common/footer.php")?>



<?php include_once("config/config.php"); isUserLoggedIn(); include_once("common/header.php"); include_once("common/left_navi.php");
 
$query = "SELECT * FROM `tab_checkout` where user_id=".$_SESSION['loggedIn'];

$result = mysql_query($query); if(mysql_num_rows($result)>0){


?>

<div id="right_navi">

<br />




<table border="0" cellspacing="0" class="displaycontent" width="600">

<tr>

<th>Sno.</th>

<th>Date</th>

<th>First Name</th>

<th>Last Name</th>

<th>Address</th>

<th>City</th>

<th>State</th>

<th>Country</th>

<th>Mobile</th>

<th>Phone</th>

<th>Status</th>



</tr>

<?php
 
$i=1;

while($row = mysql_fetch_assoc($result)){

?>



<tr>

<td><?php echo $i++; ?></td>

<td><a href="shipping.php?id=<?php echo $row['id'];?>"><?php echo
$row['created_at']; ?></a></td>

<td><?php echo $row['first_name']; ?></td>

<td><?php echo $row['last_name']; ?></td>

<td><?php echo $row['address']; ?></td>

<td><?php echo $row['city']; ?></td>

<td><?php echo $row['state']; ?></td>

<td><?php echo $row['country']; ?></td>

<td><?php echo $row['mobile']; ?></td>

<td><?php echo $row['phone']; ?></td>

<td><?php if($row['status']) echo 'deliveried'; else echo 'Shipping'; ?></td>



</tr>




<?php

}

?>

</table>

<?php } else{?>
 
<br /><br /><br /><br /><br /><h2 align="center">No Record Found</h2>

<?php } ?>

</div>

</div>

<?php include_once("common/footer.php");?>




<?php include_once("config/config.php"); isAdminLoggedIn(); include_once("common/header.php"); include_once("common/left_navi.php");


$query = "select * from category ";

$result = mysql_query($query) or die(mysql_error()); while($row = mysql_fetch_assoc($result)){
$category[] = $row;

}

if(isset($_POST['category'])){

$category_id = $_POST['category'];

}

else{

$category_id = $category[0]['id'];

}

$subcategory = array();
 
$query = "select * from sub_category where category_id='".$category_id."'";

$result = mysql_query($query); while($row = mysql_fetch_assoc($result)){
$subcategory[] = $row;

}



$i=1;?>

<div id="right_navi">

<br /><br />

<a href="add_edit_subcategory.php" class="btn_sm">Add</a>

<div align="center">

<form action="" method="post" id="subcategoryform"> Category :
<select name="category" onchange="document.getElementById('subcategoryform').submit();">

<?php

foreach($category as $cat){

if($cat['id'] == $category_id){$selected= 'selected="selected"';} else $selected = '';
echo '<option '.$selected.' value="'.$cat['id'].'">'.$cat['category'].'</option>';

}

?>

</select>

</form>

</div>

<table border="0" cellspacing="0" class="displaycontent" width="400">
 
<tr>

<th>S no</th>

<th>Subcategory</th>

<th>Status</th>

<th>Edit</th>





</tr>

<?php if(count($subcategory)>0){
foreach($subcategory as $subcat){?>

<tr>



<td><?php echo $i++; ?></td>

<td><?php echo $subcat['name']; ?></td>

<td><?php if($subcat['status']==0) echo 'Active';else 'Deactive'; ?></td>

<td><a href='add_edit_subcategory.php?sub_id=<?php echo
$subcat['id'];?>'>Edit</a></td>

</tr>

<?php }} ?>



</table>

</div>

</div>

<?php include_once("common/footer.php")?>
 
<?php include_once("config/config.php"); isUserLoggedIn(); include_once("common/header.php"); include_once("common/left_navi.php");


$query = "SELECT * FROM `tab_checkout` where user_id=".$_SESSION['loggedIn'];

$result = mysql_query($query); if(mysql_num_rows($result)>0){


?>

<div id="right_navi">

<br />




<table border="0" cellspacing="0" class="displaycontent" width="600">

<tr>

<th>Sno.</th>

<th>Date</th>

<th>First Name</th>

<th>Last Name</th>

<th>Address</th>

<th>City</th>

<th>State</th>

<th>Country</th>
 
<th>Mobile</th>

<th>Phone</th>

<th>Status</th>



</tr>

<?php

$i=1;

while($row = mysql_fetch_assoc($result)){

?>



<tr>

<td><?php echo $i++; ?></td>

<td><a href="shipping.php?id=<?php echo $row['id'];?>"><?php echo
$row['created_at']; ?></a></td>

<td><?php echo $row['first_name']; ?></td>

<td><?php echo $row['last_name']; ?></td>

<td><?php echo $row['address']; ?></td>

<td><?php echo $row['city']; ?></td>

<td><?php echo $row['state']; ?></td>

<td><?php echo $row['country']; ?></td>

<td><?php echo $row['mobile']; ?></td>

<td><?php echo $row['phone']; ?></td>

<td><?php if($row['status']) echo 'deliveried'; else echo 'Shipping'; ?></td>



</tr>
 


<?php

}

?>

</table>

<?php } else{?>

<br /><br /><br /><br /><br /><h2 align="center">No Record Found</h2>

<?php } ?>

</div>

</div>

<?php include_once("common/footer.php");?>

