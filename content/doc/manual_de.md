---   
title: J-Pilot Handbuch
date: "2000-07-30 12:00:00"
author: "Henrik Becker"
---

---
<em>J-Pilot ist eine Desktop-Anwendung, mit der
        sich der Palm Pilot der Firma 3Com unter Linux betreiben läßt.
        Es   wurde  mit  dem   GTK-Toolkit  geschrieben  und setzt auf
        <em>Pilot-Link</em> auf. Er bietet die Standardanwendungen für
        Adressen,  Termine,  Notizen  und Aufgaben.   Darüber   hinaus
        bietet er eine  Installationsfunktion für PalmOS-Programme und
        z.Zt.  ein Plugin für die Ausgaben-Anwendung.  Weitere Plugins
        sind über die Homepage von J-Pilot erhältlich.</em>

---

<h2><a name="toc1">1.</a> <a href="#s1">Einleitung</a></h2>

<ul>
<li><a href="#ss1.1">1.1 Vorspiel</a>
</li><li><a href="#ss1.2">1.2 Über dieses Dokument</a>
</li></ul>
<p>
</p><h2><a name="toc2">2.</a> <a href="#s2">Installation</a></h2>

<ul>
<li><a href="#ss2.1">2.1 Voraussetzungen</a>
</li><li><a href="#ss2.2">2.2 Übersetzung von J-Pilot</a>
</li><li><a href="#ss2.3">2.3 Deinstallieren</a>
</li><li><a href="#ss2.4">2.4 Sicherheitshinweis/Disclaimer!</a>
</li><li><a href="#ss2.5">2.5 Einrichtung der seriellen Schnittstelle</a>
</li><li><a href="#ss2.6">2.6 Farbeinstellungen/Color Files</a>
</li></ul>
<p>
</p><h2><a name="toc3">3.</a> <a href="#s3">Kalender</a></h2>

<ul>
<li><a href="#ss3.1">3.1 Termin ansehen</a>
</li><li><a href="#ss3.2">3.2 Wochen- &amp; Monatsansicht - NEU Version 0.98 -</a>
</li><li><a href="#ss3.3">3.3 Termin löschen</a>
</li><li><a href="#ss3.4">3.4 neuen Termin hinzufügen - NEU! Version 0.97 -</a>
</li><li><a href="#ss3.5">3.5 Termin verändern</a>
</li></ul>
<p>
</p><h2><a name="toc4">4.</a> <a href="#s4">Adressenliste</a></h2>

<ul>
<li><a href="#ss4.1">4.1 Adressen ansehen</a>
</li><li><a href="#ss4.2">4.2 Quick Find</a>
</li><li><a href="#ss4.3">4.3 Adresse löschen</a>
</li><li><a href="#ss4.4">4.4 Neue Adresse hinzufügen</a>
</li><li><a href="#ss4.5">4.5 Adresseintrag verändern</a>
</li></ul>
<p>
</p><h2><a name="toc5">5.</a> <a href="#s5">Aufgabenliste</a></h2>

<ul>
<li><a href="#ss5.1">5.1 Ansicht von Aufgaben</a>
</li><li><a href="#ss5.2">5.2 Aufgabe löschen</a>
</li><li><a href="#ss5.3">5.3 Neue Aufgabe eingeben</a>
</li><li><a href="#ss5.4">5.4 Aufgabeneintrag verändern</a>
</li></ul>
<p>
</p><h2><a name="toc6">6.</a> <a href="#s6">Merkzettel</a></h2>

<ul>
<li><a href="#ss6.1">6.1 Ansicht von Merkzetteln</a>
</li><li><a href="#ss6.2">6.2 Verwaltung von Merkzetteln</a>
</li></ul>
<p>
</p><h2><a name="toc7">7.</a> <a href="#s7">Suche</a></h2>

<p>
</p><h2><a name="toc8">8.</a> <a href="#s8">Installation von PalmPilot-Anwendungen</a></h2>

<p>
</p><h2><a name="toc9">9.</a> <a href="#s9">Einstellungen</a></h2>

<p>
</p><h2><a name="toc10">10.</a> <a href="#s10">Drucken - Neu! Version 0.98 -</a></h2>

<p>
</p><h2><a name="toc11">11.</a> <a href="#s11">Quit/Sync/Backup</a></h2>

<ul>
<li><a href="#ss11.1">11.1 Quit</a>
</li><li><a href="#ss11.2">11.2 Sync/Backup</a>
</li></ul>
<p>
</p><h2><a name="toc12">12.</a> <a href="#s12">Sonstiges</a></h2>

<ul>
<li><a href="#ss12.1">12.1 Datenbanken auf dem PalmPilot wiederherstellen</a>
</li><li><a href="#ss12.2">12.2 Benutzung der ,,Home`` Umgebungsvariable</a>
</li><li><a href="#ss12.3">12.3 Hoppla, Zurücksetzen ...</a>
</li><li><a href="#ss12.4">12.4 Feedback/Unterstützung</a>
</li></ul>
<p>
</p><h2><a name="toc13">13.</a> <a href="#s13">Plugins - Neu! Version 0.98 -</a></h2>

<ul>
<li><a href="#ss13.1">13.1 Was sind Plugins?</a>
</li><li><a href="#ss13.2">13.2 Verfügbare Plugins</a>
</li><li><a href="#ss13.3">13.3 Schreiben Sie Plugins!</a>
</li><li><a href="#ss13.4">13.4 Installation von Plugins</a>
</li><li><a href="#ss13.5">13.5 Systemweite oder Userinstallation</a>
</li></ul>
<p>
</p><h2><a name="toc14">14.</a> <a href="#s14">FAQ</a></h2>

<ul>
<li><a href="#ss14.1">14.1 Warum heißt das Programm ,,J-Pilot``,  obwohl es nicht  in Java</a>
</li><li><a href="#ss14.2">14.2 Warum ist J-Pilot kostenlos?</a>
</li><li><a href="#ss14.3">14.3 Bestehen Pläne für einen KDE- oder GNOME-Port?</a>
</li><li><a href="#ss14.4">14.4 Wie kann ich löschen und einfügen (drag and drop)?</a>
</li><li><a href="#ss14.5">14.5 Der  Backup-  oder  Syncvorgang  bricht mit  der  Fehlermeldung</a>
</li><li><a href="#ss14.6">14.6 Ich  habe ein Plugin  installiert, aber  es erscheint  nicht in</a>
</li><li><a href="#ss14.7">14.7 J-Pilot kann nicht auf den PalmPilot zugreifen. Woran kann das liegen?</a>
</li></ul>
<p>
</p>

---

<h2><a name="s1">1. Einleitung</a></h2>

<p>
</p><p>
</p><h2><a name="ss1.1">1.1 Vorspiel</a>
</h2>

<p>
</p><p>J-Pilot wurde geschrieben von <b>Judd Montgomery</b>.
</p><p>
</p><p>EMail:             
<a href="mailto:judd@jpilot.org">judd@jpilot.org</a></p><p>
</p><p>
</p><p>J-Pilot          Homepage:   
<a href="http://jpilot.org/">jpilot.org</a></p><p>
</p><p>Deutsche Übersetzung          des       Handbuchs:        
<a href="mailto:HenrikBecker@web.de">HenrikBecker@web.de</a></p><p>
</p><p>Es wurde berichtet, daß J-Pilot auf folgenden Ports läuft:
</p><p>
</p><ul>
<li>Linux</li>
<li>Solaris</li>
<li>Irix</li>
<li>FreeBSD</li>
</ul>
<p>Weiterhin sollte J-Pilot mit folgenden Palm-Versionen laufen:
</p><p>
</p><ul>
<li>1000</li>
<li>5000</li>
<li>Personal</li>
<li>Professional</li>
<li>III, IIIx, IIIe</li>
<li>V, VII</li>
<li>Visor</li>
</ul>
<p>
</p><h2><a name="ss1.2">1.2 Über dieses Dokument</a>
</h2>

