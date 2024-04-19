<?php 

include_once __DIR__ . '/Includes/header.php';
include_once __DIR__ . '/Includes/navBarreCo.php';

?>
   
   <div class="container bg-light p-4  col-md-4 mt-5 shadow-lg p-3 mb-5">
       <form>
           <div class="bienvenue">
               <h1>Bienvenue</h1>
           </div>
           <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Email*</label>
               <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
           </div>
           <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Mot de passe*</label>
               <input type="password" class="form-control" id="exampleInputPassword1">
           </div>

           <button type="button" class="btn btn-primary" id="submissionButton">Connexion</button>
       </form>
   </div>

   <script src="../../assets/js/script.js"></script>