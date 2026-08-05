<?php
define('DB_SERVER','localhost');
define('DB_USER','voidandm_voidandmass');
define('DB_PASS' ,'x)r}#eV_LfY*');
define('DB_NAME', 'voidandm_massdb');
date_default_timezone_set("Asia/Calcutta");
//$image_Path="https://ik.imagekit.io/y5d8oakub/";
error_reporting(0);

class DB_Controller
{
	function __construct()
	{
		$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
		$this->dbh=$con;		
		if(mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
				
	}
	public function real_escapes($obj)
	{
		$ret=mysqli_real_escape_string($this->dbh,$obj);
		return $ret;
	}
	
	public function real_escapes_new($obj)
	{
		$ret=strip_tags(mysqli_real_escape_string($this->dbh,$obj));
		return $ret;
	}
	
	public function Insert_Product($table,$Fields,$Values)
	{
		$SQL="insert into ".$table."(".$Fields.") values(".$Values.")";
		$QRY=mysqli_query($this->dbh,$SQL);
		return $QRY;
	}
	public function Update_Data($table,$FieldValue,$Condition)
	{
	    $SQL="Update ".$table." set ".$FieldValue." where ".$Condition;
		$QRY=mysqli_query($this->dbh,$SQL);
		return $QRY;
	}
	public function num_check($table,$FieldValue,$Condition)
	{
	    $SQL="select ".$FieldValue." from ".$table." where ".$Condition;
		$QRY=mysqli_query($this->dbh,$SQL);
		$Num=mysqli_num_rows($QRY);
		return $Num;
	}
	public function Check_Login()
	{
		if($_COOKIE['User']=='')
		{
		?>
        <script>window.location.href='logout.php';</script>
		 
         <?php
		}
	}
	public function Get_Required_Field($table,$Field_Needed,$condition)
	{
		 $SQL="select ".$Field_Needed." from ".$table." where ".$condition."";
		//echo $SQL;
		$QRY=mysqli_query($this->dbh,$SQL);
		while($Fetch=mysqli_fetch_assoc($QRY))
		{
		$rows[]=$Fetch;
		}
		return $rows;
	}

	public function Get_Required_Field1($table,$Field_Needed,$condition)
	{
		 $SQL="select ".$Field_Needed." from ".$table." where ".$condition."";
		//echo $SQL;
		$QRY=mysqli_query($this->dbh,$SQL);
		while($Fetch=mysqli_fetch_assoc($QRY))
		{
		$rows[]=$Fetch;
		}
		return $rows;
	}

	public function cookies($variable,$value)
	{
		setcookie($variable,$value, time() + (86400 * 30), "/");
	}
	public function Fetch_needed_data_condition($table,$needed_values,$condition)
	{
		$SQL="select ".$needed_values." from ".$table." where ".$condition."";
		
		//echo $SQL;
		$QRY=mysqli_query($this->dbh,$SQL);
		$Fetch=mysqli_fetch_assoc($QRY);
		return $Fetch;
	}
	public function get_sum_field($table,$field,$condition)
	{
	   $SQL_SUM="select sum(".$field.") as total from ".$table." where ".$condition;	
		//echo $SQL_SUM;
		$QRY_SUM=mysqli_query($this->dbh,$SQL_SUM);
		$Ft_SUM=mysqli_fetch_array($QRY_SUM);
		$Ft_Val=$Ft_SUM['total'];		
		return $Ft_Val;
	}
	// public function Generate_Lead_Id()
	// {
	//  $Sql_No="select MAX(Lead_Id) as maxid from lead_master";
	// 	$Qry_No=mysqli_query($this->dbh,$Sql_No);
	// 	$Fetch_No=mysqli_fetch_array($Qry_No);
	// 	$Explode=explode('LID',$Fetch_No['maxid']);
	// 	$Invoice_Count= $Explode[1]+ 1;
	// 	$Invoice = str_pad($Invoice_Count, 5, '0', STR_PAD_LEFT);
	// 	$Invoice_Number="LID/".$Invoice;		
	// 		return $Invoice_Number;
	
	// }
}
?>