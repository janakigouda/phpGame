<html>

<head>
    <title>
        Game
    </title>
    <style>
    #container {
        border: 2px solid black;
        padding: 25px;
        background: url(b.gif);
        background-repeat: no-repeat;
        background-size: 100% 100%;
        color: ;
    }

    .in {
        height: 35px;
        width: 260px;
        border-radius: 4px;
		border: solid 1px rgba(144, 144, 144, 0.25);
		text-align: center;
				
    }

    .bt {
        background-color: #4CAF50;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        width:200px;
        font-size: 16px;
        border-radius: 12px;
    }

    .bt:hover {
        box-shadow: 0 12px 16px  #4dac71;
    }
    </style>
</head>

<body id="container">
    <center>
        <form class="f" action="page1.php" method="POST">

            <label>
                <h1>Enter your Name</h1>
            </label>
            <p>
                <input class="in" type="text" name="user" placeholder="Enter your name" value="">
                <br><br>
                <input class="bt" type="submit" name="submit" value="submit">
            </p>
        </form>
    </center>

</body>

</html>