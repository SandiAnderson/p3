# Project 3
+ By: *Sandra Anderson*
+ Production URL: <http://p3.dcyc.club>

## Outside resources
+ Reference for accessing array: <https://www.w3schools.com/php/php_arrays.asp>
+ Referencing multi-dimensional arrays in Laravel Blade: 
<https://laravel.io/forum/07-16-2014-iterate-over-multidimensional-object-with-blade>
+ Reference for time from Float format (no date/time methods available): 
<https://stackoverflow.com/questions/27497253/convert-float-to-hhmm-format>
and <https://stackoverflow.com/questions/3172332/convert-seconds-to-hourminutesecond>
+ Background image in Nav bar from <https://www.pexels.com>
+ The following for general reference: <http://php.net/>,
 <https://laravel.com/>, <https://www.w3schools.com/>

## 3 Unique inputs
*Estimator:
  * Number
  * Select
  * Radio

## Packages
+ barryvdh/laravel-debugbar
+ masterro/laravel-chronos (cakephp)

## Code style divergences
+ Some lines may extend past 80 char

## Notes for instructor
+ The second 'Planner' page is just for using a second package - the Chronos
 for date differences.  Although PHP does have the date_diff function.
+ The planner would have a better user experience with a date input - but still
 not supported in all browsers and caused validation error.

* Project Notes:
  * Navigation on the Home page and nav bar is controlled in the app.php config
  * Constants used for calculation are also in app.php config. 
  * Attribute value names set in validation.php.
  * Reseting the values on the forms is done in the displayvalue view as some
   of the logic was repetative and became lengthy for setting default and zero
    values within the form itself.
