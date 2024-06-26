---
title: J-Pilot User Manual
date: "2002-02-03 12:00:00"
author: "Judd Montgomery"
---

<center>
<img src="<?=$rbase?>/img/jpilot-toplogo.jpg" alt="J-Pilot Logo: http://jpilot.org" nosave="" height="68" width="202">
</center>

<p><br><b>J-Pilot</b> is a palm pilot desktop for Linux/Unix written by:
<br>Judd Montgomery, judd@engineer.com, <a href="http://jpilot.org/">http://jpilot.org</a>
<br>J-Pilot has been reported to work on:
</p><ul>
<li>
Linux</li>
<li>
Solaris</li>
<li>
HP-UX</li>
<li>
Irix</li>
<li>
FreeBSD</li>
<li>
PowerPC</li>
</ul>

HP-UX: J-Pilot should work with Palm Pilot models 1000, 5000, Personal, Professional,
all III models, IIIc, V, VII, All Visors, Sonys, pretty much any Palm OS
device.
<br><br>
01 Feb 2002:<br>
Palm OS versions greater than 4.0 cannot have the password set on the
handheld.&nbsp; This will be fixed in a later version.&nbsp;
<br><br>USB Palms (m series) and Sony Clies will work, but require
pilot-link 0.10.1 or greater, which is still unreleased at the time of this
writing.&nbsp;  J-Pilot will autodetect the newer version of pilot-link and
build appropriately.&nbsp;
<h3>Updates</h3>

This document was last updated 03 Feb 2002, for J-Pilot-0.99.2.&nbsp;

<h3>Purpose of this document</h3>

Many things in this document are pretty much self explanatory, like a lot
of the text on how to use J-Pilot.&nbsp; I have written this document for
a user as well as someone who is thinking about being a user and wants
to know the capabilities of J-Pilot before much time is wasted downloading
and compiling it, etc.&nbsp; In the using J-Pilot section, I have marked
some things with "<u><font color="#FF0000">*Hint*</font></u>"<font color="#000000">
that I think may not be right away obvious to a new user.&nbsp; If you
are in a hurry, just read these.</font>

<h3>Installation</h3>

<h4>Prerequisites</h4>

<li>
GTK+, and glib (installed by default on most Linux distributions)</li>
<li>
pilot-link (comes with many distributions)</li>
<li>
pilot-link &gt; 0.10.1 for Palm OS 4.x USB and Sony USB handhelds.

<br>
<p>To compile J-Pilot you need to have GTK+1.2 or later installed.&nbsp;
You can find out what version you have by running "gtk-config --version".&nbsp;
GTK+ requires glib.&nbsp; The glib version probably should match the gtk
version.&nbsp; You can also do a "glib-config --version".&nbsp; You can
get these at <a href="http://www.gtk.org/">http://www.gtk.org</a>
</p><p>Pilot link must be installed and working.&nbsp; What I mean by working
is that you can use pilot-xfer, memos, or some other pilot-link program.
</p><p>Here is a visor USB howto I found: 
<a href="http://www.linuxlookup.com/html/guides/visor-jpilot.html">
Handspring Visor and J-Pilot guide</a><br>
The HOWTO is also relevant for the clie devices.
</p><p><s>The pilot-link code and other helpful info can be found at 
<a href="http://www.pilot-link.org/">http://www.pilot-link.org/</a></s>
</p><p>If you are installing pilot-link from RPMs make sure that you also have
the pilot-link-dev rpm installed for the header files so that J-Pilot can
compile.
</p>

<h4>Compiling</h4>

To compile and install do the following:
<br>./configure --prefix=/usr
<br>make
<br>make install
<br>jpilot
<br>./configure --help will list all the options available.

`make uninstall` is also an option, however I do not recommend using this ;)

</p><p>I have included a spec file so if you want to create your own RPM all
you have to do is "rpm -tb jpilot-0.99.2.tar.gz"
</p><p>J-Pilot was written in such a way that it should be very safe to sync.&nbsp;
There is always the possibility of something going wrong though.&nbsp;
As with anything else, backup your data if you cannot afford to lose it.&nbsp;
Just make sure your backup software doesn't destroy it first.
</p>

