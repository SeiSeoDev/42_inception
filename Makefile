all :	
		mkdir -p /Users/seiseo/data/mysql-data
		mkdir -p /Users/seiseo/data/wordpress-data
		docker-compose -f srcs/docker-compose.yml up --build

# stop : stop running containers without removing them
stop :	
			docker-compose -f srcs/docker-compose.yml stop

#  rm : stop et efface les containers
rm :	stop
		rm -rf /Users/seiseo/data/*
		docker system prune -a
		docker volume rm srcs_mysql-data
		docker volume rm srcs_wordpress-data

.PHONY:	all build up stop rm
