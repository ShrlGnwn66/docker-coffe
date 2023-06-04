GUNAWAN COFFESHOP
DEPLOYMENT WEBSITE PHP USING DOCKER

Catatan :

1. File compose yml ketika tidak ingin import ulang db maka aktifkan volumes di mysql-db tetapi tidak akan create ulang volumes di docker
2. Ketika file tersebut di aktifkan maka akan create ulang volumes tetapi harus import ulang database yang ada di folder db.
3. Codingannya seperti ini dan dituliskan dibawah Root Password.
   # volumes:
   # - ./mysql_data:/var/lib/mysql #Ini untuk menyimpan data mysql agar tidak import ulang.

PR.

0. Memfungsikan JS your order
1. Connect form Order to Database
2. bagaimana cara memberi name pada YourOrder
