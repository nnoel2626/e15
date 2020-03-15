# e15

CSCI E-15 Web Server Frameworks with Laravel/PHP


# Step to push code to Github

git status
git add --all
git commit -m "added StringProcessor class and initial commit for bookmark."
git push

# Production server

ssh root@198.211.101.26
composer create-project --prefer-dist laravel/laravel p2 "6.*.*"
cd p2
chmod -R 777 storage
chmod -R 777 bootstrap/cache


how to retain data with invalid form input using balde syntx