<p>
</p><p>Die meisten  Dinge, die  in diesem Dokument  erläutert werden,
sind eigentlich  ziemlich selbsterklärend.  Dies  gilt für die
Installation und die Systemvoraussetzungen genauso wie für die
Hinweise zum  Gebrauch von  J-Pilot. Diese Anleitung  wurde vor
allem für neue User sowie für solche Menschen geschrieben, die
überlegen, ob sie J-Pilot für sich nutzen wollen und sich daher
über die Fähigkeiten von  J-Pilot informieren wollen, ohne viel
Zeit   für   den   Download,   die   Installation   usw.    zu
verschwenden.
</p><p>
</p><p>In der eigentlichen  Gebrauchsanleitung wurden solche Hinweise
mit einem <b>"TIP"</b> markiert, von denen angenommen werden
kann,  daß  sie  vielleicht   nicht  aus  sich  selbst  heraus
verständlich  sind.   Wenn  Sie  es eilig  haben,  halten  Sie
einfach nach diesen Ausschau.
</p><p>Die  Version   von  J-Pilot,   an  der  sich   dieses  Handbuch
orientiert, ist <b>Version 0.99</b>.

---

<h2><a name="s2">2. Installation</a></h2>

<p>
</p><p>
</p><h2><a name="ss2.1">2.1 Voraussetzungen</a>
</h2>

<p>
</p><p>Für die  Installation und natürlich  auch für den  Betrieb von
J-Pilot   ist   das   GTK+-Toolkit  und   die   glib-Bibliothek
erforderlich.    Keine  Sorge,   beide   werden  normalerweise
standardmäßig mit allen Distributionen installiert. 
</p><p>
</p><p>Weiterhin ist für die  Kommunikation des Programmes J-Pilot mit
dem PalmPilot  das extra zu  installierende Programm <em>Pilot
Link</em>  vonnöten.  Aber  auch  dieses wird  mit fast  allen
Distributionen      ausgeliefert      und      dementsprechend
installiert.    Pilot    Link    wird    zur    Zeit    wieder
weiterentwickelt. Die Installation  einer neuen Version sollte
sich also lohnen.
</p><p>
</p><p>Um  J-Pilot zu übersetzen  (,,compilieren``), brauchen  Sie die
GTK+  Version 1.2 oder  neuer. Diese  muß installiert  und dem
System bekannt  sein. Um heraus zu finden,  welche Version des
GTK+-Toolkits auf Ihrem System  installiert ist, rufen Sie das
Programm gtk-config mit dem folgenden Parameter auf:
</p><p>
</p><pre>gtk-config --version
</pre>
<p>GTK+ erfordert seinersteits wiederum die glib-Bibliothek.  Die
glib-Version   sollte  normalerweise   zu  der   GTK+  Version
korrespondieren. Um  die Versionsnummer der  glib zu erfahren,
verfahren sich auf ähnliche Weise:
</p><p>
</p><pre>glib-config --version
</pre>
<p>Beide Datensätze bekommen sie - sofern nicht schon vorhanden -
auf 
<a href="http://www.gtk.org/">www.gtk.org</a>.
</p><p>
</p><p>Weiterhin muß <b>Pilot Link</b> installiert und eingerichtet
sein.   Entscheidend   ist,  daß  die   zur  Pilot  Link-Suite
gehörenden Programme <em>pilot-xfer</em>, <em>memos</em> sowie
einige  andere  die  Kommunikation  zwischen  J-Pilot  und  dem
PalmPilot durchführen  können. Für den  Download von <em>Pilot
Link</em>     schauen     Sie     doch    mal     bei     
<a href="ftp://ryeham.ee.ryerson.ca/pub/PalmOS">ftp://ryeham.ee.ryerson.ca/pub/PalmOS</a> vorbei.
</p><p>
</p><p><b>Achtung</b>:  Wenn  Sie  <em>Pilot Link</em>  anhand  der
RPM-Pakete installieren,  achten Sie darauf, daß  Sie auch das
<b>pilot-link-dev RPM</b> installieren,  weil sich darin die
Header-Files befinden, die J-Pilot braucht, um übersetzt werden
zu können.
</p><p>Als   zusätzlicher   Hinweis  sei   auf   die  ziemlich   gute
Dokumentation zum  Thema <em>,,Linux und  der PalmPilot``</em>
verwiesen,    die     sich    unter    der     Adresse    
<a href="http://www.orbits.com/Palm">www.orbits.com/Palm</a>
im Internet findet.
</p><p>
</p><h2><a name="ss2.2">2.2 Übersetzung von J-Pilot</a>
</h2>

<p>
</p><p>Um J-Pilot zu übersetzen (,,compilieren``) und zu installieren,
gehen Sie folgendermaßen vor:
</p><p>
</p><p>Wenn Sie  die  Sourcen von   J-Pilot aus dem  Internet  gezogen
haben, müssen Sie diese zunächst in ein Verzeichnis entpacken.
Dies kann  entweder  mit einem  GUI-Tool geschehen,   oder Sie
entpacken   die Sourcen aus dem     TAR-Knäul von Hand.   Dazu
benutzen Sie den Befehl:
</p><p>
</p><pre>tar -xvfz [Dateiname]
</pre>
<p>Wechseln  Sie in das Verzeichnis, in  dem sich die Sourcen von
J-Pilot  dann   befinden    und  melden Sie    sich    als User
<em>root</em> an. Dann geben Sie folgende Befehle ein:
</p><p>
</p><pre>        ./configure
        make
        make install
        
</pre>
<p>Anschließend können Sie J-Pilot aufrufen mit dem Befehl:
</p><p>
</p><pre>jpilot
</pre>
<p>
</p><h2><a name="ss2.3">2.3 Deinstallieren</a>
</h2>

<p>
</p><p>Nur für  den Fall, daß  Sie J-Pilot deinstallieren  wollen, sei
hier auf  den dazu  erforderlichen Befehl verwiesen.   Um eine
<b>neue  Version</b>  zu  installieren, ist  eine  vorherige
Deinstallation <b>nicht</b> erforderlich. Sie deinstallieren
J-Pilot mit dem Befehl: 
</p><p>
</p><pre>make uninstall
</pre>
<p>
</p><h2><a name="ss2.4">2.4 Sicherheitshinweis/Disclaimer!</a>
</h2>

<p>
</p><p>J-Pilot   wurde   eigentlich     so  geschrieben,   daß     der
HotSync-Vorgang besonders sicher  ist.  ABER: Es besteht immer
die    Möglichkeit,    daß es     zu  Unregelmäßigkeiten   und
möglicherweise zu  Datenverlusten  kommt.  Daher sollten Sie,
wenn   sie wichtige Daten auf Ihrem   PalmPilot haben, vor der
Benutzung von J-Pilot  immer ein Backup  machen.  Dazu benutzen
Sie am besten das Programm <em>pilot-xfer</em>:
</p><p>
</p><pre>pilot-xfer -b [Zielverzeichnis]
</pre>
<p>
</p><h2><a name="ss2.5">2.5 Einrichtung der seriellen Schnittstelle</a>
</h2>

