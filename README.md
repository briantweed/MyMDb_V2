# MyMDb_v2

MyMDb rewrite - Laravel 5.8

The original MyMDb was my first Laravel project and it shows. Instead of trying to upgrade from version 5.1 to 5.7 I've decided to rewrite the majority of it from scratch (pretty much everything except for the database structure wich I'm happy enough with)


### Recently Added

#### Form Builder

_@see app/Builders/FormBuilder.php_

- Created forms in app/Forms folder. 
- Builder goes through the form data array and adds the relevant item found in resources/views/forms
- Returns view as html ( display on blade page using `{!! $form !!}`)

```
$form = (new FormBuilder(new MovieForm()))->build();
```

---


#### Search Filter Builder

_@see app/Builders/SearchBuilder.php_

- Pass the relevant model and the posted request filters
- Check if each filter has a matching query scope in the model e.g. for `name` filter check for a scope called `scopeWhereName()`
- Similar naming convention for order by and direction filters e.g. sort by name will realte to a scope called `scopeByName($direction)`
- Add the matching scopes to the query string and return the results

```
$movies = (new SearchBuilder($this->movie, $request))->apply();
```

 --- 
 
