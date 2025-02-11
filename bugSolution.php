```php
function my_function($arr) {
  $arrCopy = $arr;
  foreach ($arrCopy as $key => $value) {
    if ($value === 'some_value') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$my_array = ['a', 'b', 'some_value', 'c'];
$result = my_function($my_array);
print_r($result);
```