<p>
</p><p>Für den   HotSync-Vorgang  benutzt J-Pilot  die  <em>Port</em>-
(,,Schnittstellen``)  und Geschwindigkeitseinstellungen,   die
Sie   im    <em>Einstellungen</em>-Fenster   (,,Preferences``)
auswählen können.
</p><p>
</p><p>Wenn   Sie  hier  nichts   eintragen,  verwendet   J-Pilot  die
Einstellung,         die         Sie        anhand         der
<em>PILOTPORT</em>-Umgebungsvariable   (s.   dazu  die   Datei
.profile  oder .bashrc) eingestellt  haben.  Ebenso  geht auch
Pilot-Link vor.
</p><p>
</p><p>Wenn Sie  auch auf diesem Wege  keine Einstellungen vornehmen,
versucht     J-Pilot    standardmäßig     auf     die    Device
<code>/dev/pilot</code> zuzugreifen.
</p><p>
</p><p>Es   wird   empfohlen,   einen   Link  zu   legen,   der   von
<code>/dev/pilot</code>  auf die  korrekte  serielle Schnittstelle
verweist. Nötig  ist dies  nicht - aber  empfehlenswert.  Wenn
Ihre  PalmPilot  HotSync  Schale  (,,Cradle``)  z.B.   an  die
Schnittstelle  <em>COM1</em>  (Dos-Bezeichnung)  angeschlossen
ist,  handelt  es  sich   dabei  unter  Linux  um  die  Device
<em>/dev/ttyS0</em>.      Um     nun     einen    Link     von
<code>/dev/pilot</code> auf <code>dev/ttyS0</code> zu legen, geben Sie
als User <em>root</em> folgenden Befehl ein:
</p><p>
</p><pre>ln -s /dev/ttyS0 /dev/pilot
</pre>
 
<p>Für   eine  andere   Schnittstelle  ändern   Sie   den  Befehl
entsprechend   ab.   COM2   wäre  beispielsweise   ttyS1  usw.
Achtung,    benutzten    Sie     nicht    mehr    die    alten
<em>cua</em>-Ports!  Diese bruhen auf einem alten Standard und
werden nach und nach nicht mehr unterstützt.
</p><p>
</p><p>Weiterhin  müssen Sie das  so neu  geschaffen Device  auch für
alle   Benutzer    freischalten.    Der   Befehl    als   User
<em>root</em>, um dies zu tun, lautet (z.B.  für COM1):
</p><p>
</p><pre>chmod 666 /dev/ttyS0
</pre>
<p>
</p><h2><a name="ss2.6">2.6 Farbeinstellungen/Color Files</a>
</h2>

<p>
</p><p>Die  Installation  von J-Pilot  fügt  Ihrem  System auch  einge
Farbdateien  (,,Color  Files``)   hinzu,  die  im  Verzeichnis
<code>/usr/local/share/jpilot</code>  installiert  werden.   Diese
Farbeinstellungen können Sie im <em>Einstellungen</em>-Fenster
auswählen.
</p><p>
</p><p>Weiterhin   sucht   J-Pilot   in  ihrem   Home-Verzeichnis   im
Unterverzeichnis   <code>.jpilot</code>  ebenfalls   nach  solchen
Dateien.  Diese müssen mit <em>jpilotrc</em> anfangen, gefolgt
von  einem Punkt  und dem  eigentlich bezeichnenden  Namen der
Datei.  Bsp: <code>jpilot.blue</code>
</p><p>
</p><p>Wenn Sie neue Farbfiles erstellen wollen, kopieren Sie einfach
ein  altes um,  benennen es  neu und  verändern es  nach Ihrem
Geschmack.  Anschließend legen Sie es in einem der beiden oben
genannten  Verzeichnisse  ab  und  freuen sich,  daß  es  beim
nächsten Mal im Einstellungen-Verzeichnis auftaucht.
</p><p>
</p><p>Zögern Sie  nicht, ein neu  erstelltes Farb-File an  den Autor
von J-Pilot zu schicken!  Sie können davon ausgehen, daß es mit
der nächsten Version von J-Pilot verteilt wird.

---

<h2><a name="s3">3. Kalender</a></h2>

<p>
</p><p>Sie gelangen in das Kalenderfenster entweder durch einen Klick
auf das Kalendersymbol, welches  Sie schon von Ihrem PalmPilot
kennen, oder  durch das Drücken der  Tatse <code>F1</code>. Darüber
hinaus  können   Sie  auch  auf  ,,File``   klicken  und  dann
,,Datebook`` anwählen.
</p><p>
<img src="<?=$rbase?>/img/jpilot-datebook-de.gif">
</p><p>
</p><p>
</p><h2><a name="ss3.1">3.1 Termin ansehen</a>
</h2>

<p>
</p><p>Sie können  die Tage der einzelnen  jeweils angezeigten Monate
durchsuchen, indem Sie den gewünschten Tag in der Button-Liste
im Fenster anklicken.
</p><p>
</p><p>Oberhalb  der Tage-Liste befinden  sich eine  Datumsangabe und
vier Richtungs-Buttons.   Die inneren beiden  dieser 4 Buttons
blättern  jeweils einen  Monat  vor oder  zurück, die  äußeren
beiden tun selbiges bezogen auf ein Jahr.
</p><p>
</p><p><b>TIP</b>: Um zum aktuellen  Tage zurück zu kehren, klicken
Sie  einfach ein  weiteres  Mal auf  den Kalender-Button  oben
links.
</p><p>
</p><h2><a name="ss3.2">3.2 Wochen- &amp; Monatsansicht - NEU Version 0.98 -</a>
</h2>

<p>
</p><p>Unterhalb  des  Sync- und  Backup-Buttons  befinden sich  zwei
Button,  mit  denen   Sie  eine  <em>Wochen</em>-  sowie  eine
<em>Monatsübersicht</em>  aufrufen können.  Ein  Mausklick auf
einen  der  beiden   bringt  die  entsprechende  Übersicht  zu
Gesicht.
</p><p>
</p><p>
</p><h2><a name="ss3.3">3.3 Termin löschen</a>
</h2>

<p>
</p><p>Um einen  Termin zu löschen, wählen  Sie diesen an,  so daß er
farbig  markiert ist,  und  klicken Sie  dann  auf den  Button
<em>,,Delete``</em> am linken Fensterrand.
</p><p>
</p><h2><a name="ss3.4">3.4 neuen Termin hinzufügen - NEU! Version 0.97 -</a>
</h2>

<p>
</p><p>Wenn  Sie  einen neuen  Termin  hinzufügen  wollen, gehen  Sie
folgendermaßen vor:
</p><p>
</p><p>1.  Im  Fenster rechts oben  finden Sie einen Button,  der mit
<em>,,New``</em>  beschriftet  ist.  Klicken  Sie  diesen  an.
Darauf  hin  werden  die  Einträge  unterhalb  dieses  Buttons
gelöscht  und  das  Datum  den  aktuellen,  links  im  Fenster
angezeigten Tag angepaßt.
</p><p>
</p><p>2. Füllen  Sie die Einzelheiten aus, die  wichtig sind. Achten
Sie vor allem auf korrekte  Zeiten und auf die Einstellung der
möglichen Wiederholungen des Termins.
</p><p>
</p><p>3.  Drücken  Sie den  Button <em>,,Add It``</em>  oberhalb der
Einträgen  neben  dem Button  ,,New``.   Damit  wird der  neue
Termin eingefügt  und beim  nächsten HotSync (vgl.   auch oben
<em>Hoppla</em>) auch auf den PalmPilot überspielt.
</p><p>
</p><p>Beachten  Sie,   daß  neue,  noch  nicht   auf  den  PalmPilot
übertragene  Termine  farbig markiert  sind.   Erst wenn  eine
Synchronisierung mit dem PalmPilot stattgefunden hat und damit
lokale Datenbank  und PalmPilot  auf dem gleichen  Stand sind,
wird  der   Termin  wie  auch  alle   anderen  ohne  besondere
Kennzeichnung dargestellt.
</p><p>
</p><h2><a name="ss3.5">3.5 Termin verändern</a>
</h2>

<p>
</p><p>Einen  Termin  verändern  Sie  am schnellsten,  wenn  Sie  ihn
anwählen, die  Einträge des Termins auf der  rechten Seite des
Fenster   verändern   und    dann   den   Button   <em>,,Apply
Changes``</em>  betätigen.   Diesen  finden  Sie  zwichen  den
bereits genannten Buttons ,,New`` und ,,Add It``.

---

