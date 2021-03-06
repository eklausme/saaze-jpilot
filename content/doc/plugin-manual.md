---
title: J-Pilot Plugin Manual
date: "2002-09-28 12:00:00"
---


<h3>Updates</h3>

This document was last updated 28 September 2002, for J-Pilot-0.99.3&nbsp;

<h3>What are plugins?</h3>

A plugin is code that can extend the functionality of j-pilot without adding
any code to j-pilot, or recompiling it.&nbsp; It is basically just a shared
library that contains pre-defined callback functions.
<br>A callback function is a function that is not called from the application
itself, but from an external program.&nbsp; When J-Pilot starts up it will
scan the plugin directories for any shared libraries (~/.jpilot/plugins/
and $BASE_DIR/lib/jpilot/plugins).&nbsp; When it finds a shared library
it will find callback functions inside of the library and call them when
needed.&nbsp; So, a plugin can be an integral part of the overall program
just by its existence and when taken away the main program will still run
only missing the functionality that the plugin provided.

<h3>Creating plugins</h3>

Plugins are relatively easy to write for J-Pilot.&nbsp; All you need to
do is implement the plugin callback functions as needed and write the application
specific code.&nbsp; I have provided an example plugin for the Expense
application.&nbsp; I used this application because it is included in the
palm pilot ROM and everyone should have it.&nbsp; Since then I have been
proved wrong.&nbsp;  The new m100s don't have Expense and I think some old
Pilots don't have it.&nbsp;  It took me about 10 hours
to write it with a lot of code reuse from other parts of j-pilot.
<p>I have created a library of useful functions for writing J-Pilot conduits.&nbsp;
The code is inside j-pilot and the header file is libplugin.h.&nbsp;
The naming convention is that all of these functions
start with "jp_".&nbsp;  There are some I threw in there and didn't add a
jp_ prefix because I would have had to change too much existing code.&nbsp;
</p><p>If you do create a plugin I would appreciate it if you would give me
a link to the site so that I can put it on my website.&nbsp; This will
encourage more people to use J-Pilot and your plugin.&nbsp; Even if you
are working on a plugin you can let me know and I will put it down as in
progress so that someone doesn't duplicate your effort.&nbsp;  Its GNU
licensed code so you are free to not tell me of course, as long as you
follow the GNU license.
My email is 
<i><a href="mailto:Judd%20Montgomery%20%3Cjudd@engineer.com%3E">Judd Montgomery
&lt;judd@engineer.com&gt;</a></i>.&nbsp; The official J-Pilot website is at
<a href="http://jpilot.org/">http://jpilot.org</a>.
</p>

<h3>Example Plugins</h3>

I have written Expense and SyncTime as example plugins.  Expense is a GUI
(Graphical User Interface) application and SyncTime has no GUI.&nbsp;  It
shouldn't be too hard to use these as a base point for writing your own.&nbsp;

<h3>Plugin call back functions</h3>

