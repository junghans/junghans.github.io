#! /bin/bash -x
logfile="log.txt"
cp $logfile ${logfile%.txt}_$(date +%y%m%d_%H%M).txt
sed -i -e '/ (find.\.mpg.de) /d' \
       -e '/ (crawl-[^)]*\.googlebot\.com) /d' \
       -e '/ (msnbot-[^)]*\.search\.msn\.com) /d' \
       -e '/ ([^)]*\.crawl\.yahoo\.net) /d' \
       -e '/ (crawl.\.dotnetdotcom\.org) /d' \
       -e '/ (crawler[^)]*\.ask\.com) /d' \
       $logfile
