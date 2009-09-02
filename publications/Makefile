OBJS=publications.php 

all: $(OBJS)

publications.php: update_time publications.t2t $(PHPDEPS) pub-content.t2t

.SUFFIXES: .t2t .php

.PHONY: update_time

update_time:
	touch -r pub-content.t2t publications.t2t

.t2t.php: update_time
	txt2tags -t html --infile $< --outfile $@

clean:
	rm -f $(OBJS)
	rm -f *~

