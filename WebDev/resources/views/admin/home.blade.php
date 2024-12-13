<!DOCTYPE html>
<html>
<head>
    <title>Home</title>


    @vite(['resources/sass/app.scss','resources/js/app.js'])
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            text-align: center;
            flex-direction: column;

            
        }
        
    </style>
</head>
<body>
    <h1>Home Ni {{ $name }}</h1>
    <div class = 'row'>
        <div class = 'col-md-15'>
          <button type="button " class="btn btn-primary">Primary</button>
        </div>
    <img src='https://png.pngtree.com/png-vector/20240802/ourlarge/pngtree-3d-white-color-chibi-little-ghost-on-transparent-background-png-image_13337394.png'/>
</body>
</html>