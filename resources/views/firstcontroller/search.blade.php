@extends('layouts.template')

@section('content')
                <div id="search-section">
                    <h2 id="search-section-title">Résultat de recherche :<br/>{{ $regex }}</h2>
                    <div id="search-section-contenu" class="section-contenu">
                        <div id="search-chanteur">
                            <h3 id="search-chanteur-title">Résultat des chanteurs :</h3>
                            
                            @if(count($searchChanteur) == 0)
                                <p id="search-chanteur-nothing">Aucun résultat ne correspond à votre recherche</p>
                            @else
                                <div id="search-chanteur-all">
                                @foreach($searchChanteur as $resultChanteur)
                                    <div class="search-chanteur-choix" onclick="viewChanteur({{ $resultChanteur->id }});">
                                        <img class="search-chanteur-choix-image" src="{{ $resultChanteur->photo }}" alt="" />
                                        <div class="search-chanteur-choix-infos">
                                            <h4 class="search-chanteur-choix-infos-nom">{{ $resultChanteur->nom }}</h4>
                                        </div>
                                    </div>
                                @endforeach
                                </div>
                            @endif
                        </div>
                        <div id="search-song">
                            <h3 id="search-song-title">Résultat des chansons :</h3>
                            
                            @if(count($searchSong) == 0)
                                <p id="search-song-nothing">Aucun résultat ne correspond à votre recherche</p>
                            @else
                                <div id="search-song-all">
                                @foreach($searchSong as $resultSong)
                                    <div class="search-song-choix">
                                        <div class="search-song-choix-titre" onclick="listenMusic('{{ $resultSong->fichier }}');">
                                            <div class="search-song-choix-titre-nom">{{ $resultSong->titre }}</div>
                                            <div class="search-song-choix-titre-chanteur">{{ $resultSong->chanteur->nom }}</div>
                                            <div class="search-song-choix-titre-date">{{ date("m/Y", strtotime($resultSong->updated_at)) }}</div>
                                            <div class="search-song-choix-titre-genre">Pop</div>
                                        </div>
                                        <div class="titre-arrow"><span class="fa fa-caret-right"></span></div>
                                        <div class="search-song-choix-like">
                                            <a href="#"><span class="far fa-heart"></span></a>
                                        </div>
                                    </div>
                                @endforeach
                                </div>
                            @endif
                        </div>
                        <div id="search-genre">
                            <h3 id="search-genre-title">Résultat des genres :</h3>
                            
                            @if(count($searchGenre) == 0)
                                <p id="search-genre-nothing">Aucun résultat ne correspond à votre recherche</p>
                            @else
                                <div id="search-genre-all">
                                @foreach($searchGenre as $resultGenre)
                                    <div class="search-genre-choix" onclick="viewGenre('{{ $resultGenre->nom }}');">
                                        <img class="search-genre-choix-image" src="{{ $resultGenre->image }}" alt="" />
                                        <div class="search-genre-choix-infos">
                                            <h4 class="search-genre-choix-infos-nom">{{ $resultGenre->nom }}</h4>
                                        </div>
                                    </div>
                                @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
@endsection