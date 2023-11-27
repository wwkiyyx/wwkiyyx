# scratch

 - https://www.scratch-cn.cn/
 - https://scratchers.cn/
 - https://scratch.mit.edu/
 - https://github.com/LLK
 - https://github.com/LLK/scratch-gui
 - https://github.com/LLK/scratch-vm
 - https://github.com/LLK/scratch-desktop
 - https://github.com/LLK/scratch-www
 - https://github.com/Micircle/scratch3.0-note

```
 https://downloads.scratch.mit.edu/desktop/Scratch%20Setup.exe
 https://www.microsoft.com/store/apps/9pfgj25jl6x3?cid=storebadge&ocid=badge
 
  "start": "webpack-dev-server --disableHostCheck=true",
  
  devServer: {
        contentBase: path.resolve(__dirname, 'build'),
        host: '0.0.0.0',
        port: process.env.PORT || 8601,
        disableHostCheck: true
    },
```

```
FROM wwkiyyx/railway:scratch
USER root
EXPOSE 8601
WORKDIR /scratch-gui
CMD ["npm", "start"]
```