These functions are functions that you may implement in your plugin application.&nbsp;
Most of them are not required.&nbsp; All you have to do is write them and
they will be called at the appropriate times.&nbsp; The naming convention
is that all of these functions start with "plugin_".
<p>
</p><hr width="100%">
<p><b><tt>int plugin_search(char *search_string, int case_sense, struct
search_result **sr);</tt></b>
</p><p><tt>struct search_result</tt>
<br><tt>{</tt>
<br><tt>&nbsp;&nbsp; char *line;</tt>
<br><tt>&nbsp;&nbsp; unsigned int unique_id;</tt>
<br><tt>&nbsp;&nbsp; struct search_result *next;</tt>
<br><tt>};</tt>
</p><p><tt><b>char *search_string</b> - </tt>input parameter, a string that
the user is searching on.
<br><tt><b>int case_sense</b> - </tt>input parameter, will be TRUE if a
case sensitive match is required.
<br><tt><b>struct search_result **sr</b> - </tt>output parameter, a null
terminated linked list of search matches to be returned to jpilot.
</p><p><b><tt>struct search_result</tt></b>
<br><b><tt>{</tt></b>
<br><b><tt>char *line - </tt></b>This is the search result text as you
want it to appear in the search result window.
<br><b><tt>unsigned int unique_id - </tt></b>This is the unique_id of the
record that the search match appeared in.&nbsp; This number will be passed
back to plugin_gui if the record is selected in the search window.
<br><b><tt>struct search_result *next - </tt></b>A pointer to the next
node in the linked list.
<br><b><tt>};</tt></b>
</p><p>This function will be called from the search window of the main program.&nbsp;
The output parameter search_result will be displayed in the search window.
</p><p>
</p><hr width="100%">
<p><b><tt>int plugin_get_name(char *name, int len);</tt></b>
</p><p><b><tt>char *name - </tt></b>output parameter, a pointer to a pre-allocated
buffer in j-pilots address space.&nbsp; The plugin should copy its name
into this string.
<br><b><tt>int len - </tt></b>input parameter, the length of this buffer.&nbsp;
Don't overwrite this buffer.&nbsp; Its currently 50 characters.
</p><p>This function is used to get the name of the plugin, e.g. "Expense 1.0".&nbsp;
This function must be implemented or the plugin won't be loaded..
</p><p>
</p><hr width="100%">
<p><b><tt>int plugin_get_menu_name(char *name, int len);</tt></b>
</p><p><b><tt>char *name - </tt></b>output parameter, a pointer to a pre-allocated
buffer in j-pilots address space.&nbsp; The plugin should copy its name
into this string.
<br><b><tt>int len - </tt></b>input parameter, the length of this buffer.&nbsp;
Don't overwrite this buffer.&nbsp; Its currently 50 characters.
</p><p>This function is used to get the name of the plugin, e.g. "Expense".&nbsp;
This is the name that will appear in the j-pilot menu under plugins.&nbsp;
It is possible to have a plugin that isn't accessible under the menu, in
that case this function should not be implemented.
</p><p>
</p><hr width="100%">
<p><b><tt>int plugin_get_help_name(char *name, int len);</tt></b>
</p><p><b><tt>char *name - </tt></b>output parameter, a pointer to a pre-allocated
buffer in j-pilots address space.&nbsp; The plugin should copy its name
into this string.
<br><b><tt>int len - </tt></b>input parameter, the length of this
buffer.&nbsp;
Don't overwrite this buffer.&nbsp; Its currently 50 characters.
</p><p>This function is used to get the name of the plugin as it wishes to
appear in the help menu pulldown, e.g. "About Expense".&nbsp; This function
is not mandatory.
</p><p>
</p><hr width="100%">
<p><b><tt>int plugin_help(char **text, int *width, int *height);</tt></b>
</p><p><b><tt>char **text - </tt></b>output parameter, the plugin should point 
this string pointer to a string to be displayed in the help box.&nbsp;
<br><b><tt>int *width - </tt></b>output parameter, the width of the help
window.
<br><b><tt>int *height - </tt></b>output parameter, the height of the help
window.
</p><p>
</p><hr width="100%">
<p><b><tt>int plugin_get_db_name(char *name, int len);</tt></b>
</p><p><b><tt>char *name - </tt></b>output parameter, a pointer to a pre-allocated
buffer in j-pilots address space.
<br><b><tt>int len - </tt></b>input parameter, the length of this buffer.&nbsp;
Please don't overwrite this buffer.&nbsp; Its currently 50 characters.
</p><p>This function is used to get the name of the palm database (pdb file)
that is to be synced.&nbsp; This DB will be automatically synced when j-pilot
performs a sync.
</p><p>For example the expense plugin uses the DB file "ExpenseDB.pdb", it
would copy "ExpenseDB" to name, leaving off the extension.&nbsp; A normal
plugin that just adds, deletes, and changes DB records using the plugin
API will not have to do any special work during a sync process, it will
be automatic.
</p><p>
</p><hr width="100%">
<p><b><tt>int plugin_startup(jp_startup_info *info);</tt></b>
</p><p><tt>typedef struct</tt>
<br><tt>{</tt>
<br><tt>&nbsp;&nbsp; char *base_dir;</tt>
<br><tt>} jp_startup_info;</tt>
</p><p>This plugin function is called when j-pilot starts up.&nbsp; Any initialization
needed should be done here.
<br>The base_dir is the directory where j-pilot was compiled to be installed
(default is "/usr/local").&nbsp; More fields may be added to this structure
later as needed without changing the API.
</p><p>
</p><hr width="100%">
<p><b><tt>int plugin_gui(GtkWidget *vbox, GtkWidget *hbox, unsigned int
unique_id);</tt></b>
</p><p><b><tt>GtkWidget *vbox - </tt></b>input parameter, the box underneath
the sync and quit buttons.&nbsp; This is where the main applications put
the delete button.
<br><b><tt>GtkWidget *hbox - </tt></b>input parameter, the box that makes
up the main part of the screen.
<br><b><tt>unsigned int unique_id - </tt></b>input parameter, a record
id that the application should go to.&nbsp; It is used by the search window.&nbsp;
This will be a non-null when this function is called from the search screen,
null otherwise.
</p><p>This plugin function is called when the plugin is selected from the
j-pilot menu, or from the search window.&nbsp; This is where the plugin
can draw on the screen and provide the GUI interface, etc.&nbsp; If unique_id
is non-null then the application should go directly to that record.&nbsp;
This is how the search window forces the applications to go to the search
result records.
</p><p>
</p><hr width="100%"><b><tt>int plugin_help(char **text, int *width, int *height);</tt></b>
<p><b><tt>char **text - </tt></b>output parameter, the text to be displayed
on the about dialog window.
<br><b><tt>int *width - </tt></b>output parameter, the width of the dialog
window.
<br><b><tt>int *height - </tt></b>output parameter, the height of the dialog
window.
</p><p>This plugin function is called when the plugin is selected from the
j-pilot help menu pulldown.&nbsp; 2 things can be done here.
<br>1. allocate memory for a text string to pass back to jpilot and it
will be displayed in a dialog window with width and height as the width
and height of the window.
<br>2.&nbsp; set *text=NULL to prevent jpilot from putting up a dialog
window and then implement the help portion yourself.
<br>3.&nbsp; I guess you could do both 1 and 2.
</p><p>
</p><hr width="100%">
<br><b><tt>int plugin_gui_cleanup();</tt></b>
<p>This plugin function is called when another application has been called
and the boxes for the plugin GUI screen are about to be destroyed.&nbsp;
Most widgets will be destroyed when their parents are destroyed, so this
function normally is not needed.
</p><p>
</p><hr width="100%">
<p><b><tt>int plugin_pre_sync_pre_connect(void);</tt></b>
</p><p>This function is called after the j-pilot sync button is pressed and
before the sync connection with the pilot is established.
</p><p>
</p><hr width="100%">
<p><b><tt>int plugin_pre_sync(void);</tt></b>
</p><p>This function is called after the j-pilot sync button is pressed, 
after the sync connection with the pilot is established, but before any 
syncing is done by jpilot.
</p><p>
</p><hr width="100%">
<p><b><tt>int plugin_sync(int sd);</tt></b>
<br><b><tt>int sd - </tt></b>input parameter, the handle to the pilot sync
connection.
</p><p>This function is called after the sync button is pressed and during
the sync process.
<br>Unless something special is needed to be done with the sync handle
this function does not need to be used.

