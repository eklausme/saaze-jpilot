---
title: Ported jpilot to GTK3 and released version 2.0.0
date: "2021-02-24 12:00:00"
---

In a combined effort of [David Malia](https://github.com/dmalia1) and me, J-Pilot was ported to use GTK3. GTK2 is now considered deprecated. Although GIMP still uses GTK2.

Using GTK3, J-Pilot can now also run in a web-browser using `broadwayd`.

If you want to test J-Pilot 2.0.0 on Ubuntu 20.04, then uninstall previous version.
```bash
sudo apt remove jpilot-plugins jpilot
sudo apt remove pilot-link libpisync1 libpisock9
```
Then download the new packages:
```bash
wget http://www.jpilot.org/pkg/jpilot_1.8.2-2_amd64.deb
wget http://www.jpilot.org/pkg/jpilot_2.0.1-1_amd64.deb
wget http://www.jpilot.org/pkg/jpilot-plugins_1.8.2-2_amd64.deb
wget http://www.jpilot.org/pkg/jpilot-plugins_2.0.1-1_amd64.deb
wget http://www.jpilot.org/pkg/libpisock9_0.13.0_amd64.deb
wget http://www.jpilot.org/pkg/libpisync1_0.13.0_amd64.deb
wget http://www.jpilot.org/pkg/pilot-link_0.13.0_amd64.deb
```

Then run below script:
```bash

#!/bin/bash
echo "Enter 1) Install jpilot 1.8.2"
echo "Enter 2) Install jpilot 2.0.1"
read ANS
#
sudo apt install libusb-0.1-4
sudo dpkg -i ./libpisock9_0.13.0_amd64.deb ./libpisync1_0.13.0_amd64.deb ./pilot-link_0.13.0_amd64.deb
#
case $ANS in
  "1")
    sudo dpkg -i ./jpilot_1.8.2-2_amd64.deb ./jpilot-plugins_1.8.2-2_amd64.deb
    ;;
  "2")
    sudo dpkg -i ./jpilot_2.0.1-1_amd64.deb ./jpilot-plugins_2.0.1-1_amd64.deb
    ;;
  *)
  echo "$ANS: Unknown option."
  exit 1
  ;;
esac
```
