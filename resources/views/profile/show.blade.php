@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">Profil Ansicht</div>
				<div class="panel-body">
					<div class="col-md-8">
						<div class="panel panel-default">
							<div class="panel-heading">Allgemeine Benutzerdaten</div>
								<div class="panel-body">								
								<!-- Anezige "Form" für den Profil Eintrag -->
								<h3>Benutzername: {{ $user->name }}</h3>
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
					<div class="col-md-4">
						<div class="panel panel-default">
							<div class="panel-heading">Informationen</div>
							<div class="panel-body">
								<h4>Profil Fortschritt</h4>
								<div class="progress">
								  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
								    20%
								  </div>
								</div>
								<p>Ein Vollständiges Profil macht einen guten Eindruck und erhöht ihre Chancen.</p>
								<ul>
									<li>Lebenslauf</li>
									<li>Ausbildungen</li>
									<li>Berufserfahrung</li>
									<li>Kompetenzen</li>
								</ul>
							</div>	
						</div>
					</div>
					<div class="col-md-8">
						<div class="panel panel-default">
							<div class="panel-heading">Berufserfahrungen</div>
							<div class="panel-body">
								<!-- Here comes the index as a partials -->
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<div class="panel panel-default">
							<div class="panel-heading">Ausbildungen</div>
							<div class="panel-body">
								<!-- Here comes the index as a partials -->
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<div class="panel panel-default">
							<div class="panel-heading">Sprachkenntnisse</div>
							<div class="panel-body">
								<!-- Here comes the index as a partials -->
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<div class="panel panel-default">
							<div class="panel-heading">Kompetenzen</div>
							<div class="panel-body">
								<!-- Here comes the index as a partials -->
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<div class="panel panel-default">
							<div class="panel-heading">Andere Profile</div>
							<div class="panel-body">
								<!-- Here comes the index as a partials -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection