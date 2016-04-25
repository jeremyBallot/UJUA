@extends('front.template')

@section('main')
	<span id="sl_play" class="sl_command">&nbsp;</span>
	<span id="sl_pause" class="sl_command">&nbsp;</span>
	<span id="sl_i1" class="sl_command sl_i">&nbsp;</span>
	<span id="sl_i2" class="sl_command sl_i">&nbsp;</span>
	<span id="sl_i3" class="sl_command sl_i">&nbsp;</span>
	<span id="sl_i4" class="sl_command sl_i">&nbsp;</span>
<section id="slideshow">
	
		<a class="commands prev commands1" href="#sl_i4" >&lt;</a>
		<a class="commands next commands1" href="#sl_i2" >&gt;</a>
		<a class="commands prev commands2" href="#sl_i1" >&lt;</a>
		<a class="commands next commands2" href="#sl_i3" >&gt;</a>
		<a class="commands prev commands3" href="#sl_i2" >&lt;</a>
		<a class="commands next commands3" href="#sl_i4" >&gt;</a>
		<a class="commands prev commands4" href="#sl_i3" >&lt;</a>
		<a class="commands next commands4" href="#sl_i1" >&gt;</a>
		
		<a class="play_commands pause" href="#sl_pause" title="Maintain paused">Pause</a>
		<a class="play_commands play" href="#sl_play" title="Play the animation">Play</a>
		
		<div class="container">
			<div class="c_slider"></div>
			<div class="slider">
				<figure>
					<img src="img/diapo2.png" alt="" width="1000" height="420" />
					<figcaption>Un Jour Un Art </figcaption>
				</figure><!--
				--><figure>
					<img src="img/diapo4.png" alt="" width="1000" height="420" />
					<figcaption>test 2</figcaption>
				</figure><!--
				--><figure>
					<img src="img/diapo2.png" alt="" width="1000" height="420" />
					<figcaption>Un Jour Un Art</figcaption>
				</figure><!--
				--><figure>
					<img src="img/diapo4.png" alt="" width="1000" height="420" />
					<figcaption>test 4</figcaption>
				</figure>
			</div>
		</div>
		
		<span id="timeline"></span>
		
		<ul class="dots_commands"><!--
			--><li><a title="Show slide 1" href="#sl_i1">Slide 1</a></li><!--
			--><li><a title="Show slide 2" href="#sl_i2">Slide 2</a></li><!--
			--><li><a title="Show slide 3" href="#sl_i3">Slide 3</a></li><!--
			--><li><a title="Show slide 4" href="#sl_i4">Slide 4</a></li>
		</ul>
		
	</section>



	<div class="row">
		<div class="box">
			<div class="col-lg-12">
				<hr>
				<h2 class="intro-text text-center"><strong>Présentation</strong></h2>
				<hr>
				<img class="img-responsive img-left" src="img/theatre.jpg" alt="">
				<p>Salut, tt le monde!!! Ce site a pour but de vous faire découvrir notre assciation "Un jour Un art". Une association cré en debut d'année 2016 et qui va vous en mettre plein les yeux!!! a ca tete 2 femme plus que motivé, lGuibert Amélie et Johana . elle ont  pour volonté de mettre en contact différentes compagnies de théatre au traver d'évènements et activité. et blablablablablablablablablablabalbalbalbalbalb </p>
				<p>bien entendu vous aurez la possibilité de nous contacté via la page contact, et on vous répondra ds les plus bref delais </p>
				<p>Ce site sera de manière régulière maj afin de vous tenir informé des dernier evenement et autre soirée, pièces, rencontre.</p>
				<p> bref balabalbalablablablablablablablablablablablablabla mais aussi blablablablablablablablablaabllabla ou encore blablablablabalbalbalbalbalbalbalbalbalbalab</p>
				<p>la lala la   la lalalalalala lala laaalaaa lalalalalalalaal lal al ala alla alallalalala (musique coupe de monde oui oui)...laaaaaaaaaaaaaaaaaāaaaaaaaaaaadsvfisdvfidshbfisbdifsdbfsdfsdf.</p>
			</div>
		</div>
	</div>

@stop


