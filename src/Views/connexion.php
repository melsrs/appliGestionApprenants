<?php 

include_once __DIR__ . '/Includes/header.php';
include_once __DIR__ . '/Includes/navBarreCo.php';

?>
   
   <div id="connexion">
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

           <button onclick="handleLogin()" class="btn btn-primary" id="submissionButton">Connexion</button>
       </form>
   </div>