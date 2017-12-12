# SDK-Laravel5.5

## 老哥，干嘛的啊

一个laravel初始库

## 老哥，怎么用啊

```php

git clone https://github.com/OMGZui/SDK-Laravel5.5.git
composer install
cp .env.example .env
chown -R 775 storage
php artisan storage:link
php artisan key:generate
php artisan migrate --seed
phpunit
```

## 老哥，有什么啊

- [ ] 事件Events
- [ ] 监听者Listeners
- [ ] 任务队列Jobs
- [ ] 策略Policies
- [ ] 任务队列Jobs
- [ ] 资源Resource
- [ ] 异常Exception
- [x] 控制器Controllers
- [ ] 中间件Middleware
- [x] 请求Requests
- [x] 邮件Mails
- [x] 模型Models
- [x] 数据迁移Migrations
- [x] 模型工厂Factories
- [x] 数据填充Seeds
- [x] 通知Notifications
- [ ] 服务提供者Providers
- [x] 仓库Repositories
- [x] 支持Supports
- [x] 工具Tools
- [x] 转化Transforms
- [x] 测试Tests
- [x] 规则Rules

