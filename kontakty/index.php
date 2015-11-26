<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?><!-- start main -->
	<div id="main">
		<div class="heading-box">
			<h2>Contacts</h2>
			<div class="text-box">
				<p>Pellentesque fermentum neque vel nisl auctor eget tincidunt mi vehicula.</p>
			</div>
		</div>
		<div class="breadcrumbs-holder">
			<ul class="breadcrumbs">
				<li><a href="index.html">Home</a></li>
				<li><span>Contacts</span></li>
			</ul>
			<div class="breadcrumbs-r"></div>
		</div>
		<div id="twocolumns">
			<div id="content">
				<h2>London location</h2>
				<div class="contact-holder">
					<dl class="contact-list">
						<dt>Address:</dt>
						<dd>221B BakerStreet</dd>
						<dt>Phone:</dt>
						<dd>+44 20 7224 3688</dd>
						<dt>Fax:</dt>
						<dd>+44 20 7224 3689</dd>
						<dt>E-mail:</dt>
						<dd><a href="mailto:&#108;&#111;&#110;&#100;&#111;&#110;&#108;&#105;&#110;&#107;&#115;&#064;&#098;&#116;&#099;&#111;&#110;&#110;&#101;&#099;&#116;&#046;&#099;&#111;&#109;">&#108;&#111;&#110;&#100;&#111;&#110;&#108;&#105;&#110;&#107;&#115;&#064;&#098;&#116;&#099;&#111;&#110;&#110;&#101;&#099;&#116;&#046;&#099;&#111;&#109;</a></dd>
					</dl>
					<p>Phasellus ligula diam, sagittis eget cursus ut, molestie commodo lectus. Vestibulum ac rhoncus enim. Nulla sollicitudin dui metus. Donec mauris elit, suscipit eget facilisis vitae, elementum vitae erat. Nulla fermentum nibh eget tortor ornare eu feugiat risus faucibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a ligula massa. Donec facilisis tellus eget ante luctus convallis. Ut egestas nulla sit amet ipsum tristique sit amet adipiscing ante semper. </p>
				</div>
</div>
			<div id="sidebar">
				<h2>We On Maps</h2>
				<div class="map-holder">
					<img class="large" src="<?=SITE_TEMPLATE_PATH;?>/_include/images/map02.jpg" alt="image description" width="180" height="145" />
				</div>
				<h2>How Find Us?</h2>
				<p>Phasellus ligula diam, sagittis eget cursus ut, molestie commodo lectus. Vestibulum ac rhoncus enim. </p>
				<p>Nulla sollicitudin dui metus. Donec mauris elit, suscipit eget facilisis vitae, elementum vitae erat.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
		</div>
	</div>
	<!-- end main --><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>