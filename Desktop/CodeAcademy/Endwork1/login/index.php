<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="login_style.css">
    <title>index</title>
</head>
<body>
    <div class="container pt-2">
        <div class="row border rounded-top">
            <div class="col pt-3">
                <p>Paspaudus mygtuką grįšite į prisijungimo ekraną:</p>
            </div>
        </div>
        <div class="row border border-top-0 rounded-bottom">
            <div class="col m-4 text-center">
                <a href="logout.php" class="btn btn-primary">Atsijungti</a>
            </div>
        </div>
        <br>
        <div class="row border rounded-top">
            <div class="col pt-3">
                <p>Skysto mėšlo kiekis per gyvulių kiekį:</p>
            </div>
        </div>
        <div class="row border border-top-0 rounded-bottom">
            <div class="col m-4 text-center">
                Gyvulių skaičius: <input type="text" id="countofcows"> vnt.<br><br>
                Karvės prodyktyvumas: <input type="text" id="cowproductivity" readonly="readonly" value="7000"> kg pieno per metus<br><br>
                <button type="button" class="btn btn-primary" id="calc">Skaičiuoti</button><br><br>
                Mėšlo kiekis per 6 mėn: <input type="text" id="manure6months" name="result"> m3<br><br>
                Mėšlo kiekis per 6 mėn su 20 proc. atsarga: <input type="text" id="manure6monthsproc" name="resultproc"> m3<br><br>
            </div>
        </div>
        <br>
        <div class="row border rounded-top">
            <div class="col pt-3">
                <p>Skysto mėšlo rezervaro skaičivimas:</p>
            </div>
        </div>
        <div class="row border border-top-0 rounded-bottom">
            <div class="col m-4 text-center">
                Mėšlo kiekis per 6 mėn su 20 proc. atsarga: <input type="text" readonly="readonly" id="manure6monthsprocc" name="resultprocc"> m3<br><br>
                Rezervuaro aukštis: <input type="number" id="height"  min = "1" max = "6"> metrai<br><br>
                <button type="button" class="btn btn-primary" id="calcu">Skaičiuoti</button><br><br>
                Rezervuaro diametras: <input type="text" id="rezervuar" name="rezervua"> m<br><br>
            </div>
        </div>
    </div>
<script src="functioncalc.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>