<b>The sync process in j-pilot is a forked process</b>, and this function
will be called from the forked process.&nbsp; Therefore the previous state
of global data in the plugin will not be available when this function is
called.
The order of operations during a sync is as follows:
1. The 4 main applications are synced.
2. Plugins are synced according to the DB name passed back from plugin_get_db_name().
3. This function is called.
4. Modified pdb files are pulled back from the pilot to the desktop if a
backup operation is being performed.&nbsp;

<hr width="100%">
<p><b><tt>int plugin_post_sync(void);</tt></b>
</p><p>This function is called after the sync process is completed.&nbsp; Screen
redraws may be a good thing to do here, as categories and records may have
changed during the sync.
</p><p>
</p><hr width="100%">
<p><b><tt>int plugin_exit_cleanup(void);</tt></b>
</p><p>This function is called when j-pilot is shutting down.
</p><p>
</p><hr width="100%">
<p><b><tt>int plugin_print(?,?);</tt></b>
</p><p>There will be a print API here, but printing has not been implemented
yet.
</p><p>
</p><hr size="5" noshade="" width="100%">

<h3><b>Plugin API functions</b></h3>

These functions are provided to make it easier to develop plugins for J-Pilot.&nbsp;
If you need something that isn't here and it is something that J-Pilot
already does, or something that you think others might need in the future,
it should probably be added into this library.
<p>
</p><hr width="100%">
<pre><b><tt>int jp_init(void);</tt></b></pre>

