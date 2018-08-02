### back-end Tasklist
    
	criar uma base de dados com nome takslist, charset utf8
    executar o sql que esta em resources/sql/schema.sql
	ajustar o usuario e senha para conecar no banco,  resources/config/prod.php
    na pasta raiz executar php -S 0:9001 -t web/

	 http://localhost:9001/api/v1.


	APIs:
	GET  ->   http://localhost:9001/api/v1/task
    GET  ->   http://localhost:9001/api/v1/task/{id}
	POST ->   http://localhost:9001/api/v1/task
	PUT ->   http://localhost:9001/api/v1/task/{id}
	DELETE -> http://localhost:9001/api/v1/task/{id}
