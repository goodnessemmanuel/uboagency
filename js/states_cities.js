var FCT = ['City', 'Abaji', 'Bwari', 'Gwagwalada', 'Kuje', 'Kwali', 'Municipal Area Council'];
var Lagos = ['City', 'Agege', 'Ajeromi-Ifelodun', 'Alimosho', 'Amuwo-Odofin', 'Apapa', 'Badagry', 'Epe', 'Eti Osa', 'Ibeju-Lekki', 'Ifako-Ijaiye', 'Ikeja', 'Ikorodu', 'Kosofe', 'Lagos Island', 'Lagos Mainland', 'Mushin', 'Ojo', 'Oshodi-Isolo', 'Shomolu', 'Surulere'];
var Rivers = ['City', 'Abua Odual', 'Ahoada East', 'Ahoada West', 'Akuku-Toru', 'Andoni', 'Asari-Toru', 'Bonny', 'Degema', 'Eleme', 'Emuoha', 'Ikwerre', 'Obio Akpor', 'Okrika', 'Omuma', 'Oyigbo', 'Port Harcourt',];

var selectCitiesIn = "";

function populateCity(state, city) {
    var states = document.getElementById(state);
    var city = document.getElementById(city);

    //refreshes the triggered option list for new options to be displayed in the dropdown.
    $("#cityx").empty();

    switch (states.value) {

        case "0":
            selectCitiesIn = ["City"];
            break;

        case "lagos":
            selectCitiesIn = Lagos;
            break;

        case "abuja":
            selectCitiesIn = FCT;
            break;

        case "rivers":
            selectCitiesIn = Rivers;
            break;

    }

    for (var opt in selectCitiesIn) {
        var createOption = document.createElement('option');
        createOption.innerHTML = selectCitiesIn[opt];
        city.options.add(createOption);
    }

}

//set default state to zero index value when loading page.
function refreshStates() {
    document.getElementById("state").value = "0";

}


