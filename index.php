<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Ceci est un test !</h1>
    <form action="" method="get">
        <label for="itworks">Est-ce que le test fonctionne ?</label>
        <input type="radio" name="itworks" id="yes" value="yes">
        <label for="yes">Oui !</label>
        <input type="radio" name="itworks" id="no" value="no">
        <label for="no">Non..</label>

        <input type="submit" value="Répondre">
    </form>
    <div>
        <?php
        if(isset($_GET['itworks'])):
            if($_GET['itworks'] == 'yes'): echo '<p class="yes">Ça marche !</p>'; else: echo '<p class="no">Oh mince..</p>'; endif;
        endif;
        ?>
    </div>
</body>
</html>