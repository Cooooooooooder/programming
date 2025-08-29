<?php

interface DBConnects
{
    public function getUsers();
    public function getArticles();
    public function showStats();
}

class MySQL implements DBConnects
{
    public function getUsers()
    {
        echo "SELECT * FROM users";
    }
    public function getArticles()
    {
        echo "SELECT * FROM articles";
    }
    public function showStats()
    {
        echo "SELECT * FROM status";
    }
}

class Oracle implements DBConnects
{
    public function getUsers()
    {
        echo "SELECT * FROM users";
    }
    public function getArticles()
    {
        echo "SELECT * FROM articles";
    }
    public function showStats()
    {
        echo "SELECT * FROM status";
    }
}

$mysql1 = new MySQL();
$oracle1 = new Oracle();
echo "<pre>"; print_r($mysql1); echo "</pre>"; 
echo "<pre>"; print_r($oracle1); echo "</pre>"; 