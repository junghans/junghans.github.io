LOG=log.txt

all:
	@[ -r $(LOG) ] || touch log.txt
	@[ `stat -c %a $(LOG)` = 666 ] || chmod -v 666 $(LOG)
