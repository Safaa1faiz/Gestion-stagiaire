
@extends('layouts.master')

@section('contenu')

<div class="my-3 p-3 mt-4 bg-body rounded shadow-sm">
  <h4 class="border-bottom pb-2 mb-4">Ajouter un nouveau étudiant</h4>
  <div class="mt-4">


    @if ($errors->any())
    <div class="alert alert-danger">
   <ul>

    @foreach($errors->all() as $error)
     <li>{{$error}}</li>
    @endforeach

   </ul>
  </div>

   @endif
    <form style="width:65%" method="post" action="{{route('stagiaire.store')}}" >

      @csrf
      @method('POST')
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nom et prénom de stagiaire</label>
          <input type="text" class="form-control" name="fullName">
        </div>
        
        </select>
          </div> 
        
        <button type="submit" href="{{route('stagiaire')}}" class="btn btn-primary">Enregistrer</button>
        <a href="{{route('stagiaire')}}" class="btn btn-danger">Annuler</a>
      </form>
  </div>
    


</div>
</div>
@endsection