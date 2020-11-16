#!/bin/bash

set -e

rm -rf src

composer install

# comment out this line if you want to manage the composer.json file by yourself
rm -rf composer.json

./vendor/spysystem/soap-maker/soap-maker \
 --vendor-name spysystem \
 --project-name bring \
 --wsdl-path https://api.bring.com/booking/api/ws/booking-v1.wsdl \
 --namespace 'Bring' \
 --output-path "$(pwd)" \
 --use-private-packagist true

git add src/*
