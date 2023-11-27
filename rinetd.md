# rinetd 端口转发

## 安装

 - apt-get install rinetd

## 配置

 - 编辑 /etc/rinetd.conf 
 - 0.0.0.0 1234 127.0.0.1 22 
 - bindaddress bindport connectaddress connectport
 - 绑定地址 绑定端口 转发地址 转发端口

## 启动

 - rinetd -c /etc/rinetd.conf 

## 停止

 - pkill rinetd 