<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Rekreační objekty</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 20px; }
        .kontejner { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); max-width: 1200px; margin: auto; }
        .formular-box { background: #e9ecef; padding: 15px; border-radius: 5px; margin-bottom: 20px; display: flex; gap: 20px; flex-wrap: wrap; }
        .sloupec { flex: 1; min-width: 200px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; font-size: 14px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #007BFF; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
        input[type="submit"] { background: #28a745; color: white; border: none; padding: 10px 20px; cursor: pointer; border-radius: 4px; font-weight: bold; }
        input[type="submit"]:hover { background: #218838; }
    </style>
</head>
<body>

<div class="kontejner">
    <h2>Rekreační objekty</h2>

    <?php
    // 1. Zpracování výchozích hodnot z formuláře
    $seradit_podle = $_POST['seradit_podle'] ?? 'cislo';
    $smer_razeni = $_POST['smer'] ?? 'asc';
    $vybrany_typ = $_POST['typ'] ?? 'vse';
    $vybrane_parkovani = $_POST['parkovani'] ?? 'nerozhoduje';

    // 2. Načtení dat ze souboru
    $soubor = 'hotely.txt';
    $data = [];
    $sloupce = [];

    if (file_exists($soubor)) {
        $radky = file($soubor, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        
        // První řádek obsahuje názvy sloupců (hlavičku)
        $hlavicka = explode(';', array_shift($radky));
        $sloupce = $hlavicka;

        // Projdeme zbytek řádků a uložíme si je jako asociativní pole
        foreach ($radky as $radek) {
            $hodnoty = explode(';', $radek);
            if (count($hodnoty) == count($hlavicka)) {
                $data[] = array_combine($hlavicka, $hodnoty);
            }
        }
    } else {
        echo "<p style='color:red;'>Soubor $soubor nebyl nalezen!</p>";
    }

    // 3. Získání unikátních typů ubytování pro roletku ve formuláři
    $vsechny_typy = array_unique(array_column($data, 'typ'));
    sort($vsechny_typy);
    ?>

    <form method="POST" action="">
        <div class="formular-box">
            <div class="sloupec">
                <strong>Seřaď podle:</strong><br>
                <select name="seradit_podle">
                    <?php
                    // Vygenerování možností pro řazení podle hlavičky souboru
                    foreach ($sloupce as $sloupec) {
                        $selected = ($sloupec == $seradit_podle) ? 'selected' : '';
                        echo "<option value='$sloupec' $selected>$sloupec</option>";
                    }
                    ?>
                </select>
                <br><br>
                <input type="radio" name="smer" value="asc" <?= ($smer_razeni == 'asc') ? 'checked' : '' ?>> vzestupně<br>
                <input type="radio" name="smer" value="desc" <?= ($smer_razeni == 'desc') ? 'checked' : '' ?>> sestupně
            </div>

            <div class="sloupec">
                <strong>Vyber typ ubytování:</strong><br>
                <select name="typ">
                    <option value="vse">vše</option>
                    <?php
                    foreach ($vsechny_typy as $typ_ubytovani) {
                        if (empty($typ_ubytovani)) continue; // Přeskočí prázdné typy
                        $selected = ($typ_ubytovani == $vybrany_typ) ? 'selected' : '';
                        echo "<option value='$typ_ubytovani' $selected>$typ_ubytovani</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="sloupec">
                <strong>Parkování v místě:</strong><br>
                <input type="radio" name="parkovani" value="nerozhoduje" <?= ($vybrane_parkovani == 'nerozhoduje') ? 'checked' : '' ?>> nerozhoduje<br>
                <input type="radio" name="parkovani" value="ANO" <?= ($vybrane_parkovani == 'ANO') ? 'checked' : '' ?>> ANO<br>
                <input type="radio" name="parkovani" value="NE" <?= ($vybrane_parkovani == 'NE') ? 'checked' : '' ?>> NE
            </div>

            <div class="sloupec" style="display: flex; align-items: center;">
                <input type="submit" value="Zobraz">
            </div>
        </div>
    </form>

    <?php
    // 5. Filtrování dat
    $vyfiltrovana_data = [];
    foreach ($data as $radek) {
        $splnuje_typ = ($vybrany_typ == 'vse' || $radek['typ'] == $vybrany_typ);
        $splnuje_parkovani = ($vybrane_parkovani == 'nerozhoduje' || $radek['parkoviste'] == $vybrane_parkovani);

        if ($splnuje_typ && $splnuje_parkovani) {
            $vyfiltrovana_data[] = $radek;
        }
    }

    // 6. Řazení dat
    usort($vyfiltrovana_data, function($a, $b) use ($seradit_podle, $smer_razeni) {
        $hodnotaA = $a[$seradit_podle];
        $hodnotaB = $b[$seradit_podle];

        // Pokud řadíme čísla (např. id, počet lůžek), převedeme je na int/float pro správné srovnání
        if (is_numeric($hodnotaA) && is_numeric($hodnotaB)) {
            $vysledek = $hodnotaA <=> $hodnotaB;
        } else {
            // Textové řazení (bez ohledu na velikost písmen)
            $vysledek = strcasecmp($hodnotaA, $hodnotaB);
        }

        // Obrátíme výsledek, pokud chceme sestupné řazení
        return ($smer_razeni == 'asc') ? $vysledek : -$vysledek;
    });

    // 7. Výpis tabulky
    if (count($vyfiltrovana_data) > 0) {
        echo "<table>";
        echo "<tr>";
        // Vykreslení hlavičky tabulky
        foreach ($sloupce as $sloupec) {
            echo "<th>$sloupec</th>";
        }
        echo "</tr>";

        // Vykreslení řádků
        foreach ($vyfiltrovana_data as $radek) {
            echo "<tr>";
            foreach ($sloupce as $sloupec) {
                echo "<td>" . htmlspecialchars($radek[$sloupec]) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>Žádné záznamy neodpovídají vybraným kritériím.</p>";
    }
    ?>
</div>

</body>
</html>