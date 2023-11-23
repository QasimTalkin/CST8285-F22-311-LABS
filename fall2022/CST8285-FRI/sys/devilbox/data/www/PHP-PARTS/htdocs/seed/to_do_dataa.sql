USE to_really_do_db;
-- CREATE to do table and user table if not exists
CREATE TABLE IF NOT EXISTS `to_do_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `task` varchar(100) NOT NULL,
  `progress` varchar(255) NOT NULL,
  'user_id' int(11) NOT NULL,
  'created_at' datetime NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  'password' varchar(255) NOT NULL,
  'created_at' datetime NOT NULL,
  PRIMARY KEY (`id`)
);

-- INSERT
INSERT INTO `to_do_list` (`id`, `task`, `progress`, `created_at`) VALUES
(1, 'Learn PHP', 'In progress', '2015-01-01 00:00:00'),
(2, 'Learn MySQL', 'In progress', '2015-01-01 00:00:00'),
(3, 'Learn HTML', 'In progress', '2015-01-01 00:00:00');