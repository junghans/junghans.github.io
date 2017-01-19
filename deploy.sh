#/bin/bash
git checkout github
git pull
git checkout master
git merge github
make clean
make
git commit -a -m "deploy html"
git push
git checkout github
