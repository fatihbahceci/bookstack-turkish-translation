# Table Of Contents

[Türkçe](#tr)  

[English](#en)  

# Türkçe

<a name="tr"/>

## Önemli Uyarı

Aşağıdaki Dosyalar henüz tam olarak çevrilmemiştir.

* entities.php
* ~~errors.php~~
* settings.php
* ~~validation.php~~


## Kurulum

1. `[Uygulama Klasörü]/resources/lang/` klasörü içinde `tr` adında bir klasör oluşturun. Örnek: `/var/www/html/resources/lang/tr`.
2. Çeviri dosyalarımızı bu klasörün için kopyalayın
3. `[Uygulama Klasörü]/resources/lang/en/settings.php`dosyasını açın ve `language_select` dizisine şu  elemanı ekleyin  `'tr'=> 'Turkish',`
4. `[Uygulama Klasörü]/app/Config/app.php` dosyasını aç ve `locales` değişkenine `tr` öğresini ekle. Örnek:  `'locales' => [... , 'tr', ...]`
5. İsteğe bağlı olarak  `[Uygulama Klasörü]/app/Http/Middleware/Localization.php` dosyasına map ekle `protected $localeMap = [ ..., 'tr' => 'tr_TR', ...]`

## Ön Tanımlı Olarak Türkçe Seçme
Bunun için `.env` dosyasını açıp **APP_LANG** değerini  **tr** olarak set edin. Örnek: `APP_LANG=tr`.
Daha sonra php veya dockeri yeniden başlatın.
**linuxserver/bookstack** docker image için bu dosya `/config/www/.env` dır.



# English

<a name="en"/>

## Warning

The following files are not yet fully translated.

* entities.php
* ~~errors.php~~
* settings.php
* ~~validation.php~~




## Installation

1. Create a folder named `tr` in `[AppDirectory]/resources/lang/`. Ex: `/var/www/html/resources/lang/tr`.
2. Copy our translated files into this directory.
3. Open the `[AppDirectory]/resources/lang/en/settings.php` file and add following value into `language_select`;  `'tr'=> 'Turkish',`
4. Open the `[AppDirectory]/app/Config/app.php` file and add following value into `locales` array ;`tr`. Ex:  `'locales' => [... , 'tr', ...]`
5. Optionally  open `[AppDirectory]/app/Http/Middleware/Localization.php` file and add `tr` value  into $localeMap array. For example `protected $localeMap = [ ..., 'tr' => 'tr_TR', ...]`

## How to select Turkish as default language for public

Open the `.env` file and set **APP_LANG**  value to **tr**. Ex: `APP_LANG=tr`.
Then restart php or docker.

This file is  `/config/www/.env`  for **linuxserver/bookstack** docker image.

