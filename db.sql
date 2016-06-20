
CREATE TABLE IF NOT EXISTS `cars` (
`id` int(10) unsigned NOT NULL,
  `brand` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `color` varchar(30) NOT NULL,
  `mileage` varchar(30) NOT NULL,
  `year` varchar(4) NOT NULL,
  `engine_size` varchar(10) NOT NULL,
  `seats` varchar(4) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `price` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `cars` (`id`, `brand`, `model`, `type`, `color`, `mileage`, `year`, `engine_size`, `seats`, `photo`, `price`, `status`) VALUES
(1, 'VAZ', '2101', 'Sedan', 'white', '1000000 Km', '1982', '1.2 L', '5', 'vaz_2101_zhiguli_6.jpeg', '$5.00', 'available'),
(2, 'Bugatti', 'Veyron', 'Coupe', 'black', '12300 Km', '2011', '8 L', '2', '01-2011-bugatt-super-sport.jpg', '$5000.00', 'available'),
(3, 'Bugatti', 'Chiron', 'Coupe', 'blue', '1389 Km', '2016', '8 L', '2', 'maxresdefault.jpg', '$5000.00', 'available'),
(4, 'Hummer', 'H2 SUT', 'Pick-up', 'white', '50234 Km', '2006', '6 L', '4', 'hummer.jpg', '$200.00', 'available'),
(5, 'Chevrolet', 'Nomad', 'Wagon', 'black', '513000 Km', '1955', '3.8 L', '5', '125138_Front_3-4_Web.JPG', '$500.00', 'available');

CREATE TABLE IF NOT EXISTS `orders` (
`id` int(10) unsigned NOT NULL,
  `car_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `status` varchar(30) NOT NULL,
  `start_rent_time` datetime NOT NULL,
  `end_rent_time` datetime NOT NULL,
  `comment` text NOT NULL,
  `fd` datetime NOT NULL,
  `td` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `roles` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'staff'),
(3, 'customer');

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `full_name` varchar(150) NOT NULL,
  `age` int(5) NOT NULL,
  `driver_licence` varchar(150) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(64) NOT NULL,
  `active` tinyint(2) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `role_id`, `full_name`, `age`, `driver_licence`, `gender`, `email`, `password`, `active`, `updated_at`, `created_at`) VALUES
(1, 1, 'Admin ', 99, '666', 'male', 'admin@admin.nz', '098f6bcd4621d373cade4e832627b4f6', 1, '2016-06-20 00:00:00', '2016-06-20 00:00:00');


ALTER TABLE `cars`
 ADD PRIMARY KEY (`id`);

ALTER TABLE `orders`
 ADD PRIMARY KEY (`id`), ADD KEY `fd` (`fd`,`td`);

ALTER TABLE `roles`
 ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);


ALTER TABLE `cars`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
ALTER TABLE `orders`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
ALTER TABLE `roles`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
