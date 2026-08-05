<?php 

include('db_connection.php');
$Mainclass=new DB_Controller();

$per = $_REQUEST['per'];

$fetch_sql=$Mainclass->dbh->prepare("SELECT Image FROM sub_category_master WHERE SLN=? ");
$fetch_sql->bind_param(i,$per);
$fetch_sql->execute();
$fetch_qry=$fetch_sql->get_result();
$fetch_data=$fetch_qry->fetch_assoc();




?>


<img src="<?php echo $BASE_URL?><?php echo $fetch_data['Image']; ?>" width="35%">