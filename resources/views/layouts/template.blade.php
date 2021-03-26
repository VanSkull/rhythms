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
        <link rel="icon" href="/img/icon_rhythms.png" type="image/png" />
        
        <link rel="stylesheet" href="/styles/normalize.css" type="text/css" />
        <link rel="stylesheet" href="/styles/style.css" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" type="text/css" />
    </head>
    
    <body>
        <div id="side-menu">
            <div id="main-logo">
                <a href="#"><img src="/img/logo_rhythms.png" alt="Logo_Rhythms" /></a>
            </div>
            
            <div id="menu-separator"></div>
            
            <div id="menu">
                <nav>
                    <ul>
                        <li><a href="/">Accueil</a></li>
                        <li><a href="/genres">Genres</a>
                            <ul>
                                <li><a href="#">Pop</a></li>
                                <li><a href="#">Rock</a></li>
                                <li><a href="#">Rap</a></li>
                                <li><a href="#">Classique</a></li>
                                <li><a href="#">Folk</a></li>
                                <li><a href="#">Punk</a></li>
                                <li><a href="#">Metal</a></li>
                                <li><a href="#">Hip-Hop</a></li>
                                <li><a href="#">RnB</a></li>
                            </ul>
                        </li>
                        <li><a href="/chanteurs">Chanteurs</a>
                            <ul>
                                <li><a href="#">Nouveautées</a></li>
                                <li><a href="#">Les plus populaires</a></li>
                                <li><a href="#">Les mieux notés</a></li>
                                <li><a href="#">Tous les chanteurs</a></li>
                            </ul>
                        </li>
                        <li><a href="/titres">Titres</a>
                            <ul>
                                <li><a href="#">Nouveautées</a></li>
                                <li><a href="#">Les plus populaires</a></li>
                                <li><a href="#">Les mieux notés</a></li>
                                <li><a href="#">Tous les titres</a></li>
                            </ul>
                        </li>
                        <li><a href="/favoris">Favoris</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        
        <div id="main-contenu">
            <header id="header">
                <input id="search-bar" name="search" type="search" placeholder="Rechercher..." />
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
                    <div id="music-lecteur-boutons">
                        <button id="button-previous">Previous</button>
                        <button id="button-play-pause">Play</button>
                        <button id="button-next">Next</button>
                    </div>
                    <input id="music-lecteur-slider" type="range" min="0" max="100" value="0" />
                </div>
            </div>
        </div>
    </body>
</html>