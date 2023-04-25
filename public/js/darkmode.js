var mode = localStorage.getItem("mode");
if(mode !== "dark"){
    mode = "light";
}else{
    document.body.classList.add("dark-mode");
}

var checkbox = document.getElementById("mode");
if(mode === "dark"){
    checkbox.checked = true;
}

checkbox.addEventListener('change', e =>{
    if(e.target.checked){
        document.body.classList.add("dark-mode");
        localStorage.setItem("mode", "dark");
    }else{
        document.body.classList.remove("dark-mode");
        localStorage.setItem("mode", "light");
    }
});
