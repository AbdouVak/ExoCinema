<h1>Exercice Cinema</h1>

<p>Vous avez en charge de gérer différentes entités autour de la thématique du cinéma.</p>

<h2>Résultat</h2>


<?PHP
include('film.php');
include('casting.php');
include('personne.php');
include('genre.php');
include('role.php');

$SF = new Genre("Science-fiction");
$GeorgeL = new Realisateur("Lucas", "George" ,"homme" ,"1944-05-04");
$StarWars = new Film("Star Wars",$GeorgeL,$SF, "1980-05-06", 114);

echo $StarWars->afficherCasting();
?>