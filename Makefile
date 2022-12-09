all: data
	@sudo docker compose -f srcs/docker-compose.yml up -d --build

data:
	-@mkdir -p data data/db_vol data/wp_vol

down:
	@ sudo docker compose -f srcs/docker-compose.yml down --rmi all

#prune: down
#	-@ sudo docker rmi mdb:1.0 wpress:1.0 mnginx:1.0

rmvols: down 
	-@ sudo docker volume rm srcs_wp_vol srcs_db_vol

purge: rmvols
	@sudo rm -rf data


re: purge all

.PHONY: data down prune rmvols purge
