<?php 
session_start();
 $_SESSION["name"] = $_POST["user"];


?>
<html>

<head>
    <title>page1</title>
<style>
    #example1 {
  border: 2px solid black;
  padding: 25px;
  background: url(a.gif);
  background-repeat: no-repeat;
  background-size: 100% 100%;
  color:azure;
    }

  /* #example2 {
  border: 2px solid black;
  padding: 25px;
  background-color: white;
  background-repeat: no-repeat;
  background-size: 100% 100%;
  
} */
.btn{
    background-color: rgb(100, 178, 93); /* Green */
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 12px;
}
#border{
    height:250px;
    width: 250px;
  border: 5px solid black;
  margin: 10px;
}
</style>
</head>

<body id="example1" >
    
    <center>
        <i>
            <font size="35"><strong>Welcome <?php echo $_SESSION["name"]?> </font></strong>
        </i>
        <div id="">
        <h1>
            <p>
                Are you ready for the magic?
            </p>
            <p>
                If yes then choose number from the below
            </p>
        </h1>
        <div id="border">
            <h1>01 02 03 04 05 <br> 
                06 07 08 09 10 
            <br>11 12 13 14 15<br> 
                16 17 18 19 20 <br>
                21 22 23 24 25 <br>
                26 27 28 29 30
            </h1>
        </div>
        <div>
            <h1>Have you choosen your number?</h1>

            <a href="page2.php"><input class="btn" type="button" name="sub1" value="Yes"></a> 

            &nbsp;

            <a href="page1.php">
            <input class="btn" type="button" name="sub2" value="No">
            </a>

        </div>
    </center>

</body>

</html>