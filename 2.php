<?php
     function UserValid($username) {
        
        // Cara menggunakan fungsi di atas
	     if (preg_match('/^([a-z]{3,5})$/',$username)) {
	         echo "Username Is Valid" ;
	     } else {
	         echo "Username Is Invalid" ;
	     }
     }

     function PassValid($password) {
        
        // Cara menggunakan fungsi di atas
	     if (preg_match('/^([a-z]{1,3}+)-([0-9]{1,3}+)([A-Z]{1,4})$/',$password)) {
	         echo "Password Is Valid" ;
	     } else {
	         echo "Password Is Invalid" ;
	     }
     }
	
	// Menjalankan Fungsi Username & Password Dengan Benar
    echo "<b> Validasi Yang Benar </b>";
    echo "<br>";
	UserValid('aris');
	echo "<br>";
	PassValid('ari-123ARIS');
	echo "<br>";
	echo "<br>";
	echo "<b> Validasi Yang Salah </b>";
    echo "<br>";
	UserValid('zeronull');
	echo "<br>";
	PassValid('C0d3YourFuture!#');
?>