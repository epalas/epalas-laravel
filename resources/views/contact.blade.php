@extends('template')

@section('titre')
Gazzar - Contact
@endsection

@section('contenu')
<div class="container mt-5">

  <h1>Contactez nous</h1>  
  <p>Nous nous tenons volontiers à votre disposition pour répondre à vos questions. <br>
  Merci de remplir le formulaire ci-dessous pour nous transmettre votre demande.</p>        

  <form>
    <div class="row">
      <div class="col-sm-3">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">Sujet</div>
        </div>
      <select id="inputState" class="form-control">
        <option selected></option>
        <option>Facture</option>
        <option>Commande</option>
        <option>Service client</option>
        <option>Produit</option>
      </select>
      </div>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-md-3">
        <input name="nom" type="text" class="form-control" placeholder="Nom" required>
      </div>
      <div class="col-md-3">
        <input name="prenom" type="text" class="form-control" placeholder="Prénom" required>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-md-3">
        <input name="telephone" type="text" class="form-control" placeholder="Téléphone" required>
      </div>
      <div class="col-md-3">
        <input name="mail" type="email" class="form-control" placeholder="E-mail" required>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-md-6">
        <div class="form-group">
          <textarea name="message" class="form-control" id="message" rows="8" placeholder="Votre message..." required></textarea>
        </div>
      </div>
    </div>
    <button id="send" type="submit" class="btn btn-primary mr-auto">Envoyer</button>
  
        <div id="advertise" class="bg-secondary text-white rounded col-auto mt-3 pt-3 pb-1 text-center hidden">
          <p>Merci pour votre demande. Nous allons la traiter dans les plus brefs délais.</p>
        </div>
    
  </form>
</div> 
@endsection