<h4>Serial Port Setup</h4>

When syncing, J-Pilot uses the port and speed settings out of the J-Pilot
preferences screen.&nbsp; If the port is blank then J-Pilot will use the
PILOTPORT environment variables, as does pilot-link.&nbsp; If these are
blank also then J-Pilot will default to /dev/pilot.

It is recommended, but not necessary to make a link from `/dev/pilot`
to the correct serial port.&nbsp; So, if your cradle is on COM1, this is
`/dev/ttyS0` under Linux.&nbsp; You could execute the command
```bash
ln -s /dev/ttyS0 /dev/pilot
```
COM2 is `/dev/ttyS1`, and so on.&nbsp; The Linux serial
ports cua[n] are going away.&nbsp; You should use the ttyS[n] ports
instead.&nbsp; USB ports are usually `/dev/ttyUSB1`, or `/dev/usb/tts/1` (for
devfs), but some devices use `/dev/ttyUSB0`, or `/dev/usb/tts/0`.&nbsp;

You must also give non-root users permissions to access the serial port.&nbsp;
The command to do this is (as root)
```bash
chmod 666 /dev/ttyS0
```
for the first serial port, ttyS1, for the second, and so on.


<h3>Color Files</h3>

Make install will copy a few default color files to /usr/local/share/jpilot/
(unless you told configure to use another prefix).&nbsp; These will be
selectable from the preferences menu.&nbsp; Also J-Pilot will look in $HOME/.jpilot/
for colors files.&nbsp; They must start with "jpilotrc".&nbsp; If you want
to add new ones, or modify the current ones, just put the files in one
of these directories and they will show up in the preferences menu.
<p>If you create your own cool jpilotrc files feel free to send them back
to me and if I like it, I'll include it in the release.
</p>

<h3>Use of the JPILOT_HOME environment variable</h3>

J-Pilot uses the JPILOT_HOME environment variable to make it easy to allow
multiple pilots to be synced under the same user.&nbsp; Just set JPILOT_HOME to
the directory you want J-Pilot to use.&nbsp; Be sure to export it also.
For example, I have 2 palm pilots.&nbsp; I can sync the one I use all the 
time into `/home/judd`.&nbsp; The other one I can sync into `/home/judd/palm2`
by using this script:
```bash
#!/bin/bash
export JPILOT_HOME=/home/judd/palm2
jpilot
```
This is also handy for syncing xcopilot or pose into its own directory.


<h3>Oops, Reverting</h3>

You can always make the databases revert back to the last time that the
pilot was synced.&nbsp; All you have to do is
```bash
rm ~/.jpilot/*.pc
```
or
```bash
rm ~/.jpilot/*.pc3
```
for version 0.99 and above.&nbsp;
<br>Deleted records will come back, modified records will be un-modified, etc.&nbsp;
Nothing is permanent until the sync/backup.&nbsp; You can do this if you
make a mistake, or just to play around with J-Pilot and then delete the
changed records without syncing them.&nbsp; For example if you want to
restore the addresses to their last sync state you can remove ~/.jpilot/AddressDB.pc.
<p>Also, from the preferences menu, you can choose to show deleted records
and then click on the deleted record and use "Copy" to get a copy of it back.
</p><h2>
Using J-Pilot</h2>

<h3>Datebook Application</h3>

<img src="<?=$rbase?>/img/jpilot-datebook.png" alt="Datebook Screenshot: Download full documents with images at http://jpilot.org" nosave="" height="571" width="790">

<h4>Viewing Records</h4>

You can browse through days on the calendar for the current month by pressing
the days.&nbsp;
<p><font color="#FF0000"><u>*Hint*</u></font>To go back to today's date,
just hit the datebook application button again.&nbsp; The application buttons
are the 4 large buttons with pictures on them on the left hand side of
the screen.
</p><p><font color="#FF0000"><u>*Hint*</u></font>
Page up and Page down keys also work for scrolling through the days.&nbsp;
<br>
The Home key takes you back to "today".&nbsp;
</p>

<h4>Deleting a Record</h4>

To delete a record, just highlight the record and hit the delete button
on the right side of the screen.

