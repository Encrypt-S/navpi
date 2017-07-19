![alt text](https://raw.githubusercontent.com/navcoindev/navcoin-media/master/logo/logo-extended.png "NAV Coin")

This is the official github repository for the NAV Coin Stake Box. This repository is the source code behind the raspberry pi image which runs the navcoin daemon and a PHP based web wallet.

You can download the raspberry pi image from our website

http://www.navcoin.org/downloads

Below are some basic security configurations which you might want to implement when setting up your NavPi. The NavPi will work immediately if you simply burn the img to the SD card, plug it into your network and turn it on.

However, because we ship these with some default settings, we do recommend taking the following precautions.

# Defaults

| Item         | Value        |
|:-------------|:-------------|
| Unix Username | pi |
| Unix Password | navpi101 |
| Web Password  | nav |

# Setup

SSH is disabled for security purposes, so any configuration you want to do must be done directly on the device.

- Write img to SD Card.
- Insert SD Cart into Raspberry Pi.
- Plug in Screen, Keyboard & Mouse.
- Power on Raspberry Pi.

# Enable WiFi

It is recommended to use Ethernet as WiFi can be very slow to sync, but if you must use WiFi you can set it up via the graphical user interface on the device.

- Boot to the Raspberry Pi GUI Operating System.
- Right click on the network icon in the top right task bar.
- Add your WiFi configuration.

# Lock Down NavPi Web Access to IP Address

- Boot to the Raspberry Pi GUI Operating System.
- Open Terminal.
- In terminal type `sudo leafpad /etc/apache2/sites-available/navpi.conf` and press enter.
- Add a # symbol to the beginning of the line `Require all granted` making it `#Require all granted`.
- Remove the # symbol from the beginning of the line `#Require ip XXX.XXX.XXX.XXX` and replace `XXX.XXX.XXX.XXX` with the IP Address of the device you wish to access the web interface of the NavPi from (eg. 192.168.1.10).
- Save and close the file.
- In terminal type `sudo service apache2 reload` and press enter.

# Change the Default Unix Password

- Boot to the Raspberry Pi GUI Operating System.
- Open Terminal.
- In terminal type `passwd` and press enter.
- Enter `navpi101` as the current password.
- Enter your new password.
- Confirm your new password.
- Write down your new password.

# Find the IP Address of your NavPi

- Boot to the Raspberry Pi GUI Operating System.
- Open Terminal.
- In terminal type `ifconfig` and press enter.
- Find your `inet addr` (eg. 192.168.1.99).
- Using the computer on your network which you've granted IP access to, open your web browser (Firefox, Chrome, Internet Explorer, Safari).
- In the address bar of your internet browser type in the inet address discovered by ifconfig on the raspberry pi.
- Log into the NavPi Web Interface using the default password `nav`.

# Change the Default Web Interface Password

- Log into the Web Interface of the NavPi.
- Click on the `Control` menu item
- In the `Server` section, click the `Change UI Password` button.
- Type in your new password.
- Confirm your new password.
- Write down your new password.

# Encrypt Your wallet

- Log into the Web Interface of the NavPi.
- Click on the `Control` menu item.
- In the `Security` section, type your desired password into the text field next to the `Encrypt Wallet` button.
- Press enter, or click the `Encrypt Wallet` button.
- Write down your new password.

# Backup your wallet
