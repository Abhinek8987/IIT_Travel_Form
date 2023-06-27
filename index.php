<?php
$insert = false;


if(isset($_POST['name'])){
    
    
    $server = "localhost";
    $username = "root";
    $password = "";

    $con  = mysqli_connect($server, $username, $password);

    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
   $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `trip`.`trip` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    // echo $sql;

    if($con->query($sql) == true){
        // echo "Successfully inserted";
        $insert = true;
        
        
    }
    else{
        echo "ERROR: $sql <br> $con->error";
        
        
    }
    $con->close();
    


}

    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Sriracha', cursive;

        }
        .container{
            max-width:80%;
            /* background-color: rgb(198,152,241); */
            padding:34px;
            margin: auto;
    

        }
        .container h1, p{
            text-align: center;
            font-family: 'Sriracha', cursive;
            font-size: 40px;

        }
        p{
            font-size: 17px;
            text-align: center;
            font-family: 'Sriracha', cursive;
        }
        input, textarea{
            display:block;
            border:2px solid black;
            border-radius: 6px;
            outline: none;
            font-size: 16px;
            width:80%;
            margin:11px 0px;
            padding: 7px;
        }
        form{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .btn{
            color:white;
            background: purple;
            padding: 15px 10px;
            font-size: 20px;
            border: 2px solid white;
            border-radius: 14px;
            cursor: pointer;
        }
        .bg{
            width:100%;
            position: absolute;
            z-index: -1;
            opacity:0.6;

        }
        .SubmitMSG{
            font-size: 25px;;

            color:rgb(0, 41, 128);

        }
        .Backend{
            background-color:red;
            color:white;
        }
       
    </style>
</head>
<body>
    <img class="bg" src="https://images.cnbctv18.com/wp-content/uploads/2022/09/IIT-shutterstock-1019x573.jpg?impolicy=website&width=617&height=264" alt="IIT Kharagpur">
    <div class="container">
        <h1>Welcome to IIT Kharagpur US Trip Form</h1>
        <h1 class="Backend">This is My First Backend Website of My life</h1>
        <p>Enter your details and submit this form to confrm your participation in the trip</p>
        <?php
        if($insert == true){
        echo "<p class='SubmitMSG'>Thanks for submitting this form. We are happy to see you joining us for the US trip </p>";
        }
    ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Your name" required>
            <input type="text" name="age" id="age" placeholder="Enter Your age"required>
            <input type="text" name="gender" id="gender" placeholder="Enter Your gender"required>
            <input type="text" name="email" id="email" placeholder="Enter Your Email id"required>
            <input type="phone" name="phone" id="phone" placeholder="Enter Your phone"required>
            <textarea name="desc" id="desc" ols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button>
        </form>
    </div>
    <script>
        alert('Please fill all details then Submit. If you will incomeplete the details FORM will be rejected')
    </script>
    
    
   
</body>
</html>