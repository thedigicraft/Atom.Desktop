# Atom Desktop 1.0

A desktop enviroment to use on your CMS or website.

![] (http://alanquandt.com/plugins/Atom.Desktop/assets/desktop-preview_small.jpg)

Info
---

Atom Desktop is currently in development. This version is fully functional. However, it only has windows used for debugging and testing.

Please feel free to download and experiement with it!  

Database
---

Make sure that you run 1 of the 2 .sql files in this repo.  

If you have already created a database for this project then run...

``` db-import-without-create-database.sql ```

If you have not created a database then please run this file 

``` db-import-WITH-create-database.sql ```

Once you have run the sql file you must update the connection information.  This is located in

``` config/conn.php ``` 

The file should look like this:

```php

## Main Database.
DEFINE ('DB_USER','put your database USERNAME here');
DEFINE ('DB_PASSWORD','put your PASSWORD here');
DEFINE ('DB_HOST',"put the host name here this is usually localhost");
DEFINE ('DB_NAME','put the name of your DATABASE here');

$dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to the datebase because: ' . mysqli_connect_error() );


```

### More Info

As we continue to develop this project we will add more information, documentation, and examples!


### Contact & Info

Atom Desktop and the Atom CMS are developed by [Alan Quandt] (alanquandt.com) at [The Digital Craft] (thedigitalcraft.com).  Alan produces free video tutorials on web development, design, and other stuff. The Digital Craft relies on donations and proceeds from private online training sessions.  

[Donate Here](http://thedigitalcraft.com/) or learn more about Alan's [Private Sessions] (http://thedigitalcraft.com/private-training)

> - Demo: http://atomdesktop.alanquandt.com/
> - Official Website: http://thedigitalcraft.com
> - Facebook: http://facebook.com/thedigicraft
> - YouTube Videos: http://youtube.com/thedigicraft
> - Twitter: http://twitter.com/thedigicraft

