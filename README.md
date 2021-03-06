# md5hasher
```v1.0```

[![Build Status](https://travis-ci.org/f4cklangzi/md5hasher.svg?branch=master)](https://travis-ci.org/f4cklangzi/md5hasher)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/f4cklangzi/md5hasher/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/f4cklangzi/md5hasher/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/f4cklangzi/md5hasher/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/f4cklangzi/md5hasher/?branch=master)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/f4cklangzi/md5hasher/badges/code-intelligence.svg?b=master)](https://scrutinizer-ci.com/code-intelligence)
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