## Updating from Version 1.0.1/1.0.2

* Plug a keyboard, mouse and screen into the NavPi
* Open up a terminal
* Type: `cd /home/stakebox/UI`
* Type: `git pull`
  * (You should see a download occur)
* Type: `cd ..`
* Type: `sudo chown -R www-data:www-data UI`
* Type: `sudo chmod -R g+s UI`
* Type: `sudo /home/stakebox/UI/libs/updater.sh`
  * (You should see a download occur)
* Open the web browser on the NavPi and visit `127.0.0.1`
* You should see a notification reading: `NOTICE: A new version of NavCoin has been installed. Click here to Apply the update and restart your device`.
* Click `Apply Update`
  * This will restart your NavPi


**Note:** If you can't access `127.0.0.1` in the NavPi's web browser, you can perform the "enable localhost access" steps below, or access the UI from another computer to apply the update and reboot the device.

## Optional

### Setup auto updates

The update script checks for new versions and downloads them directly from our secure GitHub organisation. If you want to stick with manual updates, you can periodically run the updater script manually with the process above.

Or if you want the updates to be automated, you can setup auto-updating for your NavPi which will check for a new version daily and install it if available:

* In a terminal, type: `sudo crontab -e`
  * A text editor will open up in the terminal
* Scroll to the bottom and type `0 0 * * * /home/stakebox/UI/libs/updater.sh`
* Press `Ctrl+O`
  * This will display a prompt to save the file. Press enter to accept.
* Press `Ctrl + X` to exit the text editor
* 
Your NavPi will now check for updates once a day at 00.00 GMT

### Enable localhost access

If you want to be able to access the webUI from the NavPi itself

* In a terminal type `sudo leafpad /etc/apache2/sites-available/navpi.conf`
  * A text editor will open
* In the config file find the `<VirtualHost *:443>` section and the `<Directory>` within that
* Add `Require ip 127.0.0.1` as an entry underneath the last entry in `<Directory>` section
* In the config file find the `<VirtualHost *:80>` section and the `<Directory>` within that
* Add `Require ip 127.0.0.1` as an entry underneath the last entry in `<Directory>` section
* Save the file and close the editor
* In the terminal type and run: `sudo service apache2 reload`
  * This will restart the webserver
  * 
You can now access the WebUI with the NavPi via `127.0.0.1`
