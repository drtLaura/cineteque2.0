<?php
session_start();
//echo $_SESSION['id'];   
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        :root {
            --color1:#b3b3b3;
            --color2:#333333;
            --color3:#2f1628;
            --color4:#e9e8e7;
            --color5:#f9ce78;
            --color6:#e8d8be;
            --color7:#dc2222;
        }
        input[type="submit"]{
            background-color:var(--color7);
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            font-family:Verdana;
        }

        input[type="submit"]:hover{
            cursor:pointer;
            color:black;
            background-color:rgb(220, 34, 34,0.5);
        }
    </style>
    <title>Questionnaire</title>
</head>
<body>

    <h1>Questionnaire</h1>
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
                    'question note : ' => $_POST['menu_notes'],
                    'question frequence : ' => $_POST['frequence'],
                    'question aise : ' => $_POST['aise']
                ]);
                // Ajouter les réponses au tableau $_SESSION['data']

                // Rediriger vers la page de remerciement
                echo "<script type='text/javascript'>window.location.href = 'remerciement.php';</script>";
                exit;
            } else {
                // Afficher un message d'erreur si toutes les questions n'ont pas été répondues
                echo "<p style=\"color:red;\">Veuillez répondre à toutes les questions.</p>";
            }
        }
       ?>
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
        </div>
        <p>A quelle fréquence utilisez-vous une interface web ?</p>
            <div>
                <input type="radio" name="frequence" value="1"> Quotidiennement
            </div>
            <div>
                <input type="radio" name="frequence" value="2"> Quelques fois
            </div>
            <div>
                <input type="radio" name="frequence" value="3"> Jamais
            </div>

            <p>Êtes-vous à l'aise lorsque vous utilisez un site web ?</p>
            <div>
                <input type="radio" name="aise" value="1"> Oui
            </div>
            <div>
                <input type="radio" name="aise" value="2"> Pas trop
            </div>
            <div>
                <input type="radio" name="aise" value="3"> Non
            </div>
        <br><br>
        <input type="submit" value="Envoyer">
        </form>
        </body>
        </html>
