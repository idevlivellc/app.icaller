@extends('layouts.user')

@section('title', 'iCaller - Numbers')

@section('content')

<section>
	<div class="row">
		<div class="col s12">
			<div class="col s12">
				<div class="card-panel info-wrapper-large">
					<div class="flexbox" style="justify-content: space-between">
						<h6 class="small-text">Tollfree Numbers</h6>
						{{-- <a href="#date-selector" class="btn-flat dropdown-trigger"><i class="material-symbols-rounded left">event</i><span data-date>{{ date('d.m.Y') }}</span></a> --}}
					</div>
					<br><br>
					<table class="call-summary-table">
						<thead>
							<tr>
								<th>Numbers</th>
								<th>Business Hours</th>
								<th>Call Actions</th>
							</tr>
						</thead>
	
						<tbody>
							<tr class="small-text">
								<td>(888) 899-7816</td>
								<td>During 24 x 7</td>
								<td>Send to <span class="teal-text medium">Email Inbound Queue</span></td>
							</tr>

							<tr class="small-text">
								<td>(888) 899-9636</td>
								<td>During 24 x 7</td>
								<td>Send to <span class="teal-text medium">Vipin Outbound Queue</span></td>
							</tr>
						</tbody>
					</table>
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