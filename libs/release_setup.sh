#!/bin/bash

LOG_FILE="/home/pi/release_log.txt"
BOOTSTRAP_URL="https://build.nav.community/bootstrap/bootstrap-navcoin.tar"
VERSION="1.0.7"

echo "WARNING THIS SCRIPT WILL DELETE YOUR WALLET.DAT. THERE IS NO WAY TO RECOVER YOUR COINS WITHOUT A BACK UP. THIS SCRIPT IS ONLY FOR USE WHEN CREATING NEW NAVPI IMAGES"
echo "TO CONTINUE ENTER 'DELETE' OR ENTER ANYTHING ELSE TO EXIT"
read USER_INPUT
if [ $USER_INPUT == "DELETE" ]
then
echo -n "Starting NavPi $VERSION Release Script: " > $LOG_FILE
date >> $LOG_FILE

echo "Killing daemon" >> $LOG_FILE
killall navcoind >> $LOG_FILE

#echo "Deleting old blockchain" >> $LOG_FILE
#sudo rm -rfv /home/stakebox/.navcoin4/chainstate  && sudo rm -rf /home/stakebox/.navcoin4/blocks

#echo "Downloading latest blockchain bootstrap" >> $LOG_FILE
#wget $BOOTSTRAP_URL --no-verbose --append-output=$LOG_FILE

#echo "Untaring the bootstrap" >> $LOG_FILE

#echo "Moving files" >> $LOG_FILE
#sudo mv ./bootstrap/debian/.navcoin4/chainstate /home/stakebox/.navcoin4/chainstate  && mv ./bootstrap/debian/.navcoin4/blocks /home/stakebox/.navcoin4/blocks

echo "Updating the OS packages" >> $LOG_FILE
sudo apt update && apt upgrade -y >> $LOG_FILE

echo "Updating the UI" >> $LOG_FILE
cd /home/stakebox/UI
sudo git fetch origin && git pull >> $LOG_FILE

echo "Updating the wallet" >> $LOG_FILE
sudo /home/stakebox/UI/libs/updater.sh >> $LOG_FILE

echo "Deleting the wallet.dat" >> $LOG_FILE
sudo rm -rfv /home/stakebox/.navcoin4/wallet.dat >> $LOG_FILE

echo "Clearing bash history and exiting." >> $LOG_FILE
cat /dev/null >> /home/pi/.bash_history && history -c && exit

else
echo "EXITING RELEASE SCRIPT"
fi
