#!/bin/sh
#Ejecutar tests en bucle

function almuadillas(){
	local VAL=1
	local caracterArepetir='#'
	local totalAlmuadillas='#'
	local tiempo=`expr $1 / 4`
	#while [ $VAL -lt $1 ]         # mientras $VAL < hasta el primer parametro
	#do 
		#$totalAlmuadillas=$totalAlmuadillas+$caracterArepetir
    	
		sleep  $tiempo
		echo -ne '[#####...............] (25%)\r'
		sleep  $tiempo
		echo -ne '[##########..........] (50%)\r'
		sleep  $tiempo
		echo -ne '[###############.....] (75%)\r'
		sleep  $tiempo
		echo -ne '[####################] (100%)\r'

    	sleep $2
    	VAL=`expr $VAL + 1`
	#done
	#return $totalAlmuadillas
}

function barraDeProgreso(){
	#local VAL=1
	#local TamanoTotal=50
	#local Almuadillas=0
	#local TiempoEntreAlmuadillas=`expr $1 / 50`
	#while [ $VAL -lt 50 ]         # mientras $VAL < que el primer parametro
	#do 
		#almuadillas $VAL $TiempoEntreAlmuadillas
		#echo "$?"
		#echo -ne '#####                     (33%)\r'
    #	sleep $TiempoEntreAlmuadillas #segundos
    # 	VAL=`expr $VAL + 1`
	#done
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
#################################################



#VAL=1
#  while [ $VAL -lt 10 ]         # mientras $VAL < 10
#  do
#    echo creando archivo arch$VAL
#    touch arch$VAL
#    VAL=`expr $VAL + 1`
#  done



clear
#vendor/bin/phpunit
tiempo = 14
while [ true ] 
do 
	clear
	vendor/bin/phpunit
	echo ''
	barraDeProgreso 10
	
	#clear
	#vendor/bin/phpunit
	#echo -ne '#####                     (33%)\r'
		
done

#echo -ne '#####                     (33%)\r'
#	sleep 1
#	echo -ne '#############             (66%)\r'
#	sleep 1
#	echo -ne '#######################   (100%)\r'
#	echo -ne '\n'