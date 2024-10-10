<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Grid Learning</title>
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
                grid-template-columns: repeat(12,1fr);
                grid-template-rows: auto;
                background-color: teal;
                padding-top: 1.25rem;
                
            }
          
            .navItem{
                text-align:right;
                border-radius:4px;
                margin-left:2rem;
            }
            .logo{
                
                margin-left:2.5rem;
                height:3.125rem;
                width:3.125rem;
                border-radius:1.5rem;
                
            }
            .search{
                border-radius:1px;
                width:7.5rem;
                height:1.5rem;
                margin-right:2.5rem;
            }

            .container{
                margin:2.5rem;
            }
            h1{
                background-color: cyan;
            }
            p{
                background-color:crimson;
            }
            button{
                text-align: center;
                margin-left: 2.1875rem;
                height: 1.875rem;
                width:3.75rem;
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
            <button class="btn">Login</button>
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