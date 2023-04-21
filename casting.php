<?PHP
class Casting{
    private Acteur $_acteur;
    private Role $_role;

    public function __construct(Acteur $acteur, Role $role){
        $this->_acteur = $acteur;
        $this->_role = $role;
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
}
?>