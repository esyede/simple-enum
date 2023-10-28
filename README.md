# simple-enum
Simple enum for PHP &lt; 8.1 >= 5.3.0

### Usage:

```php
abstract class DaysOfWeek extends Enums
{
    const SUNDAY = 0;
    const MONDAY = 1;
    const TUESDAY = 2;
    const WEDNESDAY = 3;
    const THURSDAY = 4;
    const FRIDAY = 5;
    const SATURDAY = 6;
}

var_dump(DaysOfWeek::isValidName('esyede')) . PHP_EOL; // bool(false)
var_dump(DaysOfWeek::isValidName('MONDAY')) . PHP_EOL; // bool(true)
var_dump(DaysOfWeek::isValidName('Monday')) . PHP_EOL; // bool(true)
var_dump(DaysOfWeek::isValidName('Monday', $strict = true)) . PHP_EOL; // bool(false)
var_dump(DaysOfWeek::isValidName(0)) . PHP_EOL; // bool(false)

var_dump(DaysOfWeek::isValidValue(0)) . PHP_EOL; // bool(true)
var_dump(DaysOfWeek::isValidValue(5)) . PHP_EOL; // bool(true)
var_dump(DaysOfWeek::isValidValue(7)) . PHP_EOL; // bool(false)
var_dump(DaysOfWeek::isValidValue('FRIDAY')) . PHP_EOL; // bool(false)
```
