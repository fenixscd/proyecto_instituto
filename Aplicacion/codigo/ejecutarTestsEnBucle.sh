#!/bin/sh
#Ejecutar tests en bucle


function barraDeProgreso(){
	
	local fraccion=`expr $1 / 10`

	echo -ne '[......................] (0%)\r'
	sleep  $fraccion
	echo -ne '[##....................] (10%)\r'
	sleep  $fraccion
	echo -ne '[####..................] (20%)\r'
	sleep  $fraccion
	echo -ne '[######................] (30%)\r'
	sleep  $fraccion
	echo -ne '[########..............] (40%)\r'
	sleep  $fraccion
	echo -ne '[##########............] (50%)\r'
	sleep  $fraccion
	echo -ne '[############..........] (60%)\r'
	sleep  $fraccion
	echo -ne '[##############........] (70%)\r'
	sleep  $fraccion
	echo -ne '[################......] (80%)\r'
	sleep  $fraccion
	echo -ne '[####################..] (90%)\r'
	sleep  $fraccion
	echo -ne '[######################] (100%)\r'
}

clear
while [ true ] 
do 
	clear
	vendor/bin/phpunit
	echo ''
	barraDeProgreso 10
done