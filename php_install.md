
在centos6.5安装php5.6时候用的网易的rpm,提示Requires: libmcrypt.so.4()(64bit)    

处理方法： 
1先下载这两个包  
wget http://dl.fedoraproject.org/pub/epel/6/x86_64/Packages/l/libmcrypt-2.5.8-9.el6.x86_64.rpm   
wget http://dl.fedoraproject.org/pub/epel/6/x86_64/Packages/l/libmcrypt-devel-2.5.8-9.el6.x86_64.rpm   

2切换到目录装上   
rpm -Uvh libmcrypt-2.5.8-9.el6.x86_64.rpm   
rpm -Uvh libmcrypt-devel-2.5.8-9.el6.x86_64.rpm   

3yum安装这2个模块   
yum install libmcrypt libmcrypt-devel -y  

附:包的网址    
http://dl.fedoraproject.org/pub/epel/6/x86_64/Packages/     


