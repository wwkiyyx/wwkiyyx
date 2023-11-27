# cron 定时任务

 - apt-get install cron
 - 编辑文件cronfile.txt : */1 * * * * /usr/bin/python3 /home/coder/yolo.py
 - service cron start
 - crontab cronfile.txt

```
 usage:  crontab [-u user] file
        crontab [ -u user ] [ -i ] { -e | -l | -r }
                (default operation is replace, per 1003.2)
        -e      (edit user's crontab)
        -l      (list user's crontab)
        -r      (delete user's crontab)
        -i      (prompt before deleting user's crontab)
```