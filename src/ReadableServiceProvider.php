<?php

namespace RaggiTech\Laravel\Readable;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use RaggiTech\Laravel\Readable\Readable;


class ReadableServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $n = 'Readable';

        // NUMBERS

        Blade::directive($n . 'Number', function ($data) {
            return "<?php echo RaggiTech\Laravel\Readable\Readable::getNumber($data); ?>";
        });

        Blade::directive($n . 'HumanNumber', function ($data) {
            return "<?php echo RaggiTech\Laravel\Readable\Readable::getHumanNumber($data); ?>";
        });

        Blade::directive($n . 'Decimal', function ($data) {
            return "<?php echo RaggiTech\Laravel\Readable\Readable::getDecimal($data); ?>";
        });

        // DATE & TIME

        Blade::directive($n . 'Date', function ($data) {
            return "<?php echo RaggiTech\Laravel\Readable\Readable::getDate($data); ?>";
        });

        Blade::directive($n . 'Time', function ($data) {
            return "<?php echo RaggiTech\Laravel\Readable\Readable::getTime($data); ?>";
        });

        Blade::directive($n . 'DateTime', function ($data) {
            return "<?php echo RaggiTech\Laravel\Readable\Readable::getDateTime($data); ?>";
        });

        Blade::directive($n . 'DiffDateTime', function ($data) {
            return "<?php echo RaggiTech\Laravel\Readable\Readable::getDiffDateTime($data); ?>";
        });

        Blade::directive($n . 'TimeLength', function ($data) {
            return "<?php echo RaggiTech\Laravel\Readable\Readable::getTimeLength($data); ?>";
        });

        Blade::directive($n . 'DateTimeLength', function ($data) {
            return "<?php echo RaggiTech\Laravel\Readable\Readable::getDateTimeLength($data); ?>";
        });

        Blade::directive($n . 'Size', function ($data) {
            return "<?php echo RaggiTech\Laravel\Readable\Readable::getSize($data); ?>";
        });
    }
}
