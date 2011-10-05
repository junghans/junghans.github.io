SUBDIRS=
include ../pages/Makefile.incl
OBJS=home.php fluchomat.php bash.php impressum.php
all: $(OBJS) itemcheck itemcheck2

.PHONY: itemcheck itemcheck2

itemcheck: menu-links.html dummy
	@for i in `sed -n 's/.*id="\([^"]*\)".*/\1/p' $<`; do \
	  grep -q "#$$i" site.css || ( echo $$i is missing in site.css; exit 1; ) \
	done

itemcheck2: site.css dummy
	@for i in `sed -n 's/.*li#\(menu[a-z]*\).*/\1/p' $<`; do \
	  grep -q "id=.$$i" menu-links.html || ( echo $$i is missing in menu-links.html; exit 1; ) \
	done
