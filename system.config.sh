#!/bin/bash
echo '127.0.0.1 bema.local' >> /etc/hosts
echo '127.0.0.1 www.bema.local' >> /etc/hosts
cp 007-bema.conf /etc/apache2/site-available/007-bema.conf
a2ensite 007-bema.conf
service apache2 restart
