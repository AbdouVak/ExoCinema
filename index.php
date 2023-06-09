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

$LukeS = new Role("Luke Skywalker");
$MarkH = new Acteur("Hamill", "Mark" ,"homme" ,"1964-08-14",$LukeS);
$CastingLS = new Casting($MarkH,$LukeS,$StarWars);

$HanS = new Role("Han Solo");
$HarrisonF = new Acteur("Harrinson", "Ford" ,"homme" ,"1942-07-13",$HanS);
$CastingHS = new Casting($HarrisonF,$HanS,$StarWars);

echo $HanS->listeRoleIncarner();
echo $StarWars->afficherCasting();
echo $SF->listeFilms();
echo $GeorgeL->filmographie();
echo $MarkH->filmographie();

?>