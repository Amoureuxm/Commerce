document.addEventListener("DOMContentLoaded", function(){
    const btn = document.getElementById("btn");
    const sidebar = document.querySelector(".sidebar");

    btn.onclick = function(){
        sidebar.classList.toggle("retracted");
    }
});