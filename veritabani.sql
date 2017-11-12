CREATE TABLE IF NOT EXISTS `halfcode` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bolum` varchar(250) NOT NULL,
  `isim` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `sayfabaslik` varchar(250) NOT NULL,
  `icerik` text CHARACTER SET utf32 NOT NULL,
  `sef` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sayfabaslikaslik` (`sayfabaslikaslik`),
  KEY `sayfabaslikaslik_2` (`sayfabaslikaslik`),
  KEY `sayfabaslikaslik_3` (`sayfabaslikaslik`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;