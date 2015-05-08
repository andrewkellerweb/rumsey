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

<section class="slide-area">
	<div class="container-common">
		<div class="slideshow">
			<ul id="slides">
				<li class="slide-0 first">
			<div>
				<div class="image">
					<img class="section-image full" src="/<?php print path_to_theme(); ?>/images/industrial-1.jpg?v=1336646658" alt="Industrial">		</div>
		
				<div class="desc">
					<div>
						<h2>Industrial</h2>
						<div class="content">
							Rumsey understands that two essential goals of manufacturers are to minimize downtime while maximizing throughput. Being the area?s exclusive authorized Allen-Bradley / Rockwell Automation distributor along with carrying a full-line of complimentary products such as Hoffman, Panduit, Fluke,&amp;nb				</div><span class="ellipsis">...</span>
					</div>
					<div class="link">
						<a href="/customer/industrial"><strong>&gt;</strong>Continue to <span>Industrial</span></a>			</div>
				</div>
			</div>
		</li><li class="slide-1">
			<div>
				<div class="image">
					<img class="section-image full" src="/<?php print path_to_theme(); ?>/images/machine-builders-and-system-integrators-2.jpg?v=1336646625" alt="Machine Builders &amp; System Integrators">		</div>
		
				<div class="desc">
					<div>
						<h2>Machine Builders &amp; System Integrators</h2>
						<div class="content">
							Rumsey offers Machine Builders and System Integrators the latest in automation technology products from the industry?s top manufacturers. &nbsp;We are the areas exclusive authorized Allen-Bradley/Rockwell Automation distributor, we also stock a wide variety of&nbsp;Hoffman, Panduit and many ot				</div><span class="ellipsis">...</span>
					</div>
					<div class="link">
						<a href="/customer/machine-builders-and-system-integrators"><strong>&gt;</strong>Continue to <span>Machine Builders &amp; System Integrators</span></a>			</div>
				</div>
			</div>
		</li><li class="slide-2">
			<div>
				<div class="image">
					<img class="section-image full" src="/<?php print path_to_theme(); ?>/images/construction-3.jpg?v=1332504570" alt="Construction">		</div>
		
				<div class="desc">
					<div>
						<h2>Construction</h2>
						<div class="content">
							With over 100 years of service, Rumsey Electric stands alone as the Pennsylvania tri-state area?s leading electrical product, materials, and electrical distribution facility. &nbsp;We offer the best in low to medium voltage wiring, latest in field equipment, tools and electrical distribution f				</div><span class="ellipsis">...</span>
					</div>
					<div class="link">
						<a href="/customer/construction"><strong>&gt;</strong>Continue to <span>Construction</span></a>			</div>
				</div>
			</div>
		</li><li class="slide-3">
			<div>
				<div class="image">
					<img class="section-image full" src="/<?php print path_to_theme(); ?>/images/government-institutional-and-propery-management-4.jpg?v=1336564501" alt="Government, Institutional &amp; Property Management">		</div>
		
				<div class="desc">
					<div>
						<h2>Government, Institutional &amp; Property Management</h2>
						<div class="content">
							Rumsey is a preferred supplier for school districts, universities, government agencies and property managers in the Philadelphia Tri-State area. &nbsp;Our product and energy experts help customers realize procurement savings through inventory management, cost effective energy solutions &amp; design 				</div><span class="ellipsis">...</span>
					</div>
					<div class="link">
						<a href="/customer/government-institutional-and-property-management"><strong>&gt;</strong>Continue to <span>Government, Institutional &amp; Property Management</span></a>			</div>
				</div>
			</div>
		</li><li class="slide-4">
			<div>
				<div class="image">
					<img class="section-image full" src="/<?php print path_to_theme(); ?>/images/commercial-retail-6.jpg?v=1333726355" alt="Commercial Retail">		</div>
		
				<div class="desc">
					<div>
						<h2>Commercial Retail</h2>
						<div class="content">
							Exciting advancements in lighting are quickly leading the industry into a new era for sustainability. New technologies, rising energy costs, awareness of the need for ?Green? lighting, and new Department of Energy guidelines are impacting the market as never before. &nbsp;Rumsey?s 				</div><span class="ellipsis">...</span>
					</div>
					<div class="link">
						<a href="/customer/commercial-retail"><strong>&gt;</strong>Continue to <span>Commercial Retail</span></a>			</div>
				</div>
			</div>
		</li><li class="slide-5">
			<div>
				<div class="image">
					<img class="section-image full" src="/<?php print path_to_theme(); ?>/images/utility-7.jpg?v=1332504357" alt="Utility">		</div>
		
				<div class="desc">
					<div>
						<h2>Utility</h2>
						<div class="content">
							Serving the needs of the utility market since 1895, Rumsey is a supplier of products and services to Investor Owned Utilities, Electrical Cooperatives, and Municipalities across the Mid-Atlantic region. &nbsp;We cover utilities in NY, OH, PA, NJ, DE, MD, VA, WV and DC and offer customers the finest 				</div><span class="ellipsis">...</span>
					</div>
					<div class="link">
						<a href="/customer/utility"><strong>&gt;</strong>Continue to <span>Utility</span></a>			</div>
				</div>
			</div>
				</li>	
			</ul>
		</div>
	</div>
</section> <!-- /slide-area -->

<?php print $messages; ?>
<?php print render($tabs); ?>
<?php print render($page['help']); ?>
			
<section class="content-area clear">
	<div class="container-common clear">
		<div class="left">
			
		</div>
		<div class="middle">
			<?php print render($page['featured2']); ?>
			
			<h2 class="join">Join our E-Mail List</h2>
			<div class="join-newsletter">
				<div class="form content" style="display: none;">
					<?php print render($page['featured1']); ?>
				</div>
			</div>
		</div>
		<div class="right">
			<?php print render($page['featured3']); ?>
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
				<a target="_blank" class="gplus" href="https://plus.google.com/110594306389415420482" rel="publisher">Google+</a>
			</div>
			<div class="logos">
				<a href="/page/rockwell-automation-authorized-distributor" class="rockwell"><img src="/<?php print path_to_theme(); ?>/images/a-b_Quality.png" alt="A-B Quality | Authorized Distributor"></a>
				<a href="/files/upload/RumseyIsoCert.pdf" class="iso"><img src="/<?php print path_to_theme(); ?>/images/ISOLogo.png?v=2" alt="ISO 9007:2008 Registered"></a>
			</div>
		</div>
	</div>
</footer>

<script type="text/javascript" src="/<?php print path_to_theme(); ?>/js/slidemenu/slidemenu.js"></script>
<script type="text/javascript">
/*<![CDATA[*/
jQuery(function($) {
if(document.body.offsetWidth > 641) { slideMenu.build(); }
$(document).ready(function() {
		$(".join-newsletter .form").hide();
		$("h2.join").click(function(){
			$(".join-newsletter .form").slideToggle();
		})
	});
});
/*]]>*/
</script>
