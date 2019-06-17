<?php
/**
 * Created by IntelliJ IDEA.
 * User: Ravindu
 * Date: 6/17/2019
 * Time: 2:48 PM
 */
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container-fluid">
    <p class="navbar-text" style="font-size: 30px;font-family: 'Agency FB';color: #005cbf">This is Customer form with Regular Expressions</p>


    <form action="#" method="post" id="form1">

    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Customer ID :</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword1" placeholder="CID" name="CustId">
            <span></span>
        </div>
    </div>
        <br>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Customer Name :</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword2" placeholder="Name" name="Custname">
            <span></span>
        </div>
    </div>
        <br>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Address :</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Address" name="CustAddress">

        </div>
    </div>
        <br>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Telephone :</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword4" placeholder="Telephone" name="Custtel">
        </div>
    </div>
        <br>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Salary :</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword" placeholder="Salary" name="Custsalary">
        </div>
    </div>
        <br>

    <button type="submit" class="btn btn-success" id="btnsubmit" style="width: 100px;float: right">Submit</button>

</form>

</div>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/homeController.js"></script>
</body>
</html>
