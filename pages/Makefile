OBJS=home.php fluchomat.php bash.php

DEPS=config.t2t footer.t2t menu.t2t menu-links.html site.css logger.php

all: $(OBJS)

home.php: home.t2t $(DEPS)
bash.php: bash.t2t $(DEPS)
fluchomat.php: fluchomat.t2t $(DEPS)

.SUFFIXES: .t2t .php

.t2t.php:
	        txt2tags -t html --infile $< --outfile $*.php

clean:
	        rm -f $(OBJS)
		rm -f *~

