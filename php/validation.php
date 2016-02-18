
<?php
//Je me connecte à la base de donnée grâce à ce code
$serveur = "sql.free.fr"; // Serveur mySQL
$base = "xxxxxxxxxxxx"; // Base de donnees mySQL
$user = "xxxxxxxxxxxxx"; // Login de connection à mySQL
$motdepasse = "xxxxxxxxxxxxx"; // Mot de passe pour mySQL
@mysql_connect($serveur, $user, $motdepasse) or die("Erreur de connection.");
@mysql_select_db($base);


$nouvellerequete = mysql_query("SELECT id, nom, tag, leader1, leader2, war1, war2, pseudo, site, banniere, logo, tracker, serveur, ip, email from inscrit ") or die ("Erreur sql ".mysql_error());

//On sélectionne dans carnet tous champs dans l'ordre décroissant
//Permettant après d'afficher en premier l'enregistrement le plus récent.
//Pour l'ordre croissant il suffit de retirer ORDER BY id DESC.
//tant que la table n'est pas parcouru totalement on affiche les champs...

while ( $result = mysql_fetch_array($nouvellerequete))
{
echo"Prénom : $result[nom] <br>";
echo"tag: $result[tag] <br>";
echo"leader1 : $result[leader1] <br>";
echo"leader2 : $result[leader2] <br>";
echo"War-arranger : $result[war1] <br>";
echo"War-arranger : $result[war2] <br>";
echo"Nom des joueurs : $result[pseudo] <br>";
echo"Adresse du site : $result[site] <br>";
echo"lien de la banniere : $result[banniere] <br>";
echo"lien du logo : $result[logo] <br>";
echo"lien tracker : $result[tracker] <br>";
echo"Nom du serveur  : $result[serveur] <br>";
echo"ip du serveur : $result[ip] <br>";
echo"email: $result[email] <br><br>";
}
mysql_close();
?> 


<!DOCTYPE html>


<html>

<head>
<title>formulaire d'inscription</title>
<meta name="GENERATOR" content="Arachnophilia 4.0">
<meta name="FORMATTER" content="Arachnophilia 4.0">
</head>

<body>

<br><br><br>
<form action="valide.php" method="post">
<input type="hidden" name="subject" value="inscription au tournoi Over There : Rescue Edition">
<table>
   <tr>
      <td ><div>Nom du clan : </div></td>
      <td >&nbsp;&nbsp;<Input name="nom" size=30></td>
   </tr>
   <tr>
      <td ><div>Tag du clan :  </div></td>
      <td >&nbsp;&nbsp;<Input name="tag" size=10></td>
      
   </tr>
   <tr>
      <td ><div>Nom du leader "1" : </div></td>
      <td >&nbsp;&nbsp;<Input name="leader1" size=30></td>
   </tr>
   <tr>
      <td ><div>Nom du leader "2" : </div></td>
      <td >&nbsp;&nbsp;<Input name="leader2" size=30></td>
   </tr>
   <tr>
      <td ><div>War-Arranger "1" : </div></td>
      <td >&nbsp;&nbsp;<Input name="war1" size=30></td>
   </tr>
   <tr>
      <td ><div>War-Arranger "2" : </div></td>
      <td >&nbsp;&nbsp;<Input name="war2" size=30></td>
   </tr>
   <tr>
      <td ><div>Pseudo des joueurs :<br /><i>(Avec le TAG)</i></div></td>
      <td >&nbsp;&nbsp;<textarea name="pseudo" cols=40 rows=5></textarea></td>
   </tr>
   <tr>
      <td ><div>Adresse de votre site : </div></td>
      <td >&nbsp;&nbsp;<Input name="site" size=30></td>
   </tr>
   <tr>
      <td ><div >Lien de votre bannières : <br /><i>(468x60)</i></div></td>
      <td >&nbsp;&nbsp;<Input name="banniere" size=30></td>
   </tr>
   <tr>
      <td ><div >Lien de votre logo : <br /><i>Maxi (200x200)</i></div></td>
      <td >&nbsp;&nbsp;<Input name="logo" size=30></td>
   </tr>
   <tr>
      <td ><div >Lien du tracker : <br /><i>Liens complet</i></div></td>
      <td >&nbsp;&nbsp;<Input name="tracker" size=30></td>
   </tr>
   <tr>
      <td ><div >Nom du serveur : </div></td>
      <td >&nbsp;&nbsp;<Input name="serveur" size=30></td>
   </tr>
   <tr>
      <td ><div >IP du serveur : </div></td>
      <td >&nbsp;&nbsp;<Input name="ip" size=30></td>
   </tr>
   <tr>
      <td ><div >E-Mail de contact : </div></td>
      <td >&nbsp;&nbsp;<Input name="email" size=30></td>
   </tr>

</table>   
 <div>
<input type="image" src="http://www.over-there.fr/images/envoyer.gif" width=73 height=19 alt="Envoyer"></div>
</form><br><br><br>

</body>

</html>
