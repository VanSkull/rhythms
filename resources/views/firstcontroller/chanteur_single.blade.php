@extends('layouts.template')

@section('content')
                <div id="chanteur-single-section">
                    <h2 id="chanteur-single-section-title">{{ $chanteur->nom }}</h2>
                    <p id="chanteur-single-section-genre"><span>Genre :</span><a href="/genres#{{ str_replace('-', '', strtolower($chanteur->genre->nom)) }}" id="lien-genre"> {{ $chanteur->genre->nom }}</a></p>
                    <div id="chanteur-single-section-contenu" class="section-contenu">
                        @foreach($songs as $s)
                        @if($s->id_chanteur == $chanteur->id)
                        <div class="section-contenu-choix">
                            <div class="section-contenu-choix-titre" onclick="listenMusic('{{ $s->fichier }}', '{{ $s->chanteur->nom }}', '{{ $s->titre }}', '{{ $s->image }}');">
                                <div class="section-contenu-choix-titre-nom">{{ $s->titre }}</div>
                                <div class="section-contenu-choix-titre-date">{{ date("m/Y", strtotime($s->updated_at)) }}</div>
                                <div class="section-contenu-choix-titre-genre">{{ $s->genre->nom }}</div>
                            </div>
                            @auth
                            <div class="titre-arrow"><span class="fa fa-caret-right"></span></div>
                            @if(Auth::user()->favSong->contains($s->id))
                            <div class="section-contenu-choix-like">
                                <a href="/addfav/{{ $s->id }}"><span class="fas fa-heart"></span></a>
                            </div>
                            @else
                            <div class="section-contenu-choix-like">
                                <a href="/addfav/{{ $s->id }}"><span class="far fa-heart"></span></a>
                            </div>
                            @endif
                            @endauth
                        </div>
                        @endif
                        @endforeach
                        <!--<div class="section-contenu-choix">
                            <div class="section-contenu-choix-titre">
                                <div class="section-contenu-choix-titre-nom">Hello</div>
                                <div class="section-contenu-choix-titre-date">10/2017</div>
                                <div class="section-contenu-choix-titre-genre">Pop</div>
                            </div>
                            <div class="titre-arrow"><span class="fa fa-caret-right"></span></div>
                            <div class="section-contenu-choix-like">
                                <a href="#"><span class="far fa-heart"></span></a>
                            </div>
                        </div>
                        <div class="section-contenu-choix">
                            <div class="section-contenu-choix-titre">
                                <div class="section-contenu-choix-titre-nom">Hello</div>
                                <div class="section-contenu-choix-titre-date">10/2017</div>
                                <div class="section-contenu-choix-titre-genre">Pop</div>
                            </div>
                            <div class="titre-arrow"><span class="fa fa-caret-right"></span></div>
                            <div class="section-contenu-choix-like">
                                <a href="#"><span class="far fa-heart"></span></a>
                            </div>
                        </div>-->
                    </div>
                </div>
@endsection