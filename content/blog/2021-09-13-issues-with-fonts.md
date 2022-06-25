---
title: Issue with fonts in v2.0.1
date: "2021-09-13 18:19:00"
author: "David Malia"
---


J-Pilot is using css rather than rc files since version 2.

If you copy `/usr/share/jpilot/jpilotcss.default` to `~/.jpilot`, it will use that file, and you should be able to tweak the settings.  I thought it was installing already to the home directory, but I missed something.


At the bottom of the file there is the following lines:
```CSS
* {
	font-family: Arial Black, sans-serif;
	font-size: 10pt;
}
```
Change "`font-family: Arial Black, sans-serif;`" to "`font-family: Arial, sans-serif;`", and the font won't appear to be bolded everywhere.

