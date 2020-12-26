
<!DOCTYPE HTML>  
<html>
<head>
<title>checkout</title>
<style>
h1   {color:#423067;}
p    {color: black; font-family: verdana;}
body {background-color: #C6AEF6;font-family: verdana; background-image: url('https://www.shopping.com/images/banner-image-short.png'); }
.error {color: #FF0001; font-family: verdana;
}
.btn{ background-color: #423067;
  color: white;}
</style>
</head>
<body>  
<h1>Billing Details</h1>  
<span class = "error">* Required field </span>  
<br><br> 
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" placeholder="Enter full name" required /><span class="error" <style>* </span>
  <br><br>
 
  Contact No.: <input type="text" name="contact" placeholder="Enter contact number" required />  <span class="error">* </span>
  <br><br>
  E-mail: <input type="text" name="email" placeholder="Enter email" required />  <span class="error">* </span>
  <br><br>
 Address: <input type="text" name="add" placeholder="Enter address" required />  <span class="error">* </span>
  <br><br>
  City <input type="text" name="city" placeholder="Enter city" required />  <span class="error">* </span>
  <br><br>
   State<input type="text" name="state" placeholder="Enter state" required />  <span class="error">* </span>
  <br><br>
  Pincode <input type="text" name="pin" placeholder="Enter pincode" required />  <span class="error">* </span>
  <br><br>
   Shipping address same as billing address:  
    <input type="checkbox" name="agree" />    <span class="error">* </span>
  <span><input type="submit" name="submit" class ="btn" value="Submit">  </span>
</form>
<p>Go back to cart <a href="showcart.php?id=$id">Click here</a></p>

</body>
</html>