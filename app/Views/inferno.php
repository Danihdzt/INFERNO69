<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo(base_url('public/estilos.css')) ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>INFERNO.69</title>
</head>
<body class="fondo">
    <header>
        <nav class="navbar navbar-expand-lg fondo">
            <a class="navbar-brand text-light " href="<?php echo(base_url('public/inferno')) ?>">
                <img src="imagenes/Logo1.jpeg" width="50" height="50" class="d-inline-block align-top " alt="" loading="lazy">
               
              </a>
            <button class="navbar-toggler btn btn-outline-warning" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon btn btn-outline-warning"></span>
            </button>          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link text-light" href="<?php echo(base_url('public/inferno')) ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="<?php echo(base_url('public/category')) ?>">Category</a>
                </li>                
                <li class="nav-item">
                    <a class="nav-link text-light" href="<?php echo(base_url('public/programmers')) ?>">Programmers</a>
                  </li>
              </ul>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-outline-success mr-2" data-toggle="modal" data-target="#Register">
                   Sing up 🔥
                   </button>
               
               <!-- Modal -->
               <div class="modal fade" id="Register" tabindex="-1" role="dialog" aria-labelledby="Register" aria-hidden="true">
                 <div class="modal-dialog">
                   <div class="modal-content">
                     <div class="modal-header">
                       <h5 class="modal-title" id="Register">Register in Inferno.69</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                       </button>
                     </div>
                     <div class="modal-body">
                     <form action="<?php echo(base_url('public/inferno/agregar'))?>" method="POST">
                         <div class="form-row">
                           <div class="col-6 mb-3 font-weight-bold">
                             <label for="nomcliente">Name</label>
                             <input type="text" class="form-control" id="Nombre_Cliente" name="Nombre_Cliente" required>
                           </div>
                           <div class="col-md-6 mb-3 font-weight-bold">
                             <label for="direccion">Address</label>
                             <input type="text" class="form-control" id="Direccion" name="Direccion" required>
                           </div>
                           <div class="col-md-6 mb-3 font-weight-bold">
                             <label for="identificacion">Identification card</label>
                             <input type="number" class="form-control" id="Identification" name="Identification"required>
                           </div>
                           <div class="col-md-6 mb-3 font-weight-bold">
                             <label for="email">Email</label>
                             <input type="email" class="form-control" id="Correo" name="Correo" required>
                           </div>
                         </div>
                         <div class="form-row">
                           <div class="col-md-6 mb-3  font-weight-bold">
                             <label for="numero">Phone number</label>
                             <input type="number" class="form-control" id="Telefono" name="Telefono" required>
                           </div>
                           <div class="col-md-6 mb-3  font-weight-bold">
                             <label for="password">Password</label>
                             <input type="password" class="form-control" id="Contraseña" name="Contraseña" required>
                           </div>
                         </div>  
                         <h5 class="text-center mt-4"><?php echo(session('mensaje')) ?></h5>
                         <button type="button" class="btn btn-primary">Sing up</button>                          
                       </form>
                     </div>
                   </div>
                 </div>
               </div>
               
                 <!-- Button trigger modal -->
                 <button type="button" class="btn btn-outline-info mr-2" data-toggle="modal" data-target="#Loginin">
                 Login in 😈
                   </button>
               
               <!-- Modal -->
               <div class="modal fade" id="Loginin" tabindex="-1" role="dialog" aria-labelledby="Loginin" aria-hidden="true">
                 <div class="modal-dialog">
                   <div class="modal-content">
                     <div class="modal-header">
                       <h5 class="modal-title" id="Loginin">Welcome to Inferno.69</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                       </button>
                     </div>
                     <div class="modal-body">
                       <form>
                         <div class="form-group">
                           <label for="exampleInputEmail1 " class="font-weight-bold">Email address</label>
                           <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                           <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                         </div>
                         <div class="form-group">
                           <label for="exampleInputPassword1 " class="font-weight-bold">Password</label>
                           <input type="password" class="form-control" id="exampleInputPassword1">
                         </div>
                         
                       </form>
                     </div>
                     <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                       <button type="button" class="btn btn-primary">Login in</button>
                     </div>
                   </div>
                 </div>
               </div>
          </nav>
    </header>
    <main>
       <section>
        <div id="carouselExampleIndicators" class="carousel slide mt-3" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="<?php echo(base_url('public/imagenes/imagen33.jpeg'))?>" class="d-block w-100" alt="img1">
            </div>
              <div class="carousel-item">
                <img src="<?php echo(base_url('public/imagenes/imagen44.jpeg'))?>" class="d-block w-100" alt="img2">
            </div>
              <div class="carousel-item">
                <img src="<?php echo(base_url('public/imagenes/imagen55.jpeg'))?>" class="d-block w-100" alt="img3">
            </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
       </section><br>
       <section>
           <div class="container">
               <div class="row">
                   <div class="col-12 col-md-6">
                       <p class="text-justify">INFERNO.69 is one of the best online stores that offers you everything in sex toys and articles for adults. We have everything you need for a full and happy sex life. Including sex toys,
                        anal toys, men's toys, lingerie, vibrators, lubricants and oils. That will make your intimate encounters more ardent and remember that a good orgasm is the embrace of two souls who smile with pleasure.</p>
                        <p class="text-justify">
                            Let them write poems on your legs, kissing your scars, erasing the taste of past love with your tongue.
                            Let your fears be removed by breaking the chains that have been imposed on you by touching your sex, with poems that are written with your tongue and impregnate your soul with orgasms.
                            Let Neruda's poems write on your back, Benedetti's verses on your thighs, filling your crotch with poetry with those poems of Bukowski's madman.
                            Licking your breasts, with Fonseca's lyrics, erasing old caresses with Gabo's literature. Letting you know that your body is a book, that infinite, that enigmatic.
                            Because you are passion, an orgasm to the vision. And an endless number of verses that even some have not been able to interpret.</p>
                   </div>
                   <div class="col-12 col-md-6">
                    <img src="<?php echo(base_url('public/imagenes/imagen2.jpeg'))?>" class="img-fluid" alt="Responsive image">
                   </div>
               </div>
           </div>
       </section>
    </main>
    <footer class="ppp">
        <div class=" container text-dark ">
            <div class="row">                
                <div class="col-12 col-md-4 ">  
                     <br>                    
                    <a class="navbar-brand text-light " href="<?php echo(base_url('public/inferno')) ?>">
                     <img src="<?php echo(base_url('public/imagenes/Logo1.jpeg'))?>" width="90" height="90" alt="imagen1" loading="lazy">
                     </a> 
                </div> 
                <div class="col-12 col-md-4 ">
                     <a class="navbar-brand text-light" href="">
                        <img src="<?php echo(base_url('public/imagenes/gmail (1).png'))?>" width="50" height="50" alt="imagen2" loading="lazy">
                        Inferno.69@gmail.com   </a>  
                          <a class="navbar-brand text-light   " href="">
                        <img src="<?php echo(base_url('public/imagenes/periscope.png'))?>" width="50" height="50" alt="imagen4" loading="lazy">
                    Medellin-Colombia</a> <br>        
                </div>
                <div class="col-12 col-md-4">                   
                    <a class="navbar-brand text-light" href="">
                        <img src="<?php echo(base_url('public/imagenes/copywriting.png'))?>" width="50" height="50" alt="imagen3" loading="lazy">Copyright</a> <br>
                    <a class="navbar-brand text-light" href="">
                        <img src="<?php echo(base_url('public/imagenes/whatsapp (1).png'))?>" width="50" height="50" alt="imagen3" loading="lazy">
                        </a> 
                    <a class="navbar-brand text-light   " href="">
                        <img src="<?php echo(base_url('public/imagenes/instragram.png'))?>" width="50" height="50" alt="imagen4" loading="lazy">
                    </a> 
                    <a class="navbar-brand text-light   " href="">
                        <img src="<?php echo(base_url('public/imagenes/facebook.png'))?>" width="50" height="50" alt="imagen4" loading="lazy">
                    </a> 
                    <a class="navbar-brand text-light   " href="">
                        <img src="<?php echo(base_url('public/imagenes/twitter.png'))?>" width="50" height="50" alt="imagen4" loading="lazy">
                    </a>                         
                </div>     
                                                                                      
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> 
</body>
</html>