<h2><a name="s4">4. Adressenliste</a></h2>

<p>
</p><p>Die Adressenliste  wählen Sie genau wie den  Terminkalender über einen
der Anwendungsbutton oben  links im Fenster an -  hier den zweiten von
oben, den  Adressenlistenbutton.  Wahlweise  können Sie dazu  auch die
Taste <code>F2</code> verwenden.
</p><p>
<img src="<?=$rbase?>/img/jpilot-address-de.gif">
</p><p>
</p><p>
</p><h2><a name="ss4.1">4.1 Adressen ansehen</a>
</h2>

<p>
</p><p>Wenn Sie  die Adressenliste aufrufen,  sehen Sie auf der  linken Seite
eine Liste von Adressen. Diese  werden nach den gleichen Kriterien wie
auf dem  PalmPilot sortiert. Die Kategory können  Sie entsprechend den
Kategorien des PalmPilot oberhalb dieser Listen angeben, indem Sie auf
den Wahl-Button klicken und dann eine Auswahl vornehmen.
</p><p>
</p><p>Um  eine andere  Sortierung der  Adressen zu  erhalten,  verändern Sie
diese auf  dem PalmPilot,  starten Sie einen  weiteren HotSync-Vorgang
und wechseln Sie erneut in die Adressenliste von J-Pilot.
</p><p>
</p><p><b>TIP</b>:    Sie   können    die   Adressenliste    auch   genauer
durchsuchen.  Dazu klicken  Sie  rechts auf  den  Button <em>,,Add  or
Modify a Record``</em> und klicken Sie dann gewünschte Adressen an, um
auf der rechten Seite mehr Informationen einsehen zu können.
</p><p>
</p><h2><a name="ss4.2">4.2 Quick Find</a>
</h2>

<p>
</p><p>Die einfachste  und schnellste  Art, eine bestimmte  Adresse innerhalb
der gewählten Kategorie  zu finden ist die, den  zu suchenden Namen in
das Feld unterhalb der Liste (<em>,,Quick Find``</em>) einzugeben. Der
Ausschnitt  der Liste  springt dann  automatisch an  die entsprechende
Stelle zum ersten passenden Eintrag.
</p><p>
</p><p>
</p><h2><a name="ss4.3">4.3 Adresse löschen</a>
</h2>

<p>
</p><p>Wie auch  schon bei den Terminen  löschen Sie eine  Adresse, indem Sie
diese anwählen und dann den Button (<em>,,Delete``</em>) anklicken.
</p><p>
</p><h2><a name="ss4.4">4.4 Neue Adresse hinzufügen</a>
</h2>

<p>
</p><p>Eine neue  Adresse fügen  Sie der Datenbank  hinzu, indem Sie  auf den
Button (<em>,,Add or Modify a Record``</em>) klicken.
</p><p>
</p><p>Daraufhin  öffnet  sich  auf   der  rechten  Seite  des  Fensters  die
Eintragsliste  für  Adressen mit  den  für  die  jeweilige Adresse  zu
benutzenden Adressfeldern.
</p><p>
</p><p>Klicken Sie auf den Button  <em>,,New``</em>, um eine ganz neue, leere
Liste von Adressfeldern zu erhalten.
</p><p>
</p><p>Füllen Sie diese  aus, weisen Sie dem neuen  Eintrag eine Kategorie zu
und fügen  Sie diesen so  entstandenen Eintrag der Liste  hinzu, indem
Sie den Button <em>,,Add It``</em> betätigen.
</p><p>
</p><p>Zunächst wird dieser  neue Eintrag in der Liste -  genau wie ein neuer
Termin -  farbig unterlegt erscheinen. Das ändert  sich wiederum, wenn
der nächste HotSync durchgeführt wird.
</p><p>
</p><p>
</p><h2><a name="ss4.5">4.5 Adresseintrag verändern</a>
</h2>

<p>
</p><p>Wie auch bei den Terminen  verändern Sie eine Adresse, indem Sie diese
anwählen, die  Felder entsprechend  Ihren Wünschen verändern  und dann
den Button <em>,,Apply Changes``</em> betätigen.

---

<h2><a name="s5">5. Aufgabenliste</a></h2>

<p>In die Aufgabenliste führt Sie der dritte Button der Anwendungsbutton
oder auch die Taste <code>F3</code>.
</p><p>
<img src="<?=$rbase?>/img/jpilot-todo-de.gif">
</p>

<h2><a name="ss5.1">5.1 Ansicht von Aufgaben</a>
</h2>

<p>
</p><p>Für die Ansicht von  Aufgaben ergeben sich gegenüber der Adressenliste
kaum  Besonderheiten.   Auch  für  die Aufgabenliste  gilt,  daß  eine
Sortierung  nach den  gleichen  Kriterien erfolgt,  wie  auch auf  dem
PalmPilot.
</p><p>
</p><p>Zwischen dem Wahl-Button für die Kategorien und der eigentlichen Liste
der  Aufgaben   findet  sich  ein  Check-Button,   anhand  dessen  Sie
einstellen  können,  ob  die  bereits  erledigten  Aufgaben  weiterhin
angezeigt werden sollen, oder ob J-Pilot diese ausblenden soll.
</p><p>
</p><p><b>TIP</b>: Erledigte  Aufgaben können Sie mit  einem Haken versehen
und damit  als erledigt  kennzeichnen, indem Sie  auf die Box  vor der
Aufgabe klicken.   Dadurch erscheint ein  kleiner Haken in  dieser Box
und  J-Pilot geht  davon  aus,  die Aufgabe  gelte  als erledigt.  Wenn
dementsprechend eingestellt, wird J-Pilot diese Aufgabe dann auch nicht
weiter anzeigen.
</p><p>
</p><p>
</p><h2><a name="ss5.2">5.2 Aufgabe löschen</a>
</h2>

<p>
</p><p>Abweichend von der  Erldigung der Aufgabe durch Anklicken  der Box vor
der Aufgabe  kann diese auch  endgültig gelöscht werden. Dazu  muß die
Aufgabe vorher nicht als erledigt gekennzeichnet werden.
</p><p>
</p><p>Um die Aufgabe zu löschen,  wählen Sie diese  an und klicken  Sie auf
<em>,,Delete``</em>.  Nicht  vergessen,  der eigentliche  Löschvorgang
findet auch hier erst beim HotSync statt.
</p><p>
</p><p>
</p><h2><a name="ss5.3">5.3 Neue Aufgabe eingeben</a>
</h2>

<p>
</p><p>Um eine neue Aufgabe in die Datenbank einzugeben, klicken Sie zunächst
auf den  Button <em>,,New``</em>, um  einen leeren, mit  dem aktuellen
Datum versehenen Eintrag zu erhalten.
</p><p>
</p><p>Füllen Sie diesen aus und klicken Sie dann auf <em>,,Add It``</em>.
</p><p>
</p><h2><a name="ss5.4">5.4 Aufgabeneintrag verändern</a>
</h2>

<p>
</p><p>Auch für  die Änderungen einer Aufgabe ergibt  sich keine Besonderheit
gegenüber den anderen Anwendungen.
</p><p>
</p><p>Wählen  Sie den  Eintrag an,  ändern Sie  die Daten  und den  Text, um
anschließend den Button <em>,,Apply Changes``</em> zu betätigen.

---

<h2><a name="s6">6. Merkzettel</a></h2>

<p>
</p><p>Wie  Sie sich  mittlerweile denken  können,  ist der  letzte der  vier
Anwendungsbutton  für  die Merkzettel  zuständig.  Ebenso  für Sie  zu
erahnen ist die Taste <code>F4</code> für den Aufruf selbiger.
</p><p>
<img src="<?=$rbase?>/img/jpilot-memo-de.gif">
</p><p>
</p><p>
</p><h2><a name="ss6.1">6.1 Ansicht von Merkzetteln</a>
</h2>

