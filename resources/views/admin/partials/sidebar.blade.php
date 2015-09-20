
<div class="col-md-2 sidebar">
    <div class="row">
 	<!-- uncomment code for absolute positioning tweek see top comment in css -->
 	<div class="absolute-wrapper"> </div>
    <!-- Menu -->
     	<div class="side-menu">
     		<nav class="navbar navbar-default" role="navigation">
     			<!-- Main Menu -->
     			<div class="side-menu-container">
     				<ul class="nav navbar-nav">
     					<li class="active">
     					    <a href="#">
     					        <span class="glyphicon glyphicon-calendar"></span>
     					        Reservations
                            </a>
                        </li>
     					<li class="panel panel-default dropdown" >
     					     <a data-toggle="collapse" href="#maintenance-lvl1">
                                <span class="glyphicon glyphicon-wrench"></span>
                                Maintenance
                                <span class="caret"></span>
                            </a>
                            <!-- Dropdown level 1 -->
                            <div id="maintenance-lvl1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul class="nav navbar-nav">
                                        <li>
                                            <a href="{{ route('admin.packages.index') }}">
                                                Packages
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.menus.index') }}">
                                                Menus
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.menuitems.index') }}">
                                                Menu Items
                                            </a>
                                        </li>
                                         <li>
                                            <a href="{{ route('admin.events.index') }}">
                                               Events
                                            </a>
                                        </li>
                                        <li class="panel panel-default dropdown">
                                            <a data-toggle="collapse" href="#menus-lvl2">
                                                <span class="glyphicon glyphicon-user"></span>
                                                    Menus
                                                <span class="caret"></span>
                                            </a>
                                            <!-- Dropdown level 2 -->
                                            <div id="menus-lvl2" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <ul class="nav navbar-nav">
                                                        <li><a href="{{ route('admin.menus.index') }}">Menu Types</a></li>
                                                        <li><a href="{{ route('admin.menuitems.index') }}">Menu Items</a></li>
                                                      </ul>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
     					</li>
     					<!-- Dropdown-->
     					<li class="panel panel-default dropdown">
     						<a data-toggle="collapse" href="#dropdown-lvl1">
     							<span class="glyphicon glyphicon-user"></span>System<span class="caret"></span>
     						</a>
     						<!-- Dropdown level 1 -->
     						<div id="dropdown-lvl1" class="panel-collapse collapse">
     							<div class="panel-body">
     								<ul class="nav navbar-nav">
     									<li><a href="{{ route('admin.users.index') }}">Users</a></li>
     									<li><a href="#">Link</a></li>
     									<li><a href="#">Link</a></li>

     									<!-- Dropdown level 2
     									<li class="panel panel-default" id="dropdown">
     										<a data-toggle="collapse" href="#dropdown-lvl2">
     											<span class="glyphicon glyphicon-off"></span> Sub Level <span class="caret"></span>
     										</a>
     										<div id="dropdown-lvl2" class="panel-collapse collapse">
     											<div class="panel-body">
     												<ul class="nav navbar-nav">
     													<li><a href="#">Link</a></li>
     													<li><a href="#">Link</a></li>
     													<li><a href="#">Link</a></li>
     												</ul>
     											</div>
     										</div>
     									</li>
     									-->

     								</ul>
     							</div>
     						</div>
     					</li>
     					<li><a href="#"><span class="glyphicon glyphicon-signal"></span> Link</a></li>
     				</ul>
     			</div><!-- /.navbar-collapse -->
     		</nav>
     	</div>
    </div>
 </div>



