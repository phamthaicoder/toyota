# Toyota
### Requirements
- PHP 7.2 -> 8.0
- Nodejs

### Clone repository
```
git clone https://github.com/nambp97/toyota.git
```

### Change to Office Lady folder
```
cd toyota
```

### Install composer
```
curl -s https://getcomposer.org/installer | php
```

### Create application config file, edit .env file to add config (API key, ...)
```
cp .env.example .env
```

### Install dependencies
```
composer install
```

### Generate APP_KEY
```
php artisan key:generate
```

### Install npm package
```
npm install
```

### Run task to build mix
```
npm run dev
```

### Run project
```
php artisan serve
```