<p>
</p><p>Wenn Sie die Merkzettelliste aufrufen,  sehen Sie auf der linken Seite
eine Liste der vorhandenen  Merkzettel. Diese werden nach den gleichen
Kriterien  wie auf  dem PalmPilot  sortiert. Die  Kategory  können Sie
entsprechend  den  Kategorien  des  PalmPilot oberhalb  dieser  Listen
angeben, indem Sie  auf den Wahl-Button klicken und  dann eine Auswahl
vornehmen.
</p><p>
</p><p>Um eine  andere Sortierung der  Merkzettel zu erhalten,  verändern Sie
diese auf  dem PalmPilot,  starten Sie einen  weiteren HotSync-Vorgang
und wechseln Sie erneut in die Adressenliste von J-Pilot.
</p><p>
</p><p>
</p><h2><a name="ss6.2">6.2 Verwaltung von Merkzetteln</a>
</h2>

<p>
</p><p>Die Verwaltung  der Merkzettel, also  Veränderungen vornehmen, Löschen
oder neue  Merkzettel hinzufügen, funktioniert nach dem  schon aus den
anderen Anwendungen bekannten Prinzip.

---

<h2><a name="s7">7. Suche</a></h2>

<p>
</p><p>
<img src="<?=$rbase?>/img/jpilot-search-de.gif">
</p><p>
</p><p>Sie können in den Datenbanken von J-Pilot nach beliebigen Zeichenfolgen
suchen  und sich  das Ergebnis  anzeigen lassen.  Um  die Suchfunktion
aufzurufen, drücken Sie die Tastenkombination <code>Strg-S</code> oder
wählen Sie den Menueintrag <em>File-Search</em> an.
</p><p>
</p><p>In  dem sich  nun öffnenden  Fenster geben  Sie die  Zeichenkette (ein
Wort, Teile eines Wortes) in der Zeile hinter <em>,,Search for:``</em>
ein.  Dahinter  haben Sie  die  Möglichkeiten,  die Option  <em>,,Case
Sensitive``</em> anzuwählen.  Diese bewirkt, daß  die Unterschiede der
Groß- und Kleinschreibung beachtet werden bei der Suche.
</p><p>
</p><p>Um  die  Suche  zu   beginnen,  drücken  Sie  anschließend  die  Taste
<code>Enter</code>.  Die  Ergebnisse der  Suche  werden  daraufhin in  dem
Fenster unterhalb der Eingabe aufgelistet.
</p><p>
</p><p>Mit  einem  Doppelklick auf  den  für  Sie  interessanten Eintrag  der
Suchergebnisliste bewirken  Sie, daß Ihnen  J-Pilot den korrespondieren
Eintrag anzeigt.

---

<h2><a name="s8">8. Installation von PalmPilot-Anwendungen</a></h2>

<p>
</p><p>J-Pilot  ist  in  der  Lage,  neue Anwendungen  auf  dem  PalmPilot  zu
installieren. Rufen  Sie dazu  den Installationsdialog auf,  indem Sie
den Menueintrag <em>File-Install</em> anw�hlen.
</p><p>
</p><p>
<img src="<?=$rbase?>/img/jpilot-install-de.gif">
</p><p>
</p><p>Die Dateien, die  Sie hier auswählen werden beim  nächsten HotSync auf
dem PalmPilot installiert. J-Pilot legt lediglich einen Verweis auf die
Datei an, nimmt  keine Kopie vor. Daher sollten Sie  die Datei bis zum
nächsten  HotSync  nicht  löschen  oder  in  ein  anderes  Verzeichnis
verschieben.
</p><p>
</p><p>Um eine Datei zu  Installation auszuwählen, durchsuchen Sie anhand der
oberen beiden Listen die  in Frage kommenden Verzeichnisse. Sie können
die  gefundenen Dateien  in die  untere Liste  der  zu installierenden
Programme übertragen,  indem Sie  die Datei doppelklicken  oder anhand
des Buttons <em>,,Add``</em> übertragen.
</p><p>
</p><p>Einmal  auf  diese Weise  ausgewählt  tauchen  die  Dateien (bzw.  der
Verweis auf  diese) in  der Liste ,,Files  to be Installed``  auf. Von
dort können  Sie Einträge löschen,  wenn Sie den Eintrag  anwählen und
dann den Button <em>,,Remove``</em> drücken.
</p><p>
</p><p>Wenn  Sie  Ihre  Auswahl  getroffen  haben,  drücken  Sie  den  Button
<em>,,Done``</em>.   Das  Installationsfenster   schließt   sich.  Die
gewählten Dateien werden beim  nächsten HotSync installiert und stehen
Ihnen dann auf dem PalmPilot zur Verfügung.

---

<h2><a name="s9">9. Einstellungen</a></h2>

<p>
</p><p>
<img src="<?=$rbase?>/img/jpilot-prefs-de.gif">
</p><p>
</p><p>Wählen Sie  das für Sie  zutreffende Datumsformat im  Feld <em>,,Short
date format``</em> aus. Treffen Sie außerdem eine Wahl für das normale
Datumsformat und das Zeitanzeigeformat.
</p><p>
</p><p><b>TIP</b>: Es kann unter bestimmten Umständen sein, daß das Fenster
flickert,  wenn eine  neue Zeit  angezeigt  wird. Daher  kann es  Sinn
machen, ein Zeitformat zu wählen, bei dem die Sekunden nicht angezeigt
werden, um diese Irritationen zu minimieren.
</p><p>
</p><p>Wählen Sie außerdem  den ersten Tag der Woche  in der Option <em>,,The
first  day of  the  week is``</em>.  Beim  nächsten Aktualisieren  des
Kalenders  werden   sodann  die   Wochen  beginnend  mit   diesem  Tag
dargestellt.
</p><p>
</p><p>Weiterhin   können  Sie  an   dieser  Stelle   auch  die   oben  schon
angesprochenen   Farbdateien  auswählen.    Beachten  Sie,   daß  eine
Veränderung  dieser Einstellung  erst dann  wirkt, wenn  J-Pilot erneut
gestartet wird.
</p><p>
</p><p>Der  <em>PILOTPORT</em>   kann  auch  an   dieser  Stelle  eingestellt
werden.   Damit  teilen   Sie   J-Pilot  mit,   an  welcher   seriellen
Schnittstelle  sich die  PalmPilot HotSync-Schale  befindet.  Wenn Sie
hier     keine     Einstellung     vornehmen,    dann     wird     die
PILOTPORT-Umgebungsvariable  benutzt. Wenn auch  mit dieser  kein Wert
gesetzt wird, so  wird auf die Default-Einstellung <code>/dev/pilot</code>
zurückgegriffen.
</p><p>
</p><p>Darunter  können Sie die  Geschwindigkeit der  seriellen Schnittstelle
angeben. Achtung: einige Rechner  arbeiten nicht zuverlässig mit Raten
über 9600. Grund: unbekannt.
</p><p>
</p><p>Die   letzten   beiden    Optionen   ermöglichen   es   Ihnen,
einzustellen,  ob  (1.)  gelöschte Einträge  angezeigt  werden
sollen  und (2.)  ob veränderte  gelöschte  Einträge angezeigt
werden sollen.   Wenn diese Optionen  eingeschaltet werden, so
werden  die entsprechenden  Einträge mit  einer  anderen Farbe
hinterlegt.  Dies kann unter Umständen irritierend wirken.

---

<h2><a name="s10">10. Drucken - Neu! Version 0.98 -</a></h2>

