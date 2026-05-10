<?php
require_once 'config/database.php';

$stmt = $pdo->query('SELECT * FROM salle');
$salles = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nom          = trim($_POST['nom']);
    $prenom       = trim($_POST['prenom']);
    $email        = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $id_salle     = intval($_POST['id_salle']);
    $date_resa    = $_POST['date_resa'];
    $creneau      = trim($_POST['creneau']);
    $nb_personnes = intval($_POST['nb_personnes']);

    if ($nom && $prenom && $email && $id_salle && $date_resa) {

        $sql = 'INSERT INTO reservation (nom, prenom, email, id_salle, date_resa, creneau, nb_personnes) VALUES (?, ?, ?, ?, ?, ?, ?)';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nom, $prenom, $email, $id_salle, $date_resa, $creneau, $nb_personnes]);

        header('Location: confirmation.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réserver — WorkSpace Connect</title>
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

    <main class="formulaire">
        <h2>Réserver une salle</h2>
        <p>Remplissez le formulaire ci-dessous pour effectuer votre réservation.</p>

        <form method="POST" action="reservation.php">

            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom" placeholder="Votre nom" required>
            </div>

            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input type="text" id="prenom" name="prenom" placeholder="Votre prénom" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="votre@email.fr" required>
            </div>

            <div class="form-group">
                <label for="id_salle">Salle</label>
<select id="id_salle" name="id_salle" required>
    <option value="">Choisissez une salle</option>
    <?php foreach ($salles as $salle) : ?>
        <option value="<?= $salle['id_salle'] ?>">
            <?= htmlspecialchars($salle['nom']) ?> — <?= $salle['prix'] ?>€/h
        </option>
    <?php endforeach; ?>
</select>
            </div>

            <div class="form-group">
                <label for="date_resa">Date</label>
                <input type="date" id="date_resa" name="date_resa" required min="<?= date('Y-m-d') ?>">
            </div>

            <div class="form-group">
                <label for="creneau">Créneau</label>
                <select id="creneau" name="creneau" required>
                    <option value="">Choisissez un créneau</option>
                    <option value="9h-11h">9h - 11h</option>
                    <option value="11h-13h">11h - 13h</option>
                    <option value="13h-15h">13h - 15h</option>
                    <option value="15h-17h">15h - 17h</option>
                    <option value="17h-19h">17h - 19h</option>
                </select>
            </div>

            <div class="form-group">
                <label for="nb_personnes">Nombre de personnes</label>
                <input type="number" id="nb_personnes" name="nb_personnes" min="1" max="20" placeholder="Ex: 5" required>
            </div>

            <button type="submit" class="boutton">Confirmer la réservation</button>

        </form>
    </main>

    <footer>
        <p>Contact : contact@workspace-connect.fr | © 2026</p>
    </footer>
</body>
</html>