This function must be called in the plugin.&nbsp; Preferable in plugin_startup,
but it should be in the first function to be called.

<hr width="100%">

<pre><b>int jp_logf(int level, char *format, ...);</b></pre>
<b><tt>int level - </tt></b>is the logging level.&nbsp; It may be user
configurable in the future, but right now I don't see a need for it.
<p>You can turn on and off the debug level by using the -d command line
 option though.&nbsp;
<br><b><tt>char *format,... - </tt></b>is the same type of things that
you would pass to printf.
</p><p><tt>example:</tt>
<br><tt>plugin_logf(JP_LOG_WARN, "error number %d: %s\n", n, err);</tt>
</p><p>There are 3 places for logging output to go to.&nbsp; Standard output
(stdout, usually the terminal window), the log file in ~/.jpilot/, and
the ouput window (the one that pops up while you are syncing).
</p><p>Logging levels are bitmasks, so they may be combined with a logical
OR.
</p><p>You can run J-Pilot in debug mode by executing "jpilot -d" to force
debug output.
<br>&nbsp;
<table border="" width="100%">
<caption>Logging Levels</caption>

<tbody><tr>
<td>level</td>

<td>stdout</td>

<td>log file</td>

<td>GUI</td>

<td>Intended use</td>
</tr>

<tr>
<td>JP_LOG_DEBUG</td>

<td>
<center>Debug
<br>only</center>
</td>

<td>
<center>Debug
<br>only</center>
</td>

<td>&nbsp;</td>

<td>Goes to stdout These messages will not normally show up unless jpilot
is in debug mode.&nbsp; These message should be things like "x=%d", or
"inside while loop", etc.</td>
</tr>

<tr>
<td>JP_LOG_INFO</td>

<td>
<center>X</center>
</td>

<td>
<center>X</center>
</td>

<td>
<center>X</center>
</td>

<td>Informational messages that aren't serious.&nbsp; e.g. "Put the palm
in the cradle now", "Syncing xxx plugin", etc.&nbsp;</td>
</tr>

<tr>
<td>JP_LOG_WARN</td>

<td>
<center>X</center>
</td>

<td>
<center>X</center>
</td>

<td>
<center>X</center>
</td>

<td>Warning messages, that are not fatal, but may affect execution.&nbsp;
e.g. "Out of Memory", "Could not open file".</td>
</tr>

<tr>
<td>JP_LOG_FATAL</td>

<td>
<center>X</center>
</td>

<td>
<center>X</center>
</td>

<td>
<center>X</center>
</td>

<td>Fatal messages in which execution can not continue.&nbsp; e.g. "could
not open display".&nbsp; "Out of Memory" may also belong here.</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>&nbsp;</td>

<td>&nbsp;</td>

<td>&nbsp;</td>

<td><b>I didn't intend for the following levels to be used unless they are
needed.&nbsp; They provide more precise control over the logging output,
but also override any future configurability.</b></td>
</tr>

