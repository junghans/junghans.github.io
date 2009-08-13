OBJS=home.html fluchomat.html bash.html

DEPS=config.t2t footer.t2t menu.t2t menu-links.html site.css

all: $(OBJS)

home.html: home.t2t $(DEPS)
bash.html: bash.t2t $(DEPS)
fluchomat.html: fluchomat.t2t $(DEPS)

.SUFFIXES: .t2t .html

.t2t.html:
	        txt2tags -t html $<

clean:
	        rm -f $(OBJS)
		rm -f *~