<h4>Adding a New Record</h4>

To add a new record, first press the "New Record" button on the upper right
hand side of the screen.&nbsp; Then fill in all of the details of the appointment
and then press the "Add Record" button.&nbsp; New records will show up in a
different color.&nbsp; Once they are synced they will be the same color
as existing appointments.

<h4>Modifying a Record</h4>

To modify a record click on the record in the daily schedule, change the
details of the record, and then press the "Apply Changes" button.

<h3>Address Application</h3>

<img src="<?=$rbase?>/img/jpilot-address.png" alt="Address Screenshot: Download full documents with images at http://jpilot.org" nosave="" height="571" width="790">

<h4>Viewing Records</h4>

On the left side of the screen there is a list of addresses.&nbsp; These
can be viewed by category from the menu above them.&nbsp; They will appear
in the same order as on the Palm Pilot.&nbsp; You can resort them by clicking 
the "Name/Company" heading.nbsp;

<h4>Quick Find</h4>

Just type in the quickfind box the first few letters of the record that
you are looking for and the display will incrementally jump to the first
matching record.

<h4>Deleting a Record</h4>

To delete a record, just highlight the record and hit the delete button
on the right side of the screen.

<h4>Adding a New Record</h4>

To add a new record, first press the "New Record" button on the
upper right hand side of the screen.&nbsp; Then fill
in all of the details of the address and then press "Add Record".&nbsp; New
records will show up in a different color.&nbsp; Once they are synced they
will be the same color as existing appointments.

<h4>Modifying a Record</h4>

To modify a record, change the details of the
address and then press the "Apply Changes" button.

<h3>ToDo Application</h3>

<img src="<?=$rbase?>/img/jpilot-todo.png" alt="ToDo Screenshot: Download full documents with images at http://jpilot.org" nosave="" height="571" width="790">

<h4>Viewing Records</h4>

On the left side of the screen there is a list of todos.&nbsp; These can
be viewed by category from the menu above them.&nbsp; They will appear
in the same order as on the Palm Pilot.&nbsp; If you want change this,
you must change it on the Palm Pilot under the menu in the todo program
and then sync and switch to another application and back.&nbsp; You may
also check the "Hide Completed ToDos" button if you don't want to see completed
todos.

<h4>Deleting a Record</h4>

To delete a record, just highlight the record and hit the delete button
on the right side of the screen.

<h4>Adding a New Record</h4>

To add a new record, Press the "New Record" button in the upper right hand corner
of the window.&nbsp; Then fill in all of the details of the todo record
and then press "Add Record".&nbsp; New records will show up in a different
color.&nbsp; Once they are synced they will be the same color as existing
records.

<h4>Modifying a Record</h4>

To modify a record select the record, change the details of the todo and
then press the "Apply Changes" button.
<p>Also, todo items can be checked, or unchecked by clicking in the checkmark
box.
</p>

<h3>Memo Application</h3>

<img src="<?=$rbase?>/img/jpilot-memo.png" alt="Memo Screenshot: Download full documents with images at http://jpilot.org" nosave="" height="571" width="790">

<h4>Viewing Records</h4>

On the left side of the screen there is a list of memos.&nbsp; These can
be viewed by category from the menu above them.&nbsp; They are sorted
alphabetically.&nbsp;

<h4>Deleting a Record</h4>

To delete a record, just highlight the record and hit the delete button
on the right side of the screen.

<h4>Adding a New Record</h4>

To add a new record, Press the "New Record" button in the upper right hand corner
of the window.&nbsp; Then fill in all of the details of the memo record
and then press "Add Record".&nbsp; New records will show up in a different
color.&nbsp; Once they are synced they will be the same color as existing
records.

<h4>Modifying a Record</h4>

To modify a record select the record, change the details of the memo and
then press the "Apply Changes" button.

<h3>Expense Application Plugin</h3>

<img src="<?=$rbase?>/img/jpilot-expense.png" alt="Expense Screenshot: Download full documents with images at http://jpilot.org" nosave="" height="571" width="790">

<h4>This is an example plugin application</h4>

