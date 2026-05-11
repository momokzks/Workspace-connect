<?php
require_once 'config/database.php';

$id = $_GET['id'];
$stmt = $pdo->prepare('SELECT * FROM salle WHERE id_salle = ?');
$stmt->execute([$id]);
$salle = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($salle['nom']) ?> — WorkSpace Connect</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>WorkSpace Connect</h1>
        <nav>
            <a href="index.php">Retour à l'Accueil</a>
            <a href="salles.php">Nos salles</a>
            <a href="reservation.php">Réserver</a>
        </nav>
    </header>

    <main class="fiche-salle">

        <img src="images/<?= htmlspecialchars($salle['image']) ?>" alt="<?= htmlspecialchars($salle['nom']) ?>" class="fiche-img">

        <div class="fiche-content">

            <div class="card-header">
                <h2><?= htmlspecialchars($salle['nom']) ?></h2>
                <span class="prix"><?= $salle['prix'] ?>€/h</span>
            </div>

            <p><?= htmlspecialchars($salle['description']) ?></p>

            <div class="infos">
                <span>👥 <?= $salle['capacite'] ?> personnes max</span>
            </div>

            <div class="tags">
                <?php foreach (explode(',', $salle['equipements']) as $equip) : ?>
                    <span class="tag"><?= htmlspecialchars(trim($equip)) ?></span>
                <?php endforeach; ?>
            </div>

            <a href="reservation.php" class="boutton">Réserver une salle</a>

        </div>

    </main>

    <footer>
        <p>Contact : contact@workspace-connect.fr | © 2026</p>
    </footer>
</body>
</html>