
# The Dynamic Static Link Dashboard

like the title says , you can create up to 20 links and change them dynamically so Redirect will be easy



## FAQ

#### What Language Are Used ?

php for server , web Browser language [html-css-js] , with Mysql DB Server.

#### Can i change The Folder Name To Redirect With Special name?

Yes you can , no matter where's directory are.

#### is it safe to use?

yes you can set your own password easly.

#### Should To Know :
URL Are shorten Because The Functions Are Written in .htaccess file

## How To Insert More Links To Database ?
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
or if you are into sql , you can use this shorter way :
```sql
INSERT INTO `onlineclasses` (`link_id`, `link_name`, `link_linkedto`) VALUES
(1, 'Class1', ''),(2, 'Class2', ''),(3, 'Class3', '');

```

## How To Edit Sql Connection Data :

Editing The Database Connection Information Is Very Easy.

Just Open The `connectSQL.php` File , Then :

Change The `$con` Variable to Your Database host information.


## How To Change Password :

You Can Change The Password, it's all on server , so user wont know the password Variable.

Open `password.php` File , Then :

Edit `$Thepassword` Variable To New Password.


## How To Turn Password on and off:

Open `password.php` File , Then :

Edit `$is_pass_Active` Variable To false/true.

true: Asking For password everytime You Open the dashboard.

false: Never Ask For The password.


## Features
- Secure With Password..
- Easy Change Your Links
- Easy Name The Links.
- Up To 20 Link Is Ready To Go.
- Simple HTML Dashboard.
- URL extension without(.php/.html)

## About The Author

- [@YousefHurf](https://fb.com/yousef.my10)

