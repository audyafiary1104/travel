<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="index.html">Tour</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
							@if(Session::get('login_agent'))
								<li><a href="{{route('agent.index')}}">Home</a></li>
								<li><a href="{{route('agent.transfer')}}">Add Balance</a></li>
								<li><a href="{{route('agent.dashboard')}}">Agent Dashboard</a></li>
								<li><a href="{{route('agent.logout')}}">Agent Logout</a></li>

							@else
								<li><a href="{{route('hoteliers.login')}}">Login Hoteliers</a></li>
								<li><a href="{{route('agent.login')}}">Login Agent</a></li>
							@endif	
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>