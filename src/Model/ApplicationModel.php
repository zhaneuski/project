<?php

namespace Model;

use mysqli;
use TexLab\MyDB\DbEntity;

class ApplicationModel extends DbEntity
{
    public function getApplicationPage(int $page)
    {
        $this
            ->reset()
            ->setSelect('`application`.`id`, `application`.`caption`, `application`.`content`, `application`.`image`, `application`.`date`,  `users`.`login` AS users_id')
            ->setFrom('`users`,`application`')
            ->setWhere('`users`.`id` = `application`.`users_id`')
            ->setOrderBy('`application`.`id` DESC');
//            ->getSQL();
//            ->setLimit(2)
        return $this->getPage($page);
    }

    public function getApplicationPageUserFilter(int $page, int $user_id)
    {
        return $this
            ->reset()
            ->setSelect('`application`.`id`, `application`.`caption`, `application`.`content`, `application`.`image`, `application`.`date`,  `users`.`login` AS users_id')
            ->setFrom('`users`,`application`')
            ->setWhere("`users`.`id` = `application`.`users_id` AND `application` . `users_id` = $user_id")
            ->setOrderBy('`application`.`id` DESC')
            ->getPage($page);
    }

    public function pageCountApplication(int $user_id)
    {
//        print_r($this->runSQL("SELECT COUNT(*) as count FROM application, users WHERE `users`.`id` = `application`.`users_id` AND `application` . `users_id` = $user_id"));
        return ceil($this->runSQL("SELECT COUNT(*) as count FROM application, users WHERE `users`.`id` = `application`.`users_id` AND `application` . `users_id` = $user_id")[0]['count'] / $this->pageSize);
    }

}
