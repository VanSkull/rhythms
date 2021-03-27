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