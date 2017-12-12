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
- [ ] 资源Resources
- [ ] 异常Exceptions
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
- [x] 路由Routes
- [x] 配置Configs
- [x] 扩展Packages

## 小知识

```php
# 增删改查，改这里PUT|PATCH，使用postman时Header记得加上Content-Type:application/x-www-form-urlencoded

| GET|HEAD  | api/apply          | apply.index      | App\Http\Controllers\Api\ApplyController@index   |
| POST      | api/apply          | apply.store      | App\Http\Controllers\Api\ApplyController@store   |
| GET|HEAD  | api/apply/{apply}  | apply.show       | App\Http\Controllers\Api\ApplyController@show    |
| PUT|PATCH | api/apply/{apply}  | apply.update     | App\Http\Controllers\Api\ApplyController@update  |
| DELETE    | api/apply/{apply}  | apply.destroy    | App\Http\Controllers\Api\ApplyController@destroy |

```

## 抄袭哪里的啊

[jcc/blog](https://github.com/jcc/blog)