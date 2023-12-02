<?php
session_start();
echo $_SESSION['id'];   
?>

<!DOCTYPE html>
<html>
<head>
    <title>Questionnaire</title>
</head>
<body>

    <h1>Questionnaire</h1>
    <form method="POST" action="">
        
        <p>Comment avez-vous perçu les tâches ?</p>
        <div>
            <input type="radio" name="taches" value="1"> Très fluide et agréable
        </div>
        <div>
            <input type="radio" name="taches" value="2"> Fluide et agréable
        </div>
        <div>
            <input type="radio" name="taches" value="3"> Neutre
        </div>
        <div>
            <input type="radio" name="taches" value="4"> Laborieuse et désagréable
        </div>
        <div>
            <input type="radio" name="taches" value="5"> Très laborieuse et très désagréable
        </div>

        <p>La navigation sur le menu des genres était-elle agréable et fluide ?</p>
        <div>
            <input type="radio" name="menu_genres" value="1"> Très fluide et agréable
        </div>
        <div>
            <input type="radio" name="menu_genres" value="2"> Fluide et agréable
        </div>
        <div>
            <input type="radio" name="menu_genres" value="3"> Neutre
        </div>
        <div>
            <input type="radio" name="menu_genres" value="4"> Laborieuse et désagréable
        </div>
        <div>
            <input type="radio" name="menu_genres" value="5"> Très laborieuse et très désagréable
        </div>

        <p>La navigation sur le menu des pays était-elle agréable et fluide ?</p>
        <div>
            <input type="radio" name="menu_pays" value="1"> Très fluide et agréable
        </div>
        <div>
            <input type="radio" name="menu_pays" value="2"> Fluide et agréable
        </div>
        <div>
            <input type="radio" name="menu_pays" value="3"> Neutre
        </div>
        <div>
            <input type="radio" name="menu_pays" value="4"> Laborieuse et désagréable
        </div>
        <div>
            <input type="radio" name="menu_pays" value="5"> Très laborieuse et très désagréable
        </div>

        <p>La navigation sur le menu des notes était-elle agréable et fluide ?</p>
        <div>
            <input type="radio" name="menu_notes" value="1"> Très fluide et agréable
        </div>
        <div>
            <input type="radio" name="menu_notes" value="2"> Fluide et agréable
        </div>
        <div>
            <input type="radio" name="menu_notes" value="3"> Neutre
        </div>
        <div>
            <input type="radio" name="menu_notes" value="4"> Laborieuse et désagréable
        </div>
        <div>
            <input type="radio" name="menu_notes" value="5"> Très laborieuse et très désagréable
        </div>

        <br><br>
        <input type="submit" value="Envoyer">
        </form>
        <?php
        // Vérifier si le formulaire a été soumis
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Vérifier si toutes les questions ont été répondues
            if (isset($_POST['taches']) && isset($_POST['menu_genres']) && isset($_POST['menu_pays']) && isset($_POST['menu_notes'])) {
                // Récupérer les réponses
                $_SESSION['data'] = array_merge($_SESSION['data'], [
                    'question taches : ' => $_POST['taches'],
                    'question genre : ' => $_POST['menu_genres'],
                    'question pays : ' => $_POST['menu_pays'],
                    'question note : ' => $_POST['menu_notes']
                ]);
                // Ajouter les réponses au tableau $_SESSION['data']

                // Rediriger vers la page de remerciement
                echo "<script type='text/javascript'>window.location.href = 'remerciement.php';</script>";
                exit;
            } else {
                // Afficher un message d'erreur si toutes les questions n'ont pas été répondues
                echo "Veuillez répondre à toutes les questions.";
            }
        }
       ?>
        </body>
        </html>
