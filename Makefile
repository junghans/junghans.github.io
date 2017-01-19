SUBDIRS=pages publications cv img
include pages/Makefile.incl

all:

deploy:
	git checkout github || true
	git pull || true
	git checkout master
	git merge github
	make
	git commit -a -m "deploy html" || true
	git push || true
	git checkout github
