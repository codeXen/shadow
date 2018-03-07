DROP TABLE products;

CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `description` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO products VALUES('1','Lenovo Legion Y520','lenovo-legion-y520.png','114000.00','Special Cash Offer: Rs. 114000 MRP: Rs. 133400\r\nProcessor: 7th Generation Intel® Core™ i7-7700HQ Processor (2.80GHz 6MB)\r\nOperating System: DOS\r\n(Windows 10 Pro - Lenovo recommends Windows 10 Pro)\r\nGraphics \r\nNVIDIA® GeForce® GTX 1050 Ti 4GB\r\nMemory: 8GB DDR4 2400 MHz\r\nStorage \r\n1TB 5400 RPM & 128 GB PCie SSD\r\nDual Drive Configurations available. (HDD + SSD)\r\nAudio 2 x 2W Harman™ Certified Speakers with Dolby Audio™ Premium\r\nBattery Life \r\nUp to 4 hours (45 WHr Li-Polymer Battery)\r\nDisplay 15.6\" FHD (1920 x 1080) IPS Anti-Glare LED Backlight with integrated camera\r\nWeight \r\nStarting at 5.29 lbs (2.4 kg) (NVIDIA)\r\nColor Black\r\nWLAN & Bluetooth® ? Up to Lenovo AC Wireless (2x2) WiFi + Bluetooth® 4.1\r\nLAN 10/100/1000M Gigabit Ethernet\r\nPorts \r\n1 x USB 3.0 (Type-C)\r\n2 x USB 3.0\r\n1 x USB 2.0\r\n1 x MiniDP (With GTX1060 Model only)\r\n1 x HDMI™\r\nAudio Jack\r\nMicrophone Jack\r\nRJ45 LAN\r\n4-in-1 Card Reader (SD, SDHC, SDXC, MMC) (With GTX1050Ti & RX-560M GPU)');
INSERT INTO products VALUES('3','alienwareasdasd','default.png','200.00','its alienware');
INSERT INTO products VALUES('4','acer predator','default.png','3000.00','its predator');



DROP TABLE users;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO users VALUES('1','Blaziken Best','codexen','secret');
INSERT INTO users VALUES('2','demo use','demo','secret');



