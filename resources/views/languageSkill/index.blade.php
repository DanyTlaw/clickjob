@extends('layouts.app')

@section('content')

        <!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<div class="container">

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Alle Ausbildungen</div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <td>Sprache</td>
                            <td>Kenntnisse Grad</td>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($languageSkills as $key => $value)
                            <tr>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->knowledge }}</td>
                                <!-- we will also add show, edit, and delete buttons -->
                                <td>

                                    <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                                    <!-- we will add this later since its a little more complicated than the other two buttons -->
                                    {{ Form::open(array('url' => 'languageSkill/' . $value->id, 'class' => 'pull-right')) }}
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    {{ Form::submit('Sprache löschen', array('class' => 'btn btn-danger')) }}
                                    {{ Form::close() }}
                                            <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                                    <a class="btn btn-small btn-success" href="{{ URL::to('languageSkill/' . $value->id) }}">Anzeigen</a>

                                    <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                                    <a class="btn btn-small btn-info" href="{{ URL::to('languageSkill/' . $value->id . '/edit') }}">Bearbeiten</a>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                    <a class="btn btn-small btn-primary" href="{{ URL::to('languageSkill/create') }}">Sprache hinzufügen</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection