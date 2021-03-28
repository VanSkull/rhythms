@extends('layouts.template')

@section('content')
                <div id="favoris-section">
                    <h2 id="favoris-section-title">Favoris</h2>
                    <div id="favoris-section-contenu" class="section-contenu">
                        @if(count($songFav) == 0)
                        <p id="favoris-section-contenu-nothing">Vous n'avez, pour l'instant, aucun favoris dans votre liste</p>
                        @else
                        @foreach($songFav as $song)
                        <div class="section-contenu-choix">
                            <div class="section-contenu-choix-titre" onclick="listenMusic('{{ $song->titre->fichier }}', '{{ $song->titre->chanteur->nom }}', '{{ $song->titre->titre }}', '{{ $song->titre->image }}');">
                                <div class="section-contenu-choix-titre-nom">{{ $song->titre->titre }}</div>
                                <div class="section-contenu-choix-titre-chanteur">{{ $song->titre->chanteur->nom }}</div>
                                <div class="section-contenu-choix-titre-date">{{ date("m/Y", strtotime($song->titre->updated_at)) }}</div>
                                <div class="section-contenu-choix-titre-genre">{{ $song->titre->genre->nom }}</div>
                            </div>
                            <div class="titre-arrow"><span class="fa fa-caret-right"></span></div>
                            <div class="section-contenu-choix-like">
                                <a href="#"><span class="fa fa-heart"></span></a>
                            </div>
                        </div>
                        @endforeach
                        @endif
                        <!--<div class="section-contenu-choix">
                            <div class="section-contenu-choix-titre">
                                <div class="section-contenu-choix-titre-nom">Hello</div>
                                <div class="section-contenu-choix-titre-chanteur">Adèle</div>
                                <div class="section-contenu-choix-titre-date">10/2017</div>
                                <div class="section-contenu-choix-titre-genre">Pop</div>
                            </div>
                            <div class="titre-arrow"><span class="fa fa-caret-right"></span></div>
                            <div class="section-contenu-choix-like">
                                <a href="#"><span class="fa fa-heart"></span></a>
                            </div>
                        </div>
                        <div class="section-contenu-choix">
                            <div class="section-contenu-choix-titre">
                                <div class="section-contenu-choix-titre-nom">Hello</div>
                                <div class="section-contenu-choix-titre-chanteur">Adèle</div>
                                <div class="section-contenu-choix-titre-date">10/2017</div>
                                <div class="section-contenu-choix-titre-genre">Pop</div>
                            </div>
                            <div class="titre-arrow"><span class="fa fa-caret-right"></span></div>
                            <div class="section-contenu-choix-like">
                                <a href="#"><span class="fa fa-heart"></span></a>
                            </div>
                        </div>-->
                    </div>
                </div>
@endsection