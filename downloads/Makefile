OBJS=downloads.html 

DEPS=../pages/config.t2t ../pages/footer.t2t ../pages/menu.t2t ../pages/menu-links.html ../pages/site.css

all: $(OBJS)

downloads.html: downloads.t2t $(DEPS)

.SUFFIXES: .t2t .html

.t2t.html:
	        txt2tags -t html $<

clean:
	        rm -f $(OBJS)
		rm -f *~

