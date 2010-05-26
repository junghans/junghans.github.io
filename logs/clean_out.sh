#! /bin/bash -x
logfile="log.txt"
cp $logfile ${logfile%.txt}_$(date +%y%m%d_%H%M).txt
sed -i \
       -e '/mpg-crawler/d' \
       -e '/Googlebot/d' \
       -e '/msnbot/d' \
       -e '/Slurp/d' \
       -e '/discobot/d' \
       -e '/SurveyBot/d' \
       -e '/Twiceler/d' \
       -e '/CCBot/d' \
       -e '/Exabot/d' \
       -e '/MJ12bot/d' \
       -e '/citeseerxbot/d' \
       -e '/MLBot/d' \
       -e '/Yandex/d' \
       -e '/LinkLint-checkonly/d' \
       -e '/NutchCVS/d' \
       -e '/Speedy Spider/d' \
       -e '/minerva\/crawl/d' \
       -e '/Ask Jeeves\/Teoma/d' \
       -e '/crawler@alexa.com/d' \
       -e '/FAST Enterprise Crawler/d' \
       -e '/sSearch Crawler/d' \
       -e '/conpilot crawler/d' \
       -e '/Steeler/d' \
       -e '/Yeti\//d' \
       -e '/SSearch Crawler/d' \
       $logfile
