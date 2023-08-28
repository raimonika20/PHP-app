# properties app

## requirements

[x] a login
[x] A listing page
[x] Listing page with different product categories
[] Every categories have some attributes
[] Store the data in MySQL and host everything on a AWS.

## installation

install docker
run

```bash
docker run -i -t -p "88:80" -p "3306:3306" -v ${PWD}/app:/app -v ${PWD}/mysql:/var/lib/mysql mattrayner/lamp:latest-1804
```

run the queries.sql in phpmyadmin
