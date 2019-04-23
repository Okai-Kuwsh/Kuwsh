<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kuwsh Okai</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* .navbar-text {
            color: white;
        } */
        @font-face {
            font-family: japonais;
            src: url({{ asset('css/Mistuki1_PERSONAL_USE.ttf') }});
        }
        @font-face {
            font-family: ninja;
            src: url({{ asset('css/Vegan.ttf') }});
        }
        .jumbotron-color {
            color: black;
        }
        .boxed{
            width: 320px;
            border : 5px solid darkgrey;
            padding: 2px;
            margin: 0px;
        }
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            border: 5px solid darkgrey;
            padding: 2px;
            width: 25%;
        }
        .col-auto{
            padding: 8px;
            margin : 0px;
            flex: 1;
        }
        .pretty {
            font-family:georgia,garamond,serif;
            font-size:20px;
            font-style:italic;
        }
        .japonais {
            font-family: japonais, sans-serif;
            /* font-size: ; */
        }
        .ninja {
            font-family: ninja, sans-serif
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-xs bg-dark navbar-light sticky-top">
        <div></div>
        <a class="navbar-brand mx-auto" href="/">
            <h1 class="text-white text-center mx-auto mb-0 ninja">KUWSH</h1>
        </a>
        
        <button class="navbar toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse.collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse text-white">
            <div class="navbar-nav ml-auto">
                <a href="{{ route('addPost') }}" class="nav-item nav-link text-white">Add a post</a>
            </div>
        </div>
    </nav>
    
    @yield('someContent')
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
