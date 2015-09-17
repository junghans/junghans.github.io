#!/bin/bash

rsync -av --delete \
  --exclude '*~' \
  --exclude '.hg*' \
  --exclude '*.orig' \
  --exclude '*.sh' \
  --exclude 'logs/*.txt' \
  --exclude 'dist/*' \
  --exclude 'publications/*' \
  --exclude 'cv/*' \
  --exclude 'txt2tags' \
  -e ssh . ottxor@dev.gentoo.org:~/public_html
