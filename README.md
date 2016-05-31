# Media Kearsipan

Kebutuhan Sistem : 
- Webserver : Apache/Nginx, PHP5.5/PHP7, MySQL
- Git Subversion
- Composer Dependency Manager PHP
- Some snack and coffe (y)

Cara memasang Media Kearsipan pada sistem sebagai berikut :
- Di console/command line ketik 'git clone https://github.com/picobug/kearsipan.git'
- Ketik 'cd kearsipan' dan lakukan perintah 'composer install'
- Import table database 'yii_kearsipan.sql' pada MySQL sistem.
- Ubah konfigurasi database di file 'config/db.php'
- Masuk pada browser dan akses lokasi media kearsipan di pasang
- Klik pilihan 'Sign Up' isi data sesuai keperuan, namun untuk username yang pertama isi 'adminarsip'
- Setelah register, balik ke url utam- Login sebagai 'adminarsip'
- Pada menu kiri, pilij 'System>User Admin'
- Klik pada tab 'Role', tambahkan role dengan nama 'admin'
- Klik pada tab 'Users', klik 'adminarsip'.
- Klik pada link 'Assignments', masukkan role admin pada input yang tersedia.
- Jika ingin membuat role siswa dan lain caranya sama. Secara default user tanpa role diberikan access limit.
