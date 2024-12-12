In PHP, a common yet subtle error arises when dealing with array keys that are not strictly numeric.  If you attempt to access an array element using a string key that has leading or trailing whitespace, you may encounter unexpected behavior. PHP's loose typing can lead to unexpected key comparisons. 

```php
$myArray = [];
$myArray["  key  "] = "value";
echo $myArray["key"]; // This will NOT output "value"
```