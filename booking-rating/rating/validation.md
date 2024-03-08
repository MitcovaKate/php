
problems:

-no input
-molicios code
-wrong format

USER
|
/index.php [access the page]
|
v
x-------------------------------------GET request /validation.php-------->SERVER
                                                                             |
                                                                    isset($_GET['rate'])
                                                                             v
                                        +-------- Warning :Und..<- warning <-$rate=$_GET['rate']
                                        |                                     |
                                        + <-------------<form>   <------------+
                                        |
  x<------- response------------------- +
  |
  v
  BROWSER
  v
  render
  v
  WINDOW <--------USER clicks button
  v
  client side validation:
  v
  x required
  ? pattern   format[0.0 .. 5.0]
  x-------GET request /index.php?rate=3------------------------------>SERVER
                                                                              |
                                                                   isset($_GET['rate'])
                                                                             v
                                        +--------<---------$rate=(float)$_GET['rate']
                                        |                                     |
                                        |                                     |
                                        + <-------------<form>   <------------+