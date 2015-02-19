<header>
		<div class="container-common">
			<h1 class="clear"><a href="<?php print $front_page; ?>" class="logo-main">Rumsey</a>
				<a href="#" class="menu-trigger">Menu</a>
				<div class="search clear">
				<?php print render($page['header']); ?>
				<span class="phonono">Contact Us: 800-462-2402</span>
				</div>

			</h1>

			<nav class="nav-main" id="menu">
				<?php print render($page['navigation']); ?>
			</nav>

		</div>
</header>

<div id="title-block">
	<div class="container-common">
		<div id="breadcrumbs">
		<?php print $breadcrumb; ?>
		</div>
		<h1 id="title"><?php print $title; ?></h1>
	</div>
</div>

<section class="content-area clear">
	<div class="container-common clear">
		<div class="content">
			<?php print $messages; ?>
			<?php print render($tabs); ?>
			<?php print render($page['help']); ?>
			<?php print render($page['content']); ?>
		</div>
		<div class="sidebar">
			<?php print render($page['sidebar']); ?>
		</div>
	</div>
</section>

<footer class="clear">
	<div class="container-common clear">
		<div class="left">
			<?php print render($page['footer1']); ?>
		</div>
		<div class="middle">
			<?php print render($page['footer2']); ?>
		</div>
		<div class="right">
			<?php print render($page['footer3']); ?>
			<h3>Talk to one of our specialists today.</h3>
			<div class="social">
				<a target="_blank" href="http://facebook.com/rumseyelectric" class="facebook">Facebook</a>
				<a target="_blank" href="http://twitter.com/RumseyElectric" class="twitter">Twitter</a>
			</div>
			<div class="logos">
				<a href="/page/rockwell-automation-authorized-distributor" class="rockwell"><img src="/<?php print path_to_theme(); ?>/images/a-b_Quality.png" alt="A-B Quality | Authorized Distributor"></a>
				<a href="/files/upload/RumseyIsoCert.pdf" target="_blank" class="iso"><img src="/<?php print path_to_theme(); ?>/images/ISOLogo.png?v=2" alt="ISO 9007:2008 Registered"></a>
			</div>
		</div>
	</div>
</footer>
  
