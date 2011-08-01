SUBDIRS=
include ../pages/Makefile.incl
OBJS=email.jpg
all: $(OBJS)

MAIL="junghans@mpip-mainz.mpg.de"
	
email.tex: Makefile
	echo '\documentclass{minimal}' > $@
	echo '\begin{document}' >> $@
	echo $(MAIL) >> $@
	echo '\end{document}' >> $@
