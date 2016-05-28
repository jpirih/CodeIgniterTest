# CodeIgniter Test

## About 

CodeIgniter Test je ena testna aplikacija, ki sem jo ustvaril z namenom testiranja razliènih možnosti, ki jih omogoèa CodeIgniter Framework.
Podatki v bazi so izmišljeni tudi èe so neaktera imena oseb resnièna. 

Preden boste poganjali aplikacijo na svojem localhostu si nastavite parametnre znotraj application/config/config.php  base_url() 
glede na podatke, ki veljajo za vaš strežnik 

Prav tako si ustrezno nastavite podatke za povezavo z mysql bazo podatkov znotraj application/config/database.php, da bo
povezava z boazo podatkov pravilno delovala. 

**Opozorilo** zgoraj opisane nastavitve, ki so trenutno v application config namreè veljajo za moj localhost. 

## Strkuktura

1. Nekaj statiènih stani z lorenIpsum tekstom samo zato, da sem testiral View Controller povezave
2. Zaviek users  Povezava z mysql bazo dodajanje novih uporabnikov, spreminjanje podatkov, brisanje teh uporabnikov. 
3. Model_users - application/models/Model_users.php - vsebuje funkcije za lažje delo z bazo.  To da aplkacija uporablja bazo podatkov 
pa sem specificiral kar v appllication/config/autoload. 

4 bazo  sem kreriral kar direktno z mysql sehll-om. 

**Testna baza je dostopna v mapi podatki** - vsi pdoatki v bazi so izmišljeni. 

Lep Pozdrav 

Janko Pirih 

Podlanišèe, Maj 2016 