<?php
    interface RequireInterface
    {
        public function getPaginate(int $page, int $perPage);
        public function searchByKeyword(string $keyword = null);
    }
?>