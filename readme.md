# CRM (Laravel + MySQL)

Bu depo, Laravel ve MySQL kullanarak gelistirilecek CRM uygulamasi icin temel klasor ve ayar dosyalarini icerir.

## Kurulum

1. Bagimliliklari yukleyin:
   ```bash
   composer install
   ```
2. Ortam dosyasini olusturun:
   ```bash
   cp .env.example .env
   ```
3. Veritabanini `.env` dosyasinda MySQL bilgilerinizle guncelleyin.
4. Uygulama anahtarini olusturun:
   ```bash
   php artisan key:generate
   ```
5. Uygulamayi calistirin:
   ```bash
   php artisan serve
   ```

## Notlar

- `config/database.php` icinde MySQL baglantisi varsayilan olarak ayarlidir.
- `app/Models/Customer.php` temel musteri modeli icin ornek sunar.
