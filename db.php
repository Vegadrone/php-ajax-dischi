<?php
    $disks = [
        [
            'poster'=> 'https://img.discogs.com/vknPDdrqRbT92pNRX0W4I5N91jg=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-1246953-1448927086-6590.jpeg.jpg',
            'title' =>'Live at Wembley 86',
            'author' =>'Queen',
            'genre' =>'Pop',
            'year' => '1992',
        ],
        [
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/41JD3CW65HL.jpg',
            'title' => "Ten's Summoner's Tales",
            'author' => 'Sting',
            'genre' => 'Pop',
            'year' => '1993',
        ],
        [
            'poster' => 'https://cdn2.jazztimes.com/2018/05/SteveGadd-800x723.jpg',
            'title' => 'Steve Gadd Band',
            'author' => 'Steve Gadd Band',
            'genre' => 'Jazz',
            'year' => '2018',
        ],
        [
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/810nSIQOLiL._SY355_.jpg',
            'title' => 'One more car, one more raider"',
            'author' => 'Eric Clapton',
            'genre' => 'Rock',
            'year' => '2002',
        ],
        [
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51rggtPgmRL.jpg',
            'title' => 'Made in Japan',
            'author' => 'Deep Purple',
            'genre' => 'Rock',
            'year' => '1972',
        ],
        [
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81r3FVfNG3L._SY355_.jpg',
            'title' => 'And Jusitce fo All',
            'author' => 'Metallica',
            'genre' => 'Metal',
            'year' => '1988',
        ],
        [
            'poster' => 'https://img.discogs.com/KOBsqQwKiNKH-q927oHMyVdDzSo=/fit-in/596x596/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-6406665-1418464475-6120.jpeg.jpg',
            'title' => 'Hard wired',
            'author' => 'Dave Weckl',
            'genre' => 'Jazz',
            'year' => '1994',
        ],
        [
            'poster' => 'https://m.media-amazon.com/images/I/71K9CbNZPsL._SS500_.jpg',
            'title' => 'Bad',
            'author' => 'Micheal Jackson',
            'genre' => 'Pop',
            'year' => '1987',
        ],
        [
            'poster' => 'https://m.media-amazon.com/images/I/41qy56MHqaL._AC_.jpg',
            'title' => 'My Way: The Best of Frank Sinatra',
            'author' => 'Frank Sinatra',
            'genre' => 'Swing',
            'year' => '	1997',
        ],
        [
            'poster' => 'https://m.media-amazon.com/images/I/81Rvhc9VgiL._AC_SX466_.jpg',
            'title' => 'Djangology ',
            'author' => 'Reinhardt Django',
            'genre' => 'Jazz',
            'year' => '1961',
        ],
    ];

    header('Content-Type: application/json');
    echo json_encode($disks);
