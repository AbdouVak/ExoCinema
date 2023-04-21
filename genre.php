<?PHP
class Genre{
    private string $_genre;
    private array $_film;

    public function __construct(string $genre){
        $this->_genre = $genre;
        $this->_film = [];
    }

    public function __toString(){
        return $this->_genre;
    }

    public function getGenre():string{
        return $this->_genre;
    }
    public function setGenre($genre){
        $this->_genre = $genre;
    }

    public function addFilms($film){
        $this->_film[] = $film;
    }
    
    public function listeFilms(){
        $result ="";

        echo  "Le genre  ".$this->getGenre()." est associé à  ".count($this->_film) ." films:";
        foreach($this->_film as $films){
            $result .= $films->getTitre().", ";
        }
        return $result."<br>";
    }
}
?>