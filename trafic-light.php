<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
    <style>
        .traffic{
           width:  50px;
            height: 80px;
            display:flex;
            flex-direction: column;
            justify-content: space-evenly;
            border: 2px solid black;
            background-color: grey;
            align-content: center;
            justify-items: center;

        }
        .red,.yellow, .green{
            border-width: 2px;
            border-style: solid;
            border-radius: 50%;
            width:20px;
            height: 20px;
            margin: 0 auto;
        }
        .red.active{
            background-color: red;
        }
    </style>
</head>
<body>

<div class="traffic">
    <div class="red"></div>
    <div class="yellow"></div>
    <div class="green"></div>
</div>
<button class="light" >Change</button>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $('.light').click(function (){
        if(".red" !== ".red .active"){
            $('.red').addClass("active");
        }else if(".yellow" !== ".yellow .active"){
            $('.yellow').addClass("active");
        }else if(".green" !== ".green .active"){
            $('.green').addClass("active");
        }
    });
</script>
</body>
</html>