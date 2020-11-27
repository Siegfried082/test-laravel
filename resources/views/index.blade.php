@extends('layouts.app')

@section('content')

    <div class="container mt-5">
        <h4 class="display-4 text-uppercase">Liste des utilisateurs</h4>
        <div class="col-md-4 float-right">
            <form action="" method="GET">
                <div class="form-group">
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-search"></i></span>
                        </div>
                        <input type="text" class="form-control" name="filter[name]" id="filter_name" placeholder="Nom d'utilisateur">

                    </div>
                </div>
            </form>
        </div>
        <div class="container">
            <table class="table">
                <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th>@sortablelink('lastname')</th>
                    <th>@sortablelink('firstname')</th>
                    <th>@sortablelink('email')</th>
                    <th>Ville</th>

                </tr>
                </thead>
                <tbody>
                @forelse($utilisateurs as $utilisateur)
                    <tr>
                        <td>{{ $utilisateur->id }}</td>
                        <td>{{ $utilisateur->lastname }}</td>
                        <td>{{ $utilisateur->firstname }}</td>
                        <td>{{ $utilisateur->email }}</td>
                        <td>{{ $utilisateur->city }}</td>



                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Aucune donnée ne correspond à cette recherche !</td>
                    </tr>
                @endforelse



                </tbody>
            </table>
            {{ $utilisateurs->links('paginate') }}
        </div>


@endsection
