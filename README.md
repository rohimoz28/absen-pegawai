## Aplikasi Absensi Pegawai

[![login.png](https://i.postimg.cc/tJjLZF2s/login.png)](https://postimg.cc/nj3dN98x)

[![absensi-app.png](https://i.postimg.cc/Hn9FQjhB/absensi-app.png)](https://postimg.cc/GT9MR3ry)

[![absensi.png](https://i.postimg.cc/bY0XXFwk/absensi.png)](https://postimg.cc/vDm2fh9Z)

[![pegawai.png](https://i.postimg.cc/yY7M7XD5/pegawai.png)](https://postimg.cc/WtfWnZ66)

# Flow Kerja Aplikasi
1. Absensi
* Berupa inputan NIK pegawai yang ketika ditekan tombol enter maka akan menyimpan data absensi sesuai dengan realtime now
* Untuk enter pertama dianggap absen masuk. enter kedua dianggap absen keluar
* Inputan absen berada di menu absensi lalu klik tombol "Click for absence"

2. Backend
* Menu pegawai berisi CRUD pegawai, searching, paginating, dan sorting pegawai
* Menu absensi berisi view data pegawai

3. Login Aplikasi
* Login static dengan username dan password : admin

# Build
1. [SBAdmin-2](https://startbootstrap.com/theme/sb-admin-2)
2. Laravel 7
3. Mysqli