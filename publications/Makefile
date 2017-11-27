SUBDIRS=
include ../pages/Makefile.incl
OBJS=publications.html 
CLEANFILES=pub-content-numbered.t2t

all: pdfcheck $(OBJS)

publications.html: pub-content-numbered.t2t

.PHONY: pdfcheck

pub-content-numbered.t2t: pub-content.t2t
	tac $< | \
	perl -pe '$$nr=0 if /^==/; $$nr++ if /^\+/; s/^\+ /+ NR($$nr) /' | \
	tac > $@
	touch -r $< $@ publications.t2t

pdfcheck: pub-content.t2t dummy
	@for i in `sed -n 's/^.*pdf:\(.....\).*$$/\1.pdf/p' $<`; do \
	  [ -f $$i ] || ( echo $$i is missing; exit 1; ) ; \
	 done
