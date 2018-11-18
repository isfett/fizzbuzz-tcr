# FizzBuzz - TCR

From http://codingdojo.org/kata/FizzBuzz/

## Sample Output
```
1
2
Fizz
4
Buzz
Fizz
7
8
Fizz
Buzz
11
Fizz
13
14
FizzBuzz
16
17
Fizz
19
Buzz
... etc up to 100
```

## TCR
TCR is a shortcut for `test && commit || revert`
This is a proof of concept in a small PHP Team to @KentBeck's TCR Workflow, have a look on https://medium.com/@kentbeck_7670/test-commit-revert-870bbd756864 for some more informations.

When we start, there will just be this command:
```
./vendor/bin/phpunit && git add . && git commit -a -m 'wip' && git pull --rebase && git push || git reset HEAD --hard
```