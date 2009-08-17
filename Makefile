all:
	$(MAKE) $(MFLAGS) -C pages
	$(MAKE) $(MFLAGS) -C publications
	$(MAKE) $(MFLAGS) -C downloads

clean:
	$(MAKE) $(MFLAGS) -C pages clean
	$(MAKE) $(MFLAGS) -C publications clean
	$(MAKE) $(MFLAGS) -C downloads clean

