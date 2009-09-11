OBJS=publications.php 

all: $(OBJS)

publications.php: publications.t2t $(PHPDEPS) pub-content.t2t

.SUFFIXES: .t2t .php

.t2t.php:
	touch -r pub-content.t2t $<
	txt2tags -t html --infile $< --outfile $@

clean:
	rm -f $(OBJS)
	rm -f *~

