String handiness PHP script
=====================

* Copyright (c) 2012, [http://www.phpgangsta.de](http://www.phpgangsta.de)
* Author: Michael Kliewe, [@PHPGangsta](http://twitter.com/PHPGangsta)
* Licensed under the BSD License.


This PHP script calculates which hand is used more when writing a string.

Usage:
------

php stringhandiness.php           <-- uses array defined in script
php stringhandiness.php text      <-- uses parameter as string
php stringhandiness.php file.txt  <-- reads file, one string per line

Output:

```This is a small script to calculate the handiness of strings.
1 means left hand only, -1 means right hand only.

String                        	Value
========================================
password                      	0.5
123456                        	1
facebook1                     	0.33
phpgangsta                    	0.2
passwort                      	0.5
12345678                      	0.5
michael                       	-0.14
kliewe                        	0
z13ml1chkr455espa55w0rt       	0.39

Done. (C) by Michael Kliewe
```

Notes:
------
If you like this script or have some features to add: contact me, visit my blog, fork this project, send pull requests, you know how it works.