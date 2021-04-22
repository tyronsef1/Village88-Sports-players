<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sports Player Lookup</title>
    <style type="text/css">
        section.side-content{
            display: inline-block;
            border: 1px solid black;
            padding: 5px;
            height: 400px;
        }
        section.main-content{
            display: inline-block;
            border: 1px solid black;
            padding: 5px;
            height: 400px;
            width: 585px;
            vertical-align: top;
        }
        span{
            display: inline-block;
            height: 80px;
            width: 190px;
            text-align: center;
            padding-top: 10px;
            border: 1px solid black;
            margin-bottom: 10px;
        }
        img{
            width: 120px;
            height: 60px;
        }
        .main-content p{
            margin: 0px 0px 15px 0px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <div>
        <section class='side-content'>
            <p>Search Users</p>
            <form action='../players/search' method='post'>
                <input type='text' name='name' placeholder='name'><br>
                <input type="checkbox" name="female" value="Female">Female <br>
                <input type="checkbox" name="male" value="Male">Male <br>
                <p>Sports</p>
                <input type="checkbox" name="basketball" value="Basketball">Basketball <br>
                <input type="checkbox" name="volleyball" value="Volleyball">Volleyball <br>
                <input type="checkbox" name="baseball" value="Baseball">Baseball <br>
                <input type="checkbox" name="soccer" value="Soccer">Soccer <br>
                <input type="checkbox" name="football" value="Football">Football <br>
                <input type='submit' value='Search'>
            </form>
        </section>
        <section class='main-content'>
<?php   if(isset($players)){
            foreach ($players as $player) { ?>
                <span>
                    <img src='<?= $player['image_link']; ?>'>
                    <p><?= $player['first_name'] . ' ' . $player['last_name']; ?></p>
                </span>
<?php       }
        } ?>
        </section>
    </div>
</body>
</html>