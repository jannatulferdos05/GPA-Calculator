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

            body{
                margin:0;
                padding:0;
            }
            .navbar{
                display: flex;
                flex-wrap: wrap;
                justify-content:space-evenly;
                align-items: center;
                flex-wrap: wrap;
                margin-left:0px;
                margin-right:0px;
                background-color: teal;
            }
            .home{
                margin-left:200px;
            }
            .navItem{
                text-align:center;
                
                border-radius:4px;
                flex-basis:120px;
                align-items:center;
               
            }
            .logo{
                height:50px;
                width:50px;
                border-radius:25px;
                margin-left:20px;
            }
            .search{
                border-radius:1px;
                width:120px;
                margin-right:40px;
            }

            .container{
                margin:40px;
            }
            h1{
                background-color: cyan;
            }
            p{
                background-color:crimson;
            }
        </style>
    </head>
    <body>
        <div class="navbar"> 
            <img class="logo" src="/images/me.jpg">  
            <div class="home navItem">HOME</div>
            <div class="navItem">PROJECTS</div>
            <div class="navItem">RESEARCHS</div>
            <div class="navItem">ABOUT</div>
            <button class="navItem">Login</button>
            <input class="search" placeholder="Type to Search">
        </div>
        <div class="container">
            <h1>THIS IS THE B SECTION</h1>
            <h2>This is heading 2</h2>
            <h3>This is heading 3</h3>
            <p>This is paragraph</p>
            <p>Paragraph 2</p>
            <b>This is bold Text</b>
        </div>
        <script src="" async defer></script>
    </body>
</html>