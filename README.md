# tudasklaszter

##Setup
  1. Az adatbázis létrehozáshoz szükséges scriptek a db mappában lévő .sql kiterjesztésűek
  2. A következő sorrendben szükséges futtatni: `createTudasklaszterDB.sql` ez létrehozza a tudasklaszter nevű adatbázist,
   utána a `createImgTable.sql` a képeket tartalmazó táblát, végül a `createUserTable.sql` a felhasználókat tartalmazó táblát hozza létre

##Struktúra
  1. pages mappa tartalmazza a megjelenítendő oldalakat: Kezdőlap, Kutatások, Galéria
  2. db mappa az adatbázishoz szükséges scripteket tartalmazza
  3. components mappa az oldalakat felépítő szoftverkomponenseket tartalmazza
  4. media mappa a felhasználók által feltöltött képeket, illetve a logo-t tartalmazza
  5. style.css az általános design elemeket tartalmazza

##Design pattern
  Frontcontroller mintát alkalmazva generálódnak dinamikusan az oldalak, ezt az index.php, index.tpl.php, illetve a config.inc.php fájlok segítségével valósítottam meg.

##Repository
  https://github.com/barbara90/tudasklaszter 