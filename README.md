# BEAUTY REVIEW API

API Beauty Review ini dapat menampilkan testimoni-testimoni produk make up bedasarkan nama produk dari website female daily.

# API yang dibuat
API yang dibuat menggunakan database API.sql yang isinya terdapat 2 tabel. Tabel categories berisi kode produk dan nama produk, Tabel post yang berisi review (dummy) mengenai produk kecantikan.

API dapat menampilkan 15 review terbaru mengenai produk berdasarkan id produk atau nama produk.Untuk menampilkan dan mendapatkan data digunakan perintah GET dan POST dengan memodifikasi URL API.

# DEPLOY
1. Pindahkan folder progif ke local repository
2. Import database API.sql
3. Untuk melihat hasil dapat menggunakan aplikasi postman
4. Modifikasi URL dari file Read_by_name.php (http://localhost/progif/API/READ_by_name.PHP?product_name=xxx)/ Read_by_id.php (http://localhost/progif/API/READ_by_id.PHP?product_id=xxx)
