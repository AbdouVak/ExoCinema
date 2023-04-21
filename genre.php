<?PHP
class Genre{
    private string $_genre;

    public function __construct(string $genre){
        $this->_genre = $genre;
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

}
?>