SUBDIRS=
include ../pages/Makefile.incl
OBJS=publications.php 

all: date pdfcheck $(OBJS)

publications.php: pub-content.t2t

.PHONY: date pdfcheck

date: dummy
	@if [ pub-content.t2t -nt  publications.t2t ]; then \
		touch -r pub-content.t2t publications.t2t; \
	else \
		touch -r pub-content.t2t publications.t2t; \
	fi

pdfcheck: pub-content.t2t dummy
	@for i in `sed -n 's/^.*pdf:\(.....\).*$$/\1.pdf/p' $<`; do \
	  [ -f $$i ] || ( echo $$i is missing; exit 1; ) ; \
	 done
