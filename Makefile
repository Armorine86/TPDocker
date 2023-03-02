all: main

main:
	sudo mkdir -p /home/biohazard/data/mariadb1/
	sudo mkdir -p /home/biohazard/data/mariadb2/
	@docker-compose -f ./docker-compose.yml up --build

up:
	@docker-compose -f ./docker-compose.yml up

down:
	@docker-compose -f ./docker-compose.yml down


build:
	@docker-compose -f ./docker-compose.yml build

network:
	docker network create mon_reseau

prune:
	docker system prune -a

clean:
	sudo rm -rf ~/data/mariadb1/
	sudo rm -rf ~/data/mariadb2/
	@docker-compose -f ./docker-compose.yml down --rmi all

vclean:
	@docker volume rm $(shell docker volume ls -q)

state:
	sudo docker ps -a
	sudo docker images
	sudo docker volume ls
	sudo docker network ls

fclean:	clean vclean

re: fclean all

.PHONY: all up down build clean vclean fclean re
