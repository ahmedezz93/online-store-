<?php

namespace App\Providers;

use App\Basket\Basket;
use App\Http\Controllers\site\CartController;
use App\Interface\AdsRepositoryinterface;
use App\Interface\Attributerepositoryinterface;
use App\Interface\brandrepositoryinterface;
use App\Interface\categoryrepositoryinterface;
use App\Interface\Optionrepositoryinterface;
use App\Interface\ProductRepositoryInterface;
use App\Interface\profilerepositoryinterface;
use App\Interface\RolesRepositoryinterface;
use App\Interface\sectionrepositoryinterface;
use App\Interface\sectionsrepositoryinterface;
use App\Interface\settingrepositoryinterface;
use App\Interface\site\CartSiterepositoryinterface;
use App\Interface\SliderRepositoryInterface;
use App\Interface\TagsRepositoryInterface;
use App\Repository\Attributerepository;
use App\Repository\brandrepository;
use App\Repository\categoryrepository;
use App\Repository\Optionrepository;
use App\Repository\Productrepository;
use App\Repository\profilerepository;
use App\Repository\sectionrepository;
use App\Repository\settingrepository;
use App\Repository\site\ProductSiterepository;
use App\Repository\SliderRepository;
use App\Repository\TagsRepository;
use App\Interface\site\ProductSiterepositoryinterface;
use App\Interface\site\wishlistSiterepositoryinterface;
use App\Interface\UsersRepositoryinterface;
use App\Repository\AdsRepository;
use App\Repository\RolesRepository;
use App\Repository\site\CartSiterepository;
use App\Repository\site\WishlistSiterepository;
use App\Repository\UsersRepository;
use Illuminate\Support\ServiceProvider;

use App\Support\Storage\Contracts\StorageInterface;
use App\Support\Storage\SessionStorage;
use Illuminate\Support\Facades\Schema;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

         $this->app->bind(

            settingrepositoryinterface::class,
            settingrepository::class,
            profilerepositoryinterface::class,
            profilerepository::class,
         );

         $this->app->bind(

            profilerepositoryinterface::class,
            profilerepository::class,
         );

         $this->app->bind(

            categoryrepositoryinterface::class,
            categoryrepository::class,
         );

         $this->app->bind(

            sectionrepositoryinterface::class,
            sectionrepository::class,
         );

         $this->app->bind(

            brandrepositoryinterface::class,
            brandrepository::class,
         );

         $this->app->bind(

            TagsRepositoryInterface::class,
            TagsRepository::class,
         );

         $this->app->bind(

            ProductRepositoryInterface::class,
            Productrepository::class,
         );

         $this->app->bind(
            Attributerepositoryinterface::class,
            Attributerepository::class,
         );

         $this->app->bind(
            Optionrepositoryinterface::class,
            Optionrepository::class,
         );

         $this->app->bind(
            SliderRepositoryInterface::class,
            SliderRepository::class,
         );

         $this->app->bind(
            ProductSiterepositoryinterface::class,
            ProductSiterepository::class,
         );

         $this->app->bind(
            wishlistSiterepositoryinterface::class,
            WishlistSiterepository::class,
         );

         $this->app->bind(
            CartSiterepositoryinterface::class,
            CartSiterepository::class,
         );


         $this->app->bind(
            RolesRepositoryinterface::class,
            RolesRepository::class,
         );


         $this->app->bind(
            UsersRepositoryinterface::class,
            UsersRepository::class,
         );

         $this->app->bind(
            AdsRepositoryinterface::class,
            AdsRepository::class,
         );

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    
}
