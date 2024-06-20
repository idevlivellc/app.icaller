@extends('layouts.user')

@section('title', 'iCaller - Dashboard')

@section('content')

<section class="dashboard-container">
	<div class="row center-align">
		<div class="col s12 m4">
			<div class="card-panel info-wrapper-small">
				<h6 class="small-text">Ongoing Calls</h6>
				<br>
				<h1 style="font-size: 8rem" data-id="live-call">0</h1>
			</div>
		</div>

		<div class="col s12 m4">
			<div class="card-panel info-wrapper-small">
				<h6 class="small-text">Total Calls</h6>
				<br><br>
				<table data-id="calls-table">
					<tbody>
						<tr>
							<td><i class="material-symbols-rounded green-text left">phone_callback</i>Received</td>
							<td data-received></td>
						</tr>
						<tr>
							<td><i class="material-symbols-rounded green-text left">phone_forwarded</i>Made</td>
							<td data-made></td>
						</tr>
						<tr>
							<td><i class="material-symbols-rounded red-text left" style="transform: rotateY(180deg)">phone_disabled</i>Missed</td>
							<td data-missed></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

		<div class="col s12 m4">
			<div class="card-panel info-wrapper-small">
				<h6 class="small-text">Agents</h6>
				<br><br>
				<table data-id="agents-table">
					<tbody>
						<tr>
							<td><i class="material-symbols-rounded green-text left">play_arrow</i>Available</td>
							<td data-id="agent-available">2</td>
						</tr>
						<tr>
							<td><i class="material-symbols-rounded yellow-text text-darken-2 left">settings_phone</i>On Call</td>
							<td data-id="agent-busy">0</td>
						</tr>
						<tr>
							<td><i class="material-symbols-rounded red-text left">pause</i>Pause</td>
							<td>0</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

		<div class="col s12">
			<div class="card-panel info-wrapper-large">
				<h6 class="small-text">Recent Calls</h6>
				<br><br>
				<div data-id="call-summary-wrapper">
					<table class="call-summary-table" data-id="call-summary-table">
						<thead>
							<tr>
								<th>Caller ID</th>
								<th>Number</th>
								<th>Picked By</th>
								<th>Duration</th>
								<th>Call Date & Time</th>
							</tr>
						</thead>

						<tbody>
							{{-- <tr>
								<td><i class="material-symbols-rounded green-text left">phone_callback</i>+12138372783</td>
								<td>+18888999636</td>
								<td>Martha Rogers</td>
								<td>2 min 33 sec</td>
								<td>08:45 PM (IST)</td>
							</tr> --}}
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/dashboard.js') }}"></script>
@endsection