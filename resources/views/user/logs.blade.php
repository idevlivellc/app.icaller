@extends('layouts.user')

@section('title', 'iCaller - Call Logs')

@section('content')

<section>
	<div class="row">
		<div class="col s12">
			<div class="col s12">
				<div class="card-panel info-wrapper-large">
					<div class="flexbox" style="justify-content: space-between">
						<h6 class="medium">Recent Calls</h6>
						<a href="#date-selector" class="btn-flat dropdown-trigger"><i class="material-symbols-rounded left">event</i><span data-date>{{ date('d.m.Y') }}</span></a>
					</div>
					<br><br>
					<div data-id="call-summary-wrapper">
						<table class="call-summary-table" data-id="call-summary-table">
							<thead>
								<tr>
									<th>Caller ID</th>
									<th>Number</th>
									<th>Picked By</th>
									<th>Duration</th>
									<th>Call Time</th>
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
	</div>
</section>

<ul class="dropdown-content" id="date-selector">
	<li><a href="#!">Today</a></li>
	<li><a href="#!">Yesterday</a></li>
	<li><a href="#!">This Week</a></li>
	<li><a href="#!">Last Week</a></li>
</ul>

@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/logs.js') }}"></script>
@endsection