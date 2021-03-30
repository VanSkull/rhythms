@extends('layouts.template')

@section('content')
                <div id="contenu-section">
                    <h2 id="contenu-section-title">{{ __('Nouveau Contenu') }}</h2>
                    
                    <div id="contenu-section-contenu" class="section-contenu">
                        
                        <div id="selection-contenu">
                            <label>{{ __('Nouveau :') }}</label>
                            <select name="pets" id="pet-select" onchange="displayContenu(this.value);">
                                <option value="" selected>-- {{ __('Option') }} --</option>
                                <option value="Chanson">{{ __('Chanson') }}</option>
                                <option value="Chanteur">{{ __('Chanteur') }}</option>
                                <option value="Genre">{{ __('Genre') }}</option>
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
                                <input type="text" name="music-title" placeholder="{{ __('Titre de la musique') }}" required />
                                <div id="music-file-champ">
                                    <span class="name-file" id="music-file-name">{{ __('Fichier de la musique') }}</span>
                                    <input type="file" name="music-file" id="music-file" required onchange="showFile(this.value, 'music-file-name');" accept=".mp3" />
                                    <label for="music-file">{{ __('Uploader') }}</label>
                                </div>                                
                                <div id="music-photo-champ">
                                    <span class="name-photo" id="music-photo-name">{{ __('Photo de la musique') }}</span>
                                    <input type="file" name="music-photo" id="music-photo" required onchange="showFile(this.value, 'music-photo-name');" accept="image/jpeg, image/png" />
                                    <label for="music-photo">{{ __('Uploader') }}</label>
                                </div>
                                <select name="music-chanteur" required>
                                    <option selected>{{ __('Chanteur de la musique') }}</option>
                                    @foreach($chanteurs as $c)
                                        <option value="{{ $c->id }}">{{ $c->nom }}</option>
                                    @endforeach
                                </select>
                                <select name="music-genre" required>
                                    <option selected>{{ __('Genre de la musique') }}</option>
                                    @foreach($genres as $g)
                                        <option value="{{ $g->id }}">{{ $g->nom }}</option>
                                    @endforeach
                                </select>

                                <input type="submit" value="{{ __('Envoyer') }}" />
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
                                <input type="text" name="chanteur-nom" placeholder="{{ __('Nom du chanteur') }}" required />
                                <div id="chanteur-photo-champ">
                                    <span class="name-photo" id="singer-photo-name">{{ __('Photo du chanteur') }}</span>
                                    <input type="file" name="chanteur-photo" id="chanteur-photo" required onchange="showFile(this.value, 'singer-photo-name');" accept="image/jpeg, image/png" />
                                    <label for="chanteur-photo">{{ __('Uploader') }}</label>
                                </div>
                                <select name="chanteur-genre" required>
                                    <option selected>{{ __('Genre du chanteur') }}</option>
                                    @foreach($genres as $g)
                                        <option value="{{ $g->id }}">{{ $g->nom }}</option>
                                    @endforeach
                                </select>

                                <input type="submit" value="{{ __('Envoyer') }}" />
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
                                <input type="text" name="genre-title" placeholder="{{ __('Nom du genre') }}" required />
                                <div id="genre-photo-champ">
                                    <span class="name-photo" id="genre-photo-name">{{ __('Illustration du genre') }}</span>
                                    <input type="file" name="genre-photo" id="genre-photo" required onchange="showFile(this.value, 'genre-photo-name');" accept="image/jpeg, image/png" />
                                    <label for="genre-photo">{{ __('Uploader') }}</label>
                                </div>

                                <input type="submit" value="{{ __('Envoyer') }}" />
                            </form>
                        </div>

                    </div>
                </div>
@endsection