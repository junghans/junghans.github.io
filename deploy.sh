#/bin/bash -e
git checkout github
git pull
git checkout master
git pull
git merge github
git diff --name-only HEAD^ | xargs touch
make
git commit -a -m "deploy html"
git push
git checkout github
