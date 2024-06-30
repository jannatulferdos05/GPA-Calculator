<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Flexbox Learning</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <style>
            .navbar{
                display: flex;
                flex-wrap: wrap;
                justify-content:space-between;
                align-items: center;
                flex-wrap: wrap;
                margin-left:0px;
                margin-right:0px;
                background-color: teal;
            }
            .navItem{
                
                border-radius:4px;
                flex-basis:120px;
               
            }
            .logo{
                height:50px;
                width:50px;
                border-radius:25px;
                margin-left:70px;
            }
            .search{
                border-radius:1px;
                width:120px;
                margin-right:70px;
            }
        </style>
    </head>
    <body>
        <div class="navbar"> 
            <img class="logo" src="/images/me.jpg">  
            <div class="navItem">HOME</div>
            <div class="navItem">PROJECTS</div>
            <div class="navItem">RESEARCHS</div>
            <div class="navItem">ABOUT</div>
            <button class="navItem">Login</button>
            <input class="search" placeholder="Type to Search">
        </div>
        <script src="" async defer></script>
    </body>
</html>