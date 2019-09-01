<?php
declare(strict_types=1);

namespace PackageForLaravel\Blade;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

/**
 * Class DirectiveServiceProvider
 * @package PackageForLaravel\Blade
 */
class DirectiveServiceProvider extends ServiceProvider
{
    /**
     * Boots in the directives
     */
    public function boot(): void
    {
        Blade::directive('activeroute', function ($expression) {
            return "<?= Request::routeIs($expression) ? 'active' : ''; ?>";
        });
    }
}
