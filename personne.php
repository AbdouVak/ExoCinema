<?PHP
class Personne{
    private string $_nom;
    private string $_prenom;
    private string $_sexe;
    private string $_dateNaissance;

    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_sexe = $sexe;
        $this->_dateNaissance = $dateNaissance;

    }

    public function getNom(){
        return $this->_nom;
    }    
    public function setNom($nom){
        $this->_nom = $nom;
    }

    public function getPrenom(){
        return $this->_prenom;
    }
    public function setPrenom($prenom){
        $this->_prenom = $prenom;
    }

    public function getSexe(){
        return $this->_sexe;
    }
    public function setSexe($sexe){
        $this->_sexe = $sexe;
    }

    public function getDateNaissance(){
        return $this->_dateNaissance;
    }
    public function setDateNaissance($dateNaissance){
        $this->_dateNaissance = $dateNaissance;
    }

}

class Realisateur extends Personne{
    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance){
        parent::__construct($nom, $prenom, $sexe, $dateNaissance);
    }
}

class Acteur extends Personne{
    private Role $_role;
    private Casting $_casting;

    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance,Role $role){
        parent::__construct($nom, $prenom, $sexe, $dateNaissance);
        $this->_role =$role;
    }

    public function addCasting(Casting $casting){
        $this->_casting[] = $casting;
    }
}
?>