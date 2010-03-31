SUBDIRS=
include ../pages/Makefile.incl
OBJS=publications.php 

all: date $(OBJS)

publications.php: pub-content.t2t

.PHONY: date

date: dummy
	touch -r pub-content.t2t publications.t2t
