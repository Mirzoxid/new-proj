<?php
/**
 * Created by PhpStorm.
 * User: Mirzohid
 * Date: 18.12.2017
 * Time: 16:27
 */

defined("BASEPATH") or die("Acces denied!");
class Alter_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function alter()
    {
        $res_dle_post_attr = $this->db->query("ALTER TABLE `dle_post` ADD `sorted` BOOLEAN NOT NULL , ADD `is_url_extruct` BOOLEAN NOT NULL AFTER `sorted`, ADD `type` VARCHAR(50) NOT NULL AFTER `is_url_extruct`, ADD `description` TEXT NOT NULL AFTER `type`;");
        $res_dle_token = array('create' => $this->db->query("CREATE TABLE `dle_token` (  `id` int(11) NOT NULL,  `user_id` int(11) NOT NULL,  `token` varchar(100) NOT NULL,  `token_date` date NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8; "),
            'index' => $this->db->query("ALTER TABLE `dle_token`  ADD PRIMARY KEY (`id`); "),
            'autoincrement' => $this->db->query("ALTER TABLE `dle_token`  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;"));
        $res_move = array('craete' => $this->db->query("CREATE TABLE `movie` (`id` int(11) NOT NULL,  `name` varchar(200) NOT NULL,  `url` varchar(200) NOT NULL,  `post_id` int(11) NOT NULL,  `movies` int(11) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8;"),
            'index' => $this->db->query("ALTER TABLE `movie`  ADD PRIMARY KEY (`id`);"),
            'autoincriment' => $this->db->query("ALTER TABLE `movie`  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;"));
        $res_post = array('create' => $this->db->query("CREATE TABLE `post` (`id` int(10) NOT NULL,`xfields` text,`autor` varchar(100) NOT NULL,`date` date NOT NULL,`full_story` text NOT NULL, `title` varchar(255) NOT NULL,  `category` varchar(200) NOT NULL,  `is_url_extruct` tinyint(1) NOT NULL,  `sorted` tinyint(1) NOT NULL,  `descr` varchar(200) NOT NULL,  `type` varchar(200) NOT NULL,  `description` text) ENGINE=InnoDB DEFAULT CHARSET=utf8; "),
            'index' => $this->db->query("ALTER TABLE `post`  ADD PRIMARY KEY (`id`);"),
            'autoincriment' => "empty");
        $res_seasons = array('create' => $this->db->query("CREATE TABLE `seasons` ( `id` int(10) NOT NULL,  `season` int(10) NOT NULL,  `name` varchar(255) NOT NULL,  `desc` varchar(255) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8;"),
            'index' => $this->db->query("ALTER TABLE `seasons` ADD PRIMARY KEY (`id`);"),
            'autoincriment' => $this->db->query("ALTER TABLE `seasons`  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;"));
        $res_serials = array('create' => $this->db->query("CREATE TABLE `serials` (  `id` bigint(200) NOT NULL,  `name` varchar(255) NOT NULL,  `url` varchar(255) NOT NULL,  `season_id` int(11) NOT NULL,  `post_id` int(20) NOT NULL,  `serial` int(11) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8;"),
            'index' => $this->db->query("ALTER TABLE `serials` ADD PRIMARY KEY (`id`);"),
            'autoincriment' => $this->db->query("ALTER TABLE `serials`  MODIFY `id` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;"));
        $res_tv_categories = array('create' => $this->db->query("CREATE TABLE `tv_categories` (  `id` int(11) NOT NULL,  `name` varchar(100) NOT NULL,  `other` varchar(100) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8;"),
            'index' => $this->db->query("ALTER TABLE `tv_categories` ADD PRIMARY KEY (`id`);"),
            'autoincriment' => $this->db->query("ALTER TABLE `tv_categories` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;"));
        $res_tv = array('create' => $this->db->query("CREATE TABLE `tv` (  `id` int(11) NOT NULL,  `name` varchar(100) NOT NULL,  `img` varchar(100) NOT NULL,  `url` varchar(100) NOT NULL,  `active` tinyint(1) NOT NULL,  `position` int(11) NOT NULL,  `category` int(11) NOT NULL,  `other` varchar(100) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8;"),
            'index' => $this->db->query("ALTER TABLE `tv`  ADD PRIMARY KEY (`id`);"),
            'autoincriment' => $this->db->query("ALTER TABLE `tv` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;"));
        return array(
            'dle_post_attr' => $res_dle_post_attr,
            'dle_token' => $res_dle_token,
            'movie' => $res_move,
            'post' => $res_post,
            'seasons' => $res_seasons,
            'serials' => $res_serials,
            'tv_categories' => $res_tv_categories,
            'tv' => $res_tv
            );
    }
}