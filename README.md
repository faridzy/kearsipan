# Media Kearsipan

Kebutuhan Sistem : 
- Webserver : Apache/Nginx, PHP5.5/PHP7, MySQL
- Git Subversion
- Composer Dependency Manager PHP
- Some snack and coffe (y)

Cara memasang Media Kearsipan pada sistem sebagai berikut :
1. Di console/command line ketik 'git clone https://github.com/picobug/kearsipan.git'
2. Ketik 'cd kearsipan' dan lakukan perintah 'composer install'
3. Import table database 'yii_kearsipan.sql' pada MySQL sistem.
4. Ubah konfigurasi database di file 'config/db.php'
5. Masuk pada browser dan akses lokasi media kearsipan di pasang
6. Klik pilihan 'Sign Up' isi data sesuai keperuan, namun untuk username yang pertama isi 'adminarsip'
7. Setelah register, balik ke url utama. Login sebagai 'adminarsip'
8. Pada menu kiri, pilij 'System>User Admin'
9. Klik pada tab 'Role', tambahkan role dengan nama 'admin'
10. Klik pada tab 'Users', klik 'adminarsip'.
11. Klik pada link 'Assignments', masukkan role admin pada input yang tersedia.
12. Jika ingin membuat role siswa dan lain caranya sama. Secara default user tanpa role diberikan access limit.
