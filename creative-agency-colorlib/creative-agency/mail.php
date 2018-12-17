<?php
    $destinataire = 'Vincent@vinn-consulting.fr';
    // Pour les champs $expediteur / $copie / $destinataire, séparer par une virgule s'il y a plusieurs adresses
    $expediteur = $_POST['email'];
    $name = $_POST['name'];
     
    $objet = $_POST['subject'];
     
    $headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
    $headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n"; // l'en-tete Content-type pour le format HTML
    $headers .= 'To: '.$destinataire."\n"; // Mail de reponse
    $headers .= 'From: "Formulaire de '.$name.':"<'.$expediteur.'>'."\n"; // Expediteur yy
     
    $message =  '<div style="width: 100%"> Prénom : '.$name.'<br><br>
                    Téléphone : '.$_POST['phone'].'<br><br>
                    Mail : '.$expediteur.'<br><br>
                    '.$_POST['message'].'</div>';
     
    if(mail($destinataire, $objet, $message, $headers))
    {
        echo '<script languag="javascript" >alert("Votre message a bien été envoyé ");</script>';
    }
    else // Non envoyé
    {
        echo '<script languag="javascript">alert("Votre message n\'a pas pu être envoyé");</script>';
    }
    header('Location: index.html');
    exit();
?>		