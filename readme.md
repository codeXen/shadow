# Shadow PHP Framework

Shadow is an **awesome PHP framework** providing an easier and expressive way to create websites.

## Documentation
For detailed documentation visit https://codexen.github.io/shadow-docs/

## Installation

- composer create-project codexen/shadow foldername dev-master
- cp remote.ini.example remote.ini
- php kapitan server

## Code Examples

Database Queries
```
$data = ['title' => 'Shadow Framework', 'description' => 'Framework for kapitans'];
Insert : Model::instance()->insert($data);
Update : Model::instance()->where('id', 1)->update($data);
Delete : Model::instance()->where('id', 1)->delete();
Select : Model::instance()->select('title', 'description')->orderBy('id', 'desc')->getAll();
```