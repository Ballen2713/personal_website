//Funtion will setup the tab functionality 

function openWorkexp(evt, workName) { 
    var i, tablinks, tabcontent;
    tablinks = document.getElementsByClassName("tablinks");
    for( i = 0; i < tablinks.length; i++){
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    tabcontent = document.getElementsByClassName("tabcontent");
    for(i = 0; i < tabcontent.length; i++){
        tabcontent[i].style.display = "none";
    }

    document.getElementById(workName).style.display = "block";
    evt.currentTarget.className += " active";
}