<p>
</p><p>
<img src="<?=$rbase?>/img/jpilot-print-de.gif">
</p><p>J-Pilot  verfügt über  ein nützliches  Feature -  Drucken. Dazu
benutzt    das   Programm    die    Möglichkeit,   Daten    im
Postscript-Format  zu exportieren.  Daher wird,  wenn  Sie aus
J-Pilot  heraus drucken  wollen,  ein Postscript-File  erzeugt,
welches Sie dann an die verschiedensten Tools leiten können. 
</p><p>Um  zu drucken,  klicken Sie  auf <em>File</em>  und  dann auf
<em>Print</em>. Dadurch öffnen Sie das Druck-Fenster. 
</p><p>In diesem Fenster können Sie zunächst wählen:
</p><p>
</p><ul>
<li>One record  - Damit drucken  Sie nur den einen  zur Zeit
ausgewählten, also markierten Eintrag. </li>
<li>All records in this category - Drucken Sie alle Einträge
in der aktuellen Kategorie. </li>
<li>Print  all  records -  Hier  wählen  Sie  aus, daß  alle
verfügbaren  Einträge   der  Anwendung  (z.B.   Adressen  oder
Aufgaben) gedruckt werden sollen.</li>
</ul>
<p>Weiterhin haben  Sie dann  die Möglichkeit, nur  einen Eintrag
pro  Seiten   zu  drucken.    Das  ist  zwar   eine  tierische
Papierverschwendung, kann aber manchmal nützlich sein.
</p><p>Anschließend können Sie die Anzahl der Leerzeilen zwischen den
einzelnen Einträgen angeben. 
</p><p>In dem  nun folgenden  Feld <em>Print Command</em>  können Sie
angeben,  an   welchen  Befehl  die   zu  exportierende  Datei
geschickt werden  soll. Behalten Sie dabei  im Hinterkopf, daß
J-Pilot  eine Postscriptdatei  erzeugt.  Um  diese  einfach und
direkt zu drucken, geben sie hier den Druckbefehl <code>lpr</code>
an.     J-Pilot   wird    dann   das    Kommando   <code>lpr</code>
<em>Druckdatei.ps</em>  auswerfen,  was  dazu führt,  daß  die
Postscriptdatei  gedruckt wird.   Um  die Datei  aber auf  die
Festplatte  zu schreiben,  benutzen Sie  einfach  das Kommando
<code>cat</code> zusammen  mit einer Pipe und  einem Ziel-File wie
in den Klammern gezeigt. Das wars schon.
</p><p>Mit Print  drucken sie, mit Cancel  brechen Sie ab  - aber das
haben Sie auch schon erkannt!

---

<h2><a name="s11">11. Quit/Sync/Backup</a></h2>

<h2><a name="ss11.1">11.1 Quit</a>
</h2>

<p>
</p><p>Um   J-Pilot  zu   verlassen,  klicken   Sie  auf   den  Button
<em>,,Quit``</em>  links  im   Fenster  oder  wählen  Sie  den
Menueintrag <em>,,File-Quit``</em> an.
</p><p>
</p><p><b>Achtung</b>:  Sie sollten J-Pilot  nie beenden,  indem Sie
den  Task  oder  das  Fenster ,,killen``.  Dadurch  würde  das
Programm abrupt beendet und die Routinen, die beim Beenden die
Datenbanken  aufräumen,   würden  nicht  ausgeführt,   was  im
schlimmsten Falle zu Datenverlusten führen kann.
</p><p>
</p><p>
</p><h2><a name="ss11.2">11.2 Sync/Backup</a>
</h2>

<p>
</p><p>Wenn  Sie  den Button  <em>,,Sync``</em>  betätigen, wird  ein
HotSync  durchgeführt  für die  normalen  Anwendungen und  die
installierten Plugins.
</p><p>
</p><p>Der Button  <em>,,Backup``</em> bewirkt zuerst  einen normalen
HotSync  und sichert  dann  den kompletten  PalmPilot auf  die
Festplatte. Dabei werden nur veränderte Datenbanken gesichert.
Daher nimmt  das erste  Backup mehr Zeit  in Anspruch  als die
folgenden.
</p><p>
</p><p>Wenn  der  Backup-Vorgang  nicht ordnungsgemäß  beendet  wird,
könnte das an  der Schnittstellengeschwindigkeit liegen. Sehen
Sie daher auch im FAQ nach.

---

<h2><a name="s12">12. Sonstiges</a></h2>

<p>
</p><p>
</p><h2><a name="ss12.1">12.1 Datenbanken auf dem PalmPilot wiederherstellen</a>
</h2>

<p>
</p><p>Diese Funktion ist nicht Teil von J-Pilot.
</p><p> J-Pilot legt seine
Dateien  im Verzeichnis  <code>$HOME/.jpilot/</code>  ab.  Um  nun
einen PalmPilot,  der (alle/einige) Datenbanken  verloren hat,
wieder  mit diesen zu  versorgen, benutzen  Sie am  besten das
Programm      <em>pilot-xfer</em>,      das      Teil      der
<em>PilotLink</em>-Suite ist.
</p><p>
</p><p>Der einfachste Weg, eine solche Wiederherstellung vorzunehmen,
ist der  fogende: 1.  Kopieren  Sie alle Datenbanken,  die Sie
wiederherstellen wollen,  in ein extra  angelegtes Verzeichnis
(Bsp.:  <code>~/backup/</code>).    Anschließend  führen  Sie  den
Befehl 
</p><pre>pilot-xfer -r ~/backup
</pre>
 aus.  
<p>
</p><p><b>ACHTUNG</b>: Versuchen Sie  nie Dateien auf den PalmPilot
zu  installieren,  die  sich  bereits  im  ROM  des  PalmPilot
befinden.    Beispiel   hierfür   wäre   die   Anwendungsdatei
<em>,,Address.prc``</em>.
</p><p>
</p><p><b>ACHTUNG</b>: Benutzen  Sie J-Pilot nicht,  um Daten zurück
auf einen PalmPilot zurückzuspielen,  mit dem vorher ein Reset
durchgeführt  wurde!  Das  würde dazu  führen, daß  die vollen
Datenbanken  auf  der  Festplatte   mit  den  leeren  aus  dem
PalmPilot überschrieben würden.  Dies wird aber möglicherweise
in einer späteren Version von J-Pilot geändert.
</p><p>
</p><p>
</p><h2><a name="ss12.2">12.2 Benutzung der ,,Home`` Umgebungsvariable</a>
</h2>

<p>
</p><p>Unter normalen, für fast alle Benutzer zutreffenden Umständen,
muß  man  sich   über  die  Benutzung  der  Umgebungsvariablen
<em>Home</em> keine Gedanken zu machen.
</p><p>
</p><p>J-Pilot  nutzt allerdings  diese Umgebungsvariable,  um  es auf
relativ einfache Art und Weise möglich zu machen, als Benutzer
mehrere PalmPilots zu synchornisieren. Dazu setzen Sie einfach
die Variable <em>Home</em> auf den Wert, dessen Verzeichnis zu
nutzen gedenken.
</p><p>
</p><p>Ein  Beispiel: Der Autor  des J-Pilot,  Judd Montgomery,  hat 2
PalmPilots.  Er synchronisiert  den einen,  den er  ständig in
Benutzung  hat, in  des Verzeichnis  <code>/home/judd</code>.  Den
anderen     synchornisiert    er     in     das    Verzeichnis
<code>/home/judd/palm2</code>  und   benutzt  dazu  das  folgenden
Skript:
</p><p>
</p><pre>        #!/bin/bash
        HOME=/home/judd/palm2
        jpilot
        
</pre>
<p>Dieses     Vorgehen    ist    ebenfalls     praktikabel,    um
<em>xcopilot</em> in ein eigenes Verzeichnis zu sichern.
</p><p>
</p><h2><a name="ss12.3">12.3 Hoppla, Zurücksetzen ...</a>
</h2>

