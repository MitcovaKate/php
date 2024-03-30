# routing/rout dispaching



req
|
V
index.php?page=support
----------------------
header(header.php)
----------------------
content(support.php)<---->dydamic
----------------------
footer(footer.php)



# add class active

|
|
V
?page=contacts
|
V
index.php
|
V
+ include 'heade.php'