OBJS=cv-web.php cv.pdf

all: $(OBJS)

.SUFFIXES: .tex .t2t .php .pdf

cv-web.php: cv-web.t2t  $(PHPDEPS) cv-content.t2t ../publications/pub-content.t2t 
cv.pdf: cv.t2t cv-content.t2t ../publications/pub-content.t2t

.t2t.php:
	if [ ../publications/pub-content.t2t -nt cv-content.t2t ]; then \
		touch -r ../publications/pub-content.t2t $<; \
	else \
		touch -r cv-content.t2t $<; \
	fi
	txt2tags -t html --infile $< --outfile $@

.t2t.tex:
	if [ ../publications/pub-content.t2t -nt cv-content.t2t ]; then \
		touch -r ../publications/pub-content.t2t $<; \
	else \
		touch -r cv-content.t2t $<; \
	fi
	txt2tags -t tex --infile $< --outfile $@
	#cat -n cv.tex

.tex.pdf:
	pdflatex -halt-on-error $<
	rm -f cv.aux cv.log cv.out

clean:
	rm -f $(OBJS)
	rm -f *~

