@extends('layouts.template')

@section('content')

<div>
    <h3 style="font-size: 52px;
    font-weight: bold;
    text-transform: uppercase;
    font-style: italic;
    text-align: center;
    margin: 0 auto;
    margin-bottom: 40px;">Erreur 404</h3>
    <div style="font-size: 40px;
    font-weight: normal;
    text-transform: none;
    font-style: italic;
    text-align: center;
    margin: 0 auto;
    margin-bottom: 20px;">Désolé. La page que vous cherchez, n'hésite pas ;(</div>
    <div style="font-size: 40px;
    font-weight: normal;
    text-transform: none;
    font-style: italic;
    text-align: center;
    margin: 0 auto;">Veuillez revenir à l'<a href="/" style="margin-left:15px; font-size: 40px; text-transform: uppercase; border-radius: 38.5px;">accueil</a></div>
</div>

@endsection