
CREATE TABLE tb_category (
cat_id INT(11) NOT NULL AUTO_INCREMENT,
cat_nama VARCHAR(100) NOT NULL,
cat_text VARCHAR(100),
PRIMARY KEY(cat_id)
);

CREATE TABLE tb_post (
post_id INT(11) NOT NULL AUTO_INCREMENT,
cat_id INT(11) NOT NULL,
post_date DATE NOT NULL,
post_slug VARCHAR(25) NOT NULL,
post_title VARCHAR(100) NOT NULL,
post_text TEXT NOT NULL,
PRIMARY KEY(post_id),
FOREIGN KEY(cat_id) REFERENCES tb_category(cat_id)
);

CREATE TABLE tb_photos (
photo_id INT(11) NOT NULL AUTO_INCREMENT,
photo_date DATE NOT NULL,
photo_title VARCHAR(100) NOT NULL,
photo_text TEXT NOT NULL,
post_id INT(11) NOT NULL,
PRIMARY KEY(photo_id),
FOREIGN KEY(post_id)REFERENCES tb_post(post_id)
);

CREATE TABLE tb_album (
album_id INT(11) NOT NULL AUTO_INCREMENT,
album_name VARCHAR(100) NOT NULL,
album_text VARCHAR(100) NOT NULL,
photo_id INT(11) NOT NULL,
PRIMARY KEY (album_id),
FOREIGN KEY(photo_id) REFERENCES tb_photos(photo_id)
);

CREATE TABLE tb_users (
  user_id int(11) NOT NULL,
  user_email varchar(100) NOT NULL,
  user_password varchar(100)NOT NULL,
  user_nama varchar(200) NOT NULL
 );