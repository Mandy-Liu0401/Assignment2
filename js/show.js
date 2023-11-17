let media = document.getElementById('mediaSelect');
let mediaGenre = document.getElementsByClassName('mediaGenre');

function mediaSelect() {
    if (media.value === '*') {
        mediaGenre.style.visibility = "hidden";
    }
    else if (media.value === 'movies') {
        mediaGenre.style.display = "hidden";
        document.getElementByClassName('movieGenre').style.visibility = "visible";
    }
    else if (media.value === 'books') {
        mediaGenre.style.display = "hidden";
        document.getElementByCLassName('bookCategory').style.visibility = "visible";
    }
    else if (media.value === 'games') {
        mediaGenre.style.display = "hidden";
        document.getElementByClassName('gameGenre').style.visibility = "visible";
    }
    
}

media.addEventListener("click", mediaSelect);