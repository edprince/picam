#!/bin/bash
while true
do
  echo "`mv latest.jpg temp.jpg`"
  echo "`mv oldest.jpg latest.jpg`"
  echo "`mv temp.jpg oldest.jpg`"
  sleep 10 
done
