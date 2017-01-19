SUBDIRS=pages publications cv img
include pages/Makefile.incl

all:

deploy:
	./deploy.sh
