<!DOCTYPE html>
<html>
<head>
    <title>Home</title>


    @vite(['resources/sass/app.scss','resources/js/app.js'])
    <style>
        /* body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            text-align: center;
            flex-direction: column;

            
        }
         */
    </style>
</head>
<body class ="container">
    <h1>Home Ni {{ $name }}</h1>
    <div class = 'row' pt-1>
        <div class = "col-lg-6 col-md-4 col-sm-3 bg-primary  "> 
              <i class="bi bi-apple"></i>
            <h2>Col 1</h2>
          <!-- <button type="button " class="btn btn-primary">Primary</button> -->
        </div>
    <div class = "col-lg-6 col-md-4 col-sm-3 bg-danger ">
        <i class="bi bi-apple"></i>
        <h2>Col 2</h2>
        </div>

        <div class = "col-lg-6 col-md-4 col-sm-3 bg-danger ">
        <i class="bi bi-apple"></i>
    <h2>Col 3</h2>
    </div>

    <div class = "col-lg-6 col-md-4 col-sm-3 bg-primary ">
        <i class="bi bi-apple"></i> 
    <h2>Col 4</h2>
    </div>
    </div>
    <div class = "row pt-4">
    <div class = "col-lg-6 col-md-4 col-sm-3 col-6 bg-success">
    <i class="bi bi-apple"></i>
            <h2>Col 5</h2>
        </div>

    <div class = "col-lg-6 col-md-4 col-sm-3 bg-warning ">
        <i class="bi bi-apple"></i>
    <h2>Col 6</h2>
    </div>

    <div class = "col-lg-6 col-md-4 col-sm-3 bg-warning ">
    <i class="bi bi-apple"></i>
    <h2>Col 7</h2>      
    </div>

    <div class = "col-lg-6 col-md-4 col-sm-3 col-6 bg-muted">
    <div class = "row">
        <div class ="col-lg-6 col-md-4 col-sm-3 col-6 bg-danger">B1</div>
        <div class ="col-lg-6 col-md-4 col-sm-3 col-6 bg-primary">B2</div>
        <div class ="col-lg-6 col-md-4 col-sm-3 col-6 bg-success">B3</div>
        <div class ="col-lg-6 col-md-4 col-sm-3 col-6 bg-warning">B4</div>
        <div class ="col-lg-6 col-md-4 col-sm-3 col-6 bg-danger">B5</div>
        <div class ="col-lg-6 col-md-4 col-sm-3 col-6 bg-primary">B6</div>
    </div>



    </div>


    

 

    <!-- <img src='https://png.pngtree.com/png-vector/20240802/ourlarge/pngtree-3d-white-color-chibi-little-ghost-on-transparent-background-png-image_13337394.png'/> -->


</body>
</html>