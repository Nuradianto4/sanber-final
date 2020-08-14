@extends('layouts/user/master')
@section('content')
<div class="panel panel-scrolling">
								<div class="panel-heading">
									<h3 class="panel-title">Recent User Activity</h3>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 430px;"><div class="panel-body" style="overflow: hidden; width: auto; height: 430px;">
									<ul class="list-unstyled activity-list">
										<li>
											<img src="assets/img/user1.png" alt="Avatar" class="img-circle pull-left avatar">
											<p><a href="#">Michael</a> has achieved 80% of his completed tasks <span class="timestamp">20 minutes ago</span></p>
										</li>
										<li>
											<img src="assets/img/user2.png" alt="Avatar" class="img-circle pull-left avatar">
											<p><a href="#">Daniel</a> has been added as a team member to project <a href="#">System Update</a> <span class="timestamp">Yesterday</span></p>
										</li>
										<li>
											<img src="assets/img/user3.png" alt="Avatar" class="img-circle pull-left avatar">
											<p><a href="#">Martha</a> created a new heatmap view <a href="#">Landing Page</a> <span class="timestamp">2 days ago</span></p>
										</li>
										<li>
											<img src="assets/img/user4.png" alt="Avatar" class="img-circle pull-left avatar">
											<p><a href="#">Jane</a> has completed all of the tasks <span class="timestamp">2 days ago</span></p>
										</li>
										<li>
											<img src="assets/img/user5.png" alt="Avatar" class="img-circle pull-left avatar">
											<p><a href="#">Jason</a> started a discussion about <a href="#">Weekly Meeting</a> <span class="timestamp">3 days ago</span></p>
										</li>
									</ul>
									<button type="button" class="btn btn-primary btn-bottom center-block">Load More</button>
								</div><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 292.563px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
							</div>
@endsection