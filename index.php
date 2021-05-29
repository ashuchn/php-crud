<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Registration Form</title>
</head>
<body class="w3-teal">
    <div class="w3-container w3-green w3-center">
       <p><h2>Registration Form</h2></p>
    </div>
    <br><hr>
    <div class>

    </div>
    <form action="insert.php" class="w3-container w3-light-grey" onsubmit="return validation()" required name="myform" method="POST">
        <p>
            <label for="name">Name</label>
            <input type="text" class="w3-input w3-border w3-round-xxlarge" placeholder="Enter your Name" name="name">
        </p>
        <p>
            <label for="email">Email</label>
            <input type="email" class="w3-input w3-border w3-round-xxlarge" placeholder="Enter your Email" name="email">
        </p>
        <p>
            <label for="mobile">Mobile no.</label>
            <input type="number" class="w3-input w3-border w3-round-xxlarge" placeholder="Enter mobile no." name="mobile">
        </p>
        <p>
            <button class="w3-round-xxlarge w3-hover-green">Submit</button>
        </p>
        
    </form>
    <script>
    function validation() {
  var x = document.forms["myform"]["name","email","mobile"].value;
  if (x == "") {
    alert("All fields must be filled out");
    return false;
  }
}
    </script>
</body>
</html>