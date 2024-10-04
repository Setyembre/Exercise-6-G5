


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="body.css?v=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Team Profile</title>
</head>

<body>
<header>
        <h1>Our Team</h1>
    </header>

    <section class="team">
    <?php
    
$members = [
    ['name' => 'Ehares, Johnfel Vincent B.', 
    'role' => 'Project Manager', 
    'image' => 'pics\photo_6264694162314082156_y.jpg', 
    'studentid' => '22142843', 
    'age'=> '21',  
    'address' => 'Cupang Muntinlupa City',
     'email' => 'eharesjohnfelvincent_bsit@plmun.edu.ph', 
    'facebook' => 'https://www.facebook.com/johnfel.dinamarupok22/',
    'instagram' => 'https://www.instagram.com/johnfelehares/',
    'github' => 'https://github.com/JohnfelV'],

    ['name' => 'Dimas Lawrence Manuel P.', 
    'role' => 'Lead Developer', 
    'image' => 'pics\photo_6219884214464133424_y.jpg', 
    'studentid' => '22143625', 
    'age'=> '20',  
    'address' => 'Biñan Laguna', 
    'email' => 'dimaslawrencemanuel_bsit@plmun.edu.ph',
    'facebook' => 'https://www.facebook.com/lawrence.dimas.12',
    'instagram' => 'https://www.instagram.com/_rence_x/',
    'github' => 'https://github.com/Setyembre'],

    ['name' => 'Legaspi Genny Lannae', 
    'role' => 'Assistant Developer', 
    'image' => 'pics\photo_6305425823968115712_y.jpg', 
    'studentid' => '22143974', 
    'age'=> '20',  
    'address' => 'San Pedro Laguna', 
    'email' => 'legaspigennylannae_bsit@plmun.edu.ph',
    'facebook' => 'https://www.facebook.com/gennylannae',
    'instagram' => 'https://www.instagram.com/aylaaa_moon28/',
    'github' => 'https://github.com/Lannae28'],

    ['name' => 'Junio Abegail', 
    'role' => 'Information Gatherer', 
    'image' => 'pics\photo_6183863607947803084_y.jpg', 
    'studentid' => '22146917', 
    'age'=> '20',  
    'address' => 'Bayanan Muntinlupa City', 
    'email' => 'junioabegail_bsit@plmun.edu.ph',
    'facebook' => 'https://www.facebook.com/Abbeng19',
    'instagram' => 'https://www.instagram.com/abbbbyy19/',
    'github' => 'https://github.com/Abegailjunio'],

    ['name' => 'Brutas Macky', 
    'role' => 'Moral Support', 
    'image' => 'pics\photo_6217710948127455190_y.jpg', 
    'studentid' => '0000000', 
    'age'=> '22',  
    'address' => 'Sucat Muntinlupa City', 
    'email' => 'eharesjohnfelvincent_bsit@plmun.edu.ph',
    'facebook' => 'https://www.facebook.com/mac.datay',
    'instagram' => 'https://www.instagram.com/callme.saucee/',
    'github' => 'https://github.com/BrutasM']
    // Add more members as needed
];

   


foreach ($members as $member) {
    echo '<div class="member-container">';
        echo '<img src="' . $member['image'] . '" alt="' . $member['name'] . '">';
        echo '<h2>' . $member['name'] . '</h2>';
        echo '<p>' . $member['role'] . '</p>';
        echo '<button onclick="showDetails(\'' . $member['name'] . '\', \'' . $member['studentid'] . '\', \'' . $member['age'] . '\', \'' . $member['address'] . '\', \'' . $member['email'] . '\')">Show Details</button>';
        
        // Add Facebook button with a data attribute for the member's Facebook URL
        echo '<div class="social-icons">';
        echo '<a class="social-icon fb-icon" href="' . $member['facebook'] . '" target="_blank"><i class="fab fa-facebook-f"></i></a>'; 
       echo '<a class="social-icon ig-icon" href="' . $member['instagram'] . '" target="_blank"><i class="fab fa-instagram"></i></a>';
       echo '<a class="social-iocn github-icon" href="' . $member['github'] . '" target="_blank"><i class="fab fa-github"></i></a>';
    echo '</div>';
    echo '</div>';
}





?>



      
        <!-- Add more team members as needed -->
    </section>

<?php include('footer.php');?>

    <script src="script.js">

    </script>


</body>
</html>