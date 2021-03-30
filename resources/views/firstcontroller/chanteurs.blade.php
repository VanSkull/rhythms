@extends('layouts.template')

@section('content')
                <div id="chanteurs-section">
                    <h2 id="chanteurs-section-title">{{ __('Chanteurs') }}</h2>
                    <div id="news" class="chanteurs-section-type">
                        <h3 class="chanteurs-section-type-titre">{{ __('Nouveautées') }}</h3>
                        
                        <div class="chanteurs-section-all" class="section-contenu">
                            @foreach($newsChanteurs as $nC)
                            <div class="chanteur-single" onclick="viewChanteur('{{ $nC->id }}');">
                                <img class="chanteur-single-photo" src="{{ $nC->photo }}" alt="Photo_de_{{ $nC->nom }}" />
                                <div class="chanteur-single-infos">
                                    <h3 class="chanteur-single-infos-nom">{{ $nC->nom }}</h3>
                                    <p class="chanteur-single-infos-genre">{{ $nC->genre->nom }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div id="popular" class="chanteurs-section-type">
                        <h3 class="chanteurs-section-type-titre">{{ __('Les plus populaires') }}</h3>
                        
                        <div class="chanteurs-section-all" class="section-contenu">
                            @foreach($popularChanteurs as $pC)
                            <div class="chanteur-single" onclick="viewChanteur('{{ $pC->id }}');">
                                <img class="chanteur-single-photo" src="{{ $pC->photo }}" alt="Photo_de_{{ $pC->nom }}" />
                                <div class="chanteur-single-infos">
                                    <h3 class="chanteur-single-infos-nom">{{ $pC->nom }}</h3>
                                    <p class="chanteur-single-infos-genre">{{ $pC->genre->nom }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div id="bestrated" class="chanteurs-section-type">
                        <h3 class="chanteurs-section-type-titre">{{ __('Les mieux notés') }}</h3>
                        
                        <div class="chanteurs-section-all" class="section-contenu">
                            @foreach($ratedChanteurs as $rC)
                            <div class="chanteur-single" onclick="viewChanteur('{{ $rC->id }}');">
                                <img class="chanteur-single-photo" src="{{ $rC->photo }}" alt="Photo_de_{{ $rC->nom }}" />
                                <div class="chanteur-single-infos">
                                    <h3 class="chanteur-single-infos-nom">{{ $rC->nom }}</h3>
                                    <p class="chanteur-single-infos-genre">{{ $rC->genre->nom }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div id="all" class="chanteurs-section-type">
                        <h3 class="chanteurs-section-type-titre">{{ __('Tous les chanteurs') }}</h3>
                        
                        <div class="chanteurs-section-all" class="section-contenu">
                            @foreach($chanteurs as $c)
                            <div class="chanteur-single" onclick="viewChanteur('{{ $c->id }}');">
                                <img class="chanteur-single-photo" src="{{ $c->photo }}" alt="Photo_de_{{ $c->nom }}" />
                                <div class="chanteur-single-infos">
                                    <h3 class="chanteur-single-infos-nom">{{ $c->nom }}</h3>
                                    <p class="chanteur-single-infos-genre">{{ $c->genre->nom }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
@endsection