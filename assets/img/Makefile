all: email.png

MAIL="junghans@\{votca.org,lanl.gov,fedoraproject.org\}"

.INTERMEDIATE: email.tex
email.tex: Makefile
	echo '\documentclass{minimal}' > $@
	echo '\begin{document}' >> $@
	echo $(MAIL) >> $@
	echo '\end{document}' >> $@

%.png: %.eps
	convert -define png:exclude-chunks=date $< $@

%.eps: %.dvi
	dvips -E $* -o $@

%.dvi: %.tex
	latex $<
	rm -rf $*.log $*.aux
