<?php

namespace Entity {

    class Todolist
    {
        private int $id;
        private string $todo;

        public function __construct(string $todo = "")
        {
            $this->todo = $todo;
        }

        /**
         * @param int $id
         */
        public function setId(int $id): void
        {
            $this->id = $id;
        }

        /**
         * @return int
         */
        public function getId(): int
        {
            return $this->id;
        }

        public function getTodo(): string
        {
            return $this->todo;
        }

        public function setTodo(string $todo): void
        {
            $this->todo = $todo;
        }
    }
}
