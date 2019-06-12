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
    <label for="state"><sup class="req">*</sup>State: </label>
    <select name="state" id="state" class="form__input-text form__input-select" required>
    	<option>Select any one</option>
    	<option value="odisha">Odisha</option>
    	<option value="hydrabasd">Hydrabasd</option>
    	<option value="mumbai">Mumbai</option>
    </select>
</div><br>
<div class="form__row">
<label for="dist"><sup class="req">*</sup>District: </label>
<select name="district" id="dist" class="form__input-text form__input-select" required>
	<option value="">Select District</option>
    <option value="anugul">Anugul</option>
    <option value="balangir">Balangir</option>
    <option value="balasore">Balasore</option>
    <option value="bargarh">Bargarh</option>
    <option value="bhadrak">Bhadrak</option>
    <option value="boudh">Boudh</option>
	<option value="cuttack">Cuttack</option>
    <option value="deogarh">Deogarh</option>
    <option value="dhenkanal">Dhenkanal</option>
    <option value="gajapati">Gajapati</option>
    <option value="ganjam">Ganjam</option>
    <option value="jagatsinghapur">Jagatsinghapur</option>
    <option value="jajpur">Jajpur</option>
    <option value="jharsuguda">Jharsuguda</option>
    <option value="kalahandi">Kalahandi</option>
    <option value="kandhamal">Kandhamal</option>
    <option value="kendrapara">Kendrapara</option>
    <option value="keonjhar">Keonjhar</option>
    <option value="khordha">Khordha</option>
    <option value="koraput">Koraput</option>
    <option value="malkangiri">Malkangiri</option>
    <option value="mayurbhanj">Mayurbhanj</option>
    <option value="nabarangpur">Nabarangpur</option>
    <option value="nayagarh">Nayagarh</option>
    <option value="nuapada">Nuapada</option>
    <option value="puri">Puri</option>
    <option value="rayagada">Rayagada</option>
    <option value="sambalpur">Sambalpur</option>
    <option value="sonepur">Sonepur</option>
    <option value="sundargarh">Sundargarh</option>
</select>
</div><br>
<div class="form__row">
    <label for="pin"><sup class="req">*</sup>PIN: </label>
    <input type="text" id="pin" name="pin" pattern="\d{6}" maxlength="6" placeholder="6 digit PIN No" class="form__input-text" required/>
</div><br>
<div class="form__row">
    <label for="adr"><sup class="req">*</sup>Address: </label>
    <textarea name="adr" id="adr" rows="5" cols="35" value="" class="form__textarea" required/></textarea>
</div><br>
<div class="form__row">
    <label for="land">Type of Land: </label><br>
    <div>
    <input type="radio" name="land" value="Agricultural land" class="form__input-radio"> Agricultural land<br>
    <input type="radio" name="land" value="plot" class="form__input-radio"> Plot<br>
    <input type="radio" name="land" value="commercial land" class="form__input-radio"> Commercial land<br>
    <input type="radio" name="land" value="Residential" class="form__input-radio"> Residential</div>
</div><br>
<div class="form__row">
    <label for="local"><sup class="req">*</sup>Locality: </label>
    <input type="text" id="local" name="local" class="form__input-text" required />
</div><br>
<div class="form__row">
    <label for="d">Other Details: </label>
    <input type="text" id="d" name="d" class="form__input-text">
</div><br>
<div class="btn-container">
<input type="submit" name="submit" value="process next" class="btn btn-submit"><input type="reset" name="cancel" value="Cancel" class="btn btn-cancel"></div>
</form>
</section>
</main>
<?php

if(isset($_POST["submit"])){
$state=$_POST['state'];
$district=$_POST['district'];
$pin=$_POST['pin'];
$address=$_POST['adr'];
$land=$_POST['land'];
$local=$_POST['local'];
$other=$_POST['d'];


$query = "INSERT INTO u1 VALUES ('$state','$district','$pin','$address','$land','$local','$other')";
$data = mysqli_query($conn,$query);

if($data)
{
	echo "data inserted into database";
}}
?>

</body>
</html>
