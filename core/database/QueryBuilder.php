<?php 


class QueryBuilder {

    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode( ",", array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {

            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);

        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public function login($table, $parameters)
    {
        $name = $parameters['name'];
        $password = $parameters['password'];
        
        try{
            $statement = $this->pdo->prepare("select * from {$table} where name = '{$name}' and password = '{$password}'");
            $statement->execute();
 
        return $statement->fetchAll(PDO::FETCH_CLASS);
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getTasks($table, $parameters)
    {
        try{
            $statement = $this->pdo->prepare("select * from {$table} where user_id = '{$parameters['id']}'");
            $statement->execute();

            return $statement->fetchAll(PDO::FETCH_CLASS);

        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function selectDistribute($table, $parameters)
    {
        try{
            $stmt_file = $this->pdo->prepare("select * from {$table} order by id desc limit 0, 1");
            $stmt_file->execute();
            $res_file = $stmt_file->fetch(PDO::FETCH_ASSOC);

            $stmt_users = $this->pdo->prepare("select * from {$parameters['table']}");
            $stmt_users->execute();
            $res_users = $stmt_users->fetchAll(PDO::FETCH_CLASS);

            $array = [
                'file' => $res_file,
                'users' => $res_users
            ];
            
            return $array;
            
        } catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function addTasks($table, $parameters)
    {

    }
}