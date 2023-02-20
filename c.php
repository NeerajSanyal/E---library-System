<?php
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$Mobno=$_POST['Mobno'];
$address=$_POST['address'];
$books=$_POST['books'];
$services=$_POST['services'];
$ELibrary=$_POST['ELibrary'];
$review=$_POST['review'];

if(!empty($name)){

    if(!empty($age))
    {
        $host="localhost";
        $dbusername="root";
        $dbpassword="";
        $dbname="project";

        $conn=new mysqli($host , $dbusername, $dbpassword, $dbname);

        if(mysqli_connect_error())
        {
            die('connect error' (mysqli_connect_error));
        }
else{
    $sql= "INSERT INTO form(name , age, gender, email, Mobno ,address , books , services , ELibrary, review) 
    values('$name', '$age', '$gender','$email', '$Mobno','$address', '$books', '$services', '$ELibrary', '$review') ";

    if($conn->query($sql)){
        echo "Form submitted successfully";
    }

    else{
        echo "error". $sql. "<br>". $conn->error ;
    }

    $conn->close();

}
    }
else{
    echo "age should not be empty";
    die();
}

}
else{
   echo "name should not be empty";
   die();
}


?>