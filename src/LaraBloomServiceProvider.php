<?php
namespace Nickfan\LaraBloom;
/**
 * Description
 *
 * @project LaraBloom
 * @package LaraBloom
 * @author nickfan <nickfan81@gmail.com>
 * @link http://www.axiong.me
 * @version $Id$
 * @lastmodified: 2015-09-24 10:41
 *
 */

use Bloom;
use Illuminate\Support\ServiceProvider;

class LaraBloomServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     */
    public function boot()
    {
        //
        $configPath = __DIR__ . '/../config/larabloom.php';
        $this->publishes([
            $configPath => config_path('larabloom.php'),
        ]);
        //$this->mergeConfigFrom($configPath, 'larabloom');
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        //$configPath = __DIR__ . '/../config/larabloom.php';
        //$this->mergeConfigFrom($configPath, 'larabloom');
        $this->app->bind('Nickfan\LaraBloom\LaraBloomFactory', function ($app,$parameters=[]) {
            $parameters+=$app['config']->get('larabloom.init.default',[
                'entries_max' => 10,
            ]);
            return new Bloom($parameters);
        });
        $this->app->singleton('Nickfan\LaraBloom\LaraBloom',function($app){
            return new LaraBloom($app['config']->get('larabloom.init.default',[
                'entries_max' => 10,
            ]));
        });
    }

}