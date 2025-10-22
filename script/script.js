//VARIABLES
const btnExplorer = document.getElementById("btn-explorer");
const menuExplorer = document.getElementById("menuExplorer");

//Je clique sur mon bouton EXPLORER et le menu deroulant s'ouvre
btnExplorer.addEventListener("click", () => {
    menuExplorer.style.display = menuExplorer.style.display === "block" ? "none" : "block";
});
