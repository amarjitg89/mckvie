<?php 

include('db_connection.php');
$Mainclass=new DB_Controller();

$SLN = $_REQUEST['SLN'];
$active = "No";
$update_sql=$Mainclass->dbh->prepare("UPDATE sub_category_master SET Active=?  WHERE SLN=?");
$update_sql->bind_param('si',$active,$SLN);
$update_sql->execute();
$update_sql->close();


?>