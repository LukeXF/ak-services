<body data-spy="scroll" data-target="#myScrollspy">
	<!-- Fixed navbar -->
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand animate" href="<?php echo $domain; ?>"><img class="img-responsive" src="<?php echo $domain; ?>assets/img/logo.png"></a>

			</div>

			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right navbar-number">
					<li>
						<a href="tel: +441473822694">
							tel:    					<br>
							<span>
							    <a class="number" href="tel: +441473822694" title="Call us">01473 822694</a>
							</span><!--/span-->
						</a>
					</li>
					<li>
						<a href="tel: +447891341645">
							mob:    					<br>
							<span>
							    <a class="number" href="tel: +447891341645" title="Call us">07891 341645</a>
							</span><!--/span-->
						</a>
					</li>
				</ul>						 
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<?php
						foreach($navbar as $x => $x_value) {

							if (!empty($x_value["active"])) {
								$class = $x_value["active"];
							} else {
								$class = "";
							}

							if (!empty($x_value["url"])) {
								$url = $x_value["url"];
							} else {
								$url = $x;
							}

							if ($x == $activeTab) {
								$class = "active";
							}
							if (!empty($x_value["submenu"])) {
								echo "<li class='dropdown animate" . $class . "'>";

							

									//echo "<a class='animate'>" . $x . " <i class='fa fa-caret-down'></i></a>";
									echo "	<a href='#' class='dropdown-toggle animate' data-toggle='dropdown' role='button' aria-expanded='false'>" . $x . " 		<i class='fa fa-caret-down'></i>
											</a>
											<ul class='dropdown-menu' role='menu'><li>";

											foreach ($x_value['submenu'] as $key => $value) {
												echo "<a href='$value'>$key</a>";
											}  

										//echo "<li><a href='#''>Action</a></li>";
									echo "</li></ul>";
								echo "</li>";
								
							} else {
								echo "<li class='" . $class . "'><a class='animate' href='$url'>";
								echo $x;
								echo "</a></li>";
							}
						}
					?>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>
	<nav class="navbar navbar-default navbar-second">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar2" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div id="navbar2" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					
					<?php
						foreach($navbar2 as $x => $x_value) {

							if (!empty($x_value["active"])) {
								$class = $x_value["active"];
							} else {
								$class = "";
							}

							if (!empty($x_value["url"])) {
								$url = $x_value["url"];
							} else {
								$url = $x;
							}

							if ($x == $activeTab) {
								$class = "active";
							}
							if (!empty($x_value["submenu"])) {
								echo "<li class='dropdown animate" . $class . "'>";

							

									//echo "<a class='animate'>" . $x . " <i class='fa fa-caret-down'></i></a>";
									echo "	<a href='#' class='dropdown-toggle animate' data-toggle='dropdown' role='button' aria-expanded='false'>" . $x . " 		<i class='fa fa-caret-down'></i>
											</a>
											<ul class='dropdown-menu' role='menu'><li>";

											foreach ($x_value['submenu'] as $key => $value) {
												echo "<a href='$value'>$key</a>";
											}  

										//echo "<li><a href='#''>Action</a></li>";
									echo "</li></ul>";
								echo "</li>";
								
							} else {
								echo "<li class='" . $class . "'><a class='animate' href='$url'>";
								echo $x;
								echo "</a></li>";
							}
						}
					?>	

				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>
	<div class="wrapper">