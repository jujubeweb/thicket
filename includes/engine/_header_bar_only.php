	<header class='header'>
			<div class='header__logo home-trigger'>
				<a class='header__logo__link' href='<?php echo(url); ?>'><?php if (logoType == 'text') { echo "<span class='header__logo__link__text'>".logoText."</span>"; } else {echo "<img src='".logo."' alt='Open Source High' class='header__logo__img'>"; } ?></a>
			</div>
			<nav class='header__nav header__nav--left'>
				<a href='<? echo url ?>/about' class='clickable collapse-mobile'>About</a>
				<a href='#' class='clickable explore-trigger'>Dropdown <i class="material-icons explore--down">&#xE313;</i></a>
			</nav>
			<nav class='header__nav'>
				<?php
					if (isset($_SESSION['username'])) {
						if ($_SESSION['upower'] == 'admin') {
							$admin_status = true;
							$admin_header=' <span style=color:red;font-weight:500>[A]</span> ';
						}
						echo "<a href='#' class='collapse-tablet'>Hey, <b>".$_SESSION['name'].$admin_header."</b></a>";
						if ($admin_status) {
							echo " <a href='".url."/admin/dashboard' class='clickable collapse-mobile'>Admin</a>";
						}
						echo " <a href='".url."/logout' class='clickable'>Logout</a>";
					}
					else {
						echo "<a href='".url."/login' class='clickable'>Login/Register</a>";				
					}
				?>
				<a href='<? echo url ?>/create' class='clickable'>Create</a>
			</nav>
		</header>