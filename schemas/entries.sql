CREATE TABLE `entries` (
  `id` int unsigned not null auto_increment primary key,
  `text` TEXT null,
  `category` varchar(255) null,
  `archive` BOOLEAN not null default FALSE,
  `date_archive` varchar(10) null,
  `date_original` varchar(10) null
);