I've written the expense application mostly for an example of a plugin and a 
proof of concept.&nbsp;  The User Interface is pretty much the same as the 
other applications so I am not going to waste time being any more 
repetitive.&nbsp;

<h3>SyncTime Plugin</h3>

<h4>This is another plugin that comes with J-Pilot</h4>

It is a GUI-less plugin.&nbsp; It will do something during the sync process,
however, it does not have a GUI interface.&nbsp;
<br><br>During the sync process it will set the time on the Palm to the same
time as on the desktop host computer.&nbsp;  It should be accurate plus or
minus 1 second.&nbsp; Palm OS 3.3 is broken and this plugin will crash a Palm
running OS 3.3 during the sync.&nbsp;  It auto detects the OS and should not
do anything during a sync to Palm OS 3.3, so it should not hurt anything to 
have it enabled.&nbsp;

<h3>Searching</h3>

<img src="<?=$rbase?>/img/jpilot-search.png" alt="Search Screenshot: Download full documents with images at http://jpilot.org" nosave="" height="332" width="500">
<p>Search allows you to search for strings that may appear in records.&nbsp;
Just type the search string into the "Search for" entry and hit enter.&nbsp;
The "Case Sensitive" checkbox can be clicked for a case sensitive search.&nbsp;
A list of found strings will be listed in the window.&nbsp; Just click
on these records and the J-Pilot main window will go to the application
and the record that matches the one that was selected.
</p>

<h3>Installing files to the Palm Pilot</h3>

<img src="<?=$rbase?>/img/jpilot-install.png" alt="Install Screenshot: Download full documents with images at http://jpilot.org" nosave="" height="571" width="435">
<p>The files entered here will be installed during the next sync.&nbsp;
J-Pilot just keeps a pointer to the file, not a copy, so you shouldn't
move the file, or delete it until after a sync.&nbsp; Just browse through
the directory structure and select the files you are wishing to install.&nbsp;
You can either double-click on them, or press the "Add" button after they
are selected.&nbsp; They will show up in the "Files to be installed" window.&nbsp;
You can always remove them from the "Files to be installed" window by selecting
them and pressing the "Remove" button.&nbsp; When you are done press the
"Done" button.
</p>

<h3>Preferences screen</h3>

<img src="<?=$rbase?>/img/jpilot-prefs-1.png" alt="Preferences Screenshot 1" nosave="" height="306" width="428">
<img src="<?=$rbase?>/img/jpilot-prefs-2.png" alt="Preferences Screenshot 1" nosave="" height="306" width="428">
<img src="<?=$rbase?>/img/jpilot-prefs-3.png" alt="Preferences Screenshot 1" nosave="" height="306" width="428">
<img src="<?=$rbase?>/img/jpilot-prefs-4.png" alt="Preferences Screenshot 1" nosave="" height="306" width="428">
<img src="<?=$rbase?>/img/jpilot-prefs-5.png" alt="Preferences Screenshot 1" nosave="" height="306" width="428">
<img src="<?=$rbase?>/img/jpilot-prefs-6.png" alt="Preferences Screenshot 1" nosave="" height="306" width="428">
<img src="<?=$rbase?>/img/jpilot-prefs-7.png" alt="Preferences Screenshot 1" nosave="" height="306" width="428">
<img src="<?=$rbase?>/img/jpilot-prefs-8.png" alt="Preferences Screenshot 1" nosave="" height="306" width="428">

<h4>Locale Tab</h4>

* Choose the character set for internationalization.
* Choose the localization for the short dates field.
* Choose the localization for the long dates field.
* Choose the localization of the time field.
* Choose the first day of the week.
* <font color="#FF0000">*<u>Hint</u>* </font>Some displays will flicker with
every change of the clock, so you may not want the clock updating every
second.&nbsp; In this case, choose one of the time settings without seconds.&nbsp;
Then the time will update every minute.</li>

<h4>Settings Tab</h4>

