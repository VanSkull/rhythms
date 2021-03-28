/* Général */
function viewChanteur(id){
    window.location.href = "/chanteurs/" + id;
}

function viewGenre(nom){
    window.location.href = "/genres#" + nom.toLowerCase().replace('-', '');
}

function listenMusic(file, chanteurName, songName, songImage){
    
}

/* Template général */
    /* Barre de recherche */
function runSearch(s){
    if(event.keyCode == 13){
        window.location.href = "/search/" + s;
    }
}

    /* Lecteur de musique */
function playMusic(){
    
}

function stopMusic(){
    
}

function nextMusic(){
    
}

function previousMusic(){
    
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