<tr>
<td>JP_LOG_STDOUT</td>

<td>
<center>X</center>
</td>

<td>&nbsp;</td>

<td>&nbsp;</td>

<td>Using this will force a message to be displayed on stdout.*</td>
</tr>

<tr>
<td>JP_LOG_FILE</td>

<td>&nbsp;</td>

<td>
<center>X</center>
</td>

<td>&nbsp;</td>

<td>Using this will force a message to be written to the log file.*</td>
</tr>

<tr>
<td>JP_LOG_GUI</td>

<td>&nbsp;</td>

<td>&nbsp;</td>

<td>
<center>X</center>
</td>

<td>Using this will force a message to be displayed in the output window.</td>
</tr>
</tbody></table>
<br>
The concept of the log levels is to use
 JP_LOG_DEBUG, JP_LOG_INFO, JP_LOG_WARN, and JP_LOG_FATAL so that the
 user can choose how much he/she wants to see.  For instance if you have a
 plugin that collects a bunch of data you could use JP_LOG_INFO and it may say:
<tt>
</tt></p><p><tt>plugin foo started. 
<br>scanning yahoo.com 
<br>scanning bizwax.com 
<br>parsing data 
<br>loading indexes 
<br>printing info log messages...
<br>plugin foo done data collecting. 
</tt>
</p><p>
And then if the user doesn't want to see this he can set the log level 
higher to JP_LOG_WARN and only see LOG_WARN, or higher, or he can set it to 
JP_LOG_FATAL to only see memory errors and other fatal messages.&nbsp;
 
</p><p>I only have the log level hard coded right now and with the "-d" flag
 DEBUG is turned on, but it was coded to be flexible.
</p><p>
By using JP_LOG_STDOUT, JP_LOG_FILE, and JP_LOG_GUI you override this flexibility.

</p><p>
</p><hr width="100%">
<p><b><tt>int jp_install_append_line(char *line);</tt></b>
</p><p><b><tt>char *line - </tt></b>input parameter, this is just a line to
write to the install file.
</p><p>The install file is a file that is read line by line during the sync
process.&nbsp; Each line is the full path to a file name to be installed.&nbsp;
Once the file is installed on the pilot successfully then that line is
removed from the file.
<br>example: "/home/base/AddressDB.pdb" will install this AddressDB to
the pilot.
</p><p>
</p><hr width="100%">
<p><b><tt>int jp_install_remove_line(int deleted_line);</tt></b>
</p><p><tt><b>int deleted_line - </b>input parameter, This is the line number
to be deleted from the install file.&nbsp; The first line is line zero.</tt>
</p><p>
</p><hr width="100%">
<p><b><tt>const char *jp_strstr(const char *haystack, const char *needle,
int case_sense);</tt></b>
</p><p>This function is analogous to the C function strstr except that it has
a case sensitive parameter.
</p><p>
</p><hr width="100%">
<p><b><tt>int jp_get_app_info(char *DB_name, void **buf, int buf_size);</tt></b>
</p><p><b><tt>char *DB_name - </tt></b>input parameter, the name of the DB
file to be read.&nbsp; For example to read the Expense data you would pass
"ExpenseDB", leaving off the .pdb extension.
<br><b><tt>void **buf - </tt></b>output parameter, a pointer to a pointer
to a memory area to be allocated for the application info to be copied
into.&nbsp; <b>Memory is allocated</b> and must be freed by the calling
function.
<br><b><tt>int buf_size - </tt></b>output parameter, the size of the memory
block that is allocated during this call.
</p><p>This function retrieves the application info from a PDB file.&nbsp;
It is packed and must be unpacked into a format that is specific to each
palm application.
</p><p>

</p><hr width="100%">
<p><b><tt>int jp_open_home_file(char *filename, char *mode);</tt></b>
</p><p><b><tt>char *filename - </tt></b>input parameter, the name of the file to
be opened.&nbsp;
</p><p><b><tt>char *mode - </tt></b>input parameter, mode to open file in.  See
man page for fopen.&nbsp;
</p><p>This function opens a file in $JPILOT_HOME/.jpilot/  Its analogous to
fopen except that it looks in the jpilot directory for the file.
</p><p>

