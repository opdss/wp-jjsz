
<nav class="navbar" style="margin-bottom: 0px;">
	<div class="navbar-header">
		<a class="navbar-brand" href="#">HI,欢迎来到寂静生长！</a>
	</div>
	<!-- Note that the .navbar-collapse and .collapse classes have been removed from the #navbar -->
	<div>
        <?php if(/*!is_home()*/1): ?>
		<ul class="nav navbar-nav navbar-menu">
			<?php
			$metro_creativex_terms = get_categories();
			foreach ($metro_creativex_terms as $item):?>
				<li><a href="<?php echo get_category_link($item->term_id);?>"><?php echo $item->name; ?></a></li>
			<?php endforeach;?>
		</ul>
		<?php endif;?>
		<ul class="nav navbar-nav navbar-right">
			<li><div class="user-qr"></div></li>
		</ul>
		<form class="navbar-form navbar-right" method="get">
			<div class="form-group search-box" >
				<input type="text" class="form-control" placeholder="Search" name="kw">
				<a class="search-logo" href="javascript:void(0)"><span class="glyphicon glyphicon-search"></span> </a>
			</div>
		</form>
	</div><!--/.nav-collapse -->
</nav>