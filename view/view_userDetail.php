<section>
    <h1>Welcome, <?php echo htmlentities($client_info['Name'], ENT_QUOTES | ENT_HTML5); ?></h1>
    <img src="<?php echo $img_path; ?>">
    Name: <?php echo htmlentities($client_info['Name'], ENT_QUOTES | ENT_HTML5, 'UTF-8') ;?> <br>
    Email: <?php echo htmlentities($client_info['Email'], ENT_QUOTES | ENT_HTML5, 'UTF-8') ;?> <br>
    City: <?php echo htmlentities($client_info['City'], ENT_QUOTES | ENT_HTML5, 'UTF-8') ;?> <br>
    Address: <?php echo htmlentities($client_info['Address'], ENT_QUOTES | ENT_HTML5, 'UTF-8') ;?> <br>
    Postal Code: <?php echo htmlentities($client_info['PostalCode'], ENT_QUOTES | ENT_HTML5, 'UTF-8') ;?> <br>
</section>