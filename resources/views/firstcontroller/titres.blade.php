@extends('layouts.template')

@section('content')
                <div id="titres-section">
                    <h2 id="titres-section-title">Titres</h2>
                    <div id="news" class="titres-section-type">
                        <h3 class="titres-section-type-titre">Nouveautées</h3>
                        
                        <div class="titres-section-contenu" class="section-contenu">
                            @foreach($newsSongs as $nS)
                            <div class="section-contenu-choix">
                                <div class="section-contenu-choix-titre"onclick="listenMusic('{{ $nS->fichier }}', '{{ $nS->chanteur->nom }}', '{{ $nS->titre }}', '{{ $nS->image }}');">
                                    <div class="section-contenu-choix-titre-nom">{{ $nS->titre }}</div>
                                    <div class="section-contenu-choix-titre-chanteur">{{ $nS->chanteur->nom }}</div>
                                    <div class="section-contenu-choix-titre-date">{{ date("m/Y", strtotime($nS->updated_at)) }}</div>
                                    <div class="section-contenu-choix-titre-genre">{{ $nS->genre->nom }}</div>
                                </div>
                                <div class="titre-arrow"><span class="fa fa-caret-right"></span></div>
                                <div class="section-contenu-choix-like">
                                    <a href="#"><span class="far fa-heart"></span></a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div id="popular" class="titres-section-type">
                        <h3 class="titres-section-type-titre">Les plus populaires</h3>
                        
                        <div class="titres-section-contenu" class="section-contenu">
                            @foreach($popularSongs as $pS)
                            <div class="section-contenu-choix">
                                <div class="section-contenu-choix-titre"onclick="listenMusic('{{ $pS->fichier }}', '{{ $pS->chanteur->nom }}', '{{ $pS->titre }}', '{{ $pS->image }}');">
                                    <div class="section-contenu-choix-titre-nom">{{ $pS->titre }}</div>
                                    <div class="section-contenu-choix-titre-chanteur">{{ $pS->chanteur->nom }}</div>
                                    <div class="section-contenu-choix-titre-date">{{ date("m/Y", strtotime($pS->updated_at)) }}</div>
                                    <div class="section-contenu-choix-titre-genre">{{ $pS->genre->nom }}</div>
                                </div>
                                <div class="titre-arrow"><span class="fa fa-caret-right"></span></div>
                                <div class="section-contenu-choix-like">
                                    <a href="#"><span class="far fa-heart"></span></a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div id="bestrated" class="titres-section-type">
                        <h3 class="titres-section-type-titre">Les mieux notés</h3>
                        
                        <div class="titres-section-contenu" class="section-contenu">
                            @foreach($ratedSongs as $rS)
                            <div class="section-contenu-choix">
                                <div class="section-contenu-choix-titre"onclick="listenMusic('{{ $rS->fichier }}', '{{ $rS->chanteur->nom }}', '{{ $rS->titre }}', '{{ $rS->image }}');">
                                    <div class="section-contenu-choix-titre-nom">{{ $rS->titre }}</div>
                                    <div class="section-contenu-choix-titre-chanteur">{{ $rS->chanteur->nom }}</div>
                                    <div class="section-contenu-choix-titre-date">{{ date("m/Y", strtotime($rS->updated_at)) }}</div>
                                    <div class="section-contenu-choix-titre-genre">{{ $rS->genre->nom }}</div>
                                </div>
                                <div class="titre-arrow"><span class="fa fa-caret-right"></span></div>
                                <div class="section-contenu-choix-like">
                                    <a href="#"><span class="far fa-heart"></span></a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div id="all" class="titres-section-type">
                        <h3 class="titres-section-type-titre">Tous les titres</h3>
                        
                        <div class="titres-section-contenu" class="section-contenu">
                            @foreach($songs as $s)
                            <div class="section-contenu-choix">
                                <div class="section-contenu-choix-titre"onclick="listenMusic('{{ $s->fichier }}', '{{ $s->chanteur->nom }}', '{{ $s->titre }}', '{{ $s->image }}');">
                                    <div class="section-contenu-choix-titre-nom">{{ $s->titre }}</div>
                                    <div class="section-contenu-choix-titre-chanteur">{{ $s->chanteur->nom }}</div>
                                    <div class="section-contenu-choix-titre-date">{{ date("m/Y", strtotime($s->updated_at)) }}</div>
                                    <div class="section-contenu-choix-titre-genre">{{ $s->genre->nom }}</div>
                                </div>
                                <div class="titre-arrow"><span class="fa fa-caret-right"></span></div>
                                <div class="section-contenu-choix-like">
                                    <a href="#"><span class="far fa-heart"></span></a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
@endsection