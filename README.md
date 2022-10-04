
# The Dynamic Static Link Dashboard

like the title says , you can create up to 20 links and change them dynamically so Redirect will be easy



## FAQ

#### What Language Are Used ?

php for server , web Browser language [html-css-js] , with Mysql DB Server.

#### Can i change The Folder Name To Redirect With Special name?

Yes you can , no matter where's directory are.

## How To Insert More Links To DataBase ?
this is how the first 20 links are built in sql
```sql
INSERT INTO `onlineclasses`(  `link_name`, `link_linkedto`) VALUES ( 'Class1','');
INSERT INTO `onlineclasses`(  `link_name`, `link_linkedto`) VALUES ( 'Class2','');
INSERT INTO `onlineclasses`(  `link_name`, `link_linkedto`) VALUES ( 'Class3','');
INSERT INTO `onlineclasses`(  `link_name`, `link_linkedto`) VALUES ( 'Class4','');
INSERT INTO `onlineclasses`(  `link_name`, `link_linkedto`) VALUES ( 'Class5','');
INSERT INTO `onlineclasses`(  `link_name`, `link_linkedto`) VALUES ( 'Class6','');
INSERT INTO `onlineclasses`(  `link_name`, `link_linkedto`) VALUES ( 'Class7','');
INSERT INTO `onlineclasses`(  `link_name`, `link_linkedto`) VALUES ( 'Class8','');
INSERT INTO `onlineclasses`(  `link_name`, `link_linkedto`) VALUES ( 'Class9','');
INSERT INTO `onlineclasses`(  `link_name`, `link_linkedto`) VALUES ( 'Class10','');
INSERT INTO `onlineclasses`(  `link_name`, `link_linkedto`) VALUES ( 'Class11','');
INSERT INTO `onlineclasses`(  `link_name`, `link_linkedto`) VALUES ( 'Class12','');
INSERT INTO `onlineclasses`(  `link_name`, `link_linkedto`) VALUES ( 'Class13','');
INSERT INTO `onlineclasses`(  `link_name`, `link_linkedto`) VALUES ( 'Class14','');
INSERT INTO `onlineclasses`(  `link_name`, `link_linkedto`) VALUES ( 'Class15','');
INSERT INTO `onlineclasses`(  `link_name`, `link_linkedto`) VALUES ( 'Class16','');
INSERT INTO `onlineclasses`(  `link_name`, `link_linkedto`) VALUES ( 'Class17','');
INSERT INTO `onlineclasses`(  `link_name`, `link_linkedto`) VALUES ( 'Class18','');
INSERT INTO `onlineclasses`(  `link_name`, `link_linkedto`) VALUES ( 'Class19','');
INSERT INTO `onlineclasses`(  `link_name`, `link_linkedto`) VALUES ( 'Class20','');
```


## How To Edit Sql Connection Data :

Editing The Database Connection Information Is Very Easy.

Just Open The `connectSQL.php` File , Then :

Change The `$con` Variable to Your Database host information.


## Features

- Easy Change Your Links
- Easy Name The Links
- Up To 20 Link Is Ready To Go
- Simple HTML Dashboard.

