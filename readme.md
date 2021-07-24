## Project 給初來乍到的人
---
### Environment 
- Register github 帳號
- 下載 VScode https://code.visualstudio.com
- 下載 Xampp https://www.apachefriends.org/download.html
    - windows 版本 可用php7.4. 那個版本
- 下載 Ｗorkbench
    - 參考此篇文章下載
    - https://clay-atlas.com/blog/2019/11/16/mysql-mysqlworkbench-tutorial-download-install-steps/
- 下載git
    - https://git-scm.com
---
### Load project
- 用cmd 進入 xampp 底下的htdocs 資料夾
    - 不會用 cmd 下命令的看這裡 https://dotblogs.com.tw/CYLcode/2018/09/13/102159
- git clone 專案至 disk:\XAMPP\hitdocs
    - git clone https://github.com/davidblacksu/Project.git
---
### Create empty database ＆ test connection between database & Apache
- 登入workbench
- 新建一個schema 命名為project
---
### Test connection between database & Apache
- 將xampp 的control panel 叫出來打開 Apache 按下start
- 修改Project/config/connect.php裡的資料
    - 將password 改為當初download workbench 時所設置的密碼
- 打開瀏覽器 在網址上貼上 localhost/Project/api/test.php
- 如果跑出connect success 代表成功連線
---

## Cooperater use
### Set git config 
- 使用cmd 來操作以下東東
    - git config --global user.name 要設的名稱
    - git config --global user.email 你的信箱<跟github 上面的信箱弄一樣的>
---
### Set the index
- 將 htdocs 裡的 index.php 路徑設置為此 REPO資料夾的名稱
    - 原本應該會是 header('Location: '.$uri.'/dashboard/');
    - 將dashboard 改成此REPO 資料夾名稱 
sgdsv