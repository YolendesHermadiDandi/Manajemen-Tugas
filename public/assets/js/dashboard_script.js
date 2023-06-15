const profil_modal = $(".modal");
$(".profil").on("click", (e) => {
    if (profil_modal.css("display") == "none") {
        profil_modal.css("display", "flex");
    } else {
        profil_modal.css("display", "none");
    }
});

//klik dluar modal
$(document).on("click", (e) => {
    if (e.target.className === "modal") {
        profil_modal.css("display", "none");
    }
});
