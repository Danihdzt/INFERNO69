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
               <div class="modal fade text-light" id="Register" tabindex="-1" role="dialog" aria-labelledby="Register" aria-hidden="true">
                 <div class="modal-dialog modal-dialog-scrollable modal-lg">
                   <div class="modal-content">
                     <div class="modal-header bg-dark">
                       <h5 class="modal-title " id="Register">Register in Inferno.69</h5>
                       <button type="button" class="close btn-danger" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                       </button>
                     </div>
                     <div class="modal-body  bg-dark ol-12 col-md-12">
                     <form action="<?php echo(base_url('public/inferno/agregar'))?>" method="POST">
                       <div class="form-row">
                           <div class="col-8 mb-3 font-weight-bold mx-auto">
                             <label for="nomcliente" class="font-weight-bold">Name</label>
                             <input type="text" class="form-control" id="Nombre_Cliente" name="Nombre_Cliente" required>
                           </div>
                           <div class="col-md-8 mb-3 font-weight-bold mx-auto">
                             <label for="direccion" class="font-weight-bold ">Address</label>
                             <input type="text" class="form-control" id="Direccion" name="Direccion" required>
                           </div>
                           <div class="col-md-8 mb-3 font-weight-bold  mx-auto">
                           <label for="Telefono " class="font-weight-bold">Phone Number</label>
                             <input type="number" class="form-control" id="Telefono" name="Telefono" required>
                           </div>
                           <div class="col-md-8 mb-3 font-weight-bold  mx-auto">
                             <label for="Correo" class="font-weight-bold">Email</label>
                             <input type="email" class="form-control" id=" Correo" name="Correo" required>
                           </div>
                         </div>
                         <div class="form-row">
                           <div class="col-md-8 mb-3  font-weight-bold  mx-auto">
                             <label for="password" class="font-weight-bold ">Password</label>
                             <input type="password" class="form-control" id="Contraseña" name="Contraseña" required><br>
                             <button class="btn btn-primary " type="submit">Sing Up</button>

                           </div>
                         </div>  
                                                 
                     </form> <br><br>
                     <table class="col-12 col-md-12 table table-striped text-light">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>PHONE NUMBER</th>
                            <th>ADDRESS</th>
                            <th>EMAIL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($inferno as $clave=>$valor):?>
                            <tr>
                                <td><?php echo($valor->Id_Cliente)?></td>
                                <td><?php echo($valor->Nombre_Cliente)?></td>
                                <td><?php echo($valor->Telefono)?></td>
                                <td><?php echo($valor->Direccion)?></td>
                                <td><?php echo($valor->Correo)?></td>
                                <td><a href="<?php echo(base_url('public/inferno/eliminar/'.$valor->Id_Cliente))?>"class="btn btn-danger">Remove</a></td>
                                <td><button type="submit" class="btn btn-success" href="#exampleModal<?php echo($valor->Id_Cliente)?>" data-toggle="modal" data-target="#exampleModal<?php echo($valor->Id_Cliente)?>">
                                To Update </button>
                                

                                 <div class="modal fade" id="exampleModal<?php echo($valor->Id_Cliente)?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                   <div class="modal-dialog">
                                     <div class="modal-content">
                                       <div class="modal-header">
                                       <h5 class="modal-title" id="AddProducts">To Update</h5>
                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                           <span aria-hidden="true">&times;</span>
                                         </button>
                                       </div>
                                       <div class="modal-body" id="formulario<?php echo($valor->Id_Cliente)?>">
                                       <form action="<?= base_url('public/inferno/modificar/'.$valor->Id_Cliente)?>" method="POST" class="mt-3">
                                         <div class="form-row">
                                           <div class="col-6 mb-3 font-weight-bold">
                                             <label for="nomcliente" class="font-weight-bold">Name</label>
                                             <input type="text" class="form-control" id="Nombre_Cliente2" name="Nombre_Cliente2" required>
                                           </div>
                                           <div class="col-md-6 mb-3 font-weight-bold">
                                             <label for="direccion" class="font-weight-bold">Address</label>
                                             <input type="text" class="form-control" id="Direccion2" name="Direccion2" required>
                                           </div>
                                           <div class="col-md-6 mb-3 font-weight-bold">
                                           <label for="email " class="font-weight-bold">Email</label>
                                             <input type="email" class="form-control" id="Correo2" name="Correo2" required>
                                           </div>
                                           <div class="col-md-6 mb-3 font-weight-bold">
                                             <label for="numero" class="font-weight-bold">Phone number</label>
                                             <input type="number" class="form-control" id="Telefono2" name="Telefono2" required>
                                           </div>
                                         </div>
                                         <div class="form-row">
                                           <div class="col-md-6 mb-3  font-weight-bold">
                                             <label for="password" class="font-weight-bold">Password</label>
                                             <input type="password" class="form-control" id="Contraseña2" name="Contraseña2" required>
                                           </div>
                                         </div>
                                         <button type="submit" class="btn btn-info btn-block">To Update</button>
                                       </form>
                                       </div>
                                     </div>
                                   </div>
                                 </div></td>
                            </tr>
                        <?php endforeach?>
                    </tbody>               
                </table>            
                     </div>
                 </div>
                 </div>
               </div>
          </nav>
    </header>
    <main>
       <section>
         <div class="container">
           <di class="row">
             <div class="col-12 col-md-12">
                   <img class="portada" src="imagenes/portada.jpeg" alt="portada"> 
           </div>
         </di>
       </div>
    </section><br>
       <section>
           <div class="container">
               <div class="row">
                   <div class="col-12 col-md-6 mx-auto">
                   <h3 class="text-light">INFERNO.69</h3><br>
                       <p class="text-justify">Is one of the best online stores that offers you everything in sex toys and articles for adults. We have everything you need for a full and happy sex life. Including sex toys,
                        anal toys, men's toys, lingerie, vibrators, lubricants and oils. That will make your intimate encounters more ardent and remember that a good orgasm is the embrace of two souls who smile with pleasure.</p>
                        <p class="text-justify">
                            Let them write poems on your legs, kissing your scars, erasing the taste of past love with your tongue.
                            Let your fears be removed by breaking the chains that have been imposed on you by touching your sex, with poems that are written with your tongue and impregnate your soul with orgasms.
                            Let Neruda's poems write on your back, Benedetti's verses on your thighs, filling your crotch with poetry with those poems of Bukowski's madman.
                            Licking your breasts, with Fonseca's lyrics, erasing old caresses with Gabo's literature. Letting you know that your body is a book, that infinite, that enigmatic.
                            Because you are passion, an orgasm to the vision. And an endless number of verses that even some have not been able to interpret.</p>
                   </div>
                   <div class="col-12 col-md-6">
                    <img src="<?php echo(base_url('public/imagenes/imagen2.png'))?>" class="img-fluid" alt="Responsive image">
                   </div>
               </div>
           </div>
       </section>
    </main>
    <footer class="ppp">
        <div class=" container text-dark mx-auto ">
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
