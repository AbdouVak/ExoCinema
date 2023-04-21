<?PHP
class Casting{
    private Acteur $_acteur;
    private Role $_role;
    private Film $_film;


    public function __construct(Acteur $acteur, Role $role, Film $film){
        $this->_acteur = $acteur;
        $this->_role = $role;
        $this->_film = $film;


        $this->_film->addCasting($this);
        $this->_acteur->setFilm($film);
        $this->_role->addFilms($acteur);
    }

    public function getActeur(){
        return $this->_acteur;
    }
    public function setActeur($acteur){
        $this->_acteur = $acteur;
    }

    public function getRole(){
        return $this->_role;
    }
    public function setRole($role){
        $this->_role = $role;
    }

    public function getFilm(){
        return $this->_film;
    }
    public function setFilm($film){
        $this->_film = $film;
    }
}
?>