<?php

namespace Entity {

    class TodoList
    {
        private int $id;
        private string $Todo;

        public function __construct(string $Todo = "")
        {
            $this->Todo = $Todo;
        }

        public function getId(): int
        {
            return $this->id;
        }

        public function setId(int $id): void
        {
            $this->id = $id;
        }

        public function getTodo(): string
        {
            return $this->Todo;
        }

        public function setTodo(string $Todo): void
        {
            $this->Todo = $Todo;
        }

    }

}
