#!/bin/bash
apache2ctl start

while true; do
  inotifywait -e modify,move,create,delete -r /var/www/html/
  apache2ctl restart
done