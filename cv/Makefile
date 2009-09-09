OBJS=cv-web.php cv.pdf

all: $(OBJS)

cv-web.php: cv-web.t2t $(PHPDEPS) cv-content.t2t ../publications/pub-content.t2t
cv.pdf: cv.t2t cv-content.t2t ../publications/pub-content.t2t

.SUFFIXES: .tex .t2t .php .pdf

.PHONY: update_time

#avoid wrong dates
update_time:
	if [ ../publications/pub-content.t2t -nt cv-content.t2t ]; then \
		touch -r ../publications/pub-content.t2t cv-web.t2t; \
		touch -r ../publications/pub-content.t2t cv.t2t; \
	else \
		touch -r cv-content.t2t cv-web.t2t; \
		touch -r cv-content.t2t cv.t2t; \
	fi
		
.t2t.php: update_time
	txt2tags -t html --infile $< --outfile $@

.t2t.tex: update_time
	txt2tags -t tex --infile $< --outfile $@
	#cat -n cv.tex

.tex.pdf:
	pdflatex $<
	rm -f cv.aux cv.log cv.out

clean:
	rm -f $(OBJS)
	rm -f *~