</p><hr width="100%">

<h4>Using J-Pilot database files</h4>

To write plugins that utililize J-Pilot's built in database and sync abilities
it is necessary to understand how the databases are used.&nbsp; J-Pilot
treats the pdb files as read-only, except at sync time.&nbsp; It will not
modify the pdb file in anyway.&nbsp; Actually it never does, it lets the
palm pilot do that work.&nbsp; I may change this in the future to achieve
faster syncs, but I will try to keep this API the same.&nbsp; J-Pilot keeps
a "pc" file of all the changes the user has made to the database.&nbsp;
These are "reconciled" at sync time, and the PC file is cleared out.&nbsp;
So, after a successful sync all of the data should be in the pdb file and
the pc file should be 0 in size.&nbsp; The pc files have the extension
".pc".&nbsp; So there will be an AddressDB.pdb file and an AddressDB.pc
file in ~/.jpilot/.&nbsp; The pdb file belongs to the pilot and the pc
file belongs to j-pilot.
<p>Records are just chunks of data.&nbsp; They must be packed and unpacked
into some meaningful form by the desktop application.&nbsp; To do this
it
is neccessary to know the record format of the palm application.&nbsp;
The palm processor is Motorola 68000 based and the palm stores integers
native to its own processor, so some translations need to be made on integer
data.&nbsp; There are examples of this in the pilot-link library code.
</p><p>To modify a record you must write the new record to the pc file and
then delete the original record.&nbsp; Actually if its a record in the
pdb file it won't actually get deleted.&nbsp; A "deleted record" with the
same unique_id will have to be written to the pc file.&nbsp; You don't
really have to worry about the details of doing this since there is a library
to do it for you.
</p><p>So, when you read a database using the libplugin calls you will get
records back with different record types depending on where they came from
and what they are scheduled to do at sync time.
</p><p>This is a short explanation of each record type:
</p><p><tt>PALM_REC:</tt>&nbsp; This record was read from the palm pdb file.&nbsp;
It is unchanged by j-pilot.
</p><p><tt>MODIFIED_PALM_REC:</tt><font size="+1">&nbsp; </font>This record has
been modified by j-pilot.&nbsp; What this means is that this record has
been deleted and a new record has been created to reflect the changes.&nbsp;
This is the original record that still exists in the pdb file and it will
be deleted at sync time.&nbsp; This record is kept so that at sync time
it can be compared with the palm pilots record to see if it was modified
on the pilot and in j-pilot.&nbsp; This record shouldn't be shown to the
user.
</p><p><tt>DELETED_PALM_REC:</tt>&nbsp; This record has been scheduled to be
deleted from the pdb file at sync time.&nbsp; This is the record retrieved
from the pdb file and there is another record in the pc file with a matching
unique_id to mark this record as deleted.&nbsp; This record should not
be shown to the user.
</p><p><tt>NEW_PC_REC:</tt>&nbsp; This is a new record that has been added
by j-pilot.&nbsp; It is in the pc file and will be written to the palm
during the next sync and then retrieved back from the palm into the pdb
file.
</p><p><tt>DELETED_PC_REC:</tt>&nbsp; This record was created in the pc file
and then later deleted.&nbsp; It shouldn't be shown to the user.
</p><p><tt>DELETED_DELETED_PALM_REC:</tt>&nbsp; This record should only exist
during a sync process.&nbsp; During the sync when a <tt>DELETED_PALM_REC</tt>
gets deleted from the pilot it will be marked with this record type and
then as soon as the sync is finished the pc file will get cleaned up and
it should be removed.&nbsp; If a crash occurs it could be possible for
this record to be in the pc file.
</p><p><tt>REPLACEMENT_PALM_REC:</tt>&nbsp;
When a user modifies a record if its a pc side record then the pc record
 will be deleted and a new pc record written.&nbsp; If the original record was
 a palm record then a <tt>MODIFIED_PALM_REC</tt> is written out and then a
 <tt>REPLACEMENT_PALM_REC</tt> for the new record.&nbsp;  Older versions of
 J-Pilot would just delete a palm rec and write a new one.&nbsp;  This would
 give the record a new unique ID and break some programs which tracked the
 unique IDs of palm records.&nbsp;
