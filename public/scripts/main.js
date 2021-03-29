/* Général */

$(document).ready(function(){
    $(document).on('submit', 'form[data-pjax]', function(event) {
        $.pjax.submit(event, '#main-contain')
    })
    
    $(document).pjax('a', '#main-contain');
    /*$(document).pjax('div.chanteur', '#main-contain');
    $(document).pjax('div.genre', '#main-contain');*/
});

function viewChanteur(id){
    if($.support.pjax){
       $.pjax({url: "/chanteurs/" + id, container: '#main-contain'})
    }else{
        window.location.href = "/chanteurs/" + id;
    }    
}

function viewGenre(nom){
    if($.support.pjax){
       $.pjax({url: "/genres#" + nom.toLowerCase().replace('-', ''), container: '#main-contain'})
    }else{
        window.location.href = "/genres#" + nom.toLowerCase().replace('-', '');
    }      
}

function listenMusic(file, chanteurName, songName, songImage){
    let image = document.getElementById("music-infos-image");
    let chansonTitre = document.getElementById("music-infos-piste-titre");
    let chanteurNom = document.getElementById("music-infos-piste-chanteur");
    let lecteur = document.getElementById("music-lecteur-media");
    
    let slider = document.getElementById("music-lecteur-slider");
    
    let playButton = document.getElementById("button-play-pause");
    let playButtonImg = document.getElementById("button-toogle-img");
    
    image.src = songImage;
    chansonTitre.innerHTML = songName;
    chanteurNom.innerHTML = chanteurName;
    
    lecteur.src = file;
    lecteur.currentTime = 0;
    
    console.log(lecteur.duration);
    slider.max = lecteur.duration;
    
    lecteur.play();
    
    
    playButton.setAttribute("onClick", "stopMusic();");
    playButtonImg.src = "/img/pause_button.png";
}

/* Template général */
    /* Barre de recherche */
function runSearch(s){
    event.preventDefault();
    if(event.keyCode == 13){
        if($.support.pjax){
           $.pjax({url: "/search/" + s, container: '#main-contain'})
        }else{
            window.location.href = "/search/" + s;
        }
    }
}

    /* Lecteur de musique */
function playMusic(){
    let lecteur = document.getElementById("music-lecteur-media");
    
    let slider = document.getElementById("music-lecteur-slider");
    
    let playButton = document.getElementById("button-play-pause");
    let playButtonImg = document.getElementById("button-toogle-img");
    
    
    console.log(lecteur.duration);
    slider.max = lecteur.duration;
    if(lecteur.src != ""){
        lecteur.play();

        playButton.setAttribute("onClick", "stopMusic();");
        playButtonImg.src = "/img/pause_button.png";    
    }
}

function stopMusic(){
    let lecteur = document.getElementById("music-lecteur-media");
    
    let playButton = document.getElementById("button-play-pause");
    let playButtonImg = document.getElementById("button-toogle-img");

    if(lecteur.src != ""){
        lecteur.pause();

        playButton.setAttribute("onClick", "playMusic();");
        playButtonImg.src = "/img/play_button.png";
    }
}

function nextMusic(){
    
}

function previousMusic(){
    let lecteur = document.getElementById("music-lecteur-media");
    
    let playButton = document.getElementById("button-play-pause");
    let playButtonImg = document.getElementById("button-toogle-img");
    
    if(lecteur.src != ""){
        lecteur.play();
        lecteur.currentTime = 0;

        playButton.setAttribute("onClick", "stopMusic();");
        playButtonImg.src = "/img/pause_button.png";
    }
}

function slideMusic(time){
    let lecteur = document.getElementById("music-lecteur-media");
    
    console.log(time);
    if(lecteur.src != ""){
        lecteur.currentTime = parseInt(time);
        console.log(lecteur.currentTime);
    }
}

/* Page Nouveau contenu */
function displayContenu(type){
    let newMusic = document.getElementById("formulaire-chanson");
    let newSinger = document.getElementById("formulaire-chanteur");
    let newGenre = document.getElementById("formulaire-genre");

    switch (type){
        case 'Chanson':
            newMusic.style.display = "block";
            newSinger.style.display = "none";
            newGenre.style.display = "none";
        break;
                        
        case 'Chanteur':
            newMusic.style.display = "none";
            newSinger.style.display = "block";
            newGenre.style.display = "none";
        break;
                        
        case 'Genre':
            newMusic.style.display = "none";
            newSinger.style.display = "none";
            newGenre.style.display = "block";
        break;

        default:
            newMusic.style.display = "none";
            newSinger.style.display = "none";
            newGenre.style.display = "none";
    }
}

function showFile(file, champ){
    let fileArray = file.split('\\');
    let fileName = fileArray[fileArray.length - 1];
    
    document.getElementById(champ).innerHTML = fileName;
    document.getElementById(champ).classList.add("file-selected");
}