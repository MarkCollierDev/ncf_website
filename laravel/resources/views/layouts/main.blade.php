<!DOCTYPE html>
<html>
    <head>
        <title>NCF</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="../css/bootstrap/bootstrap.css">
        <link rel="stylesheet" href="../css/custom/style.css"/>


    </head>
    <body>
       
        <div class="row" id="header">
            <div class="col-md-1" id="Logo"> </div>
            <div class="col-md-3" id="Title">
                <h1>TITLE</h1>
            </div>
        </div>
        <div class="row" id="nav-bar">
            <ul id="nav-list">
                <li class="col-md-2 nav-item">1</li>
                <li class="col-md-2 nav-item">2</li>
                <li class="col-md-2 nav-item">3</li>               
                <li class="col-md-2 nav-item">4</li>
                <li class="col-md-2 nav-item">5</li>
                <li class="col-md-2 nav-item">6</li>


            </ul>

        </div>
        
        
        @yield('content')
        
        </div>
        <script src="../js/Jquery/jquery-3.2.1.min.js"></script>
    </body>
</html>
