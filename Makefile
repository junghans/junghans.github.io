PHPDEPS=../pages/config.t2t ../pages/footer.t2t ../pages/menu.t2t ../pages/menu-links.html ../pages/site.css ../pages/logger.php ../pages/google_analytics.php

all:
	$(MAKE) $(MFLAGS) -C pages PHPDEPS="$(PHPDEPS)"
	$(MAKE) $(MFLAGS) -C publications PHPDEPS="$(PHPDEPS)"
	$(MAKE) $(MFLAGS) -C downloads PHPDEPS="$(PHPDEPS)"
	$(MAKE) $(MFLAGS) -C cv PHPDEPS="$(PHPDEPS)"

clean:
	$(MAKE) $(MFLAGS) -C pages clean
	$(MAKE) $(MFLAGS) -C publications clean
	$(MAKE) $(MFLAGS) -C downloads clean
	$(MAKE) $(MFLAGS) -C cv clean

