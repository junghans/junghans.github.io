SUBDIRS=
include ../pages/Makefile.incl
OBJS=email.png
all: $(OBJS)

MAIL="junghans@votca.org"
	
email.tex: Makefile
	echo '\documentclass{minimal}' > $@
	echo '\begin{document}' >> $@
	echo $(MAIL) >> $@
	echo '\end{document}' >> $@
