# CFFightclub
This is a free time project to automize the management of an offer in a gaming clan

This code is an unfinished version. Do not try to use it until it is released!

Current goals:
- Creating the fundamental functions
   --> Display of the current ranking
   --> HTML Adaptation based on the user and the current status (available, unavailable, challenged)
   --> Creating the php basis

-- German comments for the developer --

Aktueller Stand Projekt "CF_App":
- HTML Seite angelegt
- CSS File angelegt
- Graphische JavaScript Funktionalit�t angelegt

Was wird gewollt?
Bei der Anforderung der Seite:
- Check des Users auf das Status-Attribut
	--> abh�ngig von dem Status ist der Inhalt der Webseite anders //Mach dies per php-file das ein HTML-Template generiert
		- Status "Challenged": Anzeige des aktuellen Gegners und Textfelder f�r das Eintragen des Endstandes sowie der Replays
		- Status "Available": Anzeige der Forderungsseite die bereits vorhanden ist
		- Status "Unavailable": Anzeige einer Informationsseite ohne Forderungs-Funktionalit�t

Forderung:
- Der User klickt auf den Challenge-Button
	--> Ein Form wird zum Server geschickt (enth�lt die ID des Spielers) //Nutzen der POST-Methode f�r mehr security
	--> Der Server macht eine Zuteilung //Jeweils die SQLQueries schreiben
		- Extraction der ID aus dem Form (done)
		- Check ob der Spieler schon gematched wurd (Zeitkritisch) (TODO)
		- Auswahl der verf�gbarer! Spieler aus der MMR-Liste (done)
		- Auswahl des Gegners per Pseudo-Randomnr-Generator
		- Eintrag der Gegner in der jeweiligen Sparte und setzen des Status-Attributs auf "challenged"
		- �bermittlung des Gegnernamens an den Browser
	--> Anzeige des Gegners
	//Der Gegner muss benachrichtigt werden (das wird in Abstimmung mit dem Admin gel�st)