<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>administrateur</title>
</head>
<body>
    <header>
    <nav class="navbar navbar-light color1">
     <div class="container-fluid px-5 ">
    <a class="navbar-brand ">
    <img src="images/logo2.png" alt="logo"  class="w-50 h-50 img-fluid">
    </a>
  </div>
</nav>
</header>

    <main class="bg-light">
    <section class="section_index  ">
      <div class="container-fluid row py-5">
        <div class="container col-lg-6 col-md-6 col-sm-6">
        <h2>Veuillez vous enregistrer</h2>
          <img src="images/logo.png" alt=""  class=" w-100 h-100 img-fluid" >
       </div>
        <div class="container color2 col-md-6 col-sm-6 col-lg-4  rounded-5">
            <form method="post" action="" >
                @csrf
                <div class="form-group px-5 fw-bold">
                <label for="username">Nom:</label> <br> 
                    <input type="text" name="username" placeholder="Nom" class="form-control rounded-pill" autocomplete="off" required > <br>
                    <label for="">Prénom(s):</label> <br>
                    <input type="text" name="prenom" placeholder="prénom" class="form-control rounded-pill" autocomplete="off" required ><br>
                    <label for="">Email:</label> <br>
                    <input type="text" name="email" placeholder="email" class="form-control rounded-pill" required><br>
                    <label for="">Mot de passe</label><br>
                    <input type="password" name="mot_pass" placeholder="mot de passe" class="form-control rounded-pill" required> <br>
                    <button type="submit" class="btn b fw-bold btn-success">
                    Valider
                </button> <br> <br>
            </form>
        </div>
    </div>
</div>
<br>
 </section>
    </main>
 <?php include('./includes/footer.php')?>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="/javascript/javascript.js"></script>   
</body>
</html>


