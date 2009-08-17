OBJS=publications.php 

DEPS=../pages/config.t2t ../pages/footer.t2t ../pages/menu.t2t ../pages/menu-links.html ../pages/site.css ../pages/logger.php

all: $(OBJS)

publications.php: publications.t2t $(DEPS)

.SUFFIXES: .t2t .php

.t2t.php:
	        txt2tags -t html --infile $< --outfile $*.php

clean:
	        rm -f $(OBJS)
		rm -f *~

