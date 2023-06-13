<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OCP</title>
    <link rel="stylesheet" href="{{ asset('stage/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

    <div class="bg-dark py-3">
        <div class="container">
            <div class="h4 text-white">OCP</div>
        </div>
    </div>

    <div class="container ">
        <div class="d-flex justify-content-between py-3">
            <div class="h4">Stages</div>
            <div>
                <a href="{{ route('stages.create') }}" class="btn btn-primary">Ajouter
                    <i class="fas fa-plus"></i>
                </a>
            </div>
        </div>

        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif

        <div class="card border-0 shadow-lg">
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th width="30">ID</th>
                        <th>Année</th>
                        <th>Mois Max</th>
                        <th>Date Depart</th>
                        <th>Date Fin</th>
                        <th>Demande Date</th>
                        <th>Parrain</th>
                        <th>Type De Stage</th>
                        <th width="150">Action</th>
                    </tr>

                    @if($stages->isNotEmpty())
                    @foreach ($stages as $stage)
                    <tr valign="middle">
                        <td>{{ $stage->id }}</td>
                        <td>{{$stage->annee}}</td>
                        <td>{{ $stage->moisMax }}</td>
                        <td>{{ $stage->dateDepart }}</td>
                        <td>{{ $stage->dateFin }}</td>
                        <td>{{ $stage->demandeDate }}</td>
                        <td>{{ $stage->parrin }}</td>
                        <td>{{ $stage->stageType }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('stages.edit',$stage->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit fa-lg"></i>
                                </a>
                                <a href="#" onclick="deleteStage({{ $stage->id }})" class="btn btn-danger btn-sm ml-2">
                                    <i class="fas fa-trash-alt fa-lg"></i>
                                </a>

                                <form id="stage-edit-action-{{ $stage->id }}" action="{{ route('stages.destroy',$stage->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="8">Enregistrement non trouvé</td>
                    </tr>
                    @endif

                </table>
            </div>
        </div>

        <div class="mt-3">
            {{ $stages->links() }}
        </div>

    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
<script>
    function deleteStage(id) {
        if (confirm("Êtes-vous sûr de vouloir supprimer ?")) {
            document.getElementById('stage-edit-action-'+id).submit();
        }
    }
</script>

</body>
</html>
