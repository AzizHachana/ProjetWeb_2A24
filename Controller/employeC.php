<?php
class employeC
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
?>