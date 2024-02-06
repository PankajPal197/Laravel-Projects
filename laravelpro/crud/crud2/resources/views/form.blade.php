<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form validate</title>
    <link rel="stylesheet" href="{{ url('css/style.css ') }} ">
</head>
<body>
    <h1>Registraion Form</h1>
    <div class="form">
    <form action="form.php" method="POST" id="form">
<input type="text" placeholder="First Name" name="fname" required/><span>*</span>
<input type="text" placeholder="Last Name" name="lname" required/><span>*</span>
<input type="email" placeholder="Email" name="email" required/><span>*</span>
<input type="text" placeholder="Address" name="address" required/><span>*</span>
<input type="number" placeholder="Phone" name="phone" required/><span>*</span>
<input type="number" placeholder="Zip Code" name="zip" required/><span>*</span>
<button type="subnit" value="">Submit</button>
</form>
    </div>
</body>
</html>
