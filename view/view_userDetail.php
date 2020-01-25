<h1>Welcome, <?php echo htmlentities($client_info['Name'], ENT_QUOTES | ENT_HTML5); ?></h1>
<div class="profile-layout">
    <div>
        <img src="<?php echo $img_path; ?>">
        <h1></h1>
    </div>
    <div>
        <p>Name: <?php echo htmlentities($client_info['Name'], ENT_QUOTES | ENT_HTML5, 'UTF-8') ;?></p>
        <p>Email: <?php echo htmlentities($client_info['Email'], ENT_QUOTES | ENT_HTML5, 'UTF-8') ;?></p>
        <p>City: <?php echo htmlentities($client_info['City'], ENT_QUOTES | ENT_HTML5, 'UTF-8') ;?></p>
        <p>Address: <?php echo htmlentities($client_info['Address'], ENT_QUOTES | ENT_HTML5, 'UTF-8') ;?></p>
        <p>Postal Code: <?php echo htmlentities($client_info['PostalCode'], ENT_QUOTES | ENT_HTML5, 'UTF-8') ;?></p>
    </div>
    <div>
        <a href="index.php?action=modifyAccount">Modify account information</a>
        <a href="#">Order history</a>
    </div>
</div>
