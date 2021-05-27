<!DOCTYPE HTML>
<html>
	<head>
		<title>Kouyate Karim | Développeur fullstack</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="shortcut icon" href="{{asset('assets/images/ico.jpg')}}" type="image/x-icon">
		<link rel="stylesheet" href="{{asset('assets/fonts/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
         <link rel="stylesheet" href="{{asset('css/main.bundle.css')}}">
         <link href="{{ asset('css/app.css') }}" rel="stylesheet">

		 


<meta property="og:title" content="Kouyate Karim | Développeur fullstack">
<meta property="og:locale" content="fr_FR">

		<meta name="description" content="je suis inéluctablement passionné d&apos;informatique,
							de programmation et de nouvelles technologies de manière générale.">
	<meta property="og:description" content="je suis inéluctablement passionné d&apos;informatique,
							de programmation et de nouvelles technologies de manière générale. kouyatekarim.ci">
	
		<link rel="canonical" href="https://www.kouyatekarim.ci/">
	<meta property="og:url" content="https://www.kouyatekarim.ci/">

<meta property="og:image" content="{{asset('assets/images/ico.jpg')}}">
<meta name="twitter:card" content="summary_large_image">

	</head>
	<body>
        
		<div class="app-fixed__line"></div>
        <!-- Frame-1 -->
        <div>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-lg navbar-fix" style="  width: 100%;

  position: fixed;
  
  z-index: 1000; }">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Portfolio
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                       
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                            </li>
                          
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Inscription') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                              

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <a class="dropdown-item"  href="{{route('chat')}}"   aria-labelledby="navbarDropdown">
                                    Chat
                                  </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        <li class="nav-item">
                                <a class="nav-link" href="{{ route('chat') }}" >{{ __('🍫 Chat') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('blog') }}" target="_blank">{{ __(' blog') }}</a>
                            </li>
                        <li class="nav-item">
                                <a class="nav-link" href="{{ route('light') }}" target="_blank">{{ __('Light') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('sales') }}" target="_blank">{{ __('Sales') }}</a>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>
        </div>
		<section class="frame-wrapper ">
        
      
            
			<div class="two-column-grid__fluid">
				<div class="grid-item">
					<div class="normal-grid__column mb-25">
						<h4 class="fade-up">Bonjour</h2>
							<div class="line-helper fade-up"></div>
					</div>
					<div class="mb-25">
						<h1 class="fade-up"><span>Je suis</span> Kouyate Karim</h1>
					</div>
					<div class="mb-25">
						<h5 class="fade-up">Développeur Fullstack(PHP & Js) à Adjemin, spécialisé dans le E-paiement</h4>
					</div>
					<div class="fade-up">
						<button class="primary-btn mr-15">En savoir plus</button>
						<button class="secondary-btn">Commencer</button>
					</div>
					<div class="highlighter-container fade-up">
						<h1 class="highlighter">Kouyate karim</h1>
						<div class="box-highlighter"></div>
					</div>
				</div>
				<div class="grid-item image-container fade-up">
					 <img class="header-image" src="{{url('assets/images/ico.jpg')}}" alt="image" /> <!-- developer.svg -->
				</div>
			</div>
		</section>

		<!-- Heading -->
		<section class="normal-grid__row mb-100">
			<div class="normal-grid__row app__header">
				<h2 class="mb-20 fade-up">Qui suis je?</h2>
				<p class="fade-up">A présent dévéloppeur Back-end Core API chez Adjemin <a href="https://adjemin.com" target="_blank">Adjemin</a>, 
					Je travaille sur une solution denommée AdjeminPay, agrégateur de paiement digital (Orange Monney, MTN Monney, Visa et Master Card),<a href="https://merchant.adjeminpay.net" target="_blank">AdjeminPay</a>,
					une plateforme d'aide à l'integration des moyens de paiements en ligne favorable à l'ecosysteme du e-commerce en côte d'ivoire . Je suis inéluctablement passionné d&apos;informatique,
					de programmation et de nouvelles technologies de manière générale.
				</p>
			</div>
			<div class="hlp-line fade-up"></div>
		</section>

		<!-- Frame-2 -->
		<section class="frame-wrapper mb-50">
			<div class="two-column-grid__fixed">
				<div class="grid-item image-container animate-fadeup">
					<img src="{{url('assets/images/profile.svg')}}" alt="image" />
				</div>
				<div class="grid-item">
					<div class="mb-25">
						<!-- <h3>Let’s</h3> -->
						<!-- <h3>Introduce About</h3> -->
						<h3 class="animate-fadeup">Me concernant</h3>
					</div>
					<p class="mb-10 animate-fadeup">
							Je suis depuis de nombreuses années autodidacte dans le domaine de la programmation et en particulier du développement web.
							</p>
					<p class="animate-fadeup">
							Ayant une grande expérience dans le développement web, je sais concevoir des sites vous permettant d'automatiser n'importe lequel de vos procédures métiers, le tout dans une interface agréable à utiliser.Je ne propose pas de CMS (Wordpress, Drupal…) 
							mais des applications web sur mesure permettant une grande liberté d'action et des interfaces très efficaces pour vos besoins spécifiques.</p>
				</div>
			</div>
		</section>

		<!-- Frame-3 -->
		<section class="frame-wrapper mb-100">
			<div class="two-column-grid__fluid">
				<div class="grid-item centered wrap-grid animate-fadeup">
					<div class="stack-card" title="HTML5">
						<img src="{{url('assets/images/html5.svg')}}" />
					</div>
					<div class="stack-card" title="CSS3">
						<img src="{{url('assets/images/css.svg')}}" />
					</div>
					<div class="stack-card" title="SASS">
						<img src="{{url('assets/images/sass.svg')}}" />
					</div>
					<div class="stack-card" title="Javascript">
						<img src="{{url('assets/images/javascript.svg')}}" />
					</div>
					<div class="stack-card" title="Bootstrap">
						<img src="{{url('assets/images/bootstrap.png')}}"/>
					</div>
					<div class="stack-card" title="Python">
						<img src="{{url('assets/images/py.png')}}" />
					</div>
					<div class="stack-card" title="Laravel">
						<img src="{{url('assets/images/LaravelLogo.png')}} "/>
					</div>
					<div class="stack-card" title="Livewire">
						<img src="{{url('assets/images/livewire.png')}}" />
					</div>
					<div class="stack-card" title="Hybrid Apps">
						<img src="{{url('assets/images/hybrid.png')}}" />
					</div>
				</div>
				<div class="grid-item fixed-grid__column animate-fadeup">
					<div class="fixed-grid__row recognising-text mb-60">
						<div class="dashed-box"></div>
						<div class="fixed-grid__row wrkng-txt">
							<h1 class="primary-highlight__txt mr-45">2<span class="extra">+</span></h1>
							<div class="fixed-grid__column align-left">
								<p class="secondary-highlight__txt">Années</p>
								<p class="secondary-highlight__txt">Experience</p>
								<p class="secondary-highlight__txt">Professionnelle(freelancer)</p>
							</div>
						</div>
					</div>
					<div class="fixed-grid__row recognising-text">
						<div class="call-icon mr-20">
							<img src="assets/images/call.png" />
						</div>
						<div class="fixed-grid__column align-left">
							<h5 class="call-txt__header mb-5">Contactez moi</h3>
							<h3 class="call-txt">(+225) 78-48-73-21 / 44-65-02-23</h3>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Heading -->
		<section class="normal-grid__row mb-100 animate-fadeup">
			<div class="normal-grid__row app__header">
				<h2 class="mb-20">Mes Hobbies</h2>
				<p>Je passe mes temps libre à entre autre à jouer aux echecs(élo 1400), regarder les series/films à programmer ou à nager</p>
			</div>
			<div class="hlp-line"></div>
		</section>

		<!-- Frame-3 -->
		<section class="frame-wrapper animate-fadeup">
			<div class="two-column-grid__fixed--reverse">
				<div class="grid-item">
					<div class="mb-25">
						<h3 class="txt-align__right">Primaire</h3>
					</div>
					<p class="txt-justify mb-10">J'ai fait le primaire au groupe scolaire EPP Bakassa Traoré à Bouaké.</p>
					<!-- <p class="txt-justify">Ou j'ai obtenu le Cepe avec 152 points, soit le major de mon école .</p> -->
				</div>
				<div class="grid-item image-container">
					<img class="max-limit" src="assets/images/school.svg" alt="image" />
				</div>
			</div>
		</section>

		<!-- Arrow -->
		<section class="frame-wrapper animate-fadeup">
			<div class="arrow-grid">
				<img class="big-arrow" src="{{url('assets/images/leftarrow.svg')}}" />
				<img class="small-arrow" src="{{url('assets/images/straightarrow.svg')}}" />
			</div>
		</section>

		<!-- Frame-4 -->
		<section class="frame-wrapper mb-50 animate-fadeup">
			<div class="two-column-grid__fixed">
				<div class="grid-item image-container">
					<img class="max-limit" src="{{url('assets/images/graduation.svg')}}" alt="image" />
				</div>
				<div class="grid-item">
					<div class="mb-25">
						<h3>Cursus Scolaire</h3>
					</div>
					<p class="mb-10">Après avoir obtenu le Bepc avec brio au Lycée Moderne Belle-Ville de Bouaké, je fus orienté dans la prestigieuse école(Lycée Scientfique de Yamousskro) ou j'obtiens mon Bac avec mention.</p>
					<p>Après le Bac, j'obtiens le concours d'entrée à l'ESATIC(Ecole Superieure Africaine des Tics), le pôle de l"excellence ITU.</p>
				</div>
			</div>
		</section>

		<!-- Arrow -->
		<section class="frame-wrapper animate-fadeup">
			<div class="arrow-grid">
				<img class="big-arrow" src="{{url('assets/images/rightarrow.svg')}}" />
				<img class="small-arrow" src="{{url('assets/images/straightarrow.svg')}}" />
			</div>
		</section>

		<!-- Frame-5 -->
		<section class="frame-wrapper animate-fadeup">
			<div class="two-column-grid__fixed--reverse">
				<div class="grid-item">
					<div class="mb-25">
						<h3 class="txt-align__right">Freelancing</h3>
					</div>
					<p class="txt-justify mb-10">Maintenant 2 ans que je suis dans le freelance.</p>
					<p class="txt-justify">Ma priorité étant la satisfaction des clients, j'ai satisfait pas mal de clients.</p>
				</div>
				<div class="grid-item image-container">
					<img class="max-limit" src="assets/images/freelancer.svg" alt="image" />
				</div>
			</div>
		</section>

		<!-- Arrow -->
		<section class="frame-wrapper animate-fadeup">
			<div class="arrow-grid">
				<img class="big-arrow" src="assets/images/leftarrow.svg" />
				<img class="small-arrow" src="assets/images/straightarrow.svg" />
			</div>
		</section>

		<!-- Frame-6 -->
		<section class="frame-wrapper mb-50 animate-fadeup">
			<div class="two-column-grid__fixed">
				<div class="grid-item image-container">
					<img class="max-limit" src="assets/images/job.svg" alt="image" />
				</div>
				

				<div class="grid-item">
					<div class="mb-25">
						<h3>Professeur</h3>
					</div>
					<p class="mb-10">Avant de decrocher mon premier emploi j'étais enseignant à IvoireDevAcademy en partenariat avec <a href="https://www.linkedin.com/in/juvenal-pengele/">Juvenal Glodie </a> le fondateur de  <a href="https://ivoiredevacademy.com/">IvoireDevAcademy </a> .</p>
					<p>Je donnais des cours sur la programmation orientée objet en PHP et aussi des cours sur LARAVEL à Yopougon Maroc, ITConsulting.</p>
				</div>

				<div class="grid-item">
					<div class="mb-25">
						<h3>Stage</h3>
					</div>
					<p class="mb-10">J'ai effectué mon stage de fin d'étude(Licence) dans une entreprise spécialisé en gestion, Marketing et gestion de risque (Cep&Sarment) .</p>
					<p>J'ai réalisé une plateforme de financement particpatif.</p>
				</div>
			</div>
		</section>


		<!-- Frame-2 -->
		<section class="frame-wrapper mb-50">
			<div class="two-column-grid__fixed">
				<div class="grid-item image-container animate-fadeup">
					<img src="{{url('assets/images/vainqueurs.jpeg')}}" alt="image" />
				</div>
				<div class="grid-item">
					<div class="mb-25">
						<!-- <h3>Let’s</h3> -->
						<!-- <h3>Introduce About</h3> -->
						<h3 class="animate-fadeup font-weight-bold">Vainqueurs de l'Hackathon MomoDevelopper 2019</h3>
					</div>
					<p class="mb-10 animate-fadeup">
					le Hackathon MoMoDeveloper 2019 a été co-organisé par MTN Group et Ericsson (Partenaire technique de MTN MoMo), suite à l’ouverture des ‘API MTN MoMo’ dans 5 pays dont la Côte d’Ivoire.
					Nous avons été heureux de participer à ce concours et avions mise en place une application mobile denommé Nandemin.
							</p>
					<p class="animate-fadeup">
					Visant à encourager et à aider les jeunes ivoiriens qui souhaitent se lancer dans l’entrepreneuriat,
					 le financement de projets ou dans des projets sociaux au travers une application de levée de fonds et participation collective par MTN MoMo (crowdfunding).
					 <a class="mt-2" href="https://play.google.com/store/search?q=nand%C3%AAmin&c=apps&hl=fr" target="_blank"><img src="{{ asset('assets/images/playstore.png') }}" class="img-fluid" width="200"
              alt="nandemin"></a>
					 </p>
				</div>
			</div>
		</section>


		<section class="frame-wrapper mb-50 animate-fadeup">
			<div class="two-column-grid__fixed">
					<div class="container">
							<h1 class="title">Projets réalisés</h1>
							<hr />
							<div class="tile is-ancestor">
							  <div class="tile is-vertical is-12">
								<div class="tile">
								  <div class="tile is-parent is-vertical">
									<article class="tile is-child notification">
									  <p class="title"><a href="https://levieperetudiant.ci" target="_blank">LVPE</a></p>
									  <figure class="image is-4by3">
										<img class="modal-trigger" data-target="project-1-modal" src="{{url('assets/images/lvpe1.jpg')}}">
									  </figure>
									</article>
								  </div>
								  <div class="tile is-parent">
									<article class="tile is-child notification">
									  <p class="title"><a href="https://evallesse.com" target="_blank">Evallesse</a></p>
									  <figure class="image is-4by3">
										<img class="modal-trigger" data-target="project-2-modal" src="{{url('assets/images/evallesse.jpeg')}}">
									  </figure>
									</article>
								  </div>
								  <div class="tile is-parent">
									<article class="tile is-child notification">
									  <p class="title"><a href="https://cepetsarments.com" target="_blank">Cep&Sarments</a></p>
									  <figure class="image is-4by3">
										<img class="modal-trigger" data-target="project-3-modal" src="{{url('assets/images/cep.jpg')}}">
									  </figure>
									</article>
								  </div>
								</div>
							  </div>
							</div>
							<div class="tile is-ancestor">
							  <div class="tile is-vertical is-12">
								<div class="tile">
								  <div class="tile is-parent is-vertical">
									<article class="tile is-child notification">
									  <p class="title"><a href="https://play.google.com/store/search?q=nand%C3%AAmin&c=apps&hl=fr" target="_blank">Nandemin</a></p>
									  <figure class="image is-4by3">
										<img class="modal-trigger" data-target="project-4-modal" src="{{url('assets/images/nandemin.jpg')}}">
									  </figure>
									</article>
								  </div>
								  <div class="tile is-parent">
									<article class="tile is-child notification">
									  <p class="title">e-sign.com</p>
									  <figure class="image is-4by3">
										<img class="modal-trigger" data-target="project-5-modal" src="{{url('assets/images/1.jpg')}}">
									  </figure>
									</article>
								  </div>
								  <div class="tile is-parent">
									<article class="tile is-child notification">
									  <p class="title"><a href="https://www.youtube.com/channel/UCf9_mX3lPw67fOyfrON7jQg"> Ghost Coder (Chaine Youtube)</a> </p>
									  <figure class="image is-4by3">
										<img class="modal-trigger" data-target="project-6-modal" src="{{url('assets/images/youtube.PNG')}}">
									  </figure>
									</article>
								  </div>
								</div>
							  </div>
							</div>
						  </div>
				</div>
 <!-- Modals -->
 <div id="project-1-modal" class="modal">
		<div class="modal-background"></div>
		<div class="modal-card">
		  <header class="modal-card-head">
			<p class="modal-card-title">Le vié pere étudiant</p>
			<button class="delete" aria-label="close"></button>
		  </header>
		  <section class="modal-card-body">
			<p class="image is-3by2">
			  <img src="{{url('assets/images/lvpe2.jpg')}}" alt="">
			</p>
	
			<div class="content">
			  Le Vié Père Etudiant est une plateforme spécialisée dans l'orientation, la formation et la réussite
			  des études supérieures. Elle aide également à une insertion professionnelle après les études et à trouver de petits boulot pendant 
			  les études
			</div>
	
			<div class="tags">
			  <span class="tag">php</span>
			  <span class="tag">mysql</span>
			  <span class="tag">js</span>
			  <span class="tag">bootstrap</span>
			</div>
	
		  </section>
		  <footer class="modal-card-foot">
			<button class="button is-success">Fermer</button>
		  </footer>
		</div>
	  </div>
	
	  <div id="project-2-modal" class="modal">
		<div class="modal-background"></div>
		<div class="modal-card">
		  <header class="modal-card-head">
			<p class="modal-card-title">Evalesse</p>
			<button class="delete" aria-label="close"></button>
		  </header>
		  <section class="modal-card-body">
			<p class="image is-3by2">
			  <img src="{{url('assets/images/dashboard.jpeg')}}" alt="">
			</p>
	
			<div class="content">
			  Evalesse est une plateforme de E-learning.
			</div>
	
			<div class="tags">
			  <span class="tag">Laravel</span>
			  <span class="tag">Msql</span>
			  <span class="tag">Livewire</span>
			  <span class="tag">Bootstrap</span>
			</div>
	
		  </section>
		  <footer class="modal-card-foot">
			<button class="button is-success">Close</button>
		  </footer>
		</div>
	  </div>
	
	  <div id="project-3-modal" class="modal">
		<div class="modal-background"></div>
		<div class="modal-card">
		  <header class="modal-card-head">
			<p class="modal-card-title">Cep&Sarments</p>
			<button class="delete" aria-label="close"></button>
		  </header>
		  <section class="modal-card-body">
			<p class="image is-3by2">
			  <img src="{{url('assets/images/cep2.jpg')}}" alt="">
			</p>
	
			<div class="content">
			  C'est une plateforme de financement participatif mais aussi de presentation de l'entreprise
			  , Cette plateforme utilise l'API Cinetpay un agregateur de tous les services Mobile Money de CI pour la collecte de fonds.
			</div>
	
			<div class="tags">
			  <span class="tag">Laravel</span>
			  <span class="tag">Mysql</span>
			  <span class="tag">jquery</span>
			  <span class="tag">Bootstrap</span>
			</div>
	
		  </section>
		  <footer class="modal-card-foot">
			<button class="button is-success">Fermer</button>
		  </footer>
		</div>
	  </div>
	
	  <div id="project-4-modal" class="modal">
		<div class="modal-background"></div>
		<div class="modal-card">
		  <header class="modal-card-head">
			<p class="modal-card-title">Nandemin</p>
			<button class="delete" aria-label="close"></button>
		  </header>
		  <section class="modal-card-body">
			<p class="image is-3by2">
			  <img src="{{url('assets/images/nandemin1.jpg')}}" alt="">
			</p>
	
			<div class="content">
			  Nandemin est une application mobile de collecte de fonds.
			</div>
	
			<div class="tags">
			  <span class="tag">Laravel</span>
			  <span class="tag">Android</span>
		
			
			</div>
	
		  </section>
		  <footer class="modal-card-foot">
			<button class="button is-success">Fermer</button>
		  </footer>
		</div>
	  </div>
	
	  <div id="project-5-modal" class="modal">
		<div class="modal-background"></div>
		<div class="modal-card">
		  <header class="modal-card-head">
			<p class="modal-card-title">e-sign</p>
			<button class="delete" aria-label="close"></button>
		  </header>
		  <section class="modal-card-body">
			<p class="image is-3by2">
			  <img src="{{url('assets/images/4.jpg')}}" alt="">
			</p>
	
			<div class="content">
			  La première plateforme de signature électronique 100% gratuite en CI il permet de signer
			  des documents administratifs et/ou facture à distance, les notifications sont gérés par e-mail et SMS grâce à
			  l'API Twilio.
			</div>
	
			<div class="tags">
			  <span class="tag">Laravel</span>
			  <span class="tag">Mysql</span>
			  <span class="tag">Jquery</span>
			  <span class="tag">Bootstrap</span>
			</div>
	
		  </section>
		  <footer class="modal-card-foot">
			<button class="button is-success">Fermer</button>
		  </footer>
		</div>
	  </div>
	
	  <div id="project-6-modal" class="modal">
		<div class="modal-background"></div>
		<div class="modal-card">
		  <header class="modal-card-head">
			<p class="modal-card-title">Ghost Coder Chaine Youtube</p>
			<button class="delete" aria-label="close"></button>
		  </header>
		  <section class="modal-card-body">
			<p class="image is-3by2">
			  <img src="{{url('assets/images/facebook.PNG')}}" alt="">
			</p>
	
			<div class="content">
			La page facebook de Ghost Coder
			</div>
	
			<div class="tags">
			  <span class="tag">PHP</span>
			  <span class="tag">Mysql</span>
			  <span class="tag">Jquery/Ajax</span>
			  <span class="tag">Bootstrap</span>
			</div>
	
		  </section>
		  <footer class="modal-card-foot">
			<button class="button is-success">Fermer
			</button>
		  </footer>
		</div>
	  </div>
		</section>
		<footer class="animate-fadeup">
			<section class="footer-details">
				<h3 class="footer-header">Suivez Moi sur</h3>
				<ul class="footer-following">
					<li class="following-item"><a href="" title="linkedin"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
					<li class="following-item"><a href="" title="github"><i class="fa fa-github-square" aria-hidden="true"></i></a></li>
					<li class="following-item"><a href="" title="medium"><i class="fa fa-medium" aria-hidden="true"></i></a></li>
					<li class="following-item"><a href="" title="codepen"><i class="fa fa-codepen" aria-hidden="true"></i></a></li>
					<li class="following-item"><a href="https://web.facebook.com/karimlebourgeois" title="facebook"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
				</ul>
				<h5 class="footer-header">Contactez moi</h3><br>
					<h6 class="footer-header">(+225) 78-48-73-21 / 44-65-02-23</h6>
					<br>
				<div class="developed-by">Copyright ©2019 Tous droits @Kouyatekarim.ci</div>
			</section>
		</footer>

		<!-- Scripts -->
		<script src="{{asset('assets/js/animate.js')}}"></script>
        <script src="{{asset('js/bundle.js')}}"></script>
        <!-- <script src="http://127.0.0.1:6001/socket.io/socket.io.js"> -->
  </script>
   
   
   <script src="{{asset('js/app.js')}}"></script>

   <script>
     
   </script>
	</body>
</html>
