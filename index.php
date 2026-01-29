<?php
// Blog v2 - Module 2 Coding Live
// Continuum du Blog v1 (Module 1) avec PHP dynamique
// Concept clé: Arrays et boucles for
// ========== DONNÉES DES ARTICLES ==========
$articles = [
    [
        "title" => "Mon Premier Article",
        "excerpt" => "J'ai découvert comment faire un blog statique. C'est
fascinant!",
        "category" => "HTML"
    ],
    [
        "title" => "HTML et Sémantique",
        "excerpt" => "Pourquoi utiliser les bons éléments HTML? Les moteurs de
recherche comprennent mieux.",
        "category" => "HTML"
    ],
    [
        "title" => "CSS Responsive",
        "excerpt" => "Faire un site qui marche sur tous les appareils. Flexbox et
Media Queries.",
        "category" => "CSS"
    ],
    [
        "title" => "JavaScript Basics",
        "excerpt" => "JavaScript rend votre site interactif. Écoutez les clics,
changez le contenu.",
        "category" => "JavaScript"
    ],
    [
        "title" => "Bootstrap Composants",
        "excerpt" => "Bootstrap nous donne des cartes, navbars, boutons, et bien
plus. Réutilisables.",
        "category" => "HTML"
    ],
    [
        "title" => "Responsive Design",
        "excerpt" => "Votre blog doit s'adapter aux téléphones. CSS Media Queries
le font automatiquement.",
        "category" => "CSS"
    ]
];

//var_dump($articles); // Pour débogage
//echo $articles[0]["title"]; // Affiche le titre du premier article
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Blog</title>

    <!-- Bootstrap CSS depuis CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Navbar Bootstrap -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">


            <span class="navbar-brand">Mon Blog</span>
        </div>
    </nav>
    <!-- Contenu principal -->
    <div class="container mt-5">
        <h1>Mon Blog</h1>
        <p>Bienvenue sur mon blog. Découvrez mes articles.</p>

        <!-- Section: Articles -->
        <h2 class="mt-5">Mes Articles</h2>

        <!-- Grille d'articles générés avec PHP -->
        <div class="row g-3 mt-3" id="conteneurArticles">
            <?php
            // Boucle for : parcourir les 3 premiers articles (affichés immédiatement)
            for ($i = 0; $i < 3; $i++):
            ?>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($articles[$i]["title"]); ?></h5>
                            <p class="card-text"><?php echo htmlspecialchars($articles[$i]["excerpt"]); ?></p>
                            <p class="card-text">
                                <small class="text-muted">Catégorie: <?php echo
                                                                        htmlspecialchars($articles[$i]["category"]); ?></small>
                            </p>
                            <a href="#" class="btn btn-primary">Lire plus</a>
                        </div>
                    </div>
                </div>
            <?php
            endfor;
            ?>


            <!-- Articles cachés (affichés au clic du bouton) -->
            <div class="row g-3 mt-3" id="articlesCachés">
                <?php
                // Boucle pour les articles 4-6 (cachés par défaut)
                for ($i = 3; $i < count($articles); $i++):
                ?>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo htmlspecialchars($articles[$i]["title"]); ?></h5>
                                <p class="card-text"><?php echo htmlspecialchars($articles[$i]["excerpt"]); ?></p>
                                <p class="card-text">
                                    <small class="text-muted">Catégorie: <?php echo htmlspecialchars($articles[$i]["category"]); ?></small>
                                </p>
                                <a href="#" class="btn btn-primary">Lire plus</a>
                            </div>
                        </div>
                    </div>
                <?php
                endfor;
                ?>
            </div>
        </div>

        <!-- Bouton pour charger plus d'articles -->
        <div class="mt-5 text-center">
            <button id="boutChargerPlus" class="btn btn-success btn-lg">Charger plus
                d'articles</button>
        </div>
    </div>
    <script src="script.js"></script>
    
    <?php
    // Optionnel: Section de débogage (à retirer en production!)
    echo "<hr>";
    echo "<h3 style='color: gray; font-size: 0.9em;'>Débogage - Structure des
        Articles:</h3>";
    echo "<pre style='font-size: 0.8em; color: gray;'>";
    var_dump($articles[0]);
    echo "</pre>";
    ?>

</body>

</html>