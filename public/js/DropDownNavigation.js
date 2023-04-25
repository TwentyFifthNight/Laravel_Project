function myFunction() {
    var navigation = document.getElementById("DropDownNav");
    
    if (navigation.className.indexOf("w3-show") === -1) {
        navigation.className += " w3-show";
    } else { 
        navigation.className = navigation.className.replace(" w3-show", "");
    }
}