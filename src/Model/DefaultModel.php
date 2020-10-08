<?php

namespace Model;

use mysqli;
use TexLab\MyDB\DbEntity;

class DefaultModel extends DbEntity
{
    public function getDefaultPage(int $page)
    {
        $this
            ->reset()
            ->setSelect('`news`.`id`, `news`.`header`, `news`.`newscontent`, `news`.`date`')
            ->setFrom('`news`')
            ->setOrderBy('`news`.`id` DESC')
            ->setLimit(3);
        return $this->getPage($page);
    }
}