CREATE TABLE `products` (
    `id` VARCHAR (50) NOT NULL PRIMARY KEY,
    `image` VARCHAR (200) NOT NULL,
    `cost` INT (50) NOT  NULL,
    `category` VARCHAR (100) NOT NULL,
    `subcategory` VARCHAR (100) NOT NULL,
    `date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() 
);

ALTER TABLE `products`
MODIFY `id` INT NOT NULL AUTO_INCREMENT;

INSERT INTO `products`(`id`,`image`,`cost`,`category`,`subcategory`,`date`) VALUES 
('1','images/110o022222-7-zionk-copper-original-imaf4wwesqmrv4zy.jpeg','0','shoe','sandle',CURRENT_TIMESTAMP()),
('2','images/2f8a588e3b66b4fe682884faf8e52599.png','0','fashion','dress',CURRENT_TIMESTAMP()),
('3','images/816q2LAWoLL._UL1500_.jpg','0','shoe','sandle',CURRENT_TIMESTAMP()),
('4','images/alexandra-tran-_ieSbbgr3_I-unsplash.jpg','0','cosmotics','cream',CURRENT_TIMESTAMP()),
('5','images/ashley-piszek-1tc_J6-c5Jo-unsplash.jpg','0','cosmotics','cream',CURRENT_TIMESTAMP()),
('6','images/bracelet.jpg','0','jewellary','bracelet',CURRENT_TIMESTAMP()),
('7','images/bracelet2.jpg','0','jewellary','bracelet',CURRENT_TIMESTAMP()),
('8','images/caroline-attwood-E1rH__X9SA0-unsplash.jpg','0','cosmotics','lipstick',CURRENT_TIMESTAMP()),
('9','images/chain.jpg','0','jewellary','necklace',CURRENT_TIMESTAMP()),
('10','images/crystalweed-cannabis-sb_HyHYGfuI-unsplash.jpg','0','cosmotics','cream',CURRENT_TIMESTAMP()),
('11','images/daniel-romero-luhAYh8JpDc-unsplash.jpg','0','electronics','headset',CURRENT_TIMESTAMP()),
('12','images/deepain-jindal-NUoPWImmjCU-unsplash.jpg','0','shoe','shoe',CURRENT_TIMESTAMP()),
('13','images/diana-ruseva-1cHnHtuNAcc-unsplash.jpg','0','cosmotics','cream',CURRENT_TIMESTAMP()),
('14','images/dress.jpg','0','fashion','dress',CURRENT_TIMESTAMP()),
('15','images/dress2.jpg','0','fashion','dress',CURRENT_TIMESTAMP()),
('16','images/earrings.jpeg','0','jewellary','earrings',CURRENT_TIMESTAMP()),
('17','images/earrings2.jpg','0','jewellary','earrings',CURRENT_TIMESTAMP()),
('18','images/gents-pu-sandle-500x500.jpeg','0','shoe','sandle',CURRENT_TIMESTAMP()),
('19','images/ira-g-rRBQrd6WOy4-unsplash.jpg','0','cosmotics','cream',CURRENT_TIMESTAMP()),
('20','images/irene-kredenets-dwKiHoqqxk8-unsplash.jpg','0','shoe','shoe',CURRENT_TIMESTAMP()),
('21','images/jenn-lopez-DhiZ2ZUQSS4-unsplash.jpg','0','fashion','watch',CURRENT_TIMESTAMP()),
('22','images/jewel.jpg','0','jewellary','bracelet',CURRENT_TIMESTAMP()),
('23','images/karly-jones-t-mgZnfCvrg-unsplash.jpg','0','cosmotics','lipstick',CURRENT_TIMESTAMP()),
('24','images/kiran-ck-RZmiDOpv1lM-unsplash.jpg','0','electronics','headset',CURRENT_TIMESTAMP()),
('25','images/laptop.jpg','0','electronics','laptop',CURRENT_TIMESTAMP()),
('26','images/laptop4.jpg','0','electronics','laptop',CURRENT_TIMESTAMP()),
('27','images/laura-chouette-IMWmOmgP7kQ-unsplash.jpg','0','cosmotics','cream',CURRENT_TIMESTAMP()),
('28','images/laura-chouette-zpt4D5x3XPc-unsplash.jpg','0','cosmotics','cream',CURRENT_TIMESTAMP()),
('29','images/lenovo-1-1-1024x730.jpg','0','electronics','laptop',CURRENT_TIMESTAMP()),
('30','images/Lenovo-Slim3-81WE007XIN-Laptops-i-7.jpg','0','electronics','laptop',CURRENT_TIMESTAMP()),
('31','images/lucas-kepner-rHv_cwTLYlY-unsplash.jpg','0','electronics','mobile',CURRENT_TIMESTAMP()),
('32','images/maxim-hopman-Hin-rzhOdWs-unsplash.jpg','0','electronics','laptop',CURRENT_TIMESTAMP()),
('33','images/milena-trifonova-pHqt1DsHCx0-unsplash.jpg','0','electronics','headset',CURRENT_TIMESTAMP()),
('34','images/mobile.png','0','electronics','mobile',CURRENT_TIMESTAMP()),
('35','images/moises-gonzalez-MYfsSytG5dw-unsplash.jpg','0','electronics','headset',CURRENT_TIMESTAMP()),
('36','images/necklace.jpg','0','jewellary','necklace',CURRENT_TIMESTAMP()),
('37','images/necklace2.jpg','0','jewellary','necklace',CURRENT_TIMESTAMP()),
('38','images/nokia_5_3_1x.png','0','electronics','mobile',CURRENT_TIMESTAMP()),
('39','images/note1b.png','0','electronics','mobile',CURRENT_TIMESTAMP()),
('40','images/paolo-giubilato-ZwKCWVFdrcs-unsplash.jpg','0','electronics','mobile',CURRENT_TIMESTAMP()),
('41','images/pat-taylor-12V36G17IbQ-unsplash.jpg','0','fashion','watch',CURRENT_TIMESTAMP()),
('42','images/ring.jpg','0','jewellary','ring',CURRENT_TIMESTAMP()),
('43','images/ring2.jpg','0','jewellary','ring',CURRENT_TIMESTAMP()),
('44','images/sandle.jpg','0','shoe','sandle',CURRENT_TIMESTAMP()),
('45','images/shoe2.jpg','0','shoe','shoe',CURRENT_TIMESTAMP()),
('46','images/valeriia-miller-_42NKYROG7g-unsplash.jpg','0','cosmotics','cream',CURRENT_TIMESTAMP()),
('47','images/vestido-fiesta-lia.jpg','0','fashion','dress',CURRENT_TIMESTAMP()),
('48','images/watch.jpg','0','fashion','watch',CURRENT_TIMESTAMP()),
('49','images/watch2.jpg','0','fashion','watch',CURRENT_TIMESTAMP()),
('50','images/watch3.jpg','0','fashion','watch',CURRENT_TIMESTAMP());

UPDATE `products` SET `cost`='500' WHERE `products`.`category`='shoe';
UPDATE `products` SET  `cost`='60000' WHERE `products`.`subcategory`='laptop';
UPDATE `products` SET `cost` = '20000' WHERE `products`.`subcategory` = 'mobile';
UPDATE `products` SET `cost` = '2000' WHERE  `products`.`subcategory` = 'watch';
UPDATE `products` SET `cost` = '5000' WHERE `products`.`subcategory` = 'dress';
UPDATE `products` SET `cost` = '500' WHERE `products`.`subcategory` = 'earrings';
UPDATE `products` SET `cost` = '5000' WHERE `products`.`subcategory` = 'necklace';
UPDATE `products` SET `cost` = '1000' WHERE `products`.`subcategory` = 'bracelet';
UPDATE `products` SET `cost` = '5000' WHERE `products`.`subcategory` = 'ring';
UPDATE `products` SET `cost` = '400' WHERE `products`.`category` = 'cosmotics';
UPDATE `products` SET `cost` = '700' WHERE `products`.`subcategory` = 'headset';
