<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dodaj kontakt</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">        
        <section class="page-section" id="contact">
            <div class="container">                
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Dodaj kontakt</h2>
               
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>                
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">                                             
                        <form action="addAction.php" method="post" name="add" enctype="multipart/form-data">    
                           
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" name="name" type="text" required  />
                                <label for="name">Imię</label>                                
                            </div>                         
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" name="lastName" type="text" required />
                                <label for="email">Nazwisko</label>                            
                            </div>                            
                            
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" name="email" type="email" required />
                                <label for="email">Email address</label>                               
                            </div>
                            
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" name="tel" type="tel"  />
                                <label for="phone">Telefon</label>                                
                            </div>
                            <div class="form-floating mb-3 ">                                                             
                                <input type="file" id="myfile" name="file">                                        								
                            </div>              
						    <div class="form-floating mb-3">                               
						        <label for="myfile"> Plik:</label>
                            </div>
    					    <div class="form-floating mb-3 ">              	
							    <button class="btn btn-primary btn-xl " id="submitButton" type="submit" name="submit" >Zapisz</button>
						    </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
