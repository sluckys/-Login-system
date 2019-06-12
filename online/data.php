<?php
include("conn.php");

?>

<html>
<head>
        <link rel="icon" href="img/favicon.png" sizes="32x32">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>XYZ</title>
    <link rel="stylesheet" href="css/form_style.css">
</head>
<body>
        <header class="header">
        XYZ
    </header>
        <main class="main-container">
        <section class="form-container">
            <div class="alert-div"><strong>Note: </strong> Fields marked with <span style="color: red;">*</span> must be filled.</div>

             <form action="" method="POST">

                     <div class="form__row">
                    <label for="name"><sup class="req">*</sup>First Name : </label>
                    <input type="text" name="fname" id="name" class="form__input-text" placeholder="First Name" required />
                    <input type="text" name="lname" id="name" class="form__input-text" placeholder="Last Name" required/>
                </div><br>
                <div class="form__row">
                    <label for="address" style="align-self: flex-start;"><sup class="req">*</sup>Present Address : </label>
                    <textarea name="address" id="address" cols="35" rows="5" class="form__textarea" placeholder="Enter your Present address" required></textarea>
                </div><br>
                <div class="form__row">
                    <label for="address" style="align-self: flex-start;"><sup class="req">*</sup>Permanent Address : </label>
                    <textarea name="pad" id="paddress" cols="35" rows="5" class="form__textarea" placeholder="Enter your Permanent address" required></textarea>
                </div><br>

                <div class="form__row">
                    <label for="gender">Gender: </label>
                    <div>
                    <input type="radio" name="gender" value="male" class="form__input-radio"> Male <br>
                    <input type="radio" name="gender" value="female" class="form__input-radio"> Female <br>
                    </div>
                </div><br>
<div class="form__row">                  
                    <label for="aadhaar"><sup class="req">*</sup>Aadhaar No. : </label>
                    <input type="text" name="aadhaar" pattern="\d{12}" maxlength="12" id="aadhaar" class="form__input-text" placeholder="Enter 12 digit Aadhaar No" required>
                    <input type="file" name="image" id="image">
                </div><br>
<div class="form__row">
                    <label for="pan"><sup class="req">*</sup>PAN No. : </label>
                    <input type="text" name="pan" id="pan" class="form__input-text" required>
                </div><br>
<div class="form__row">
                    <label for="dl"><sup class="req">*</sup>Driving License : </label>
                    <input type="text" name="dl" id="dl" class="form__input-text" required>
                </div><br> 
                 <label style="font-size: 30px">Bank Details:</label>  
                 <div class="form__row">
                    <label for="back ac no"><sup class="req">*</sup>Bank Account No : </label>
                    <input type="text" name="bankacn" id="bankacn" class="form__input-text" required>
                </div><br>     
                <div class="form__row">
                    <label for="back ac h name"><sup class="req">*</sup>Bank Account Holder No : </label>
                    <input type="text" name="bankachn" id="bankachn" class="form__input-text" required>
                </div><br>    
                <div class="form__row">
                    <label for="ICF NO"><sup class="req">*</sup>ICF No : </label>
                    <input type="text" name="icfno" id="icfno" class="form__input-text" required>
                </div><br>      
                <div class="form__row">
                    <label for="bank name"><sup class="req">*</sup>Bank Name : </label>
                    <input type="text" name="bankname" id="bankname" class="form__input-text" required>
                </div><br>  
<div class="btn-container">

                    <input type="submit" name="submit" value="Submit" class="btn btn-submit">
                </div>
</form></section>
</main>
<?php
if(isset($_POST["submit"])){
if(empty($sn=$_POST['fname'])){
	echo "name is required";
}
	
$cl=$_POST['lname'];
$adr=$_POST['address'];

$padr=$_POST['pad'];
$gender=$_POST['gender'];
$adhar=$_POST['aadhaar'];
$pan=$_POST['pan'];
$dl=$_POST['dl'];
$bankacn=$_POST['bankacn'];
$bankachn=$_POST['bankachn'];
$icfno=$_POST['icfno'];
$bankname=$_POST['bankname'];


$query = "INSERT INTO u VALUES ('$sn','$cl','$adr','$padr','$gender','$adhar','$pan','$dl','$bankacn','$bankachn','$icfno','$bankname')";
$data = mysqli_query($conn,$query);

if($data)
{
	echo "";
}}

?>

</body>
</html>