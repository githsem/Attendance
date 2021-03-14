<?php

    class crud{
        private $db;

        function __construct($conn){
            $this->db = $conn;
        }

        public function insertAttendees($fname, $lname, $dob, $email, $contact, $specialty){
            try {
                $sql = "INSERT INTO attendee (firstname,lastname,dateofbirth,emailaddress,contactnumber,specialty_id)  VALUES (:fname,:lname,:dob,:email,:contact,:specialty)";
                $stmt = $this->db->prepare($sql);

                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':dob',$dob);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':contact',$contact);
                $stmt->bindparam(':specialty',$specialty);

                $stmt->execute();
                return true;

            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }
        public function getAttendees(){
            $sql = "SELECT * FROM `attendee` a inner join specialties s on a.specialty_id = s.specialty_id ";
            $result = $this->db->query($sql);
            return $result;
        }
        
        public function getAttendeesDetails($id){
            $sql = "select * from attendee where attende_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id',$id);
            $result = $stmt->execute();
            return $result;
        }
        

        public function getSpecialties(){
            $sql = "SELECT * FROM `specialties` ";
            $result = $this->db->query($sql);
            return $result;
        }

        


    }

?>