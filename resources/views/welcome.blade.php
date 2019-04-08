<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Kuwsh DESU</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <style>
    /* .navbar-text {
      color: white;
    } */
    .jumbotron-color {
      color: black;
    }
    .boxed{
      width: 320px;
      border : 5px solid darkgrey;
      padding: 2px;
      margin: 0px;
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
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-xs bg-dark navbar-light">
    <a class="navbar-brand" href="#"></a>
    <h1 class="text-white text-center mx-auto">KUWSH DESU</h1>
    <button class="navbar toggler" type="button" onclick="alert('You pressed the button!')" datatoggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>

  <div class="jumbotron mb-0">
    <div class="container">
      <h1 class="jumbotron-color">Welcome</h1>
      <small>Lorem ipsum dolor, sit amet conceceutur...</small>
    </div>
  </div>
  
  <div class="bg-light py-3">
    <div class="container">
      @php foreach(\App\Post::get() as $item): @endphp
      <div class="row mb-1 align-items-center">
  
        <div class="boxed">
          <img src="https://picsum.photos/320/320/?random" class="img-fluid">
        </div>
  
        <div class='col-auto'>
          <div class="jumbotron mb-0">
            <h1>{{ $item->title }}</h1>
            <p class="pretty">
              {{ $item->content }}
            </p>
            
            <button class="btn btn-outline-dark" type="button" data-toggle="modal" data-target="#myModal">More Info</button>
            
          </div>
        </div>
  
      </div>
      @php endforeach @endphp
    </div>
  </div>
  
  <div id="myModal" tabindex="-1" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>This is a Modal</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
  integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>