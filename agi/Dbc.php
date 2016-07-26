<?php

class Dbc()
{
    private $conString;
    private $dbConn;

    private __construct(conString=false)
    {
        $this->conString = $conString or "host=localhost port=5432 dbname=voip user=postgres password=pgadmin";
        $this->startConn();
    }

    private function startConn()
    {
        $this->dbConn = pg_connect($this->conString);
    }

    public function getAll()
    {
        $query = 'SELECT * FROM alunos';
        $result = pg_query($query);
        $alunos = pg_fetch_assoc($result);
        return $alunos;
    }

    public function getByMat($mat)
    {
        $query = 'SELECT * FROM alunos where matricula = $1';
        $params = [$mat];
        $result = pg_query_params($query, $params);
        $aluno = pg_fetch_assoc($result)[0];
        return $aluno;
    }

    function getDbc()
    {
        if (!$this->dbConn)
        {
            $this->startConn();
        }
        return $this->dbConn;
    }

}

?>
