@extends('layouts.master')

@section('contenu')
<div class="mt-4">
    <div class="my-3 p-3 mt-4 bg-body rounded shadow-sm">
        <h3 class="border-bottom pb-2 mb-4">Liste des étudiants inscrits</h3>
        @if(session()->has("success"))
            <div class="alert alert-success">
                <h5>{{ session()->get('success') }}</h5>
            </div>
        @endif
        <div>
            <div class="d-flex justify-content-between mb-2">
                <div><a href="{{ route('create.stagiaire') }}" class="btn btn-primary">Ajouter un nouveau stagiaire</a></div>
            </div>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Fullname</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($stagiaires as $stagiaire)
                        <tr>
                            <th scope="row">{{ $loop->index + 1 }}</th>
                            <td>{{ $stagiaire->fullName }}</td>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
