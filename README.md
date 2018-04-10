# md5hasher
```v1.0```
# Installation
Install via composer - edit your ```composer.json``` to require the package.

```
"require": {
    "f4cklangzi/md5hasher": "^1.0"
}
```
Then run ```composer update``` in your terminal to pull it in.

Once this has finished, you will need to add the service provider to the providers array in your app.php config as follows:

```
'Laravist\Hasher\MD5HasherProvider::class'
```
Next, also in the app.php config file, under the aliases array, you may want to add the MD5HasherFacade facade.

```
'MD5Hasher' => \App\Http\Facades\MD5HasherFacade::class'
```

# License
The MIT License (MIT)