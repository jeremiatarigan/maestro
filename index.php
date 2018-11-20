 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <link rel="stylesheet" type="text/css" href="css/style.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <!-- Navbar -->
      <div class="navbar-fixed">
        <nav class="orange darken-2">
          <div class="nav-wrapper">
            <div class="container">
            <a href="#!" class="brand-logo">Maestro</a>
            <a href="#" data-target="mobileNav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="#home">Home</a></li>
              <li><a href="#kategori">Dagangan Kami</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#pembayaran">Pembayaran</a></li>
              <li><a href="#testimoni">Testimoni</a></li>
              <li><a href="#contact">Contact Us</a></li>
              <li><a href="#register">Login</a></li>
              <li><a href="admin/index.php">Admin</a></li>
             

            </ul>
          </div>
          </div>  
        </nav>
      </div>
      <!-- Navbar -->
      <!-- Sidenav -->
      <div class="orange darken-1">
        <ul class="sidenav orange darken-1" id="mobileNav">
              <li><a href="">Home</a></li>
              <li><a href="#kategori">Dagangan Kami</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#pembayaran">Pembayaran</a></li>
              <li><a href="#testimoni">Testimoni</a></li>
              <li><a href="#contact">Contact Us</a></li>
              <li><a href="#register">Login</a></li>
              
      </ul>
      </div>
       <!-- Sidenav -->

       <!-- Slider -->
        <div class="slider scrollspy " id="home">
          <ul class="slides">
            <li>
              <img src="img/slider/11.jpg"> <!-- random image -->
              <div class="caption left-align">
                <h2>Harga!</h2>
                <h4 class="light grey-text text-lighten-3">Soal Harga Kami Tidak Berani Bersaing,Harus kami akui bahwa kami menjual dengan harga termahal!.</h4>
              </div>
            </li>
             <li>
              <img src="img/slider/10.jpg"> <!-- random image -->
              <div class="caption right-align">
                <h2>Kualitas!</h2>
                <h4 class="light grey-text text-lighten-3">Karna itulah kami menjual dengan harga mahal.</h4>
              </div>
            </li>
             <li>
              <img src="img/slider/9.jpg"> <!-- random image -->
              <div class="caption center-align">
                <h2>Kepuasan!</h2>
                <h4 class="light grey-text text-lighten-3">Karna bagi kami kepuasan anda anda yang terpenting,karena target kami adalah anda oang orang kaya.</h4>
              </div>
            </li>
          </ul>
        </div>
       <!-- Slider -->
       <!-- Penjualan -->
        <section id="kategori" class="scrollspy">
          <div class="container" >
            <?php 
              include 'product.php';
             ?>
          </div>
        </section>
        <!-- Penjualan -->
       <!-- About -->
        <section class=" grey lighten-3 about scrollspy" id="about">
          <div class="container">
            <div class="row">
              <h3 class="center light grey-text text-darken-3">ABOUT US</h3>
              <div class="col m6">
                <h5 class="center light grey-text text-darken-3">VISI</h5>
               <p>Tidak akan menjual harga murah ,karna menurut kami barang murah memiliki kulitas yang sebanding dengan harga</p>
                
              </div>
               <div class="col m6">
                <h5 class="center light grey-text text-darken-3">MISI</h5>
                 <p>Memecahkan rekor Harga barang Termahal!</p>
                 <p>Hanya orang kaya yang boleh belanja disini</p>
              </div>
            </div>
          </div>
        </section>
       <!-- About -->
       <!-- pembayaran -->
       <section class="scrollspy" id="pembayaran">
         <div class="parallax-container">
          <div class="parallax"><img src="img/parallax/pic1.jpg"></div>

          <div class="container pembayarann">
            <div class="row">
            <h3 class="center light white-text ">PEMBAYARAN</h3>
            <div class="col m4 s12 center" >
              <img src="img/Pembayaran/bni.jpg" >
            </div>
            <div class="col m4 s12 center">
              <img src="img/Pembayaran/bri.jpg" >
            </div>
            <div class="col m4 s12 center">
              <img src="img/Pembayaran/sumut.jpg">
            </div>
          </div>
          </div>
        </div>
       </section>
        <!-- pembayaran -->

        <!-- Testimoni -->
        <section class="testimoni grey lighten-3 scrollspy" id="testimoni" > 
          <div class="container">
            <div class="row">
              <h3 class="center light grey-text text-darken-3">TESTIMONI</h3>
              <div class="col m4 s12">
                <div class="card-panel center">
                  <i class="material-icons medium center">thumb_up</i>
                  <h4>Kualitas</h4>
                  <h5>Tarigan</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat.</p>
                </div>
              </div>
               <div class="col m4 s12">
                <div class="card-panel center">
                   <i class="material-icons medium center">shopping_cart</i>
                  <h4>Kenyamanan</h4>
                  <h5>Sembiring</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. </p>
                </div>
              </div>
              <div class="col m4 s12">
                <div class="card-panel center">
                  <i class="material-icons medium center">local_shipping</i>
                  <h4>Pengiriman</h4>
                  <h5>Ginting</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. </p>
                </div>
              </div>
            </div>
          </div>
        </section>
         <!-- Testimoni -->
         <!-- Portofolio -->
         <section class="portofolio scrollspy" id="portofolio">
           <div class="container">
             <h3 class="center light grey-text text-darken-3">PORTOFOLIO</h3>
             <div class="row">
               <div class="col m3 s12" >
                 <img src="img/slider/2.jpg" class="materialboxed responsive-img">
               </div>
               <div class="col m3 s12" >
                 <img src="img/slider/3.jpg" class="materialboxed responsive-img">
               </div>
               <div class="col m3 s12" >
                 <img src="img/slider/5.jpg" class="materialboxed responsive-img">
               </div>
               <div class="col m3 s12" >
                 <img src="img/slider/3.jpg" class="materialboxed responsive-img">
               </div>
             </div>
              <div class="row">
               <div class="col m3 s12" >
                 <img src="img/slider/2.jpg" class="materialboxed responsive-img">
               </div>
               <div class="col m3 s12" >
                 <img src="img/slider/3.jpg" class="materialboxed responsive-img">
               </div>
               <div class="col m3 s12" >
                 <img src="img/slider/5.jpg" class="materialboxed responsive-img">
               </div>
               <div class="col m3 s12" >
                 <img src="img/slider/3.jpg" class="materialboxed responsive-img">
               </div>
             </div>
           </div>
         </section>
          <!-- Portofolio -->
          <!-- Contact US -->
          <section class="contact grey lighten-3 scrollspy" id="contact">
            <div class="container">
              <h3 class="center light grey-text text-darken-3">CONTACT US</h3>
              <div class="row">
                <div class="col m5 s12 ">
                  <div class="card-panel orange darken-3 white-text center" >
                   <i class="material-icons center medium">email</i>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. </p>
                </div>
                <ul class="collection with-header z-depth-2">
                  <li class="collection-header"><h4>Alamat Kami</h4></li>
                  <li class="collection-item">Maestro</li>
                  <li class="collection-item">Sei Beras Sekata Pasar 7</li>
                  <li class="collection-item">Medan ,Sumatera Utara</li>
                </ul>
              </div>
              <div class="col m7 s12 hide-on-small-only">
                <div class="card-panel center">
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d995.5488440062554!2d98.59034890837346!3d3.5423511892987443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312f5ee09cbc8d%3A0xff01d7aac92b6340!2sJl.+Sei+Beras+Sekata%2C+Kabupaten+Deli+Serdang%2C+Sumatera+Utara+20351!5e0!3m2!1sid!2sid!4v1532851149321" width="460" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
              </div>
              </div>
            </div>
          </section>
          <!-- Contact US -->
          <!-- Register -->
              <section class="register scrollspy" id="register">
                <div class="container">
                  <h3 class="center light grey-text text-darken-3">LOGIN DULU!</h3>
                  <div class="row">
                    <div class="col m12 s12">
                      <form>
                        <div class="card-panel">
          
                         <div class="input-field">
                            <input type="email" name="email" id="email" class="validate">
                            <label for="name">Email</label>
                         </div>
                         <div class="input-field">
                            <input type="password" name="email" id="email" required class="validate">
                            <label for="name">Password</label>
                         </div>
                        
                         <button class="btn waves-effect waves-light orange darken-3">LOGIN
                            <i class="material-icons right">send</i>
                         </button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- floatingbutton -->
               
                <div class="fixed-action-btn ">
                    <a class="btn-floating btn-large red ">
                      <i class="large material-icons">search</i>
                    </a>
                    <ul>
                      <li>
                         <nav>
                          <div class="nav-wrapper">
                            <form>
                              <div class="input-field">
                                <input id="search" type="search" required>
                                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                                <i class="material-icons">close</i>
                              </div>
                            </form>
                          </div>
                        </nav>
                      </li>
                      
                    </ul>
                  </div>
                <!-- floatingbutton -->

              </section>
              <footer class="orange darken-3" >
                <div class="container">
                  <div class="row">
                    <div class="col m1 s5 center">
                    <img src="img/socialmedia/fb.png" class="responsive-img">
                    
                  </div>
                  <div class="col m1 s5 center">
                    <img src="img/socialmedia/twitt.png" class="responsive-img">
                  </div>
                  <div class="col m1 s5 center">
                    <img src="img/socialmedia/instagram.png" class="responsive-img">
                  </div>
                  <div class="col m1 s5 center">
                    <img src="img/socialmedia/youtube.png" class="responsive-img">
                  </div>
                  <div class="col m8 s12">
                     <p class="flow-text center">Developed by @jeremiatarigan</p>
                  </div
                </div>
                  </div>
               

              </footer>
          <!-- Register -->
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);

        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider,{
          indicators:false,
          interval:4000,
          height:500
        });

        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);

        const materialboxed = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialboxed);

        const scroll = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scroll,{
          scrollOffset: 50
        });

        const floatingbutton = document.querySelectorAll('.fixed-action-btn');
        M.FloatingActionButton.init(floatingbutton,{
          direction:'left'
        });
      </script>

    </body>
  </html>
        