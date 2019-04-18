@extends('layouts.app')

@section('someContent')
<div class="jumbotron mb-0">
  <div class="container">
    <h1 class="jumbotron-color japonais">Kuwsh Okai:</h1>
    <p class="lead pretty">I exist as we all do on this earth, 
      however as I progressed in my life I developed a greater value in myself and ergo, 
      this monstrosity (derived from my less-than developed web-development skills) 
      of a blog now exists on the Internet. So... yeah.</p>
    </div>
  </div>
  
  <div class="bg-light py-3">
    <div class="container">
      <div class="row align-items-center">
        
        <div class="d-flex align-items-center h-100">
          <div class="boxed">
            <img src="https://picsum.photos/320/320/?image=1062" class="img-fluid">
          </div>
        </div>
        
        <div class='col-8'>
          <div class="jumbotron my-5 h-100">
            <h1 class="text-dark text-center mx-auto mb-0 japonais">About Moi</h1>
            
            <p class="pretty">
              I'm a pretty nice guy aged 14(at the time of making this).
              My passions/hobbies include but are not limited to:
            </p>
            
            <ol class="pretty list-unstyled">
              <li>- <span class="h4" style="font-weight: bold">Programming</span></li>
              <li>- <span class="h4" style="font-weight: bold">Breathing</span></li>
              <li>- <span class="h4" style="font-weight: bold">Cooking</span></li>
            </ol>
            
            <button class="btn btn-outline-dark" type="button" data-toggle="modal" data-target="#myModal">More Info</button>
            
          </div>
        </div>
      </div>
      
      <div class="col-12 align-items-center">
        <div class="center">
          <img src="http://jewishbookweek.com/wp-content/uploads/2018/11/home1-2.jpg" class="img-fluid">
        </div>
        
        <div class='col-12'>
          <div class="jumbotron mb-0">
            <h1 class="text-dark text-center mx-auto mb-0 japonais">I'm A Bookworm</h1>
            
            <p class="pretty">
              Another passion of mine is books, stories or any other form of literature.
              Ever since a young age I've wondered in awe at the mystical dimensions and often wacky experiences to be found in the world of writing.
              I have an avid love for the craft, so much so that I write novels, short stroies, poems, etc.
              I don't do it as much as I used to however I still endulge in the magical world of literature from time to time.
              Some of my favourite works include:
            </p>
            
            <ol class="pretty list-unstyled">
              <li>- <span class="h4" style="font-weight: bold">Eragon Series - Christopher Paolini</span></li>
              <li>- <span class="h4" style="font-weight: bold">Still I Rise - Maya Angelou</span></li>
              <li>- <span class="h4" style="font-weight: bold">1984 - George Orwell</span></li>
            </ol>
            
            <button class="btn btn-outline-dark" type="button" data-toggle="modal" data-target="#myModal">More Info</button>
            
          </div>
        </div>
      </div>
      <div class="col-12 align-items-center">
        <div class="center">
          <img src="https://az616578.vo.msecnd.net/files/responsive/cover/main/desktop/2016/05/22/6359949242235344891413001074_All%20the%20anime.jpeg" class="img-fluid">
        </div>
        
        <div class='col-12'>
          <div class="jumbotron mb-0">
            <h1 class="text-dark text-center mx-auto mb-0 japonais">My Otaku Side</h1>
            
            <p class="pretty">
              I consider myself what one would call an OTAKU. 
              Meaning I watch a lot of anime, read a lot of manga and I love it.
              HOWEVER... I am NOT a WEEABOO, I don't have an 'extreme' love for anime
              and I don't own an excessive amount of limited edition anime merch or whatever,
              nor do I have a huge desire to be in anime, like I wouldn't mind depending on which one,
              but idk to be honest.
              Some of the anime I've watched or manga I've read are:
            </p>
            
            <ol class="pretty list-unstyled">
              <li>- <span class="h4" style="font-weight: bold">Fullmetal Alchemist/Brotherhood - Hiromu Arakawa</span></li>
              <li>- <span class="h4" style="font-weight: bold">Haikyuu! - Haruichi Furudate</span></li>
              <li>- <span class="h4" style="font-weight: bold">One Punch Man - One and Yusuke Murata</span></li>
              <li>- <span class="h4" style="font-weight: bold">Bungou Stray Dogs - Kafka Asagiri</span></li>
            </ol>
            
            <button class="btn btn-outline-dark" type="button" data-toggle="modal" data-target="#myModal">More Info</button>
            
          </div>
        </div>
      </div>
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
  @endsection