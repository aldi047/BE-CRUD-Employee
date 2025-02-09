# BE-CRUD-Employee
tabel user              => ditambah nip untuk login atau bisa juga pakai email dan (photo)
tabel personal biodata  => npwp Tempat_Lahir Alamat	Tgl_Lahir   jenis_kl	No. HP	Agama
tabel Work Information  => Gol	Eselon	Jabatan	Tempat_Tugas	Unit Kerja

==========================================================================================
Belum ADD INI di FE !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! 
axios.defaults.withCredentials = true;
axios.defaults.withXSRFToken = true;

Buat kolom user_type pada user table => type admin dan employee

Halaman Employee
Hanya ada 1 tab saja dengan isi:
Home dikasi middleware => isi data personal > data detail pekerjaan > data join 2 tabel
Ketika sudah semua dikasi data lengakap dan dijoin

Halaman Admin
Home, CRUD personal biodata, CRUD detail employee
Halaman Home bisa preview, cetak dan search, filter
Halaman Home berisi data seperti di soal

Pada tabel user, data nip dipindah ke employee_details

cara pasang middleware di FE?????????

setup using ulid

maybe print dengan 2 halaman dan lihat nomornya (idnya)
