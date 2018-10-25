#!/bin/bash

LOG_FILE="/home/pi/release_log.txt"
BOOTSTRAP_URL="https://nav.nyc3.digitaloceanspaces.com/bootstrap/mainnet/bootstrap-navcoin_mainnet.tar"
VERSION="1.0.11"

echo "WARNING THIS SCRIPT WILL DELETE YOUR WALLET.DAT. THERE IS NO WAY TO RECOVER YOUR COINS WITHOUT A BACK UP. THIS SCRIPT IS ONLY FOR USE WHEN CREATING NEW NAVPI IMAGES"
echo "TO CONTINUE ENTER 'DELETE' OR ENTER ANYTHING ELSE TO EXIT"
read USER_INPUT
if [ $USER_INPUT == "DELETE" ]
then
echo -n "Starting NavPi $VERSION Release Script: " > $LOG_FILE
date >> $LOG_FILE

echo "Killing daemon" >> $LOG_FILE
killall navcoind >> $LOG_FILE

echo "Deleting old blockchain" >> $LOG_FILE
sudo rm -rfv /home/stakebox/.navcoin4/chainstate  && sudo rm -rf /home/stakebox/.navcoin4/blocks

echo "Downloading latest blockchain bootstrap" >> $LOG_FILE
wget $BOOTSTRAP_URL --no-verbose --append-output=$LOG_FILE

echo "Untaring the bootstrap" >> $LOG_FILE
sudo tar -xvf bootstrap-navcoin-4.2.1_mainnet.tar

echo "Moving files" >> $LOG_FILE
sudo mv ./chainstate /home/stakebox/.navcoin4/chainstate
sudo mv ./blocks /home/stakebox/.navcoin4/blocks
sudo mv ./cfund /home/stakebox/.navcoin4/cfund

echo "Fixing file permissions" >> $LOG_FILE
cd /home/stakebox/.navcoin4
sudo chown www-data:www-data -R chainstate blocks cfund
sudo chmod 777 -R chainstate blocks cfund

echo "Updating the OS packages" >> $LOG_FILE
sudo apt update && apt upgrade -y >> $LOG_FILE

echo "Updating the UI" >> $LOG_FILE
cd /home/stakebox/UI
sudo git pull >> $LOG_FILE

echo "Updating the wallet" >> $LOG_FILE
sudo /home/stakebox/UI/libs/updater.sh >> $LOG_FILE

echo "Deleting the wallet.dat" >> $LOG_FILE
sudo rm -rfv /home/stakebox/.navcoin4/wallet.dat >> $LOG_FILE

echo "Clearing bash history and exiting." >> $LOG_FILE
cat /dev/null >> /home/pi/.bash_history && cat /dev/null >> ~/.bash_history && history -c && exit

else
echo "EXITING RELEASE SCRIPT"
fi
