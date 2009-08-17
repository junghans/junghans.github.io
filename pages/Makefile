OBJS=home.php fluchomat.php bash.php

all: $(OBJS)

home.php: home.t2t $(PHPDEPS)
bash.php: bash.t2t $(PHPDEPS) bash_body.html
fluchomat.php: fluchomat.t2t $(PHPDEPS)

.SUFFIXES: .t2t .php

.t2t.php:
	        txt2tags -t html --infile $< --outfile $*.php

clean:
	        rm -f $(OBJS)
		rm -f *~

