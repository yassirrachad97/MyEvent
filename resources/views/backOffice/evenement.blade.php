@extends('layaout.asideAdmn')
@section('events')

<button class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#addModal">Ajouter event
</button>
<!-- Modal pour Ajouter -->
<div class="modal fade " id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="color: darkslategrey;" id="addModalLabel">Ajouter un élément</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Contenu du formulaire pour l'ajout -->
                <form action="{{ route('evenements.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" name="title" id="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea name="description" id="description" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="content">Content:</label>
                        <textarea name="content" id="content" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="date">Date:</label>
                        <input type="date" name="date" id="date" class="form-control" required>
                    </div>
                    <div class="form-group ">
                        <label for="localisation_id">Location:</label>
                        <select name="localisation_id" id="localisation_id" class="form-control" required>

                            @foreach($data['Localisation'] as $localisation)
                            <option value="{{ $localisation->id }}">{{ $localisation->ville }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group ">
                        <label for="categorie_id">Category:</label>
                        <select name="categories_id" id="categorie_id" class="form-control" required>
                            @foreach($data['categories'] as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-3 mb-3">
                        <input type="file" name="image" id="image" class="form-control-file">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@foreach($data['evenements'] as $evenement)
<div class="card m-3 gap-2" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">

    <div class="card-body">
      <h5 class="card-title">{{ $evenement->title }}</h5>
      <p class="card-text">{{ $evenement->description }}</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">{{ $evenement->date }}</li>
      <li class="list-group-item">{{ $evenement->localisation}}</li>
      <li class="list-group-item">{{ $evenement->categorie }}</li>
    </ul>
    <div class="card-body">
      <a href="#" class="card-link">Card link</a>
      <a href="#" class="card-link">Another link</a>
    </div>
  </div>
  @endforeach

@endsection
