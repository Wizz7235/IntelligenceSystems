function sidebarToggle(){
    const menu = document.getElementById("menu");
    const menu_btn1 = document.getElementById("menu_btn1");
    const menu_btn2 = document.getElementById("menu_btn2");

    menu.classList.toggle("hide");
    
    if(menu.classList.contains("hide")){
        setTimeout(() => {
            menu_btn1.style.display = "block";
        }, 280);
        
    }else{
        menu_btn1.style.display = "none";
    }
}