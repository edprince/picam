#!/bin/bash
while true
do
  echo "`mv /var/www/html/github/images/latest.jpg /var/www/html/github/images/temp.jpg`"
  echo "`mv /var/www/html/github/images/oldest.jpg /var/www/html/github/images/latest.jpg`"
  echo "`mv /var/www/html/github/images/temp.jpg /var/www/html/github/images/oldest.jpg`"
  sleep 5
done
