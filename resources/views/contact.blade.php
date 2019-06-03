@extends('template')

@section('titre')
Gazzar - Contact
@endsection

@section('contenu')
<div class="container mt-5">

  <h1>Contacter nous</h1>  
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
      <div class="col-sm-3">
        <input name="nom" type="text" class="form-control" placeholder="Nom">
      </div>
      <div class="col-sm-3">
        <input name="prenom" type="text" class="form-control" placeholder="Prénom">
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-sm-3">
        <input name="telephone" type="text" class="form-control" placeholder="Téléphone">
      </div>
      <div class="col-sm-3">
        <input name="mail" type="email" class="form-control" placeholder="E-mail">
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-sm-6">
        <div class="form-group">
          <textarea name="message" class="form-control" id="message" rows="8" placeholder="Votre message..."></textarea>
        </div>
      </div>
    </div>
    <button type="submit" class="btn btn-primary mr-auto">Envoyer</button>
  </form>
</div> 
@endsection