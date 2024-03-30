<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Edytuj kontakt</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
<?php

require_once("contact.php");
$id = $_GET['id'];
$contact=findContact($id);
?>

<body>
    <h2>Edycja</h2>
    <p>
	    <a href="index.php">Strona główna</a>
    </p>

	<section class="page-section" id="contact">
            <div class="container">                
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Edytuj kontakt</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">                                                                    
						<form name="edit" method="post" action="editAction.php" enctype="multipart/form-data">
                         
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" name="name" type="text"  value="<?php echo $contact->name; ?>" required />
                                <label for="name">Imię</label>                                
                            </div>
                         
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" name="lastName" type="text" value="<?php echo $contact->lastName; ?>" required/>
                                <label for="email">Nazwisko</label>                                                        
                            </div>                            
                            
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" name="email" type="email" value="<?php echo $contact->email; ?>" required />
                                <label for="email">Adres Email</label>                               
                            </div>
                            
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" name="tel" type="tel" value="<?php echo $contact->tel; ?>" />
                                <label for="phone">Telefon</label>                                
                            </div>
                            
                            <div class="form-floating mb-3 ">                                                             
                                <input type="file" id="myfile" name="file">                                        								
                            </div>              

							<div class="form-floating mb-3">                               
							<label for="myfile"> Plik:</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" id="file"   value="<?php echo $contact->file; ?>" readonly/>
                                <label for="phone">Plik</label>                                
                            </div>							

                            <div>
                            <input type="hidden" name="id" value=<?php echo $contact->id; ?>>
                            </div>

							<div class="form-floating mb-3 ">              	
							<button class="btn btn-primary btn-xl " type="submit" name="update" >Zapisz</button>
                            
							</div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
</body>

