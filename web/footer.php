 <p>&copy; 2025 Svět čajů</p>
       <p>Zdroje: <a href="http://www.cajovna.cz" target="_blank" title="www.cajovna.cz">http://www.cajovna.cz</a>; <a href="http://cs.wikipedia.org/wiki/%C4%8Caj" target="_blank" title="cs.wikipedia.org">http://cs.wikipedia.org</a></p>
       <p>
           <?php
           $dny = ["Neděle", "Pondělí", "Úterý", "Středa", "Čtvrtek", "Pátek", "Sobota"];
           $mesic =["Leden", "Únor", "Březen", "Duben", "Květen", "Červen", "Červenec", "Srpen", "Září", "Říjen", "Listopad", "Prosinec"];
           echo "Dnes je " . $dny[date("w")] . " " . date("j. ") . $mesic[date("n") - 1] . " " . date("Y");
           ?>
       </p>