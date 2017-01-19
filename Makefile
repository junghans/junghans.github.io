SUBDIRS=pages publications cv img
include pages/Makefile.incl

all:

deploy:
	git checkout github || true
	git pull || true
	make
	git checkout master
	git commit -a -m "deploy html" || true
	git push || true
	git checkout github