* Select a GTK colors file.&nbsp; J-Pilot must be restarted for this change
to take effect.</li>
* Set the serial port.&nbsp; If this is empty, then the environment variable
PILOTPORT will be used.&nbsp; If PILOTPORT is not set then the default
of /dev/pilot is used.</li>
* Set the serial rate.&nbsp; Some computers will not sync reliably above
9600.&nbsp; I am not sure why this is.</li>
* Set the number of backup copies to keep.&nbsp; Everytime a backup is made it
will go into a new backup directory of ~/.jpilot/backupMMDDhhmm where MM is
the month, DD is the day and hhmm is the time.&nbsp; Backups over the number 
to be kept will be deleted.
* Set "show deleted records".&nbsp; Having this box checked means that deleted
records will still be displayed as a different color.&nbsp; This can be
confusing at times.</li>
* Set "show modified deleted records".&nbsp; Having this box checked means
that when a record is modified the original record will still be displayed
as a different color.&nbsp; This can be very confusing at times.</li>
* Set "Highlight calendar days with appointments".&nbsp; Having this box checked
will make the datebook application highlight the calendar days that have
appointments occurring on that day.&nbsp; This option will slow down the
application noticeably on slower computers depending on the number of
records in the datebook.
* Set "Use DateBk3/4 note tags".&nbsp;
DateBk3 and DateBk4 is a rewrite of the Palm Datebook with added
features.&nbsp;  Some of them are implemented in J-Pilot and will be used if
this button is checked.&nbsp;

<h4>Alarms Tab</h4>

* Check "Open alarm windows for appointment reminders" to have J-Pilot open a 
window when an alarm occurs.&nbsp;
* Check "Execute this command" to have J-Pilot open a 
window when an alarm occurs.&nbsp;  Enter in the command to be executed when
an alarm occurs.&nbsp;  This has the potential to be dangerous if an
unwanted command is executed.


<h4>Conduits Tab</h4>

* Check which conduits you want to be executed during the sync process.&nbsp;


<h3>Quit</h3>

To quit the program, use the quit button, or quit from the menu.&nbsp;
You should not quit the program by killing its window.&nbsp; This causes
a harsh death and the cleanup routines will not be executed.

<h3>Sync</h3>

The sync button will sync four the main applications and any plugins that
are installed.
<br><br>
If you get warnings about the palm having a different userID or a different
username than the pilot that was last synced:
<br><br>
Every palm has a username and userid.&nbsp;  These can be set by using
install-user from the pilot-link set of tools.&nbsp;  If you changed the name
or ID and it is the same palm then you can go ahead and safely sync.&nbsp;
If it is truly a different palm then you can still sync, just beware that any
records pending modify/delete, etc. will try to be modified in the new palm.&nbsp;
You can always remove the .pc3 files to prevent these.&nbsp;
You can have multiple palms under the same user by using the JPILOT_HOME
envirenment variable.
<br><br>
If you get warnings about the palm having a NULL userID:
<br><br>
J-Pilot cannot sync with this palm because it looks as though it has been
hard-reset.&nbsp;  If it has been hard-reset (cleared) DO NOT sync it unless
you want to lose data.&nbsp;  You should use pilot-xfer to restore the palm
and then once the data is restored use install-user to create a username/ID
on the palm and then sync.&nbsp;
<br><br>
If your palm has not been reset, but maybe just has always had a NULL userID
because you never used the Windows or Mac desktop, then good for you!&nbsp;
Just use install-user to add a username/ID and sync away.&nbsp;
i.e.: install-user bob 1234
<br>You can type install-user on the command line for instructions.&nbsp;
<br>

<h3>J-Pilot Sync Daemon</h3>

I've included an additional sync program called jpilot-sync.&nbsp;  It does
not need j-pilot running in order to sync from the command line, or a
script, so it can be handy for network syncs, or logging into a machine
remotely.
<br><br>

<h3>Backup</h3>

This will sync the main applications and any plugins that are installed
and then do a backup of all databases and programs.&nbsp; It will only
backup changed files, so the first time it will take a while.&nbsp; Subsequent
backups will be a lot quicker.

<h3>Restoring a Palm Pilot</h3>

