<?php 
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
    {   
header('location:index.php');
}
else{ 
if(isset($_POST['update']))
{    
$userid=$_SESSION['userid'];  
$fname=$_POST['fullname'];
$mobileno=$_POST['mobileno'];

$sql="update tblusers set FullName=:fname,MobileNumber=:mobileno where UserId=:userid";
$query = $dbh->prepare($sql);
$query->bindParam(':userid',$userid,PDO::PARAM_STR);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':mobileno',$mobileno,PDO::PARAM_STR);
$query->execute();

echo '<script>alert("Your profile has been updated")</script>';
}

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Online Library Management System | Student Signup</title>
	<link rel="icon" href="images/leylandicon.jpg">
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' /> 
<style>
.img-circle {
border: 1px black; 
width: 250px;
height: 190px;
border-radius: 50%;
}
</style>
</head>
<body>
<?php include('includes/header.php');?>
<!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">My Profile</h4>
                
                            </div>

        </div>
             <div class="row">
<div class="col-md-9 col-md-offset-1">
               <div class="panel panel-danger">
                        
                        <div class="panel-body">
                            <form name="signup" method="post">
<?php 
$userid=$_SESSION['userid'];
$sql="SELECT * from  tblusers  where UserId=:userid ";
$query = $dbh -> prepare($sql);
$query-> bindParam(':userid', $userid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?>  

				<div class="form-group">
				<label>User ID : </label>
				<?php echo htmlentities($result->UserId);?>
				</div>

				<div class="form-group">
				<label>Reg Date : </label>
				<?php echo htmlentities($result->RegDate);?>
				</div>
				<?php if($result->UpdationDate!=""){?>
				<div class="form-group">
				<label>Last Updation Date : </label>
				<?php echo htmlentities($result->UpdationDate);?>
				</div>
				<?php } ?>
<?php }} ?>
				<div class="form-group">
				<label>Profile Status : </label>
				<?php if($result->Status==0){?>
				<span style="color: green">Active</span>
				<?php } 
				else { ?>
				<span style="color: red">Blocked</span>
				</div><?php }?>

				<div class="form-group">
				<label>Enter Full Name</label>
				<input class="form-control" type="text" name="fullname" value="<?php echo htmlentities($result->FullName);?>" autocomplete="off" required />
				</div>


				<div class="form-group">
				<label>Mobile Number :</label>
				<input class="form-control" type="text" name="mobileno" maxlength="10" value="<?php echo htmlentities($result->MobileNumber);?>" autocomplete="off" required />
				</div>
														
				
	  
				<button type="submit" name="update" class="btn btn-primary" id="submit">Update Now </button>
													</form>
											</div>
										</div>
											</div>
						</div>
					</div>
					</div>
     <!-- CONTENT-WRAPPER SECTION END-->
    <?php include('includes/footer.php');?>
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
<?php } ?>
