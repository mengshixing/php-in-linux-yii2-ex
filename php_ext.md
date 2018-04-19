安装PHP扩展

1下载php源码包 wget http://hk1.php.net/get/php-5.6.25.tar.bz2/from/this/mirror) 

2解压后进入PHP解压包/ext目录下,进入要安装的模块

./configure --with-php-config=/usr/local/php/bin/php-config
make && make install
