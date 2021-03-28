@extends('layouts.template')

@section('content')
                <div id="genres-section">
                    @foreach($genres as $g)
                    <div id="{{ str_replace('-', '', strtolower($g->nom)) }}" class="genres-section-type">
                        <h2 class="genres-section-type-title">{{ strtoupper($g->nom) }}</h2>
                        @foreach($chanteurs as $chant)
                        @if($chant->id_genre == $g->id)
                        <div class="section-chanteur">
                            <p class="section-chanteur-lien"><a href="/chanteurs/{{ $chant->id }}" class="lien-chanteur">{{ $chant->nom }}</a></p>
                            <div class="section-chanteur-contenu section-contenu">
                                @foreach($songs as $s)
                                @if($s->id_chanteur == $chant->id)
                                <div class="section-contenu-choix" onclick="listenMusic('{{ $s->fichier }}', '{{ $s->chanteur->nom }}', '{{ $s->titre }}', '{{ $s->image }}');">
                                    <div class="section-contenu-choix-titre">
                                        <div class="section-contenu-choix-titre-nom">{{ $s->titre }}</div>
                                        <div class="section-contenu-choix-titre-date">{{ date("m/Y", strtotime($s->updated_at)) }}</div>
                                        <div class="section-contenu-choix-titre-genre">{{ $s->genre->nom }}</div>
                                    </div>
                                    <div class="titre-arrow"><span class="fa fa-caret-right"></span></div>
                                    <div class="section-contenu-choix-like">
                                        <a href="#"><span class="far fa-heart"></span></a>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                    @endforeach
                </div>
@endsection