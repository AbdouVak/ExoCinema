<?PHP
class Personne{
    private string $_nom;
    private string $_prenom;
    private string $_sexe;
    private string $_dateNaissance;
    private array $_film;


    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_sexe = $sexe;
        $this->_dateNaissance = $dateNaissance;
        $this->_film = [];

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

    public function getFilm(){
        return $this->_film;
    }    
    public function setFilm($film){
        $this->_film [] = $film;
        return $this;
    }

    public function filmographie(){
        $result ="";
        echo "$this->_nom $this->_prenom ajoué dans, ";
        foreach($this->_film as $films){
            $result .= $films->getTitre().", ";
        }
        return $result;
    }

}

class Realisateur extends Personne{
    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance){
        parent::__construct($nom, $prenom, $sexe, $dateNaissance);
    }

    public function filmographie(){
        parent::filmographie();
    }
}

class Acteur extends Personne{
    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance){
        parent::__construct($nom, $prenom, $sexe, $dateNaissance);
    }

    public function filmographie(){
        parent::filmographie();
    }
}
?>