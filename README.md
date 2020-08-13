<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

# Tutorial Github

## Repository Belum Ada Di Komputer

1. Lakukan Clone Repository

```
git clone https://github.com/Harun1804/sanber-final.git
```

2. Masuk ke directory

```
cd sanber-final
```

### Jika Ada Perubahan File

1. Check Terlebih Dahulu File Apa Saja Yang Berubah

```
git status
```

2. Tambahkan Semua File Yang diubah

```
git add .
```

3. Lakukan Commit Jika Ada Perubahan

```
git commit -m "Komentar Anda"
```

4. Upload Ke Repository

```
git push origin master
```

## Cara Update Repository Milik Sendiri Yang Sudah Ada Di Komputer

1. Masuk Ke Folder Repository Yang Ada Di Komputer Anda
2. Mengambil Data Dari Repository

```
git pull origin master
```

## Cara Update Repository Milik Orang Lain Melalui Forking
1. Masuk Ke Folder Repository Hasil Forking
2. Menghubungkan Dengan Repo Utama

```
git remote add upstream https://github.com/Harun1804/sanber-final.git
```

3. Mengambil data dari repository utama

```
git fetch upstream
```

4. Memperbaharui Data Repository

```
git pull upstream master
```

5. Mengambil data dari repository Hasil Fork

```
git pull origin master
```

# Tutorial Penggunaan Laravel

1. Install Composer Terlebih Dahulu <br>
[Download disini](https://getcomposer.org/download/)
2. Install Packagenya Terlebih Dahulu

```
composer install
```

3. Copy isi file .env.example

```
cp .env.example .env
```

4. Generate Key Baru

```
php artisan key:generate
```

5. Pada file .env yang telah dibuat, buat database kosong dengan nama ***db_forum*** atau bebas
6. Kemudian Database Tersebut Atur Di File .env pada key ***DB_DATABASE***
7. Lakukan Migrasi Database

```
php artisan migrate
```

8. Jalankan aplikasi

```
php artisan serve
```
