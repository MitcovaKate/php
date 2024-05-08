


# GAME / MAP
 


    $map = [
        [1, 0, 0, 0, 0, 0, 0, 0, 0, 1],
        [0, 0, 0, 1, 0, 1, 0, 1, 0, 0],
        [0, 0, 0, 1, 0, 1, 0, 1, 0, 0],
        [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
        [0, 0, 0, 1, 0, 1, 0, 0, 0, 0],
        [0, 0, 0, 1, 0, 1, 0, 0, 0, 0],
        [0, 0, 0, 1, 0, 1, 0, 1, 0, 0],
        [0, 0, 0, 0, 0, 0, 0, 1, 0, 0],
        [0, 0, 0, 0, 0, 0, 0, 1, 0, 0],
        [1, 0, 0, 0, 0, 0, 0, 1, 0, 1],        
    ];








 # fix the refresh / shoot



 click
   |
   v
 +---+
 |<a>| ---- GET req /?shoot=6x6 ----+
 +---+                              |
                                    |
                                processing shoot
                                    |
                                    +-- header()
                                    |
                                   render
        Location: /                 |
          v                         |
        [HHH][BBBBB]                |
<----------- res -------------------+
/?shoot=6x6
|
v
------- redirect ---- GET req / ----+
                                    |
                                   render
                                    |
<----------- res -------------------+



index.php
 |
 |
 +---< require_once 'map.php'
 |                     |
 |                     +--$map
 |
 +--------<  require_once 'lib.php'
 |                            |
 |                            +--render_map($map)
 |
 |
 |
 +--------$coords=get_coords($_GET)
 |             |
 |             +----
 |                   V              
 +---$map=shoot($map,$coords)
 |     |
 |     +----------+-------+
 |                V       |
 +---render_map($map)     |
 |               ---------+
 |              |
 |              V
 +---save_map($map)----->map.json

 
---------GET req/match.php----->match.php---+
                                            |
                                            +
+--------res HTML---------------------------

form1---POST req/login-action.php---------->+ 
                                               \
                                                  +--->login-action.php
                                                           |
                                               /           |
form2---POST req/login-action.php---------->+              +---$users=load_users()
                                                           |
                                                           +--for + if / search
                                                           V
                                                $username == 'player' && $password == '123'--+
                                                           |                                  |
                                                          true                              false                                    
                                                           |                                  |
                                                           V                                  V
                                                                                      redirect->match.php
                                                                                              |
                                    < ---------------------  res ---------------------------- +
                                      [HHH][]
                                        ^
                                        |
                                        header("location:match.php")

 
