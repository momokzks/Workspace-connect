<?php require_once 'config/database.php'; ?>

<?php
$stmt = $pdo->query('SELECT * FROM salle');
$salles = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos salles — WorkSpace Connect</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>WorkSpace Connect</h1>
        <nav>
            <a href="index.php">Accueil</a>
            <a href="salles.php">Nos salles</a>
            <a href="reservation.php">Réserver</a>
        </nav>
    </header>

    <main>
        <h2>Nos salles disponibles</h2>
        <p>Choisissez la salle qui correspond à vos besoins.</p>
    </main>

    <div class="container">
        <?php foreach ($salles as $salle) : ?>
        <div class="card">
            <img src="images/<?= htmlspecialchars($salle['image']) ?>" alt="<?= htmlspecialchars($salle['nom']) ?>">
            <div class="card-content">
                <div class="card-header">
                    <h3><?= htmlspecialchars($salle['nom']) ?></h3>
                    <span class="prix"><?= $salle['prix'] ?>€/h</span>
                </div>
                <p><?= htmlspecialchars($salle['description']) ?></p>
                <div class="infos">
                    <span>👥 <?= $salle['capacite'] ?> pers.</span>
                </div>
                <div class="tags">
                    <?php foreach (explode(',', $salle['equipements']) as $equip) : ?>
                        <span class="tag"><?= htmlspecialchars(trim($equip)) ?></span>
                    <?php endforeach; ?>
                </div>
                <a href="salle.php?id=<?= $salle['id_salle'] ?>" class="boutton">Voir la salle</a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <footer>
        <p>Contact : contact@workspace-connect.fr | © 2026</p>
    </footer>
</body>
</html>