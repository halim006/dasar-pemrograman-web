<?php

namespace Repository {

    use Entity\TodoList;
    use mysql_xdevapi\Result;

    interface TodolistRepository
    {

        function save(TodoList $todoList): void;

        function remove(int $number): bool;

        function findAll(): array;

    }

    class TodolistRepositoryImpl implements TodolistRepository
    {

        public array $todolist = array();

        private \PDO $connetion;

        public function __construct(\PDO $connetion)
        {
            $this->connetion = $connetion;
        }

        function save(TodoList $todoList): void
        {
            //$number = sizeof($this->todolist) + 1;
            //$this->todolist[$number] = $todoList;

            $sql = "insert into todolist(todo) values (?)";
            $statment = $this->connetion->prepare($sql);
            $statment->execute([$todoList->getTodo()]);
        }

        function remove(int $number): bool
        {
//            if ($number > sizeof($this->todolist)) {
//                return false;
//            }
//
//            for ($i = $number; $i < sizeof($this->todolist); $i++) {
//                $this->todolist[$i] = $this->todolist[$i + 1];
//            }
//
//            unset($this->todolist[sizeof($this->todolist)]);
//
//            return true;
            $sql = "select id from todolist where id=?";
            $statment = $this->connetion->prepare($sql);
            $statment->execute([$number]);

            if ($statment->fetch()) {
                $sql = "delete from todolist where id = ?";
                $statment = $this->connetion->prepare($sql);
                $statment->execute([$number]);
                return true;
            } else {
                return false;
            }
        }

        function findAll(): array
        {
            //return $this->todolist;

            $sql = "select id, todo from todolist";
            $statment = $this->connetion->prepare($sql);
            $statment->execute();

            $result = [];
            foreach ($statment as $row) {
                $todolist = new TodoList();
                $todolist->setId($row['id']);
                $todolist->setTodo($row['todo']);

                $result[]=$todolist;
            }
            return $result;
        }

    }

}