</p><p>The <tt>SPENT_PC_RECORD_BIT </tt>means that this record will be removed
during the next pc file cleanup.&nbsp; If this bit is set then the record
can be totally ignored.
<br>&nbsp;
</p><p><tt>typedef enum {</tt>
<br><tt>&nbsp;&nbsp; PALM_REC = 100L,</tt>
<br><tt>&nbsp;&nbsp; MODIFIED_PALM_REC = 101L,</tt>
<br><tt>&nbsp;&nbsp; DELETED_PALM_REC = 102L,</tt>
<br><tt>&nbsp;&nbsp; NEW_PC_REC = 103L,</tt>
<br><tt>&nbsp;&nbsp; DELETED_PC_REC =&nbsp; SPENT_PC_RECORD_BIT + 104L,</tt>
<br><tt>&nbsp;&nbsp; DELETED_DELETED_PALM_REC =&nbsp; SPENT_PC_RECORD_BIT +
105L,</tt>
<br><tt>&nbsp;&nbsp; REPLACEMENT_PALM_REC = 106L</tt>
<br><tt>} PCRecType;</tt>
</p><p>
</p><hr width="100%">
<p><b><tt>int jp_read_DB_files(char *DB_name, GList **records);</tt></b>
</p><p><b><tt>char *DB_name</tt></b> is a pointer to the name of the DB file
to be read.&nbsp; For example to read the Expense data you would pass "ExpenseDB",
leaving off the .pdb extension.&nbsp;&nbsp;&nbsp; Both the pdb and the
pc files are read.
<br><b><tt>GList **records</tt></b> is a pointer to a pointer to a list
of records to be read from the database files.&nbsp; Memory is allocated
and should be freed by calling jp_free_DB_records().
</p><p>This function will read the pdb file and the pc file out of the $(HOME)/.jpilot/
directory and put all the records into a list.&nbsp; The list contains
structures of the following:
</p><p><tt>typedef struct</tt>
<br><tt>{</tt>
<br><tt>&nbsp;&nbsp; PCRecType rt;</tt>
<br><tt>&nbsp;&nbsp; unsigned int unique_id;</tt>
<br><tt>&nbsp;&nbsp; unsigned char attrib;</tt>
<br><tt>&nbsp;&nbsp; void *buf;</tt>
<br><tt>&nbsp;&nbsp; int size;</tt>
<br><tt>} jp_buf_rec;</tt>
</p><p><b><tt>PCRecType rt - </tt></b>This has been explained in the previous
paragraph.
<br><b><tt>unsigned int unique_id - </tt></b>This is the unique_id of a
record.&nbsp; The palm assigns these when they are created.&nbsp; The PC
records will have their own set of unique ids.
<br><b><tt>unsigned char attrib - </tt></b>This is the attributes of the
record.&nbsp; Look at the pilot-link code to understand these.
<br><b><tt>void *buf - </tt></b>This is the raw record as read from the
DB.
<br><b><tt>int size - </tt></b>This is the size of the raw record.
</p><p>
</p><hr width="100%">
<p><b><tt>int jp_free_DB_records(GList **records);</tt></b>
</p><p><b><tt>GList **records</tt></b> is a pointer to pointer to a list of
records to be freed.
<br>This function will free the records list and set the pointer to NULL
on completion.
</p><p>This call should be used to free the record list allocated by jp_read_DB_files().
</p><p>
</p><hr width="100%">
<p><b><tt>int jp_delete_record(char *DB_name, buf_rec *br, int flag);</tt></b>
</p><p><b><tt>char *DB_name</tt></b> is the DB name to be witten to.&nbsp;
For example to write to the Expense application database you would pass
"ExpenseDB".&nbsp; Do not pass the file extension (".pdb").
<br><b><tt>buf_rec *br</tt></b> is a pointer to a record to be deleted.
<br><b><tt>int flag </tt></b>can be either <b><tt>DELETE_FLAG</tt></b>
or <b><tt>MODIFY_FLAG</tt></b>.&nbsp; DELETE_FLAG should be used if the
record is being deleted.&nbsp; MODIFY_FLAG should be used if the record
is being modified.
</p><p>
</p><hr width="100%">
<br><b><tt>int jp_pc_write(char *DB_name, buf_rec *br);</tt></b>
<p><b><tt>char *DB_name</tt></b> is the DB name to be witten to.&nbsp;
For example to write to the Expense application database you would pass
"ExpenseDB".&nbsp; Do not pass the file extension (".pdb").
<br><b><tt>buf_rec *br</tt></b> is a pointer to a record to be written
to the DB file.
</p><p><tt>typedef struct</tt>
<br><tt>{</tt>
<br><tt>&nbsp;&nbsp; PCRecType rt;</tt>
<br><tt>&nbsp;&nbsp; unsigned int unique_id;</tt>
<br><tt>&nbsp;&nbsp; unsigned char attrib;</tt>
<br><tt>&nbsp;&nbsp; void *buf;</tt>
<br><tt>&nbsp;&nbsp; int size;</tt>
<br><tt>} jp_buf_rec;</tt>
</p><p>This function is used for writing a record to the pc database file.&nbsp;
The record type should almost always be NEW_PC_REC.&nbsp; Unique_id can
be left blank since it is an outgoing parameter.&nbsp; A new unique id
will be assigned and placed in the structure.&nbsp; Attrib is the record
attributes, buf is a raw database record, and size is the size of the record.
<br>&nbsp;

