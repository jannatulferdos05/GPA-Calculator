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
                display: grid;
                grid-template-columns: 50px 150px 150px 150px 150px 150px 150px;
                grid-template-rows: auto;
                gap: 10px;
                background-color: teal;
            }
          
            .navItem{
                text-align:center;
                border-radius:4px;
                margin-left:30px;
            }
            .logo{
                margin-left:40px;
                height:50px;
                width:50px;
                border-radius:25px;
                
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