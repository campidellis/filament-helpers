# Helper Classes

Instalação

```bash
composer require campidellis/filament-helpers --dev
```

Para gerar uma nova classe

```bash
php artisan filament:helpers
```

1. Escolher qual tipo de classe deseja criar
2. O nome da classe (Relacionado ao Resource. Ex.: `User` para o `UserResource`)
3. Pertence a um `Módulo`? `(Não)`
4. Em qual painel será criado `Painel`? `admin`
5. Especificar um caminho? `(Sim)`
6. Caminho onde vai ser gerada a classe: `(App)`
7. Namespace onde vai ser gerada a classe: `(<resource_name>)`
8. Nome do `Resource` onde a classe vai ser gerada


## Using Generated Class

```php
use App\Filament\Panel\Resources\AccountResource\Forms\UserForm;

public function form(Form $form): Form
{
    return UserForm::make($form);
}
```

```php
use App\Filament\Panel\Resources\AccountResource\Tables\UserTable;

public function form(Table $table): Table
{
    return UserTable::make($table);
}
```

```php
use App\Filament\Panel\Resources\AccountResource\Actions\UserActions;

public function table(Table $table): Table
{
    return $table->actions(UserActions::make());
}
```

```php
use App\Filament\Panel\Resources\AccountResource\Actions\UserFilters;

public function table(Table $table): Table
{
    return $table->filters(UserFilters::make());
}
```
