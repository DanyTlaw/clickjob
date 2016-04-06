@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">Profil Ansicht</div>
				<div class="panel-body">
					<!-- Anezige "Form" für den Profil Eintrag -->
					<h3>{{ $user->name }}</h3>
					<table class="table">
					<tr>
						<td>Bild-url:</td>
						<td>{{ $profile->profile_picture_url }}</td>
					</tr>
					<tr>
						<td>Anrede:</td>
						<td>{{ $profile->title }}</td>
					</tr>
					<tr>
						<td>Vorname:</td>
						<td>{{ $profile->first_name}}</td>
					</tr>
					<tr>
						<td>Nachname:</td>
						<td>{{ $profile->last_name}}</td>
					</tr>
					<tr>
						<td>Ort:</td>
						<td>{{ $profile->place}}</td>
					</tr>
					<tr>
						<td>Strasse:</td>
						<td>{{ $profile->street}}</td>
					</tr>
					<tr>
						<td>Postleitzahl</td>
						<td>{{ $profile->zip}}</td>
					</tr>
					<tr>
						<td>Jahrgang</td>
						<td>{{ $profile->birthyear}}</td>
					</tr>
					<tr>
						<td>Nationalität</td>
						<td>{{ $profile->nationality}}</td>
					</tr>
					<tr>
						<td>Tel-Nr.</td>
						<td>{{ $profile->tel}}</td>
					</tr>
					<tr>
						<td><a href="{{ url('profile/' . $profile->id .' /edit')}}"> <button class="btn btn-primary">Bearbeiten</button></a></td>
					</tr>																							
					</table>
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection