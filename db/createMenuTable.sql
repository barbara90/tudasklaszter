DROP TABLE IF EXISTS menu;

CREATE TABLE `menu` (
    `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `route` VARCHAR(255),
    `file` VARCHAR(255),
    `menu` VARCHAR(255)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO menu (route, file, menu) VALUES ('/', 'homePage', 'Kezdőlap');
INSERT INTO menu (route, file, menu) VALUES ('researches', 'researches', 'Kutatások');
INSERT INTO menu (route, file, menu) VALUES ('gallery', 'gallery', 'Galéria');
INSERT INTO menu (route, file, menu) VALUES ('authentication', 'authentication', 'Bejelentkezés/Regisztráció');
INSERT INTO menu (route, file, menu) VALUES ('message', 'message', 'Üzenetküldés');
INSERT INTO menu (route, file, menu) VALUES ('news', 'news', 'Hírek');
