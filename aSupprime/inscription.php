<?php
?>
<div class="col-md-11">
    Pour s'inscrire a notre site veuillez remplir tous les champs obligatoires marqués par (*)

<form class="form-horizontal" method="post" action="index.php?p=sinscrire">
    <input type="hidden" name="formInscription">
  <div class="form-group">
    <label for="nom" class="col-sm-2 control-label">Nom *</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="nom" placeholder="Nom" name="nom" value="">
    </div>
  </div>
  <div class="form-group">
    <label for="prenom" class="col-sm-2 control-label">Prénom *</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="prenom" placeholder="Prénom" name="nom" value="">
    </div>
  </div>
     <div class="form-group">
    <label for="identifiant" class="col-sm-2 control-label">Identifiant *</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="identifiant" placeholder="Identifiant" name="identifiant">
    </div>           
  </div>
     <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Mot de passe:*</label>
    <div class="col-sm-8">       
         <input type="password" class="form-control" id="password" placeholder="Password"  name="password" value="">
    </div>
  </div>
     <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email *</label>
    <div class="col-sm-8">
      <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="">
    </div>
  </div>
    
    
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" value="" name="inscription">Valider</button>
    </div>
  </div>
</form>
    </div>