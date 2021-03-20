try {

    let profilPhoto = document.getElementById("profil-photo");

    profilPhoto.addEventListener("mouseover", function(){
        profilPhoto.src = "/media/img/moi2.jpg";
    });
    profilPhoto.addEventListener("mouseout", function(){
        profilPhoto.src = "/media/img/moi.jpg";
    });
    let switchPhoto = setInterval(function(){
        profilPhoto.src = "/media/img/moi2.jpg";
        clearInterval(switchPhoto);
    }, 5000);

}
catch {console.log("Vous devez être sur la page du CV pour accéder à cette variable")}

try {
    let photo = document.getElementById('photo');


    const turnImgRight = (e) => {
        img = e.target;
        img.style.transform="rotateZ(0turn)";
    }
    const turnImgLeft = (e) => {
        img = e.target;
        img.style.transform="rotateZ(-1turn)";
    }
    photo.addEventListener("mouseover", turnImgRight);
    photo.addEventListener("mouseout", turnImgLeft);
    photo.addEventListener("load", turnImgLeft);

}
catch {console.log("Vous devez être sur la page d'accueil pour accéder à ces valeurs")}


