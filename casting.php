<?PHP
class Casting{
    private Acteur $_acteur;
    private Role $_role;

    public function __construct(Acteur $acteur, Role $role){
        $this->_acteur = $acteur;
        $this->_role = $role;
    }

    public function getActeur(){
        return $this->_acteur->getNom();
    }
    
}
?>