<?php
include ("../config/config.php");
include ("../config/Database.php");

class Patient{
    public $conn;

    function __construct()
    {
        $db = new Database();
        $this->conn = $db->connectToDatabase();
}

    Function save($params) {
    $firstName = $params ['firstName'];
    $lastName = $params['lastName'];
    $email= $params['email'];
    $phone = $params['phone'];
    $diseases = $params['diseases'];
    $sessionDate = $params['sessionDate'];
    $duration = $params["duration"];

        
    $insert = " INSERT INTO Patients VALUES (NULL, '$firstName', '$lastName', '$email', '$phone', '$diseases', '$sessionDate', '$duration')";
    return mysqli_query($this->conn, $insert);
    }   

    function getAll(){
        $sql ="SELECT * FROM Patients ORDER BY sessionDate ASC";
        return mysqli_query($this->conn, $sql);     
        }

        function getOne($id) {
            $sql = "SELECT * FROM Patients WHERE id - $id";
            return mysqli_query($this->conn, $sql);
        }

function update($params) {
 $firstName = $params['firstName'];
 $lastName = $params['lastName'];
 $email = $params['email'];
 $phone = $params['phone'];
 $diseases = $params ['diseases'];
 $sessionDate = $params ['sessionDate'];
 $duration = $params ["duration"];

 $id = $params ['id'];

 $update = " UPDATE Patients SET firstname='$firstName', lastName='$lastName', email='$email', phone='$phone', diseases='$diseases', sessionDate='$sessionDate', duration='$duration' WHERE id = $id";
 return mysqli_query($this->conn, $update);
} 

function remove ($id){
    $remove = "DELETE FROM Patients WHERE id = $id";
    return mysqli_query($this->conn, $remove);
}
}