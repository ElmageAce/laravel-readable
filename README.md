# [RaggiTech] Laravel >= 6.0 - Readable. [![Latest Stable Version](https://poser.pugx.org/raggitech/laravel-readable/v/stable)](https://packagist.org/packages/raggitech/laravel-readable) [![Total Downloads](https://poser.pugx.org/raggitech/laravel-readable/downloads)](https://packagist.org/packages/raggitech/laravel-readable) [![License](https://poser.pugx.org/raggitech/laravel-readable/license)](https://packagist.org/packages/raggitech/laravel-readable)
#### Laravel Readable provides a quick and easy functions & blade directives.

- ###### Number. 				   		(1,020,304,050,607,080)

- ###### HumanNumber.  	    	( 77K  ||  77.4K  ||  77.37K )

- ###### Decimal. 					  	 ( 60,708.547 )

- ###### Date. 					  	   	( 24 April 2020 )

- ###### Time. 					  	   	( 15:20   ||   15:20:22   ||   03:20 PM   ||   03:20:22 PM )

- ###### DateTime. 					    ( Friday, April 24, 2020 05:20 PM )

- ###### DateTime Difference.    ( 27 years before )

- ###### Time Length.    	   	     ( 4 years 7 months 1 week 3 days 9 hours 50 minutes 10 seconds )

- ###### DateTime Length.    	   ( 27 years - 1 week - 7 minutes - 7 seconds before )

- ###### File Size.    	 	 	 	 	 ( 70 GB )



## Install

Install the latest version using [Composer](https://getcomposer.org/):

```bash
$ composer require raggitech/laravel-readable
```





## Usage

**Readable has the following methods & directives:**
- [ReadableNumber()](#ReadableNumber)
- [ReadableHumanNumber()](#ReadableHumanNumber)
- [ReadableDecimal()](#ReadableDecimal)
- [ReadableDate()](#ReadableDate)
- [ReadableTime()](#ReadableTime)
- [ReadableDateTime()](#ReadableDateTime)
- [ReadableDiffDateTime()](#ReadableDiffDateTime)
- [ReadableTimeLength()](#ReadableTimeLength)
- [ReadableDateTimeLength()](#ReadableDateTimeLength)
- [ReadableSize()](#ReadableSize)


<a name="ReadableNumber"></a>
##### ReadableNumber (int $number)
###### 1,020,304,050,607,080




<a name="ReadableHumanNumber"></a>

##### ReadableHumanNumber (int $number, bool $showDecimal = false, int $decimals = 0)
###### 77K  ||  77.4K  ||  77.37K



<a name="ReadableDecimal"></a>
##### ReadableDecimal ($number, int $decimals = 2)
###### 60,708.54



<a name="ReadableDate"></a>
##### ReadableDate ($date, string $timezone = null)
> $date = '24-04-2020' || Carbon Instance

###### 24 April 2020



<a name="ReadableTime"></a>
##### ReadableTime ($time, $is12Hours = false, bool $hasSeconds = false, string $timezone = null)
> $time = '15:20:22' || Carbon Instance

###### Has Seconds     	15:20:22    ||   03:20:22 PM
###### Hasn't Seconds    15:20     	||   03:20 PM 



<a name="ReadableDateTime"></a>
##### ReadableDateTime ($datetime, $is12Hours = false, bool $hasSeconds = false,  string $timezone = null)
> $datetime = '24-04-2020 17:20:32' || Carbon Instance

###### 12Hours + Has Seconds  	=> Friday, April 24, 2020 05:20:32 PM



<a name="ReadableDiffDateTime"></a>
##### ReadableDiffDateTime ($oldDateTime, $newDateTime = null, string $timezone = null)
> $oldDateTime = '24-04-2020 17:20:32' || Carbon Instance
> $newDateTime = '24-04-2020 17:20:32' || Carbon Instance || null (now)

###### 27 years before



<a name="ReadableTimeLength"></a>
##### ReadableTimeLength (int $seconds, string $comma = ' ')
###### 4 years 7 months 1 week 3 days 9 hours 50 minutes 10 seconds
###### Comma => 4 years - 7 months - 1 week - 3 days - 9 hours - 50 minutes - 10 seconds



<a name="ReadableDateTimeLength"></a>
##### ReadableDateTimeLength ($oldDateTime, $newDateTime = null, bool $fullForm = false, string $comma = ' ', string $timezone = null)
> $oldDateTime = '24-04-2020 17:20:32' || Carbon Instance
> $newDateTime = '24-04-2020 17:20:32' || Carbon Instance || null (now)

###### Short-Form  => 27 years before
###### Full-Form + Comma => 27 years - 1 week - 7 minutes - 7 seconds before



<a name="ReadableSize"></a>
##### ReadableSize (int $bytes)
###### 70 GB



## License

[MIT license](LICENSE.md)
