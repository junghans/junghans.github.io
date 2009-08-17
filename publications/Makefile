OBJS=publications.php 

all: $(OBJS)

publications.php: publications.t2t $(PHPDEPS)

.SUFFIXES: .t2t .php

.t2t.php:
	        txt2tags -t html --infile $< --outfile $*.php

clean:
	        rm -f $(OBJS)
		rm -f *~

