<?PHP

class Film{

    private string $_titre;
    private Realisateur $_realisateur;
    private Genre $_genre;    
    private string $_dateSortie;
    private int $_duree;
    private Casting $_casting;

    public function __construct(string $titre,Realisateur $realisateur,Genre $genre,string $dateSortie, int $duree){
        $this->_titre = $titre;
        $this->_realisateur = $realisateur;
        $this->_genre = $genre;        
        $this->_dateSortie = $dateSortie;
        $this->_duree = $duree;
        $this->_casting = [];
    }

    public function afficherFilm(){
        return  "Titre: $this->_titre <br>
                 Réalisateur: ".$this->_realisateur->getNom() ." ".$this->_realisateur->getPrenom() ."<br>".
                 "Genre: ".$this->_genre."<br>".
                 "Date Sortie: ".$this->_dateSortie."<br>".
                 "Durée: ".$this->_duree." min<br>";
    }

    public function addCasting(Casting $casting){
        $this->_casting[] = $casting;
    }

    public function afficherCasting(){
        $result ="";
        foreach($this->_casting as $casting){
            $result .= $casting->getNom()." ";
        }
    }
}
?>