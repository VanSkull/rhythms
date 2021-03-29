<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RHYTHMS - Toutes vos musiques à un seul endroit</title>
        
        <meta name="author" content="Valentin Vanhaecke, Lucie Mayeur" />
        <meta name="description" content="Rhythms, votre plateforme de streaming de musique préférée. Découvrez des milliers d'artistes, de chanteurs, de genres musicaux avec un accès illimité à tout moment." />
        <meta name="keywords" content="musique, stream, streaming artiste, artistes, chanteur, chanteurs, chanteuse, chanteuses, écoute, détente, plateforme, playlist, playlists, genre, genres, rhythms" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="icon" href="/img/icon_rhythms.png" type="image/png" />
        
        <link rel="stylesheet" href="/styles/normalize.css" type="text/css" />
        <link rel="stylesheet" href="/styles/style.css" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" type="text/css" />
    </head>
    
    <body>
        <div id="side-menu">
            <div id="main-logo">
                <a href="/"><img src="/img/logo_rhythms.png" alt="Logo_Rhythms" /></a>
            </div>
            
            <div id="menu-separator"></div>
            
            <div id="menu">
                <nav>
                    <ul>
                        <li><a href="/">Accueil</a></li>
                        <li><a href="/genres">Genres</a>
                            <ul>
                                <?php
                                use App\Models\Genre;
                                
                                $genres = Genre::all();
                                ?>
                                @foreach($genres as $g)
                                <li><a href="/genres#{{ str_replace('-', '', strtolower($g->nom)) }}">{{ $g->nom }}</a></li>
                                <!--<li><a href="/genres#pop">Pop</a></li>
                                <li><a href="/genres#rock">Rock</a></li>
                                <li><a href="/genres#rap">Rap</a></li>
                                <li><a href="/genres#classique">Classique</a></li>
                                <li><a href="/genres#folk">Folk</a></li>
                                <li><a href="/genres#punk">Punk</a></li>
                                <li><a href="/genres#metal">Metal</a></li>
                                <li><a href="/genres#hiphop">Hip-Hop</a></li>
                                <li><a href="/genres#rnb">RnB</a></li>-->
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="/chanteurs">Chanteurs</a>
                            <ul>
                                <li><a href="/chanteurs#news">Nouveautées</a></li>
                                <li><a href="/chanteurs#popular">Les plus populaires</a></li>
                                <li><a href="/chanteurs#bestrated">Les mieux notés</a></li>
                                <li><a href="/chanteurs#all">Tous les chanteurs</a></li>
                            </ul>
                        </li>
                        <li><a href="/titres">Titres</a>
                            <ul>
                                <li><a href="/titres#news">Nouveautées</a></li>
                                <li><a href="/titres#popular">Les plus populaires</a></li>
                                <li><a href="/titres#bestrated">Les mieux notés</a></li>
                                <li><a href="/titres#all">Tous les titres</a></li>
                            </ul>
                        </li>
                        @auth
                        <li><a href="/favoris">Favoris</a></li>
                        @if(Auth::user()->admin == true)
                        <li><a href="/addcontenu">Ajouter</a></li>
                        @endif
                        @endauth
                    </ul>
                </nav>
            </div>
        </div>
        
        <div id="main-contenu">
            <header id="header">
                <div id="form-search">
                    <input id="search-bar" name="search" type="search" placeholder="Rechercher..." onkeyup="runSearch(this.value);" />
                </div>
                <div id="identification-lang">
                        @guest
                        <div id="inscription-connexion">
                            @if (Route::has('login'))
                                <a id="lien-inscription" class="nav-link" href="{{ route('register') }}">{{ __('S\'inscrire') }}</a>
                            @endif
                            
                            @if (Route::has('register'))
                                <a id="lien-connexion" class="nav-link" href="{{ route('login') }}">{{ __('Se connecter') }}</a>
                            @endif
                        </div>
                        @else
                        <div id="session">
                            <a id="lien-session" href="{{ route('logout') }}" title="Déconnexion" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ Auth::user()->name }}</a>
                            
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                        @endguest
                        <!--<a id="lien-inscription" href="#">S'inscrire</a>
                        <a id="lien-connexion" href="#">Se connecter</a>-->
                    <!--<div id="session">
                        <a id="lien-session" href="#">Nom Prénom</a>
                    </div>-->
                    <div id="lang-select">
                        <form method="post" action="#">
                            <select name="langue" id="langue">
                                <option value="fr" selected>FR</option>
                                <option value="en">EN</option>
                            </select>
                        </form>
                    </div>
                </div>
            </header>
            
            <div id="main-contain">
                
                @yield('content')
                
            </div>
            
            <div id="music">
                <div id="music-infos">
                    <img id="music-infos-image" src="/img/icon_rhythms.png" alt="" />
                    <div id="music-infos-piste">
                        <h3 id="music-infos-piste-titre">Titre</h3>
                        <p id="music-infos-piste-chanteur">Chanteur</p>
                    </div>
                </div>
                <div id="music-lecteur">
                    <audio id="music-lecteur-media" preload="auto"></audio>
                    <div id="music-lecteur-boutons">
                        <button id="button-previous" onclick="previousMusic();"><img src="/img/previous.png" alt="" /></button>
                        <button id="button-play-pause"  onclick="playMusic();"><img id="button-toogle-img" src="/img/play_button.png" alt="" /></button>
                        <button id="button-next" onclick="nextMusic();"><img src="/img/next.png" alt="" /></button>
                    </div>
                    <input id="music-lecteur-slider" type="range" min="0" max="1" value="0" step="1" oninput="slideMusic(this.value);" />
                </div>
            </div>
        </div>
        
        <!-- Javascript & JQuery -->
        <script src="/scripts/jquery-3.5.1.min.js"></script>
        <script src="/scripts/jquery.pjax.js"></script>
        <script src="/scripts/main.js"></script>
    </body>
</html>