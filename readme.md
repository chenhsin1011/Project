## Project 給初來乍到的人

---
### 環境架設
- Register github 帳號
- 下載 VScode https://code.visualstudio.com
- 下載 Xampp https://www.apachefriends.org/download.html
    - windows 版本 
- 下載 Ｗorkbench
    - 參考此篇文章下載
    - https://clay-atlas.com/blog/2019/11/16/mysql-mysqlworkbench-tutorial-download-install-steps/
---
### 載入專案
- 用cmd 進入 xampp 底下的htdocs
    - 不會用 cmd 下命令的看這裡 https://dotblogs.com.tw/CYLcode/2018/09/13/102159
- git clone 專案至 disk:\XAMPP\hitdocs
- 將 htdocs 裡的 index.php 路徑設置為此 REPO資料夾的名稱
    - 原本應該會是 header('Location: '.$uri.'/dashboard/');
    - 將dashboard 改成此REPO 資料夾名稱 

### 建立資料庫
- 建立root 帳號
- 新建一個database 名稱叫做 project

### 測試連線
- 將xampp 的control panel 叫出來打開 Apache 按下start
- 隨便打開瀏覽器 在網址上貼上 localhost/Project/api/test.php
- 如果跑出connect success 代表成功了