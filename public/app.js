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
