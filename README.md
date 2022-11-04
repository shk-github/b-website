# Brilo - web

### 1. krok - instalace laravelu
```
composer create-project laravel/laravel example-web "8.*"
```

### 2. krok - příprava pro vlastní webpack
Přejděte do nově vytvořeného adresáře Laravel projektu _example-web_ a odstraňte soubor **webpack.mix.js**.


### 3. krok - nahraďte package.json
Nahraďte původní package.json souborem package.json z tohoto repozitáře.
  

### 4. krok - nastavte se v terminálu do adresáře Laravel projektu _example-web_
```
cd example-web
```
  

### 5. krok - nainstalujte NPM balíčky z package.json
```
npm install
```
  

### 6. krok - nahraďte původní soubory Laravelu za soubory z tohoto repozitáře
Soubory můžete stáhnout pomoci níže uvedeného příkazu a následně je z adresáře _gitExampleWeb_ přesunout do rootu projektu:
```
git clone https://github.com/shk-github/b-website.git gitExampleWeb
```

### 7. krok - zpracujte Sass a JS soubory
Ve vývojové verzi použijte:
```
npm run dev
```

Ve finální verzi použijte:
```
npm run build
```
  

### 8. krok - spusťte PHP server a zobrazte si projekt
Pomoci příkazu níže spustíte PHP server. V terminálu naleznete URL pro zobrazení projektu ve vašem prohlížeči.
```
php artisan serve
```
