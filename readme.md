# CRM (Laravel + MySQL)

Bu depo, Laravel ve MySQL kullanarak gelistirilecek CRM uygulamasi icin temel klasor ve ayar dosyalarini icerir.

## CRM Sistem Anayasasi ve Temel Mimari

Bu sistem, **urun omurgali**, **multi-tenant** ve **SaaS** yapisina hazir bir CRM platformudur. Tum moduller urun yonetimini temel alir ve urunlerin kanallar bazinda hangi sartlarda satilacagini bu katmanda belirler.

### 1) Sistem Tanimi
- Urun, musteri, tedarikci, teklif, satis, satinalma, stok, depo ve finansal surecleri kapsar.
- Tum firmalar tek domain uzerinden erisir; her firma kendi verisine sahiptir.

### 2) Multi-Tenant Yapisi
- Tek veritabani kullanilir.
- Tum kayitlar `company_id` ile ayrilir.
- Her kullanici tek bir firmaya baglidir ve baska firmalarin verisine erisemez.

### 3) Paket ve Abonelik Sistemi
- Firma bazli paketler kullanici sayisi ve veri limitleri icerir.
- Limit asiminda yeni kayit olusturma engellenir.

### 4) Urun Yonetimi (Sistemin Omurgasi)
- Urunler tum moduller tarafindan kullanilir.
- Fiyatlar kanal bazlidir.
- Silme yerine pasife alma esastir.
- Toplu urun yukleme/guncelleme sadece Admin tarafindan Excel ile yapilir.

### 5) Teklif Yonetimi
- Teklifler satis personeli tarafindan olusturulur.
- Musteri secimi, urun ekleme, iskonto ve KDV islemleri bulunur.
- Teklifler PDF ve e-posta ile gonderilir; onaylandiginda satisa donusur.

### 6) Musteri & Tedarikci Yonetimi
- Cari, fatura ve kontak bilgileri tutulur.
- Mukerrer kayitlar birlestirilebilir.
- Firma detayinda satis veya satinalma ozetleri goruntulenir.

### 7) Satis Yonetimi
- Satislar tekliften otomatik ya da dogrudan olusturulur.
- Faturalandirma entegrasyonlarina aktarilabilir.

### 8) Satinalma Yonetimi
- Tedarikci, urun, miktar ve fiyat bilgileriyle kayit olusturulur.
- Teslimat depo, faturalandirma muhasebe tarafindan takip edilir.

### 9) Stok & Depo Yonetimi
- Stok hareket bazlidir.
- Toplam, rezerve ve kullanilabilir stok ayrimi vardir.
- Teslimat stok artirir, satis rezervasyon olusturur, sevkiyat stok dusurur.

### 10) Kullanici, Rol & Yetki Yonetimi
- Yetkiler role atanir, kullaniciya rol verilir.
- Yetkilendirme modul bazlidir.
- Rol degisiklikleri tum kullanicilari etkiler.

### 11) Guvenlik ve Denetim
- Tum kritik islemler loglanir.
- Hangi kullanicinin hangi islemi yaptigi kayit altina alinir.

### 12) Moduller Arasi Bagimlilik Ozeti
- Urun modulu tum is akislari icin merkezi veri kaynagidir.
- Teklif, satis, satinalma, stok ve depo modulleri urun kayitlarini referans alir.
- Finansal ve raporlama modulleri urun ve hareket verilerine dayanir.

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
