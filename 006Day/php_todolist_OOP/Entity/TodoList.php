<?php

namespace Entity {

    class TodoList
    {
        private string $Todo;

        public function __construct(string $Todo = "")
        {
            $this->Todo = $Todo;
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
