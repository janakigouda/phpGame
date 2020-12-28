<?php
$a=$_GET['ans'];
?>

<html>
    <head>
    <style>
    #example1 {
        border: 2px solid black;
        padding: 25px;
        background: url(micky.gif);
        background-repeat: no-repeat;
        background-size: 100% 100%;
        color:azure;
    }
    .btn{
    background-color: rgb(100, 75, 93); /* Green */
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 12px;
}
    </style>
        <body id="example1">
            <center> <h1> I Think Your Number Is : <?php echo $a ?> </h1> 
       
            <h2> DO YOU WANT TO TRY ONE MORE TIME??? </h2>
            <h2>
            <a href="page1.php">
                <input class="btn" type="button" name="home" value="Try Again">
            </a>
            </h2> </center>
        </body>
    </head>
</html>