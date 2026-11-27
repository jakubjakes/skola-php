# 🐘 Školní projekty – PHP a MySQL

Cvičení z PHP a databází ze střední školy (předmět DBA).
Jsou tu formuláře, práce se soubory a hlavně webové aplikace napojené na **MySQL databázi**.

---

## ⭐ Nejzajímavější projekty

### 🏨 `hotely/` – databáze rekreačních objektů
Webová aplikace nad databází zhruba 1000 hotelů a penzionů.
- 🔍 filtrování a zobrazení záznamů
- ➕ vkládání, ✏️ úprava a 🗑️ mazání (kompletní **CRUD**)

### 📖 `PRACE II/` – kniha návštěv s databází
Samostatná práce. Aplikace umí:
- vkládat a zobrazovat záznamy
- vyhledávat a řadit
- seskupovat (`GROUP BY`)
- mazat záznamy

### 🍵 `web/` – web o čajích
Vícestránkový web o druzích čaje (zelený, černý, bílý, žlutý, oolong).
- společná hlavička a patička přes `include`
- vlastní CSS styly

---

## 📂 Další cvičení

| Soubor | Obsah |
|---|---|
| 📝 `kniha.php`, `kniha_script.php` | Kniha návštěv, která ukládá záznamy do textového souboru |
| 📋 `form.php`, `maturita_z.php` | Formuláře a zpracování odeslaných dat (GET/POST) |
| 🔢 `pole.php`, `cykli.php`, `vetveni.php`, `funkce.php` | Základy PHP: pole, cykly, větvení a funkce |
| 🔎 `regular.php` | Regulární výrazy |
| 📁 `soubory.php` | Čtení a zápis souborů |

---

## ▶️ Spuštění

1. Nainstaluj si lokální server s PHP a MySQL, například [XAMPP](https://www.apachefriends.org/).
2. Zkopíruj složku do `htdocs`.
3. Otevři `http://localhost/...` v prohlížeči.

> ⚙️ Připojení k databázi je nastavené na výchozí XAMPP (`localhost`, uživatel `root`, bez hesla).

---

## 📌 Poznámka

Jsou to školní cvičení zaměřená na základy. SQL dotazy se skládají přímo z hodnot z formuláře.
V reálné aplikaci by bylo potřeba použít **prepared statements** (PDO / mysqli), aby nešlo provést SQL injection.

---

🛠️ **Technologie:** PHP · MySQL · HTML · CSS · XAMPP
