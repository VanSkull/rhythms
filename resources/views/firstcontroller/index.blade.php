@extends('layouts.template')

@section('content')
                <div id="accueil-section-news">
                    <h2 id="accueil-section-news-titre" class="section-titre">Nouveautés</h2>
                    <div id="accueil-section-news-contenu" class="section-contenu">
                        <div class="section-contenu-choix">
                            <img class="section-contenu-choix-image" src="img/icon_rhythms.png" alt="" />
                            <div class="section-contenu-choix-infos">
                                <h4 class="section-contenu-choix-infos-titre">Orelsan</h4>
                                <p class="section-contenu-choix-infos-desc">Nouveau chanteur</p>
                            </div>
                        </div>
                        <div class="section-contenu-choix">
                            <img class="section-contenu-choix-image" src="img/icon_rhythms.png" alt="" />
                            <div class="section-contenu-choix-infos">
                                <h4 class="section-contenu-choix-infos-titre">Orelsan</h4>
                                <p class="section-contenu-choix-infos-desc">Nouveau chanteur</p>
                            </div>
                        </div>
                        <div class="section-contenu-choix">
                            <img class="section-contenu-choix-image" src="img/icon_rhythms.png" alt="" />
                            <div class="section-contenu-choix-infos">
                                <h4 class="section-contenu-choix-infos-titre">Orelsan</h4>
                                <p class="section-contenu-choix-infos-desc">Nouveau chanteur</p>
                            </div>
                        </div>
                        <div class="section-contenu-choix">
                            <img class="section-contenu-choix-image" src="img/icon_rhythms.png" alt="" />
                            <div class="section-contenu-choix-infos">
                                <h4 class="section-contenu-choix-infos-titre">Orelsan</h4>
                                <p class="section-contenu-choix-infos-desc">Nouveau chanteur</p>
                            </div>
                        </div>
                        <div class="section-contenu-choix">
                            <img class="section-contenu-choix-image" src="img/icon_rhythms.png" alt="" />
                            <div class="section-contenu-choix-infos">
                                <h4 class="section-contenu-choix-infos-titre">Orelsan</h4>
                                <p class="section-contenu-choix-infos-desc">Nouveau chanteur</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div id="accueil-section-genres">
                    <h2 id="accueil-section-genres-titre" class="section-titre">Genres</h2>
                    <div id="accueil-section-genres-contenu" class="section-contenu">
                        @foreach($genres as $g)
                        <div class="section-contenu-choix" onclick="viewGenre('{{ $g->nom }}');">
                            <img class="section-contenu-choix-image" src="{{ $g->image }}" alt="" />
                            <div class="section-contenu-choix-infos">
                                <h4 class="section-contenu-choix-infos-titre">{{ $g->nom }}</h4>
                            </div>
                        </div>
                        @endforeach
                        <!--<div class="section-contenu-choix">
                            <img class="section-contenu-choix-image" src="img/icon_rhythms.png" alt="" />
                            <div class="section-contenu-choix-infos">
                                <h4 class="section-contenu-choix-infos-titre">Rock</h4>
                            </div>
                        </div>
                        <div class="section-contenu-choix">
                            <img class="section-contenu-choix-image" src="img/icon_rhythms.png" alt="" />
                            <div class="section-contenu-choix-infos">
                                <h4 class="section-contenu-choix-infos-titre">Rap</h4>
                            </div>
                        </div>
                        <div class="section-contenu-choix">
                            <img class="section-contenu-choix-image" src="img/icon_rhythms.png" alt="" />
                            <div class="section-contenu-choix-infos">
                                <h4 class="section-contenu-choix-infos-titre">Classique</h4>
                            </div>
                        </div>
                        <div class="section-contenu-choix">
                            <img class="section-contenu-choix-image" src="img/icon_rhythms.png" alt="" />
                            <div class="section-contenu-choix-infos">
                                <h4 class="section-contenu-choix-infos-titre">Folk</h4>
                            </div>
                        </div>
                        <div class="section-contenu-choix">
                            <img class="section-contenu-choix-image" src="img/icon_rhythms.png" alt="" />
                            <div class="section-contenu-choix-infos">
                                <h4 class="section-contenu-choix-infos-titre">Punk</h4>
                            </div>
                        </div>
                        <div class="section-contenu-choix">
                            <img class="section-contenu-choix-image" src="img/icon_rhythms.png" alt="" />
                            <div class="section-contenu-choix-infos">
                                <h4 class="section-contenu-choix-infos-titre">Metal</h4>
                            </div>
                        </div>
                        <div class="section-contenu-choix">
                            <img class="section-contenu-choix-image" src="img/icon_rhythms.png" alt="" />
                            <div class="section-contenu-choix-infos">
                                <h4 class="section-contenu-choix-infos-titre">Hip-Hop</h4>
                            </div>
                        </div>
                        <div class="section-contenu-choix">
                            <img class="section-contenu-choix-image" src="img/icon_rhythms.png" alt="" />
                            <div class="section-contenu-choix-infos">
                                <h4 class="section-contenu-choix-infos-titre">RnB</h4>
                            </div>
                        </div>-->
                    </div>
                </div>
                
                <div id="accueil-section-chanteurs">
                    <h2 id="accueil-section-chanteurs-titre" class="section-titre">Chanteurs</h2>
                    <div id="accueil-section-chanteurs-contenu" class="section-contenu">
                        <?php
                        $i = 0;
                        foreach($chanteurs as $c){
                        ?>
                        <div class="section-contenu-choix" onclick="viewChanteur('{{ $c->id }}');">
                            <img class="section-contenu-choix-image" src="{{ $c->photo }}" alt="" />
                            <div class="section-contenu-choix-infos">
                                <h4 class="section-contenu-choix-infos-titre">{{ $c->nom }}</h4>
                            </div>
                        </div>
                        <?php
                            $i++;
                            if($i == 10) break;
                        }
                        ?>
                        <!--<div class="section-contenu-choix">
                            <img class="section-contenu-choix-image" src="img/icon_rhythms.png" alt="" />
                            <div class="section-contenu-choix-infos">
                                <h4 class="section-contenu-choix-infos-titre">Beyoncé</h4>
                            </div>
                        </div>
                        <div class="section-contenu-choix">
                            <img class="section-contenu-choix-image" src="img/icon_rhythms.png" alt="" />
                            <div class="section-contenu-choix-infos">
                                <h4 class="section-contenu-choix-infos-titre">Gims</h4>
                            </div>
                        </div>
                        <div class="section-contenu-choix">
                            <img class="section-contenu-choix-image" src="img/icon_rhythms.png" alt="" />
                            <div class="section-contenu-choix-infos">
                                <h4 class="section-contenu-choix-infos-titre">Micheal Jackson</h4>
                            </div>
                        </div>
                        <div class="section-contenu-choix">
                            <img class="section-contenu-choix-image" src="img/icon_rhythms.png" alt="" />
                            <div class="section-contenu-choix-infos">
                                <h4 class="section-contenu-choix-infos-titre">Vianney</h4>
                            </div>
                        </div>
                        <div class="section-contenu-choix">
                            <img class="section-contenu-choix-image" src="img/icon_rhythms.png" alt="" />
                            <div class="section-contenu-choix-infos">
                                <h4 class="section-contenu-choix-infos-titre">Evanescence</h4>
                            </div>
                        </div>
                        <div class="section-contenu-choix">
                            <img class="section-contenu-choix-image" src="img/icon_rhythms.png" alt="" />
                            <div class="section-contenu-choix-infos">
                                <h4 class="section-contenu-choix-infos-titre">Daft Punk</h4>
                            </div>
                        </div>
                        <div class="section-contenu-choix">
                            <img class="section-contenu-choix-image" src="img/icon_rhythms.png" alt="" />
                            <div class="section-contenu-choix-infos">
                                <h4 class="section-contenu-choix-infos-titre">Angèle</h4>
                            </div>
                        </div>
                        <div class="section-contenu-choix">
                            <img class="section-contenu-choix-image" src="img/icon_rhythms.png" alt="" />
                            <div class="section-contenu-choix-infos">
                                <h4 class="section-contenu-choix-infos-titre">Lana del Rey</h4>
                            </div>
                        </div>
                        <div class="section-contenu-choix">
                            <img class="section-contenu-choix-image" src="img/icon_rhythms.png" alt="" />
                            <div class="section-contenu-choix-infos">
                                <h4 class="section-contenu-choix-infos-titre">Bebe Rexha</h4>
                            </div>
                        </div>-->
                    </div>
                    <?php
                        if($i == 10){
                    ?>
                    <div id="accueil-section-chanteurs-plus">
                        <a id="accueil-section-chanteurs-plus-lien" href="/chanteurs#all" >Voir tous les chanteurs</a>
                    </div>
                    <?php   
                        }                    
                    ?>
                </div>
                
                <div id="accueil-section-titres">
                    <h2 id="accueil-section-titres-titre" class="section-titre">Titres</h2>
                    <div id="accueil-section-titres-contenu" class="section-contenu">
                        <?php
                        $j = 0;
                        foreach($songs as $s){
                        ?>
                        <div class="section-contenu-choix" onclick="listenMusic('{{ $s->fichier }}', '{{ $s->chanteur->nom }}', '{{ $s->titre }}', '{{ $s->image }}');">
                            <img class="section-contenu-choix-image" src="{{ $s->image }}" alt="" />
                            <div class="section-contenu-choix-infos">
                                <h4 class="section-contenu-choix-infos-titre">{{ $s->titre }}</h4>
                                <p class="section-contenu-choix-infos-desc">de {{$s->chanteur->nom}}</p>
                            </div>
                        </div>
                        <?php
                            $j++;
                            if($j == 10) break;
                        }
                        ?>
                        <!--<div class="section-contenu-choix">
                            <img class="section-contenu-choix-image" src="img/icon_rhythms.png" alt="" />
                            <div class="section-contenu-choix-infos">
                                <h4 class="section-contenu-choix-infos-titre">Simple, basique</h4>
                                <p class="section-contenu-choix-infos-desc">de Orelsan</p>
                            </div>
                        </div>
                        <div class="section-contenu-choix">
                            <img class="section-contenu-choix-image" src="img/icon_rhythms.png" alt="" />
                            <div class="section-contenu-choix-infos">
                                <h4 class="section-contenu-choix-infos-titre">Simple, basique</h4>
                                <p class="section-contenu-choix-infos-desc">de Orelsan</p>
                            </div>
                        </div>
                        <div class="section-contenu-choix">
                            <img class="section-contenu-choix-image" src="img/icon_rhythms.png" alt="" />
                            <div class="section-contenu-choix-infos">
                                <h4 class="section-contenu-choix-infos-titre">Simple, basique</h4>
                                <p class="section-contenu-choix-infos-desc">de Orelsan</p>
                            </div>
                        </div>
                        <div class="section-contenu-choix">
                            <img class="section-contenu-choix-image" src="img/icon_rhythms.png" alt="" />
                            <div class="section-contenu-choix-infos">
                                <h4 class="section-contenu-choix-infos-titre">Simple, basique</h4>
                                <p class="section-contenu-choix-infos-desc">de Orelsan</p>
                            </div>
                        </div>
                        <div class="section-contenu-choix">
                            <img class="section-contenu-choix-image" src="img/icon_rhythms.png" alt="" />
                            <div class="section-contenu-choix-infos">
                                <h4 class="section-contenu-choix-infos-titre">Simple, basique</h4>
                                <p class="section-contenu-choix-infos-desc">de Orelsan</p>
                            </div>
                        </div>
                        <div class="section-contenu-choix">
                            <img class="section-contenu-choix-image" src="img/icon_rhythms.png" alt="" />
                            <div class="section-contenu-choix-infos">
                                <h4 class="section-contenu-choix-infos-titre">Simple, basique</h4>
                                <p class="section-contenu-choix-infos-desc">de Orelsan</p>
                            </div>
                        </div>
                        <div class="section-contenu-choix">
                            <img class="section-contenu-choix-image" src="img/icon_rhythms.png" alt="" />
                            <div class="section-contenu-choix-infos">
                                <h4 class="section-contenu-choix-infos-titre">Simple, basique</h4>
                                <p class="section-contenu-choix-infos-desc">de Orelsan</p>
                            </div>
                        </div>
                        <div class="section-contenu-choix">
                            <img class="section-contenu-choix-image" src="img/icon_rhythms.png" alt="" />
                            <div class="section-contenu-choix-infos">
                                <h4 class="section-contenu-choix-infos-titre">Simple, basique</h4>
                                <p class="section-contenu-choix-infos-desc">de Orelsan</p>
                            </div>
                        </div>
                        <div class="section-contenu-choix">
                            <img class="section-contenu-choix-image" src="img/icon_rhythms.png" alt="" />
                            <div class="section-contenu-choix-infos">
                                <h4 class="section-contenu-choix-infos-titre">Simple, basique</h4>
                                <p class="section-contenu-choix-infos-desc">de Orelsan</p>
                            </div>
                        </div>-->
                    </div>
                    <?php
                        if($j == 10){
                    ?>
                    <div id="accueil-section-titres-plus">
                        <a id="accueil-section-titres-plus-lien" href="/titres#all" >Voir tous les titres</a>
                    </div>
                    <?php
                        }
                    ?>
                </div>
                
                @auth
                <div id="accueil-section-favoris">
                    <h2 id="accueil-section-favoris-titre" class="section-titre">Favoris</h2>
                    <div id="accueil-section-favoris-contenu" class="section-contenu">
                        <?php
                        $k = 0;
                        foreach($favoris as $f){
                        ?>
                        <div class="section-contenu-choix" onclick="listenMusic">
                            <img class="section-contenu-choix-image" src="img/icon_rhythms.png" alt="" />
                            <div class="section-contenu-choix-infos">
                                <h4 class="section-contenu-choix-infos-titre">Simple, basique</h4>
                                <p class="section-contenu-choix-infos-desc">de Orelsan</p>
                            </div>
                        </div>
                        <?php
                            $k++;
                            if($k == 10) break;
                        }
                        ?>
                    </div>
                    <?php
                        if($k == 10){
                    ?>
                    <div id="accueil-section-favoris-plus">
                        <a id="accueil-section-favoris-plus-lien" href="/favoris" >Voir tous mes favoris</a>
                    </div>
                    <?php
                        }elseif($k == 0){
                    ?>
                    <p id="accueil-section-favoris-nothing">Vous n'avez, pour l'instant, aucun favoris dans votre liste</p>
                    <?php
                        }
                    ?>
                </div>
                @endauth
@endsection