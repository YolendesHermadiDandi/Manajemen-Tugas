const profil_modal = $(".modal");
$(".profil").on("click", (e) => {
    if (profil_modal.css("display") == "none") {
        profil_modal.css("display", "flex");
    } else {
        profil_modal.css("display", "none");
    }
});

//klik dluar modal
profil_modal.on("click", (e) => {
    profil_modal.css("display", "none");
});
