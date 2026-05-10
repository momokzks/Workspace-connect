<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WorkSpace Connect</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>WorkSpace Connect</h1>
        <nav>
            <a href="salles.php">Nos salles</a> 
            <a href="reservation.php">Réserver</a>
        </nav>
    </header>

    <main>
        <h1>Bienvenue sur WorkSpace Connect</h1>
        <p>Découvrez nos espaces de travail collaboratifs, conçus pour stimuler votre créativité et votre productivité.</p>
    </main>

    <div class="container">
        <div class="card">
            <img src="images/salle1.jpg" alt="Salle 1">
            <div class="card-content">
                <div class="card-header">
                    <h3>Salle Conférence Alpha</h3>
                    <span class="prix">50€/h</span>
                </div>
                <p>Parfaite pour vos réunions d'équipe, équipée de tout le nécessaire pour une collaboration efficace.</p>
                <div class="infos">
                    <span>👥 20 pers.</span>
                    <span>📍 Étage 3</span>
                </div>
                <div class="tags">
                    <span class="tag">Écran 4K</span>
                    <span class="tag">Visioconférence</span>
                    <span class="tag">Tableau blanc</span>
                </div>
                <a href="salle.php?id=1" class="boutton">Voir la salle</a>
            </div>
        </div>

        <div class="card">
            <img src="images/salle2.jpg" alt="Salle 2">
            <div class="card-content">
                <div class="card-header">
                    <h3>Salle Meeting Beta</h3>
                    <span class="prix">30€/h</span>
                </div>
                <p>Un espace lumineux et inspirant, idéal pour les sessions de brainstorming et les ateliers créatifs.</p>
                <div class="infos">
                    <span>👥 10 pers.</span>
                    <span>📍 Étage 2</span>
                </div>
                <div class="tags">
                    <span class="tag">Écran TV</span>
                    <span class="tag">Visioconférence</span>
                    <span class="tag">WiFi</span>
                </div>
                <a href="salle.php?id=2" class="boutton">Voir la salle</a>
            </div>
        </div>

        <div class="card">
            <img src="images/salle3.jpg" alt="Salle 3">
            <div class="card-content">
                <div class="card-header">
                    <h3>Bureau Focus</h3>
                    <span class="prix">20€/h</span>
                </div>
                <p>Un environnement calme et confortable, parfait pour les travaux individuels ou les petites équipes.</p>
                <div class="infos">
                    <span>👥 4 pers.</span>
                    <span>📍 Étage 1</span>
                </div>
                <div class="tags">
                    <span class="tag">WiFi</span>
                    <span class="tag">Tableau blanc</span>
                    <span class="tag">Café</span>
                </div>
                <a href="salle.php?id=3" class="boutton">Voir la salle</a>
            </div>
        </div>

    </div>

    <footer>
        <p>Contact : contact@workspace-connect.fr | © 2026</p>
    </footer>
</body>
</html>