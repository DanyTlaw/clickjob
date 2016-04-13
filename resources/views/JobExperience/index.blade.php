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
				<div class="panel-heading">Alle Berufserfahrungen</div>
				<div class="panel-body">
					<table class="table table-bordered">
				    <thead>
				        <tr>
				            <td>Berufsbeschreibung</td>
				            <td>Arbeitgeber</td>
				            <td>Arbeitsort</td>
				        </tr>
				    </thead>
				    <tbody>
				    @foreach($jobExperiences as $key => $value)
				        <tr>
				            <td>{{ $value->job_name }}</td>
				            <td>{{ $value->employer }}</td>
				            <td>{{ $value->work_place }}</td>
				            <!-- we will also add show, edit, and delete buttons -->
				            <td>

				                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
				                <!-- we will add this later since its a little more complicated than the other two buttons -->
				                {{ Form::open(array('url' => 'jobExperience/' . $value->id, 'class' => 'pull-right')) }}
				                    {{ Form::hidden('_method', 'DELETE') }}
				                    {{ Form::submit('Berufserfahrung löschen', array('class' => 'btn btn-danger')) }}
				                {{ Form::close() }}
				                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
				                <a class="btn btn-small btn-success" href="{{ URL::to('jobExperience/' . $value->id) }}">Anzeigen</a>

				                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
				                <a class="btn btn-small btn-info" href="{{ URL::to('jobExperience/' . $value->id . '/edit') }}">Bearbeiten</a>

				            </td>
				        </tr>
				    @endforeach
				    </tbody>
				</table>
				<!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
				    <a class="btn btn-small btn-primary" href="{{ URL::to('jobExperience/create') }}">Berufserfahrung hinzufügen</a>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection