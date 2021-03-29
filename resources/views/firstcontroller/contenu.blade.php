@extends('layouts.template')

@section('content')
                <div id="contenu-section">
                    <h2 id="contenu-section-title">Nouveau Contenu</h2>
                    
                    <div id="contenu-section-contenu" class="section-contenu">
                        
                        <div id="selection-contenu">
                            <label>Nouveau:</label>
                            <select name="pets" id="pet-select" onchange="displayContenu(this.value);">
                                <option value="" selected>-- Option --</option>
                                <option value="Chanson">Chanson</option>
                                <option value="Chanteur">Chanteur</option>
                                <option value="Genre">Genre</option>
                            </select>
                        </div>

                        <div id="formulaire-chanson" style="display: none;">
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form method="post" [data-pjax] action="/addcontenu/song" enctype="multipart/form-data">
                                @csrf
                                <input type="text" name="music-title" placeholder="Titre de la musique" required />
                                <div id="music-file-champ">
                                    <span class="name-file" id="music-file-name">Fichier de la musique</span>
                                    <input type="file" name="music-file" id="music-file" required onchange="showFile(this.value, 'music-file-name');" accept=".mp3" />
                                    <label for="music-file">Uploader</label>
                                </div>                                
                                <div id="music-photo-champ">
                                    <span class="name-photo" id="music-photo-name">Photo de la musique</span>
                                    <input type="file" name="music-photo" id="music-photo" required onchange="showFile(this.value, 'music-photo-name');" accept="image/jpeg, image/png" />
                                    <label for="music-photo">Uploader</label>
                                </div>
                                <select name="music-chanteur" required>
                                    <option selected>Chanteur de la musique</option>
                                    @foreach($chanteurs as $c)
                                        <option value="{{ $c->id }}">{{ $c->nom }}</option>
                                    @endforeach
                                </select>
                                <select name="music-genre" required>
                                    <option selected>Genre de la musique</option>
                                    @foreach($genres as $g)
                                        <option value="{{ $g->id }}">{{ $g->nom }}</option>
                                    @endforeach
                                </select>

                                <input type="submit" />
                            </form>
                        </div>

                        <div id="formulaire-chanteur" style="display: none;">
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form method="post" [data-pjax] action="/addcontenu/singer" enctype="multipart/form-data">
                                @csrf
                                <input type="text" name="chanteur-nom" placeholder="Nom du chanteur" required />
                                <div id="chanteur-photo-champ">
                                    <span class="name-photo" id="singer-photo-name">Photo du chanteur</span>
                                    <input type="file" name="chanteur-photo" id="chanteur-photo" required onchange="showFile(this.value, 'singer-photo-name');" accept="image/jpeg, image/png" />
                                    <label for="chanteur-photo">Uploader</label>
                                </div>
                                <select name="chanteur-genre" required>
                                    <option selected>Genre du chanteur</option>
                                    @foreach($genres as $g)
                                        <option value="{{ $g->id }}">{{ $g->nom }}</option>
                                    @endforeach
                                </select>

                                <input type="submit" />
                            </form>
                        </div>

                        <div id="formulaire-genre" style="display: none;">
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form method="post" [data-pjax] action="/addcontenu/genre" enctype="multipart/form-data">
                                @csrf
                                <input type="text" name="genre-title" placeholder="Nom du genre" required />
                                <div id="genre-photo-champ">
                                    <span class="name-photo" id="genre-photo-name">Illustration du genre</span>
                                    <input type="file" name="genre-photo" id="genre-photo" required onchange="showFile(this.value, 'genre-photo-name');" accept="image/jpeg, image/png" />
                                    <label for="genre-photo">Uploader</label>
                                </div>

                                <input type="submit" />
                            </form>
                        </div>

                    </div>
                </div>
@endsection