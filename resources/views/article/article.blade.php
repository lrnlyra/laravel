@extends('article/template_article')

@section('titre')
	Un article
@endsection

@section('contenu')
	<p>C'est l'article n° {{ $numero }}</p>
@endsection
