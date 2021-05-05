<?php
    class client{
        private $id_client;
        private $nom;
        private $prenom;
        private $age;
        private $email;

        public function __construct($nom, $prenom, $age, $email, $id_client = null){
            $this->id_client = $id_client;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->age = $age;
            $this->email = $email;
        }
        
        public function setIdClient($id_client){
            $this->id_client = $id_client;
        }

        public function setNom($nom){
            $this->nom = $nom;
        }

        public function setPrenom($prenom){
            $this->prenom = $prenom;
        }

        public function setAge($age){
            $this->age = $age;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getIdClient(){
            return $this->id_client;
        }

        public function getNom(){
            return $this->nom;
        }

        public function getPrenom(){
            return $this->prenom;
        }

        public function getAge(){
            return $this->age;
        }

        public function getEmail(){
            return $this->email;
        }

        private function verifyEmail(){
            if(!(filter_var($this->getEmail(), FILTER_VALIDATE_EMAIL))){
                return "<p>Le mail indiqué est impossible</p>";
            }

        }

        private function verifyAge(){
            if(!is_numeric($this->getAge())){
                return "<p>L'âge indiqué est impossible</p>";
            }

        }

        private function verifyvalueempty(){
            if(empty($this->getNom()) && empty($this->getPrenom()) && empty($this->getAge()) && empty($this->getEmail())){
                return "<p>Des champs sont vides</p>";
            }

        }

        private function verify(){
            $erreur = $this->verifyAge();
            if(isset($erreur)){
                return $erreur;
            }
            $erreur = $this->verifyEmail();
            if(isset($erreur)){
                return $erreur;
            }
            $erreur = $this->verifyvalueempty();
            if(isset($erreur)){
                return $erreur;
            }
        }

        public function add_ddb(){
            $erreur = $this->verify;
            if(isset($erreur)){
                return $erreur;
            }
            $ddb = new ddb();
            $ddb->insert("INSERT INTO client_ligue (nom, prenom, age, email) VALUES (?,?,?,?)", array($this->getNom(), $this->getPrenom(), $this->getAge() ,$this->getEmail()));
            header("location:index.php");
            exit();
        }

        public function update_ddb(){
            $erreur = $this->verify;
            if(isset($erreur)){
                return $erreur;
            }
            $ddb = new ddb();
            $ddb->update("UPDATE client_ligue SET nom = ?, prenom = ?, age = ? , email = ? WHERE id_client = ?", array($this->getNom(), $this->getPrenom(), $this->getAge() ,$this->getEmail(), $this->getIdClient()));
            header("location:index.php");
            exit();
        }

        public function delete_ddb(){
            $erreur = $this->verify;
            if(isset($erreur)){
                return $erreur;
            }
            $ddb = new ddb();
            $ddb->delete("DELETE FROM client_ligue WHERE id_client = ? ", array($this->getIdClient()));
            header("location:index.php");
            exit();
        }

    }

?>