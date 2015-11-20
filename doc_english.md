# Editable jquery tree with PHP Codes #
This software is a tree structure runs at web browsers
and completes its function, like add item,
change name, drag & drop and delete item,
by using ajax requests. Items in tree view may be in a database table or
they may be files or folders in file system.
PHP and MySQL(if items are set to be in a database table) softwares are needed to make this software run.

This software also uses <a href='http://jquery.com'>jquery javascript framework</a>,
<a href='http://news.kg/wp-content/uploads/tree/'>simple tree plugin.</a>
<br />

## INSTALL ##
Set either
<pre>DATABASE_PLATFORM or FILE_SYSTEM_PLATFORM</pre> to
<pre>TARGET_PLATFORM</pre> macro
in 'includes/config.php' to determine which platform software will run at.
for instance:
<pre>define ("TARGET_PLATFORM", DATABASE_PLATFORM);</pre>
<br />
**if TARGET\_PLATFORM is set to FILE\_SYSTEM\_PLATFORM**,
FILE\_ROOT macro must be set to full path of root folder address.<br />
for instance:
<pre>define("FILE_ROOT", "/home/mekya/public_html/test");</pre>
Please make sure that web server user has the right to read and write to the folder
specified above.

<br /><br />
**if TARGET\_PLATFORM is set to DATABASE\_PLATFORM**,

Set your database parameters in 'includes/config.php',
also you can change TREE\_TABLE\_PREFIX macro whose default value is 'tree'.<br />
Then create table according to TREE\_TABLE\_PREFIX macro
```
 CREATE TABLE  `tree_elements` (
 `Id` int(10) unsigned NOT NULL auto_increment,
 `name` varchar(45) NOT NULL,
 `position` int(10) unsigned NOT NULL default '0',
 `ownerEl` int(10) unsigned NOT NULL default '0' COMMENT 'parent',
 `slave` binary(1) NOT NULL default '0',
 PRIMARY KEY  (`Id`)
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
```



## Features ##
### Add item ###
<img src='http://farm3.static.flickr.com/2461/3797379229_73d6dd686a.jpg' />
<br />
Right click a item to open the menu, then click
'Add File' or 'Add Folder' to add a child item under the right clicked item     <br />
<div><img src='http://farm3.static.flickr.com/2651/3797377321_38287fa01e.jpg' />
<img src='http://farm4.static.flickr.com/3584/3798193088_a555942e63_m.jpg' />
<br />
Enter the new item's name into the text field,<br>
then press <b>Enter</b> to send an ajax request to server and complete the operation or<br>
press <b>Esc</b> to cancel the operation.<br>
<br>
<br>
<h3>Delete item</h3>
<img src='http://farm4.static.flickr.com/3505/3797377485_54b38d9b55.jpg' />
<img src='http://farm4.static.flickr.com/3583/3797377947_d59031e3a3.jpg' />
<br />
Right click a item to open the menu, then click<br>
'Delete', it will ask whether you are sure to delete the item,<br>
if yes is clicked, an ajax request will be send to server to complete the operation<br>
after process is completed succesfully, an item will be removed from tree.<br>
Please not to forget that if an item is deleted, all child items beloging to it<br>
will be deleted recursively.<br>
<br>
<br>
<h3>Change the position of an item (Drag & Drop)</h3>
<img src='http://farm4.static.flickr.com/3428/3798194474_33811a50f8.jpg' />
<img src='http://farm3.static.flickr.com/2458/3797378615_f7646ab717.jpg' />
<br />
Use drag & drop method to change the position and order of an item.<br>
<br>
<br>
<h3>Change the name of an item</h3>
<img src='http://farm4.static.flickr.com/3517/3797378317_8eb784bd92.jpg' />
<br />
Right click a item to open the menu, then click<br>
'Edit'.<br>
<br />
<img src='http://farm3.static.flickr.com/2576/3798223826_479d20d779.jpg' />
<img src='http://farm3.static.flickr.com/2632/3798223620_0234323b5d.jpg' />
<br />
Enter the item's new name into the text field,<br>
then press <b>Enter</b> to send an ajax request and complete the operation or<br>
press <b>Esc</b> to cancel the operation.<br>
<br>
<br>
<br>
<h2>Support</h2>
If you need support to modify and use this software,<br>
We can share all information we have for free,<br>
so feel free to <a href='mailto:ahmetmermerkaya@gmail.com'>contact us</a>

<h2>License</h2>
This software is free.<br>
It can be modified and distributed without notification.<br>
<br>
<h2>Disclaimer</h2>
This software guarantees nothing, use it with your own risk.<br>
No responsilibity is taken for any situation.<br>
<br>
<h2>Authors</h2>
Ozan Koroglu - <a href='mailto:koroglu.ozan@gmail.com'>koroglu.ozan@gmail.com</a> <br />
Ahmet Oguz Mermerkaya (mekya) - <a href='mailto:ahmetmermerkaya@gmail.com'>ahmetmermerkaya@gmail.com</a>

( Any invitation on linkedin.com is welcome <a href='http://www.linkedin.com/in/ahmetoguzmermerkaya'>http://www.linkedin.com/in/ahmetoguzmermerkaya</a> )<br>
<br />
<a href='http://www.e-yillik.net/'>www.e-yillik.net</a>