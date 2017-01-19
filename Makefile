SUBDIRS=pages publications cv img
include pages/Makefile.incl

all:

deploy:
	make
	git checkout master
	git commit -a -m "deploy html"
	git push
	git checkout github
