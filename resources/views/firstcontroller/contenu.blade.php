@extends('layouts.template')

@section('content')
                <div id="contenu-section">
                    <h2 id="contenu-section-title">Nouveau Contenu</h2>
                    
                    <div id="contenu-section-contenu" class="section-contenu">
                        
                        <div id="">
                            <label>Nouveau:</label>
                            <select name="pets" id="pet-select">
                                <option value="">--Option--</option>
                                <option value="Chanson">Chanson</option>
                                <option value="Chanteur">Chanteur</option>
                                <option value="Genre">Genre</option>
                            </select>
                        </div>

                        <div id="formulaire-chanson">
                            <form method="post" action="#" enctype="multipart/form-data">
                                <input type="text" name="music-title" placeholder="Titre de la musique" />
                                <input type="file" name="music-file" placeholder="Fichier de la musique" />
                                <input type="file" name="music-photo" placeholder="Photo de la musique" />
                                <select name="music-chanteur">
                                    <option value="">Chanteur de la musique</option>
                                    <option value="1">Chanson</option>                       
                                </select>
                                <select name="music-genre">
                                    <option value="">Genre de la musique</option>
                                    <option value="1">Chanson</option>
                                </select>

                                <input type="submit" value="Envoyer" />
                            </form>
                        </div>

                        <div id="formulaire-chanteur">
                            <form method="post" action="#" enctype="multipart/form-data">
                                <input type="text" name="chanteur-nom" placeholder="Nom du chanteur" />
                                <input type="file" name="chanteur-photo" placeholder="Photo du chanteur" />
                                <select name="chanteur-genre">
                                    <option value="">Genre du chanteur</option>
                                    <option value="1">Pop</option>                       
                                </select>

                                <input type="submit" value="Envoyer" />
                            </form>
                        </div>

                        <div id="formulaire-genre">
                            <form method="post" action="#" enctype="multipart/form-data">
                                <input type="text" name="genre-title" placeholder="Nom du genre" />
                                <input type="file" name="genre-photo" placeholder="Illustration du genre" />

                                <input type="submit" value="Envoyer" />
                            </form>
                        </div>

                    </div>
                </div>
@endsection