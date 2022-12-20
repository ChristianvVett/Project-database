  <x-layout>

    
    <x-slot name="title">Home</x-slot>

    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
  @endif

  @if (session('messagestore'))
    <div class="alert alert-success">
        {{ session('messagestore') }}
    </div>
  @endif

    <header class="container-fluid position-relative px-0">
      <div class="bg_banner d-flex justify-content-center">
        <div class="d-flex px-3">
          <h1>LOREM</h1>
          <img class="position-absolute image" src="./img/mountains2.png" alt="">
        </div>
      </div>
    </header>
    
    <section  class="container-fluid  bg-grey py-5">
      <div class="row justify-content-center align-item-center">
        <div class="col-6 d-flex justify-content-center">
          <em> <p class="virgolette ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia eligendi eveniet fugiat delectus minus voluptatum ut doloremque ab, cumque eius?</p></em>
        </div>    
      </div>  
    </section>
    
    <section class="container-fluid bg_white">
      <div class="row justify-content-around py-4">
        <div class="col-12 col-md-2 short-dark text-center">
          <i class="fa-regular fa-snowflake py-3"></i>
          <p class="text-uppercase">lorem ipsum dolor</p>
          <div class="cerchio"></div>
        </div>
        <div class="col-12 col-md-2 short-dark text-center">
          <i class="fa-solid fa-mountain py-3"></i>
          <p class="text-uppercase">lorem ipsum dolor</p>
          <div class="cerchio"></div>
        </div>
        <div class="col-12 col-md-2 short-dark text-center">
          <i class="fa-solid fa-map py-3"></i>
          <p class="text-uppercase">lorem ipsum dolor</p>
          <div class="cerchio"></div>
        </div>
        <div class="col-12 col-md-2 short-dark text-center">
          <i class="fa-solid fa-campground py-3"></i>
          <p class="text-uppercase">lorem ipsum dolor</p>
          <div class="cerchio"></div>
        </div>
      </div>
    </section>
    
    <div class="container-fluid bg_white py-5">
      <div class="row">
        <div class="col-12 col-md-6 text-start">
          <h2>Lorem ipsum Dolor sit</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A nostrum sint nihil est saepe quia qui. Facilis iure nisi tenetur optio quaerat unde ad ipsa, illo omnis a. Magni, voluptas?</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam dolor consequuntur unde quia nulla. Asperiores libero, debitis odio eligendi error ea aliquid, molestias beatae, quisquam id eveniet delectus placeat nisi.</p>
        </div>
        <div class="col-12 col-md-6 text-end">
          <h2>Lorem ipsum Dolor sit</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A nostrum sint nihil est saepe quia qui. Facilis iure nisi tenetur optio quaerat unde ad ipsa, illo omnis a. Magni, voluptas?</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam dolor consequuntur unde quia nulla. Asperiores libero, debitis odio eligendi</p>
          </div>
        </div>
      </div>
      
      <div class="container-fluid foto_alberi vh-75 bg_white position-relative">
        <div class="d-flex justify-content-center align-items-center h-100">           
            <button class="bottone">Lorem Ipsum</button>                           
          
          <img class="img-fluid position-absolute img-trees" src="./img/trees2.png" alt="">
        </div>
      </div>           
      
      
      
      <section class="container-fluid align-items-end img-sfondo">         
        <h2>OUR TIMELINE</h2>
        <div class="row justify-content-evenly">           
          <div class="col-12 col-md-6 border-left-main">
            
            <div class="cerchio2"></div>
            <h4>Lorem ipsum</h4>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium, mollitia debitis commodi voluptatibus perspiciatis asperiores quaerat ipsam eveniet atque aut eius? Nostrum aperiam dignissimos accusantium. Nam quis sequi obcaecati ratione.</p>
            
            <div class="cerchio2"></div>
            <h4>Lorem ipsum</h4>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium, mollitia debitis commodi voluptatibus perspiciatis asperiores quaerat ipsam eveniet atque aut eius? Nostrum aperiam dignissimos accusantium. Nam quis sequi obcaecati ratione.</p>
            
            <div class="cerchio2"></div>
            <h4>Lorem ipsum</h4>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium, mollitia debitis commodi voluptatibus perspiciatis asperiores quaerat ipsam eveniet atque aut eius? Nostrum aperiam dignissimos accusantium. Nam quis sequi obcaecati ratione.</p>
            
            <div class="cerchio2"></div>
            <h4>Lorem ipsum</h4>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium, mollitia debitis commodi voluptatibus perspiciatis asperiores quaerat ipsam eveniet atque aut eius? Nostrum aperiam dignissimos accusantium. Nam quis sequi obcaecati ratione.</p>
            
            
          </div>
          <div class="col-12 col-md-4">
            <img class="img-alberi position-absolute" src="./img/single.png" alt="">
            
          </div>
          
        </div>
        
        
        
        
      </section>  
      
      
       <section class="container-fluid bg-grey pt-5">
        <div class="row justify-content-around m-0">
          <h2>OUR TEAM</h2>
          <div class="col-12 col-md-2  my-3">
            <img class="img1" width="150px" src="./img/landscape-975091_1920.jpg" alt="">
            <h4>Lorem Ipsum</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, dicta.</p>
            <i class="fa-brands fa-instagram mx-3"></i>
            <i class="fa-brands fa-linkedin mx-3"></i>
            <i class="fa-brands fa-facebook-f mx-3"></i>
          </div>
          
          <div class="col-12 col-md-2 text-center my-3">
            <img class="img1" width="150px" src="./img/landscape-975091_1920.jpg" alt="">
            <h4>Lorem Ipsum</h4>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            <i class="fa-brands fa-instagram mx-3"></i>
            <i class="fa-brands fa-linkedin mx-3"></i>
            <i class="fa-brands fa-facebook-f mx-3"></i>
          </div>
          
          <div class="col-12 col-md-2 text-center my-3">
            <img class="img1" width="150px" src="./img/landscape-975091_1920.jpg" alt="">
            <h4>Lorem Ipsum</h4>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            <i class="fa-brands fa-instagram mx-3"></i>
            <i class="fa-brands fa-linkedin mx-3"></i>
            <i class="fa-brands fa-facebook-f mx-3"></i>
          </div>
          
          <div class="col-12 col-md-2 text-center my-3">
            <img class="img1" width="150px" src="./img/landscape-975091_1920.jpg" alt="">
            <h4>Lorem Ipsum</h4>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            <i class="fa-brands fa-instagram mx-3"></i>
            <i class="fa-brands fa-linkedin mx-3"></i>
            <i class="fa-brands fa-facebook-f mx-3"></i>
          </div>
        </div>
        
        <div class="row my-5 mx-0">
          <h2>OUR BENEFIT</h2>
          <div class="col-12 col-md-6 my-5">
            <h4>Lorem ipsum dolo</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores adipisci fuga perspiciatis dolore, consectetur aliquid sapiente, odio explicabo sint deleniti magnam, cupiditate ullam. Facilis officia excepturi temporibus ab, nemo amet.</p>
          </div>
          
          <div class="col-12 col-md-3 my-0">
            <img class="img2" width="250px" src="./img/mountain-547363_1920.jpg" alt="">
          </div>
          
        </div>
        
        <div class="row justify-content-center my-2 mx-0">
          
          <div class="col-12 col-md-3">
            <img class="img2" width="250px" src="./img/mountain-547363_1920.jpg" alt="">
          </div>
          
          <div class="col-12 col-md-6 my-5">
            <h4>Lorem ipsum dolo</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores adipisci fuga perspiciatis dolore, consectetur aliquid sapiente, odio explicabo sint deleniti magnam, cupiditate ullam. Facilis officia excepturi temporibus ab, nemo amet.</p>
          </div>           
        </div>
        <img class="bg_image2 w-100 px-0" src="./img/other.png" alt="">
      </section> 
      
      
       <footer class="container-fluid d-flex bg_red py-0">
        <div class="row d-flex flex-column ">
          <div class="col-12 my-3">
            <h3>LOREM</h3>
            <h5>Testo generico</h5>
            <p1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore hic nostrum, magnam repudiandae quasi optio, blanditiis praesentium minus iste quidem, voluptates numquam necessitatibus quibusdam facilis aut molestias </p1>
          </div>
          
          <div class="col-12">
            <p1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium nesciunt consequatur dolor et, eveniet in iste aliquam doloremque? Voluptas quisquam architecto neque cum, magnam aperiam provident veniam quam illum voluptatem?</p1>
          </div>
        </div>
        
        <div class="col-12 col-md-3 py-5">
          <h5>Quick link</h5>
          <ul>
            <li>Lorem link</li>
            <li>Lorem link</li>
            <li>Lorem link</li>
            <li>Lorem link</li>
          </ul>
          
        </div>
  </x-layout>