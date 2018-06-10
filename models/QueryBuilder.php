<?php
	class QueryBuilder
    {
        protected $pdo;

        public function __construct(PDO $pdo)
        {
            $this->pdo = $pdo;

        }

        public function selectAll($table, $class)
        {
            $statement = $this->pdo->prepare("SELECT * FROM {$table}");
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_CLASS, $class);

        }

        public function selectQuery($query)
        {
            $statement = $this->pdo->prepare($query);
            $statement->execute();
            return $statement->fetchAll();

        }

        public function selectWhere($table, $class, $where)
        {
            $statement = $this->pdo->prepare("SELECT * FROM {$table}"." WHERE ".$where);
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_CLASS, $class);

        }

        public function selectEnrolled()
        {
            $statement = $this->pdo->prepare("SELECT * FROM {$table}"." WHERE ".$where);
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_CLASS, $class);

        }

        public function insert($table, $parameters)
        {
            $sql = sprintf(
                'insert into %s (%s) values (%s)',
                $table,
                implode(', ', array_keys($parameters)),
                ':' . implode(', :', array_keys($parameters))
            );
            try {
                $statement = $this->pdo->prepare($sql);
                $statement->execute($parameters);
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
    }