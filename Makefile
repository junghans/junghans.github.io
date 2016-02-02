SUBDIRS=pages publications cv img logs
include pages/Makefile.incl

all:
	@#log and ip need selinux context httpd_user_ra_content_t
	@[[ $$(ls -Z logs) = *httpd_user_ra_content_t* ]] || echo "Permission on logs wrong"
