<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OCP</title>
    <link rel="stylesheet" href="{{ asset('stage/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="bg-dark py-3">
        <div class="container">
            <div class="h4 text-white">OCP</div>
        </div>
    </div>
    
    <div class="container ">
        <div class="d-flex justify-content-between py-3">
            <div class="h4">Modifier Stage</div>
            <div>
                <a href="{{ route('stages.index') }}" class="btn btn-primary">Retour</a>
            </div>
        </div>
    
        <form action="{{ route('stages.update', $stage->id) }}" method="post">
            @csrf
            @method('put')
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="annee" class="form-label">Année</label>
                        <input type="text" name="annee" id="annee" placeholder="Entrez l'année" class="form-control @error('annee') is-invalid @enderror" value="{{ old('annee', $stage->annee) }}">
                        @error('annee')
                            <p class="invalid-feedback">{{ $message }}</p>    
                        @enderror                        
                    </div>
    
                    <div class="mb-3">
                        <label for="moisMax" class="form-label">Mois Max</label>
                        <input type="text" name="moisMax" id="moisMax" placeholder="Entrez le mois max" class="form-control @error('moisMax') is-invalid @enderror" value="{{ old('moisMax', $stage->moisMax) }}">
                        @error('moisMax')
                            <p class="invalid-feedback">{{ $message }}</p>    
                        @enderror      
                    </div>
    
                    <div class="mb-3">
                        <label for="dateDepart" class="form-label">Date de Départ</label>
                        <input type="text" name="dateDepart" id="dateDepart" placeholder="Entrez la date de départ" class="form-control @error('dateDepart') is-invalid @enderror" value="{{ old('dateDepart', $stage->dateDepart) }}">
                        @error('dateDepart')
                            <p class="invalid-feedback">{{ $message }}</p>    
                        @enderror      
                    </div>
    
                    <div class="mb-3">
                        <label for="dateFin" class="form-label">Date de Fin</label>
                        <input type="text" name="dateFin" id="dateFin" placeholder="Entrez la date de fin" class="form-control @error('dateFin') is-invalid @enderror" value="{{ old('dateFin', $stage->dateFin) }}">
                        @error('dateFin')
                            <p class="invalid-feedback">{{ $message }}</p>    
                        @enderror      
                    </div>
    
                    <div class="mb-3">
                        <label for="demandeDate" class="form-label">Demande de Date</label>
                        <input type="text" name="demandeDate" id="demandeDate" placeholder="Entrez la demande de date" class="form-control @error('demandeDate') is-invalid @enderror" value="{{ old('demandeDate', $stage->demandeDate) }}">
                        @error('demandeDate')
                            <p class="invalid-feedback">{{ $message }}</p>    
                        @enderror      
                    </div>
    
                    <div class="mb-3">
                        <label for="parrin" class="form-label">Parrin</label>
                        <input type="text" name="parrin" id="parrin" placeholder="Entrez le parrin" class="form-control @error('parrin') is-invalid @enderror" value="{{ old('parrin', $stage->parrin) }}">
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
        
                <button class="btn btn-primary my-3">Mettre à jour le stage</button>
        
            </form>
        </div>
    </body>
</html>