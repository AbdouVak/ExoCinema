<?PHP

class Film{

    private string $_titre;
    private Realisateur $_realisateur;
    private Genre $_genre;    
    private DateTime $_dateSortie;
    private int $_duree;
    private array $_casting;

    public function __construct(string $titre,Realisateur $realisateur,Genre $genre,string $dateSortie, int $duree){
        $this->_titre = $titre;
        $this->_realisateur = $realisateur;
        $this->_genre = $genre;        
        $this->_dateSortie = new DateTime($dateSortie) ;
        $this->_duree = $duree;
        $this->_casting = [];
    }

    public function getTitre() :string{
        return $this->_titre;
    }    
    public function setTitre($Titre){
        $this->_titre = $Titre;
    }
    
    public function getRealisateur():Realisateur{
        return $this->_realisateur;
    }    
    public function setRealisateur($realisateur){
        $this->_realisateur = $realisateur;
    }

    public function getGenre():Genre{
        return $this->_genre;
    }    
    public function setGenre($genre) {
        $this->_genre = $genre;
    }

    public function getDateSortie() :DateTime{
        return $this->_dateSortie;
    }    
    public function setDateSortie($dateSortie){
        $this->_dateSortie = $dateSortie;
    }

    public function getDuree() :int{
        return $this->_duree;
    }    
    public function setDuree($duree){
        $this->_duree = $duree;
    }

    public function addCasting(Casting $casting){
        $this->_casting[] = $casting;
    }

    public function afficherFilm(){
        return  "Titre: $this->_titre <br>
                 Réalisateur: ".$this->_realisateur->getNom() ." ".$this->_realisateur->getPrenom() ."<br>".
                 "Genre: ".$this->_genre."<br>".
                 "Date Sortie: ".$this->_dateSortie."<br>".
                 "Durée: ".$this->_duree." min<br>";
    }

    public function afficherCasting(){
        $result ="";
        echo "Dans le film $this->_titre, ";
        foreach($this->_casting as $casting){
            $result .= $casting->getRole()->getNom()."a été incarné par ".$casting->getActeur()->getNom()." ".$casting->getActeur()->getPrenom().", ";
        }
        return $result;
    }
}
?>