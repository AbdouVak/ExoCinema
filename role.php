<?PHP
class Role{
    private string $_nom;
    private array $_acteurs;

    public function __construct(string $nom){
        $this->_nom = $nom;
        $this->_acteurs = [];
    }

    public function getNom(){
        return $this->_nom;
    }

    public function addFilms($acteur){
        $this->_acteurs[] = $acteur;
    }

    public function listeRoleIncarner(){
        $result ="";
        echo  "Le genre  ".$this->getNom()." est associé ";
        foreach($this->_acteurs as $acteurs){
            $result .= $acteurs->getNom()." ".$acteurs->getNom().", ";
        }
        return $result."<br>";
    }
}
?>