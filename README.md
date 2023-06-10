

# Test requests

### Register User
```shell

curl --request POST \
  --url http://localhost:8000/api/register \
  --header 'Content-Type: application/json' \
  --cookie token=3%257CwEcSvXorBb8UXT8PrD0C4JaXHmzLBkMMOZSZu34G \
  --data '{
	"name":"test1", 
	"email" : "test@test22",
	"password" : "pass1",
	"password_confirmation": "pass1"
}'
```
### Login
```shell
curl --request POST \
--url http://localhost:8000/api/login \
--header 'Accept: application/json' \
--header 'Content-Type: application/json' \
--cookie token=3%257CwEcSvXorBb8UXT8PrD0C4JaXHmzLBkMMOZSZu34G \
--data '{
"email" : "test@test22",
"password" : "pass1"
}'
```
### create blog
```shell
curl --request POST \
  --url http://localhost:8000/api/posts \
  --header 'Accept: application/json' \
  --header 'Content-Type: application/json' \
  --cookie token=3%257CwEcSvXorBb8UXT8PrD0C4JaXHmzLBkMMOZSZu34G \
  --data '{
	"title": "title 1",
	"body": "test@test22"
}'
```
### get all the blogs
```
curl --request GET \
  --url http://localhost:8000/api/posts \
  --header 'Accept: application/json' \
  --header 'Content-Type: application/json' \
  --cookie token=3%257CwEcSvXorBb8UXT8PrD0C4JaXHmzLBkMMOZSZu34G \
  --data '{
	"title": "title 1",
	"body": "test@test22"
}'
```
### update the blogs
```
curl --request PUT \
  --url http://localhost:8000/api/posts/1 \
  --header 'Accept: application/json' \
  --header 'Content-Type: application/json' \
  --cookie token=3%257CwEcSvXorBb8UXT8PrD0C4JaXHmzLBkMMOZSZu34G \
  --data '{
	"title": "title 1 title 2",
	"body": "test@test22"
}'
```
### get blogs after update
```
curl --request GET \
  --url http://localhost:8000/api/posts/1 \
  --header 'Accept: application/json' \
  --header 'Content-Type: application/json' \
  --cookie token=3%257CwEcSvXorBb8UXT8PrD0C4JaXHmzLBkMMOZSZu34G \
  --data '{
	"title": "title 1 title 2",
	"body": "test@test22"
}'
```
### get blogs by id
```
curl --request GET \
--url http://localhost:8000/api/posts/1 \
--header 'Accept: application/json' \
--header 'Content-Type: application/json' \
--cookie token=3%257CwEcSvXorBb8UXT8PrD0C4JaXHmzLBkMMOZSZu34G \
--data '{
"title": "title 1 title 2"
}'
```
### delete the blogs
```
curl --request DELETE \
  --url http://localhost:8000/api/posts/1 \
  --header 'Accept: application/json' \
  --header 'Content-Type: application/json' \
  --cookie token=3%257CwEcSvXorBb8UXT8PrD0C4JaXHmzLBkMMOZSZu34G
```
### get blogs after delete
```
curl --request GET \
  --url http://localhost:8000/api/posts/1 \
  --header 'Accept: application/json' \
  --header 'Content-Type: application/json' \
  --cookie token=3%257CwEcSvXorBb8UXT8PrD0C4JaXHmzLBkMMOZSZu34G \
  --data '{
	"title": "title 1",
	"body": "test@test22"
}'
```
### get users
```
curl --request GET \
  --url http://localhost:8000/api/posts/1 \
  --header 'Accept: application/json' \
  --header 'Content-Type: application/json' \
  --cookie token=3%257CwEcSvXorBb8UXT8PrD0C4JaXHmzLBkMMOZSZu34G
```
