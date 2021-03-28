/* Template général */
    /* Barre de recherche */
function runSearch(e, s){
    if(e.keyCode == 13){
        window.location.href = "/search/" + s;
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