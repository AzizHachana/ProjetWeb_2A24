<!DOCTYPE html>
<html lang="en">   
<body>
    <h1>Inscription au site</h1>
    <form id="inscriptionForm" action="verification.php" method="post">
        <table border="0">
            <tr>
                <td>Nom :</td>
                <td><input type="text" name="nom" required/></td>
            </tr>
            <tr>
                <td>Prénom :</td>
                <td><input type="text" name="prenom" required/></td>
            </tr>
            <tr>
                <td>Email :</td>
                <td><input type="email" name="email" required/></td>
            </tr>
            <tr>
                <td>Téléphone :</td>
                <td><input type="tel" name="telephone" required/></td>
            </tr>
            <tr>
                <td>Date de naissance :</td>
                <td><input type="date" name="date_naissance" required/></td>
            </tr>
            <tr>
                <td>Mot de passe :</td>
                <td><input type="password" name="mot_de_passe" required/></td>
            </tr>
            <tr>
                <td><button type="submit">S'inscrire</button></td>
            </tr>
        </table>
    </form>
</body>
</html>
