# LaraPress (nginx + mysql + phpfpm + WordPressDB)
## Precondition
- Docker (https://www.docker.com/)  
- Docker Compose (https://docs.docker.com/compose/)  

## Set up
  > `git clone https://github.com/sho-zy/laravelSample.git`  
  > `docker-compose up -d`  
  > `docker exec -it laravelsample_phpfpm_1 /bin/sh`  (enter the container)  
  > `composer install`  
  > `php artisan key:generate`  
  > `php artisan migrate:fresh`  
  > `exit`    (exit the container)  
  > `docker-compose restart`

## URL
- Laravel Home  
  http://localhost/
