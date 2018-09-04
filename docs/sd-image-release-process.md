# NavPi SD Image Release & Optimisation Process

by Mike Delucchi

The following guide can be used after the upgrade and release process has been completed. 

_NOTE: This is the osx workflow._

## Prerequisites

Before attempting to optimize the image for release, you should have the following completed:

  - NavPi upgraded with the release script
  - blockchain fully synced
  - blocks verified in WebUI (Chromium)
  - all Chromium cache cleared
  - all bash history removed
  - wallet.dat deleted
  - safe shut down with `sudo shutdown -h now`
  - card removed and placed in compliant usb card reader 
  - plugged into to a Mac running current version of osx
  - terminal opened

## Begin Optimisation

### list drives
    diskutil list

    Output
    /dev/disk4 (external, physical):
    #:                       TYPE NAME                    SIZE       IDENTIFIER
    0:     FDisk_partition_scheme                        *15.8 GB    disk4
    1:             Windows_FAT_32 boot                    43.7 MB    disk4s1
    2:                      Linux                         15.8 GB    disk4s2

### note the id of your sd card
look for the one that has the 15.8GB Linux partition
in this case it's > `/dev/disk4`

### convert SD card to mac dmg
    sudo dd if=/dev/rdisk4 of=/Volumes/your-drive/navpi/v1.0.9/fullsize/navpi_1.0.9_optimised.dmg bs=1m

_*note: that we use `rdisk4` instead of `disk4`, this is a much faster way to copy the data_

after entering your sudo password, the operation will begin, be patient...

hit CTRL + T to view the progress in your terminal

### convert to dmg to img
    hdiutil convert /path/imagefile.dmg -format UDTO -o /path/convertedimage.iso

    hdiutil convert /Volumes/your-drive/navpi/navpi_1.0.9.dmg -format UDTO -o /Volumes/your-drive/navpi/navpi_1.0.9.img

### rename to img
    mv /Volumes/your-drive/navpi/navpi_1.0.9.img.cdr /Volumes/your-drive/navpi/navpi_1.0.9.img

### shrink image
use the [PiShrink](https://github.com/Drewsif/PiShrink) script to shrink the image on Ubuntu

## write the image to new SD

### list drives
    diskutil list

### then id your sd card
    /dev/disk4

### unmount the sd
    diskutil unmountDisk /dev/disk4

### write the image to the sd
    dd if=/path/to/image.img of=/dev/rdisk4 bs=1m

