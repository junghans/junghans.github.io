SUBDIRS=
include ../pages/Makefile.incl
OBJS=publications.html 
CLEANFILES=pub-content-numbered.t2t

all: date pdfcheck $(OBJS)

publications.html: pub-content-numbered.t2t

.PHONY: date pdfcheck

date: dummy
	@if [ pub-content.t2t -nt  publications.t2t ]; then \
		touch -r pub-content.t2t publications.t2t; \
	else \
		touch -r pub-content.t2t publications.t2t; \
	fi

pub-content-numbered.t2t: pub-content.t2t
	tac $< | \
	perl -pe '$$nr=0 if /^==/; $$nr++ if /^\+/; s/^\+ /+ NR($$nr) /' | \
	tac > $@

pdfcheck: pub-content.t2t dummy
	@for i in `sed -n 's/^.*pdf:\(.....\).*$$/\1.pdf/p' $<`; do \
	  [ -f $$i ] || ( echo $$i is missing; exit 1; ) ; \
	 done
