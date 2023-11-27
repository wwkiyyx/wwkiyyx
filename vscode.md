# VSCode 和 Web开发

 - 使用vscode进行各种语言开发

## Key

|  vs code   | .net core   |  java         |  gcc        |  node.js   | python        |
|    ----    |    ----     |     ----      |    ----     |    ----    |     ----      |
|  console   | hello       |  hello        |  hello      |  hello     | hello         |
|  window    | winforms    |               |  wxwidgets  |  electron  | tkinter.wxPython.pyqt  |
|  webapp    | webapp.mvc  |  spring boot  |             |  express   | django.flask  |

## VS Code

 - <https://code.visualstudio.com/>  
 - VSCodeUserSetup-x64-x.xx.x.exe  
 - VSCode-win32-x64-x.xx.x.zip  
 - 安装插件 中文 C# C++ JavaPack SpringBootPack Maven WSLRemote Python leetcode markdown  
 - 安装WSL Ubuntu20 Windows Terminal  
 - apt-get install nodejs python gcc g++ jdk dotnet(wget deb)  
 - 设置环境变量 Path=bin

## Git

 - <https://git-scm.com/>  
 - Git-x.xx.x-64-bit.exe 
 - git clone https://github.com/xxxxx/xxxxx
 - <https://github.com/>  
 - <https://gitee.com/>
 - git init
 - git config --global user.email "670405621@qq.com"
 - git config --global user.name "wangwenkai"
 - git add .
 - git commit -m xxxxx
 - git push

## Java

 - <https://www.oracle.com/java/technologies/javase/javase-jdk8-downloads.html>  
 - jdk-8u231-windows-x64.exe  
 - <kbd>Debug</kbd> hello.java  
 - <kbd>创建</kbd> Java 项目 <kbd>Debug</kbd>  
 - 创建 Spring Boot 项目 <kbd>Debug</kbd>  
 - spring boot 网站创建项目模板 加入Action映射 mvnw spring-boot:start  
 - maven.zip path=bin  
 - mvn clean pkg  生成  
 - mvn install  安装  
 - cd main  
 - mvn spring-boot:start  启动  

### spring boot

 - ruoyi

## .Net Core

 - <https://dotnet.microsoft.com/download>  
 - dotnet-sdk-3.1.301-win-x64.exe  
 - dotnet new console  
 - dotnet new winforms  
 - dotnet new webapp  
 - dotnet new mvc  
 - dotnet build  
 - dotnet run  
 - <kbd>Debug</kbd>  
 - CMS piranha.core YiShaAdmin  

## C++

 - <https://sourceforge.net/projects/mingw-w64/files/>  
 - x86_64-8.1.0-release-posix-seh-rt_v6-rev0.7z  
 - <kbd>Debug</kbd> hello.cpp

## Node.js

 - <https://nodejs.org/en/>  
 - <http://nodejs.cn/>  
 - node-v12.18.2-x64.msi  
 - node hello.js  
 - <kbd>Debug</kbd> hello.js  
 - npm install -g typescript  
 - tsc hello.ts  
 - Electron  
```
your-app/  
├── package.json  
├── main.js  
└── index.html  
```
 - npm init  
 - npm install electron  
 - npm start  
 - electron-v9.1.0-win32-x64.zip  
```
electron/resources/app  
├── package.json  
├── main.js  
└── index.html  
```
 - npm install express

## Python

 - <https://www.python.org/>  
 - python-3.8.3-amd64.exe  
 - <kbd>Debug</kbd> hello.py  
 - python3 hello.py  
 - pip install flask、django、tensorflow、torch、paddlepaddle、jupyterlab

### django

### flask

## MySQL

### Windows

 - mysql-8.0.19-winx64.zip  
 - Path=bin  
 - my.ini  
 > \[mysqld\]     
 > basedir=E:\\\SQL\\\MySQL\\\mysql-8.0.16-winx64      
 > datadir=E:\\\SQL\\\MySQL\\\mysql-8.0.16-winx64\\\data      

 - mysqld --initialize 创建data 临时密码在data\err  
 - mysqld --install [服务名]=mysql  
 - net start mysql  
 - net stop mysql  
 - mysql -u root -p  
 > ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY '新密码'       
 - 意外情况 mysqld --console 全自动启动 关闭后失效  
 > create database xxxx;     
 > use xxx;     
 > drop database xxx;    
 > show tables;      
 > source xxxxxxxxxxxxxxx.sql 或者粘贴执行      

### Linux
 - apt-get install mysql-server    
 - service mysql start
 - service mysql stop
 - mysql -u root
 > CREATE USER 'wwk'@'localhost' IDENTIFIED BY '880510';     
 > GRANT privileges ON databasename.tablename TO 'username'@'host'     
 > GRANT ALL ON ry.* TO 'wwk'@'localhost';     

## Redis

 - 待编辑

## End  