This is not part of J-Pilot.&nbsp; J-Pilot stores its files in
$HOME/.jpilot/ and $HOME/.jpilot/backupMMDDhhmm.&nbsp; A symbolic link of
backup will be made to the most recent backup for convenience.&nbsp;
To restore a palm pilot that has lost its data you can use the pilot-xfer
program that comes with pilot-link.&nbsp; The easiest way to do this is
to put every file that you want installed (or restored) back on the palm
pilot in one directory.&nbsp; For this example, a directory called backup.&nbsp;
Then you can execute "pilot-xfer -r backup".&nbsp; Do not install applications
that are already in ROM on the palm pilot, such as the Address.prc, etc.
You probably shouldn't install "Saved Preferences.prc" to a palm pilot that
it didn't come from since this can throw off the screen calibration and make
it very hard to re-calibrate.
<p>Do not try to use j-pilot to sync data back into a reset palm pilot.&nbsp;
It will overwrite the data on the desktop with the empty palm pilot files.&nbsp;
This may change in a later release.
</p>

<h3>Plugins</h3>

Plugins are shared libraries.&nbsp; They should end with a ".so" suffix.&nbsp;
They should be placed in the ~/.jpilot/plugins/ directory, or [BASEDIR]/lib/jpilot/plugins/&nbsp;
directory, where BASEDIR is the directory that J-Pilot was installed
under.&nbsp;
The source compiled default is /usr/local/ and the RPM default is 
/usr/.&nbsp;
The BASEDIR can be changed during the build by "configure
--prefix=/this_dir/", etc.&nbsp;
Once the plugin is there it will automatically
appear in the J-Pilot menu.&nbsp; If it doesn't, then that probably means
that J-Pilot was installed incorrectly, or the plugin isn't compatible.

<h3>Feedback/Contributions</h3>

I always like to here feedback from users.&nbsp; Sometimes I get a little
busy with email and my paying job, but I should always respond.
<br>If you want to contribute some code just email me and tell me what
you want to do, or have already done, etc.&nbsp; I may like it, and I may
not.&nbsp; You are always free to do what you want to with the source code.
<br>If you really want to give me something for my effort in putting together
this program.&nbsp; You can send me a little donation.&nbsp; I collect
coins from anywhere, anytime also.
<p>Judd Montgomery
<br>P.O. Box 665
<br>Sunbury, OH 43074
</p><center>
<p><b>FAQ</b>
<br><b>(Frequently Asked Questions)</b></p></center>

<p><b>Q:</b>&nbsp; Why is it called J-Pilot?&nbsp; It is not written in Java.
</p><p><b>A:</b>&nbsp; Originally I wrote this program for myself and my wife
to use.&nbsp; The J was for Judd or Jacki.&nbsp; Not much thought was put
into this.&nbsp; Then, out of the goodness of my heart (ughh), I wanted to release
it under the GPL.&nbsp; I asked around for some better names, but I didn't
come up with one.&nbsp; gtkpilot would be more appropriate, but I hate
typing gtk.
</p><p><b>Q:</b>&nbsp; Why do you give it away for free?
</p><p><b>A:</b>&nbsp; 1. Because I can.&nbsp; 2. World Domination.
<br>I would like to see Linux, become the dominate desktop both in the
workplace and at home.&nbsp; This is one of my contributions to help make
it happen.&nbsp; The more people that use Linux at home, the more I benefit
from the hardware support and commercial software that will become available.&nbsp;
The more Linux/Unix is used in the office, the more pleasant my job becomes.&nbsp;
If I drove cars for a living, I'd rather be driving Ferraris and Corvettes
around than Chevettes and Yugos.
</p><p><b>Q:</b>&nbsp; Are you going to Gnome-ify it, or KDE-ify it?
</p><p><b>A:</b>&nbsp; I don't run KDE, or Gnome, and at this point I don't
even know what it would take to do this.&nbsp; If someone else wants to
do this, that is ok.&nbsp; My only requirement is that KDE, or Gnome isn't
required to run J-Pilot.&nbsp; I take pride in the fact that Linux/Unix
has many window managers available to use.
</p><p><b>Q:</b>&nbsp; How do I cut-and-paste?
</p><p><b>A:</b>&nbsp; Cut is ctrl-x, copy is ctrl-c and paste is ctrl-v.
<br>&nbsp;
</p>


