{% extends 'base.html.twig' %}
{% block body %}

    <p> Ici vous pouvez parametrer un bareme !	 </p>
    
   <form method = "get" action="http://webinfo.iutmontp.univ-montp2.fr/~cadarsir/pag/public/index.php/bareme/verifybareme">
   	<div>
   		<p> Pour toutes les intervalles fermante de fin, vous pouvez laisser blanc pour indiquer une valeur supérieure à la borne inférieure. </p>	
   		<p> Donnez une description à votre barème : </p>
   		Nom de votre barème :<input type="text" name="nom"><br>

   		<p> Comment déterminer les points pour la progression? (Niveau final - Initial) : <br></p>
Intervalle pour 1pt: <input type="number" name="1param11" value="5"><input type="number" name="1param12" value="10"><br>
Intervalle pour 2pt: <input type="number" name="1param21" value="10"><input type="number" name="1param22" value="20"><br>
Intervalle pour 3pt: <input type="number" name="1param31" value="20"><input type="number" name="1param32" value="30"><br>
Intervalle pour 4pt: <input type="number" name="1param41" value="30"><input type="number" name="1param42" value="40"><br>
Intervalle pour 5pt: <input type="number" name="1param51" value="40"><input type="number" name="1param52" value="50"><br>
		<br>
		<p> Comment déterminer les points pour le temps d'entrainement (en minutes) ? : <br> </p>
Intervalle pour 1pt: <input type="number" name="2param11" value="0"><input type="number" name="2param12" value="60"><br>
Intervalle pour 2pt: <input type="number" name="2param21" value="60"><input type="number" name="2param22" value="90"><br>
Intervalle pour 3pt: <input type="number" name="2param31" value="90"><input type="number" name="2param32" value="150"><br>
Intervalle pour 4pt: <input type="number" name="2param41" value="150"><input type="number" name="2param42" value="180"><br>
Intervalle pour 5pt: <input type="number" name="2param51" value="180"><input type="number" name="2param52" value=""><br>
<br>
<p> Comment déterminer les points pour le nombre de niveaux acquis? ? : <br> </p>
Intervalle pour 1pt: <input type="number" name="3param11" value="0"><input type="number" name="3param12" value="4"><br>
Intervalle pour 2pt: <input type="number" name="3param21" value="4"><input type="number" name="3param22" value="6"><br>
Intervalle pour 3pt: <input type="number" name="3param31" value="6"><input type="number" name="3param32" value="7"><br>
Intervalle pour 4pt: <input type="number" name="3param41" value="7"><input type="number" name="3param42" value="10"><br>
Intervalle pour 5pt: <input type="number" name="3param51" value="10"><input type="number" name="3param52" value=""><br>
<br><br>
Mettre ce barème en favori? <input type="checkbox" id="favori" name="favori" value="favori">
<input type="submit">
</form>
</div>

{% endblock %}