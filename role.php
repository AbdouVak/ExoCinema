<?PHP
class Role{
    private string $_nom;

    public function __construct(string $nom){
        $this->_nom = $nom;
    }

    public function getNom(){
        return $this->_nom;
    }
}
?>