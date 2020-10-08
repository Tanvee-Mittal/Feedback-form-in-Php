<html>
    <head>
        <title> database </title>
        
</head>
<body>
    <?php 
    $CONNECTION = mysqli_connect("localhost","root","","feedback_DB");
    if(!$CONNECTION){
        die("could not connect");
    }
    else{
        echo "connected successfully";
    }
     //*******************CREATING DATABASE********************

    /*$sql_query = "CREATE DATABASE feedback_DB";
    mysqli_query($CONNECTION,$sql_query);
    mysqli_close($CONNECTION);*/


    // *******************CREATING TABLE**********************

    /*$sql_query="create table feedTable(
        NAME VARCHAR(30),
        EMAILID VARCHAR(50),
        CONTACT VARCHAR(10) primary key,
        COMMENTS VARCHAR(200))";
    mysqli_query($CONNECTION,$sql_query);
    echo "Table created successfully";
    mysqli_close($CONNECTION);*/
    
    $Name=$_POST["name"];
    $mail=$_POST["email"];
    $contact=$_POST["contact"];
    $comment=$_POST["message"];


    //******************INSERTING VALUES********************

    $insert="insert into feedTable(name,emailid,contact,comments)values('$Name','$mail','$contact','$comment')";
    if(mysqli_query($CONNECTION,$insert))
    {
        echo '<script> alert ("inserted succesfully");</script>';

    }
    else{
        echo "error inserting:".mysqli_error($CONNECTION);
    }
    ?>
</body>
</html>