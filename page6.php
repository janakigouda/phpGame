<?php
session_start();
?>
<html>

<head>
    <title>page2</title>
    <style>
    #example1 {
        border: 2px solid black;
        padding: 25px;
        background: url(a.gif);
        background-repeat: no-repeat;
        background-size: 100% 100%;
        color:azure;
    }
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

<body id="example1">
    <center>
        <div>
            <h1>
                Your number is here?
            </h1>
        </div>
        <div id="border">
            <h1>31 30 29 28<br>
                27 26 25 24<br>
                23 22 21 20<br>
                19 18 17 16
            </h1>
        </div>
        <div>
            <h1>
                If you find it click on 'Yes', if not 'No'.
            </h1>
            <?php $a=$_GET['ans']; ?>
            <a href="page7.php?ans=<?php echo $a+16 ?>"><input class="btn" type="button" name="sub1" value="Yes"></a>

            &nbsp;

            <a href="page7.php?ans=<?php echo $a+0 ?>">
                <input class="btn" type="button" name="sub2" value="No">
            </a>

        </div>
    </center>
</body>

</html>