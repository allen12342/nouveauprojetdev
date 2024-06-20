run:
	docker-compose --env-file .env up -d && chmod 777 public/img; \
    echo 'Waiting for mysql to be ready...' && sleep 25; \
	docker-compose exec web php -r "require 'public/db.php'; createDb();"

initData:
	docker-compose exec web php -r "require 'public/db.php'; createDataFixtures();"

stop:
	docker-compose down