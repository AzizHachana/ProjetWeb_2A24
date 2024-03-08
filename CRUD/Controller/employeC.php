<?php
include "../config.php";
class employeC
{
    public function showEmployee($employe)
    {
        echo '<table border=1 width="100%">
        <tr align ="center">
            <td>Last name</td>
            <td>First name</td>
            <td>Phone</td>
            <td>Email</td>
            <td>date ofbirth</td>
        </tr>
        <tr>
            <td>'.$employe->getLastName().'</td>
            <td>'.$employe->getfirstname().'</td>
            <td>'.$employe->getphone().'</td>
            <td>'.$employe->getemail().'</td>
            <td>'.$employe->getdob().'</td>
        </tr>
     </table>';
    }
    public function listEmployes()
    {
        $sql = "SELECT * FROM employe";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    function deleteEmploye($id)
    {
        $sql="DELETE FROM employe WHERE id = :id";
        $db= config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id', $id);

        try{
            $req->execute();
        }catch(Exception $e){
            die('Error:' . $e->getMessage());
        }
    }
    public function addEmploye($firstname, $lastname, $email, $dob)
{
    $sql = "INSERT INTO employe (id,FirstName, LastName, email, dob) VALUES (NULL,:firstname, :lastname, :email, :dob)";
    $db = config::getConnexion();
    try {
        $query = $db->prepare($sql);
        $query->execute([
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email,
            'dob' => $dob
        ]);
    } catch (Exception $e) {
        die('Error: ' . $e->getMessage());
    }
}
public function updateEmploye($id, $firstname, $lastname, $email, $dob)
{
    $sql = "UPDATE employe SET FirstName=:firstname, LastName=:lastname, email=:email, dob=:dob WHERE id=:id";
    $db = config::getConnexion();
    try {
        $query = $db->prepare($sql);
        $query->bindParam(':id', $id);
        $query->bindParam(':firstname', $firstname);
        $query->bindParam(':lastname', $lastname);
        $query->bindParam(':email', $email);
        $query->bindParam(':dob', $dob);
        $query->execute();
        echo $query->rowCount() . " records updated successfully";
    } catch (Exception $e) {
        die('Error: ' . $e->getMessage());
    }
}

public function getEmploye($id)
{
    $sql = "SELECT * FROM employe WHERE id = :id";
    $db = config::getConnexion();
    $query = $db->prepare($sql);
    $query->bindParam(':id', $id);
    $query->execute();
    return $query->fetch(PDO::FETCH_ASSOC);
}




}
?>