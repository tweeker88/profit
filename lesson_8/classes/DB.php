<?php

class DB
{
    protected $dbh;

    public function __construct(array $config)
    {
        $this->dbh = new PDO(
            $config['driver'] .
                 ':host='. $config['host'] .
                 ';dbname=' . $config['dbname'],
                 $config['user'],
                 $config['password']
        );
    }

    public function execute(string $sql)
    {
        return $this->dbh->execute($sql);
    }

    public function query(string $sql, array $data, string $class)
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($data);

        $articles  = $sth->fetchAll(PDO::FETCH_CLASS, $class);

        return !empty($articles) ? $articles : false;

    }
}