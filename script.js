// Blog v2 - Module 2 - JavaScript
document.addEventListener('DOMContentLoaded', function() {
console.log('📝 Blog v2 Module 2 loaded');
console.log('✓ Concept: Articles générés en PHP, affichés avec for loops');

// Ajouter la fonctionnalité du bouton "Charger plus"
initializerBoutChargerPlus();
});

/**
* Initialiser le bouton "Charger plus d'articles"
*/
function initializerBoutChargerPlus() {
const bout = document.getElementById('boutChargerPlus');
const articlesCachés = document.getElementById('articlesCachés');
    if (bout && articlesCachés) {
        bout.addEventListener('click', function() {
        // Afficher les articles cachés
        articlesCachés.style.display = 'contents';
        // Changer le texte du bouton
        bout.textContent = '✓ Articles chargés!';
        bout.disabled = true;
        console.log('✓ Plus d\'articles affichés');
        });
    }
}