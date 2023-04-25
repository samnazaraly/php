<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1> Please register below </h1>

<!--process-signup.php is where all the data being submitted will be processed
    post method = if we are saving data to the server -->

    <!--we use the novalidate attribute to disable HTML auto validation and do the validation ourselves-->
<form action="process-signup.php" method="post" novalidate>

        <!--input for name-->
    <div>
        <label for = "name">Name</label> 
        <input type ="text" id="name" name="name">
    </div>


        <!--input for email-->
    <div>
        <label for="email">Email</label>
        <input type="text" id="email" name="email">
    </div>

         <!--input for password-->
    <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password">
    </div>

         <!--input for password confirmation-->
    <div>
        <label for="password_confirmation">Password confirmation</label>
        <input type="password" id="password_confirmation" name="password_confirmation">

    </div>

    <button>Sign up</button>

</form>

<body>
    
</body>
</html>