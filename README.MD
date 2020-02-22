# PHP Teradata connect over CDATA ODBC Driver

### Run example index.php
Requirements:

<a href="https://docs.microsoft.com/en-us/sql/integration-services/import-export-data/connect-to-an-odbc-data-source-sql-server-import-and-export-wizard?view=sql-server-ver15" target = "_blank">
    ODBC Data Source<br></a>
<a href="https://downloads.teradata.com/download/connectivity/odbc-driver/windows" target = "_blank">
    Teradata ODBC Driver For Windows<br></a>
<a href="https://downloads.teradata.com/download/database/teradata-express-for-vmware-player" target = "_blank">
Teradata Express 16.20_Sles11 (Teradata Server Incase if you Orgnization doesn't have one)<br></a>
<a href="https://www.cdata.com/drivers/teradata/odbc/" target = "_blank">
CDATA<br></a>
<a href="https://www.cdata.com/drivers/teradata/download/odbc/" target = "_blank">
CDATA Alternative link<br></a>
<a href="https://downloads.teradata.com/download/tools/teradata-tools-and-utilities-windows-installation-package" target = "_blank">
Teradata Tools and Utilities<br></a>

<br>
<br>

```bash
After Downloading the Requirements:

Open ODBC Data Source

User DSN tab:
1- Click on Add
2- click on the Teradata Database ODBC Driver Option
3- Give The Data Source Name (Optional)
4- USer (Teradata Usernanm) for example dbc
5- Data Source (the ip number of the Teradata Server)
6- password (password for the username) for example dbc
7- Click OK

System DSN tab:
1- Click on Add
2- click on the Teradata Database ODBC Driver Option
3- Give The Data Source Name (Optional)
4- USer (Teradata Usernanm) for example dbc
5- Data Source (the ip number of the Teradata Server)
6- password (password for the username) for example dbc
7- Click OK

```


```bash
then Go to xampp\php\php.ini (incease if your server is xampp)
remove the ';' in php_odbc.dll
;extension=php_odbc.dll
to
extension=php_odbc.dll
```
in the <a href="https://github.com/AbdulrahmanQu/odbc-example-php/blob/master/index.php" target = "_blank">
    Index.php<br></a>
```bash
$connection=odbc_connect('odbc','odbc','odbc');
$connection=odbc_connect('this is the datasource name','this is the username','this is the password');
```
<br>
<br>

More References:
https://downloads.teradata.com/blog/odbcteam/2016/02/php-with-teradata-odbc
<br>
https://www.cdata.com/drivers/teradata/docs/
