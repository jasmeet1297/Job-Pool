<?php
include('CompanyHeader.php');
if(isset($_SESSION['username'])){
    include('DbConnection.php');
$query='Select * from company where username="'.$_SESSION['username'].'"';
    $res=mysqli_query($con,$query);
    $arr=mysqli_fetch_array($res);
?>
<br/><br/>
<h1 style="text-align:center;color:white;"><?php echo $arr['kname'] ?> Profile</h1>
<br/>
<div class="container">
<div class="row" style="border:5px solid white;padding:15px;font-weight:bold;font-size:20px;">
<div class="col-md-4">
<img src="Company/<?php echo $arr['image']; ?>" width="100%">
<br/><br/>
</div>
<div class="col-md-8">
<ul class="list-group list-group-flush">
<li class="list-group-item"><span style="color:red;">Company ID</span> : <span style="color:blue"><?php echo $arr['kid']; ?></span></li><br/>
<li class="list-group-item"><span style="color:red;">Name</span> : <span style="color:blue"><?php echo $arr['kname']; ?></span></li><br/>
<li class="list-group-item"><span style="color:red;">Address</span> : <span style="color:blue"><?php echo $arr['kaddress']; ?></span></li><br/>
<li class="list-group-item"><span style="color:red;">Contact Number</span> : <span style="color:blue"><?php echo $arr['Kphone']; ?></span></li><br/>
<li class="list-group-item"><span style="color:red;">Email</span> : <span style="color:blue"><?php echo $arr['kemail']; ?></span></li><br/>
<li class="list-group-item"><span style="color:red;">Website</span> : <span style="color:blue"><?php echo $arr['web']; ?></span></li><br/>
<ul>
</div>
</div>
</div>
<br/><br/>
<?php
}
else{
    $_SESSION['message']='You have been Logged Out, Login Again';
    header('location:index.php');
}
?>