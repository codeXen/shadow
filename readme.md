# Shadow PHP Framework

Shadow is an **awesome PHP framework** providing an easier and expressive way to create websites.

## Installation

- composer create-project codexen/shadow foldername
- sudo chmod 777 -R bin/storage
- php -S localhost:8000 -t public

## Code Examples

Create new route
```
$router->get('/path', 'Controller@method');
```

Add a middleware
```
$router->middleware('name', 'Filename');  App\Middlewares directory
```

Return view view data
```
return render('folder/viewname', compact('data'));
```

Redirect to url
```
return redirect('homepage');
```

Database Queries
```
$data = ['title' => 'Shadow Framework', 'description' => 'Framework for kapitans'];
Insert : Model::instance()->insert($data);
Update : Model::instance()->where('id', 1)->update($data);
Delete : Model::instance()->where('id', 1)->delete();
Select : Model::instance()->select('title', 'description')->orderBy('id', 'desc')->getAll();
```

#Commands
php kapitan app:greet
php kapitan app:generate-key
php kapitan create:controller
php kapitan create:model
php kapitan database:backup