</p><hr width="100%">
<h4>
Other Miscellaneous API Functions</h4>
<hr width="100%">
<p><b><tt>int unlink_file(char *filename);</tt></b>
</p><p><b><tt>char *filename</tt></b> is the filename to remove.&nbsp;
</p><p>This function is like unlink except that it looks for the file in the jpilot
directory.&nbsp;
</p><p>

</p><hr width="100%">
<p><b><tt>int rename_file(char *old_filename, char *new_filename);</tt></b>
</p><p><b><tt>char *old_filename</tt></b> is the filename to rename.&nbsp;
</p><p><b><tt>char *new_filename</tt></b> is the filename to rename to.&nbsp;
</p><p>This function is like rename except that it looks for the files in the 
jpilot directory.&nbsp;
</p><p>

</p><hr width="100%">
<p><b><tt>int get_app_info_size(FILE *in, int *size);</tt></b>
</p><p><b><tt>FILE *in</tt></b> input parameter, an open file pointer to a palm 
pdb file.&nbsp;
</p><p><b><tt>int *size</tt></b> output parameter, is the size of the application 
info block.&nbsp;
</p><p>

</p><hr width="100%">
<p><b><tt>int read_header(FILE *pc_in, PC3RecordHeader *header);</tt></b>
</p><p><b><tt>FILE *pc_in</tt></b> input parameter, an open file pointer to a 
J-Pilot pc3 file pdb file.&nbsp;
</p><p><b><tt>PC3RecordHeader *header</tt></b> output parameter, the header from 
the file read in.&nbsp;
</p><p>

</p><hr width="100%">
<p><b><tt>int write_header(FILE *pc_out, PC3RecordHeader *header);</tt></b>
</p><p><b><tt>FILE *pc_out</tt></b> input parameter, an open file pointer to a 
J-Pilot pc3 file pdb file.&nbsp;
</p><p><b><tt>PC3RecordHeader *header</tt></b> input parameter, the header to be
written to the file.&nbsp;
</p>



