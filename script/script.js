// const items = ["Europe", "Asie", "Amérique", "Afrique", "Océanie"];//Tableau avec les éléments du menu

// //Je vais chercher le bouton et le container dans le HTML
// const btnExplorer = document.getElementById('btn-explorer');
// const menuExplorer = document.getElementById('menuExplorer');


// //Création du menu deroulant- Le menu s'affiche au click sur "Explorer"
// items.forEach(item => {//Pour chaque continent 
//     const link = document.createElement('a');
//     link.href = "#";
//     link.textContent = item;//ajoute le text correspondant
//     link.addEventListener('click', () => {//Ajoute un click qui affiche une alerte et ferme le menu.
//       alert('Vous avez choisi ${item}');
//     });
//     menuExplorer.appendChild(link);//ajoute le lien dans le menu
// });

// btnExplorer.addEventListener('click', (e) => {//Au click sur le bouton
//   e.stopPropagation();//empêche le click de remonter à "window" et de fermer immédiatement le menu
//   menuExplorer.style.display = menuExplorer.style.display === 'block' ? 'none' : 'block';//alternation pour ouvrir et fermer le menu
// });

// document.addEventListener('click', () => {//click n’importe où en dehors du bouton, le menu se ferme
//     menuExplorer.style.display = 'none';
// });

const btnExplorer = document.getElementById("btn-explorer");
const menuExplorer = document.getElementById("menuExplorer");

btnExplorer.addEventListener("click", () => {
    menuExplorer.style.display = menuExplorer.style.display === "block" ? "none" : "block";
});
