@extends('layouts.app')
@section('meta')

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
@endsection

@section('content')
@livewire('chat')
@endsection

