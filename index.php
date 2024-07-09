<pre>
<?php

class MySqlConnect
{
    private $login;
    private $password;
    private $host;
    private $user;

    private $connect;


    public $table;
    public $where;
    public $limit = '';
    public function __construct()
    {
        $this->login = 'Yasha123';
        $this->password = '123test1233';
        $this->host = '127.0.0.1';
        $this->user = 'Yasha';
        $this->connect();
    }

    private function connect()
    {
        $this->connect = true;
    }

    public function setWhere($where)
    {
        $this->where = $where;
        return $this;
    }

    public function query()
    {
        $query = 'SELECT * FROM ' . $this->table . ' WHERE ' . $this->where . $this->limit;
        $data = [
                'id' => 0,
                'name' => 'Yasha',
        ];
        return $data;
    }

    public function setLimit($limit)
    {
        $this->limit = ' LIMIT ' . $limit;
        return $this;
    }
}

class User
{
    public MySqlConnect $connect;
    public function __construct()
    {
        $this->connect = new MySqlConnect();
        $this->connect->table = 'user';
        $userID = 1;
    }

    public function setWhere(MySqlConnect $mySqlConnect){
        $this->connect
    }
}
$user = new User();
$userID = 0;
$user->connect->setWhere('id = ' . $userID)->setLimit(100)->query();