<p>
</p><p>Sie  können <em>jederzeit</em> die  Datenbank (die  Daten, die
aus dem PalmPilot auf  der Festplatte gesichert wurden) zurück
auf  den Stand  versetzen,  die sie  vor dem  <em>letzten</em>
Hotsync Vorgang  gehabt hat.  Dazu  müssen Sie nur  den Befehl
</p><pre>rm   ~/.jpilot/*.pc
</pre>
   ausführen.   Damit   werden
Dateien, die auf ,,Löschen``  gesetzt sind, wieder als normale
Dateien   gesetzt,    veränderte   Einträge   erhalten   ihren
ursprüngliche Zustand zurück.
<p>
</p><p>Der  Grund dafür ist,  daß keine  Veränderung der  Daten durch
J-Pilot  endgültig   ist,  solange  noch   kein  HotSync/Backup
durchgeführt  wurde.  Erst dann  werden die  veränderten Daten
auf den PalmPilot übertragen und damit dauerhauf und endgültig
verändert.
</p><p>
</p><p>Auf  diese Weise können  Sie mit  den Daten  herumspielen, sie
verändern  löschen etc.  Wenn Sie  den  ursprünglichen Zustand
wieder   herstellen   wollen,    löschen   Sie   einfach   die
entsprechende Datei.
</p><p>
</p><p>Beispiel:  Sie  habe   Adressen  verändert  und  wollen  diese
Änderungen rückgängig  machen?  Ganz einfach,  löschen Sie die
Datei   <code>~/.jpilot/AddressDB.pc</code>  ,  bevor   Sie  einen
HotSync durchführen.   Dadurch werden die  Adressen erneut von
PalmPilot  heruntergeladen  und Sie  haben  den alten  Zustand
wieder.
</p><p>
</p><p>Eine andere  Variante, gelöschte Einträge  zurück zu bekommen:
Stellen  Sie anhand  des Einstellungen-Fensters  ein,  daß die
gelöschten  Einträge angezeigt werden  sollen (,,Preferences``
--  ,,show  deleted  records``),  wählen  Sie  den  gelöschten
Eintrag an und benutzen  Sie die Schaltfläche <em>add</em>, um
eine Kopie des Eintrages zu erhalten.
</p><p>
</p><p>
</p><h2><a name="ss12.4">12.4 Feedback/Unterstützung</a>
</h2>

<p>
</p><p>Es  ist  immer erwünscht,  Rückmeldungen  von  den Nutzern  zu
bekommen.  Manchmal  kann die Antwort  ein paar Tage  auf sich
warten  lassen,  wenn  viele   Mails  ankommen  oder  der  Job
stört. Aber jede Mail wird beantwortet.
</p><p>
</p><p>Wenn Sie Sourcecode besteuern wollen senden Sie diesen einfach
per EMail.  Möglicherweise wird  er übernommen. Für  den Fall,
daß Sie eine  Idee haben, was zu machen  wäre, können Sie auch
gerne nachfragen, ob dies schon  in Arbeit ist. Auf jeden Fall
können Sie mit dem Sourcecode machen, was sie wollen.
</p><p>
</p><p>Wirkliche   Zuwendung   sind   ebenfalls   erwünscht.   Kleiner   Tip:
Judd sammelt Münzen, nimmt aber auch Bargeld. ;-)
</p><p>
</p><p>
</p><pre>        Judd Montgomery
        P.O.Box 665
        Sunbury, OH 43074
        USA
        
</pre>

---

<h2><a name="s13">13. Plugins - Neu! Version 0.98 -</a></h2>

<h2><a name="ss13.1">13.1 Was sind Plugins?</a>
</h2>

<p>
</p><p>Plugins (engl.   to plug  in) sind Erweiterung  zu Programmen,
die   deren   Funktionalität    erweitern,   ohne   dass   das
zugrundeliegende Programm  selber verändert oder  auch nur neu
compiliert werden muß. Es  handelt sich eigentlich nur um sog.
shared   libraries,  die   Funktionen   beinhalten,  die   auf
besonderen  Aufruf  hin   bestimmte  Aufgaben  erfüllen.   Sie
erkennen solche shared libraries an der Dateiendung ,,.so``.
</p><p>Beim Start von J-Pilot  durchsucht das Programm das Verzeichnis
<code>$BASEDIR/share/jpilot/plugins</code>.   Wenn dort ein
Plugin  liegt,  so  wird  dieses nach  den  bereits  benannten
Rückruffunktionen  durchsucht.  Sodann  steht  es  J-Pilot  zur
Verfügung.
</p><p>Auf diese  Weise kann  der Funktionsumfang eines  Programmes -
hier  J-Pilot  -  erweitert   werden,  ohne  J-Pilot  selber  zu
verändern.   Gleichzeitig   ermöglicht   man   Dritten,   neue
Erweiterungen zu schreiben und diese selbständig zu verteilen.
Nach  dem gleichen  Konzept wurden  schon The  Gimp  und Emacs
erweitert.
</p><p>
</p><h2><a name="ss13.2">13.2 Verfügbare Plugins</a>
</h2>

<p>
</p><p>Judd Montgomery selber pflegt eine aktuelle Liste der zur Zeit
erhältlichen           Plugins.            Unter          
<a href="http://jpilot.linuxbox.com/plugins.html">jpilot.linuxbox.com/plugins.html</a> ist  diese im Netz zu
erreichen. 
</p><p>
</p><h2><a name="ss13.3">13.3 Schreiben Sie Plugins!</a>
</h2>

<p>
</p><p>Wenn  Sie  selber  ein  Plugin schreiben  wollen,  können  Sie
Informationen über das Vorgehen  und die Anforderungen auf den
Seiten  von  Judd  Montgomery  finden.   Auf  der  Seite  
<a href="http://jpilot.linuxbox.com/plugin.html">http://jpilot.linuxbox.com/plugin.html</a>   hat  er  eine
Anleitung zusammengestellt.  Viel Erfolg, die  Benutzer werden
es Ihnen danken. 
</p><p>Wenn Sie  ein Plugin schreiben,  wäre es prima, wenn  Sie Judd
Montgomery  kurz  Bescheid geben  würden,  damit dieser  einen
Eintrag auf seiner Website vornehmen kann. Damit wird auch die
Verbreitung Ihres  Plugins erleichtert. Auch wenn  noch in der
Entwicklung sollte  das Plugin angemeldet  werden, damit nicht
zwei Leute  die gleiche  Arbeit machen.  Außerdem  hoffen wir,
auf  diese  Weise mehr  Leute  zum  Schreiben  von Plugins  zu
ermuntern.         Schreiben         Sie        an        
<a href="mailto:judd@engineer.com">judd@engineer.com</a>.
</p><p>
</p><h2><a name="ss13.4">13.4 Installation von Plugins</a>
</h2>

<p>
</p><p>Damit  J-Pilot auf ein  vorhandenes Plugin  zurückgreifen kann,
muß         dieses          in         dem         Verzeichnis
<code>$BASEDIR/share/jpilot/plugins</code>  vorhanden sein.
Dabei   entspricht   <code>$BASEDIR/</code>   normalerweise
<code>/usr/local</code>. Wenn  das Plugin dort  abgelegt ist, wird
J-Pilot  dieses   dort  beim  nächsten   Programmstart  finden,
erkennen  und dann  in  der Menuleiste  einbinden  und so  die
Funktion des Plugins zur Verfügung stellen.
</p><p>Bei Problemen  mit der Installation sei auf  das 
<a href="https://www.jpilot.org/documentation/jpilot-manual-de-14.html#faq">FAQ</a> verwiesen.
</p><p>Wie  das jeweilige  Plugin zu  erstellen  (sprich compilieren)
ist,  entnehmen  Sie  am  besten  dem INSTALL  File,  das  dem
entsprechenden  Archiv beiliegt.   Im  Normalfalle sollte  die
Compilierung mit dem üblichen
</p><p>
</p><pre>        ./configure 
        make 
        make install
        
</pre>

erfolgen.    Anschließend  sollte   sich   das  Ergebnis   der
Installation    (das    fertige    Plugin)   im    Verzeichnis
<code>$BASEDIR/share/jpilot/plugins</code> befinden.
<p>Damit  habe Sie  eigentlich  schon alles  getan,  um das  neue
Plugin zu  installieren.  Beim nächten Start  von J-Pilot steht
Ihnen ein funkelnagelneues Plugin zur Verfügung. 
</p><p>
</p><h2><a name="ss13.5">13.5 Systemweite oder Userinstallation</a>
</h2>

<p>
</p><p>Sie haben  die Möglichkeit,  ein Plugin für  J-Pilot systemweit
oder nur für einen User zu installieren.  Das oben beschrieben
Vorgehen  der  Installation  von  J-Pilot  in  das  Verzeichnis
<code>$BASEDIR/share/jpilot/plugins</code>  installiert das
Plugin systemweit.  D.h. alle Benutzer des  Systems können das
Plugin   benutzen  und   damit  arbeiten.   Voraussetzung  ist
allerdings, daß  sie die Rechte haben,  auf dieses Verzeichnis
zuzugreifen.   Im   Normalfalle    brauchen   Sie   dazu   die
Verwalterrechte, d.h. sie müssen <code>root</code> sein.
</p><p>Wenn  Sie das  Plugin aber  nur für  sich  selber installieren
wollen  - sei  es,  daß Ihnen  danach  ist oder  daß sie  kein
<code>root</code>  sind  -  können  Sie die  Dateien  des  Plugins
(,,.so``)        auch         in        dem        Verzeichnis
<code>$HOME/.jpilot/plugins</code>  ablegen. Dann  kann nur
der Benutzer,  in dessen Homeverzeichnis  die Dateien abgelegt
wurden, damit arbeiten.

---

<h2><a name="s14">14. FAQ</a></h2>

<p>
<a name="faq"></a> </p><p>Ein   FAQ   ist    eine   Sammlung   von   häufig   gestellten
Fragen.          ,,<b>F</b>requentlys         <b>A</b>sked
<b>Q</b>uestions``
</p><p>
</p><h2><a name="ss14.1">14.1 Warum heißt  das Programm ,,J-Pilot``,  obwohl es nicht  in Java</a>
geschrieben wurde?</h2>

<p>
</p><p><b>Antwort</b>:  Ursprünglich  wurde  das Programm  für  den
täglichen  Gebrauch  von  Judd  und seiner  Frau  geschrieben.
Dabei stand das <em>,,J``</em>  für Judd oder Jacki, ohne sich
darüber  allzuviele Gedanken  zu  machen.  Weil  Großzügigkeit
eine  Tugend  ist,  wurde  J-Pilot  dann  aber  unter  der  GPL
veröffentlicht. Da ein besserer  Name zu diesem Zeitpunkt aber
nicht zur Hand war, blieb es bei ,,J-Pilot``.
</p><p>
</p><p>GTKPilot  wäre  wohl passender,  ist  aber  zu umständlich  zu
tippen.
</p><p>
</p><p>
</p><h2><a name="ss14.2">14.2 Warum ist J-Pilot kostenlos?</a>
</h2>

<p>
</p><p><b>Antwort</b>:       1.        Weil       das       möglich
ist. 2. Weltherrschaft.
</p><p>
</p><p>Ziel ist  den Vorherrschaft von  Linux auf Arbeitsplatzrechner
im  Büro  und  daheim.   J-Pilot  ist  der  Beitrag,  den  Judd
Montgomery dazu erbringt.  Je mehr Leute Linux benutzen, desto
mehr  profitieren  wir  alle  von unterstützter  Hardware  und
kommerziellen Programmen, die  auf Linux portiert werden.  Und
je mehr  Linux in Büros verwendet wird,  desto angenehmer wird
der  Büroalltag.  Wenn  man Autos  zum  Lebensunterhalt fährt,
führe man  lieber einen Ferrari  oder einen Mercedes  als eine
Fiat oder Skoda.
</p><p>
</p><p>
</p><h2><a name="ss14.3">14.3 Bestehen Pläne für einen KDE- oder GNOME-Port?</a>
</h2>

<p>
</p><p><b>Antwort</b>:  Der Autor selber  benutzt weder  GNOME noch
KDE. Zur Zeit  ist sich Judd Montgomery nicht  mal sicher, was
erfoderlich wäre,  eine solche Veränderung  vorzunehmen.  Wenn
jemand diese Ports schreiben  will, wäre das gern gesehen. Für
Judd  ist nur  wichtig, daß  weder KDE  noch GNOME  für J-Pilot
installiert  sein  müssen.   Er  legt  nämlich  Wert  auf  die
Feststellung,  daß Linux/Unix  verschiedene  Windowmanager zur
Verfügung hat.
</p><p>
</p><h2><a name="ss14.4">14.4 Wie kann ich löschen und einfügen (drag and drop)?</a>
</h2>

<p>
</p><p><b>Antwort</b>:
</p><p>Löschen: Strg-C
</p><p>Einfügen: Strg-V
</p><p>
</p><p>
</p><h2><a name="ss14.5">14.5 Der  Backup-  oder  Syncvorgang  bricht mit  der  Fehlermeldung</a>
,,Weird packet`` ab. Woran liegt das?</h2>

<p>
</p><p><b>Antwort</b>:  Dies  ist  ein  bekanntes Problem  mit  der
seriellen  Schnittstellengeschwindigkeit. Nur  ist  noch nicht
sicher,  ob das  mit dem  Pilot-Link Paket  zusammenhängt oder
generell mit  der Implementierung der  seriellen Schnittstelle
in Linux. Einige PCs haben anscheinend Schwierigkeiten, höhere
Geschwindigkeiten    über     die    Serielle    zu    fahren.
<b>Lösung:</b> Stellen Sie die Schnittstellengeschwindigkeit
auf 9600, dann sollte es wieder gehen.
</p><p>
</p><h2><a name="ss14.6">14.6 Ich  habe ein Plugin  installiert, aber  es erscheint  nicht in</a>
J-Pilot. Was tun?</h2>

<p>
</p><p><b>Antwort</b>:  Stellen  Sie  als  erstes sicher,  daß  sie
J-Pilot neu gestartet haben, denn erst beim Neustart durchsucht
J-Pilot                     das                     Verzeichnis
<code>$BASEDIR/share/jpilot/plugins</code>.
</p><p>Wenn Sie die Installationsanweisungen des Plugin-Archivs genau
befolgt     haben,      sollte     sich     im     Verzeichnis
<code>$BASEDIR/share/jpilot/plugins</code>  das neue Plugin
finden.  Wenn dem nicht  so ist, versuchen Sie herauszufinden,
wohin die Installation  erfolgte.  Gegebenenfalls kopieren Sie
die  entsprechenden  Dateien   von  Hand  in  das  Verzeichnis
<code>$BASEDIR/share/jpilot/plugins</code>.
</p><p>Wenn die  Dateien richtig abgelegt sind und  J-Pilot das Plugin
dennoch   nicht  erkennt,  ist   entweder  das   Plugin  nicht
kompatibel oder J-Pilot wurde nicht korrekt installiert.  Siehe
dazu auch oben den Punkt Plugins.
</p><p>
</p><h2><a name="ss14.7">14.7 J-Pilot kann nicht auf den PalmPilot zugreifen. Woran kann das liegen?</a>
</h2>

<p>
</p><p>Normalerweise ist dieses  Problem keines.  Denn meist liegt es
an  den   Einstellungen  und/oder   an  den Rechten    für die
Device. Überprüfen  Sie     zunächst,  ob  sich     der   Link
<code>/dev/pilot</code> findet. Wenn dieser vorhanden ist, checken
Sie, ob die Rechte richtig gesetzt sind (vgl. oben). Wenn auch
dies  der     Fall ist,  schauen  Sie   mal   nach  ob  Sie im
Preferences-Fenster auch den richtigen Link angegeben haben.
</p><p>Achten Sie auf jeden Slash (,,/dev/pilot``)!

---
