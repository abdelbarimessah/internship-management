@extends('dashboard.layouts.master')

@section('title')
    create stage
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('stage/css/bootstrap.min.css') }}">
@endsection

@section('title_page1')
    gestion des stages
@endsection

@section('title_page2')

@endsection

@section('content')

<div class="container ">
    <div class="d-flex justify-content-between py-3">
        <div class="h4">Créer un stage</div>
        <div>
            <a href="{{ route('stages.index') }}" class="btn btn-primary">Retour</a>
        </div>
    </div>

    <form action="{{ route('stages.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card border-0 shadow-lg">
            <div class="card-body">
                <div class="mb-3">
                    <label for="annee" class="form-label">Année</label>
                    <input type="number" name="annee" id="annee" placeholder="Entrer l'Année" class="form-control @error('annee') is-invalid @enderror" value="{{ old('annee') }}">
                    @error('annee')
                        <p class="invalid-feedback">{{ $message }}</p>    
                    @enderror                        
                </div>

                <div class="mb-3">
                    <label for="moisMax" class="form-label">Maximum des mois</label>
                    <input type="number" name="moisMax" id="moisMax" placeholder="Entrer le nombre maximum de mois" class="form-control @error('moisMax') is-invalid @enderror" value="{{ old('moisMax') }}">
                    @error('moisMax')
                        <p class="invalid-feedback">{{ $message }}</p>    
                    @enderror      
                </div>

                <div class="mb-3">
                    <label for="dateDepart" class="form-label">Date de départ</label>
                    <input type="date" name="dateDepart" id="dateDepart" class="form-control @error('dateDepart') is-invalid @enderror" value="{{ old('dateDepart') }}">
                    @error('dateDepart')
                        <p class="invalid-feedback">{{ $message }}</p>    
                    @enderror      
                </div>

                <div class="mb-3">
                    <label for="dateFin" class="form-label">Date de fin</label>
                    <input type="date" name="dateFin" id="dateFin" class="form-control @error('dateFin') is-invalid @enderror" value="{{ old('dateFin') }}">
                    @error('dateFin')
                        <p class="invalid-feedback">{{ $message }}</p>    
                    @enderror      
                </div>

                <div class="mb-3">
                    <label for="demandeDate" class="form-label">Date de demande</label>
                    <input type="date" name="demandeDate" id="demandeDate" class="form-control @error('demandeDate') is-invalid @enderror" value="{{ old('demandeDate') }}">
                    @error('demandeDate')
                        <p class="invalid-feedback">{{ $message }}</p>    
                    @enderror      
                </div>

                <div class="mb-3">
                    <label for="parrin" class="form-label">Parrain de stage</label>
                    <input type="text" name="parrin" id="parrin" placeholder="Entrer Parrain" class="form-control @error('parrin') is-invalid @enderror" value="{{ old('parrin') }}">
                    @error('parrin')
                        <p class="invalid-feedback">{{ $message }}</p>    
                    @enderror      
                </div>

                <div class="mb-3">
                    <label for="stageType" class="form-label">Type de Stage</label>
                    <select name="stageType" id="stageType" class="form-control @error('stageType') is-invalid @enderror">
                        <option value="">Sélectionner le type de stage</option>
                        <option value="PFE">PFE</option>
                        <option value="Pré-embauche">Pré-embauche</option>
                        <option value="Découverte">Découverte</option>
                        <option value="Opérationnel">Opérationnel</option>
                        <option value="Recherche">Recherche</option>
                        <option value="international">international</option>
                        <option value="Stage d'été">Stage d'été</option>
                    </select>
                    @error('stageType')
                        <p class="invalid-feedback">{{ $message }}</p>    
                    @enderror      
                </div>
            
            </div>
        </div>

        <button class="btn btn-primary mt-3">Enregistrer le stage</button>

    </form>
</div>
@endsection

@section('scripts')

@endsection
