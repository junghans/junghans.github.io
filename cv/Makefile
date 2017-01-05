SUBDIRS=tex
include ../pages/Makefile.incl
OBJS=cv-web.html
all: date $(OBJS) cv.tex

#extra deps
cv-web.html: cv-content.t2t ../publications/pub-content-numbered.t2t 
cv.pdf: cv-content.t2t ../publications/pub-content-numbered.t2t

.PHONY: date

date: dummy
	@if [ ../publications/pub-content.t2t -nt cv-content.t2t ]; then \
		touch -r ../publications/pub-content.t2t cv-content.t2t; \
	else \
		touch -r cv-content.t2t ../publications/pub-content.t2t; \
	fi
	@if [ cv-content.t2t -nt cv.t2t ]; then \
	  touch -r cv-content.t2t cv.t2t; \
	fi

