<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Brand;
use App\Models\category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        User::factory()->create([
            'name'   => 'Admin',
            'email'  => 'admin@casevault.com',
            'mobile' => '1800000001',
            'utype'  => 'ADM',
        ]);

        User::factory()->create([
            'name'   => 'John Doe',
            'email'  => 'john@casevault.com',
            'mobile' => '1800000002',
            'utype'  => 'USR',
        ]);

        // Brands
        $brandsData = [
            ['name' => 'Jordan',      'slug' => 'jordan',      'image' => 'brand-jordan.svg'],
            ['name' => 'Nike',        'slug' => 'nike',        'image' => 'brand-nike.svg'],
            ['name' => 'Adidas',      'slug' => 'adidas',      'image' => 'brand-adidas.svg'],
            ['name' => 'New Balance', 'slug' => 'new-balance', 'image' => 'brand-new-balance.svg'],
            ['name' => 'Puma',        'slug' => 'puma',        'image' => 'brand-puma.svg'],
        ];
        foreach ($brandsData as $b) {
            Brand::create($b);
        }

        // Categories
        $categoriesData = [
            ['name' => 'High Tops',        'slug' => 'high-tops',        'image' => 'cat-hightop.svg'],
            ['name' => 'Low Tops',         'slug' => 'low-tops',         'image' => 'cat-lowtop.svg'],
            ['name' => 'Basketball Shoes', 'slug' => 'basketball-shoes', 'image' => 'cat-basketball.svg'],
            ['name' => 'Retro Classic',    'slug' => 'retro-classic',    'image' => 'cat-retro.svg'],
            ['name' => 'Limited Edition',  'slug' => 'limited-edition',  'image' => 'cat-skate.svg'],
            ['name' => 'Running Shoes',    'slug' => 'running-shoes',    'image' => 'cat-running.svg'],
            ['name' => 'Lifestyle',        'slug' => 'lifestyle',        'image' => 'cat-lifestyle.svg'],
            ['name' => 'Training Shoes',   'slug' => 'training-shoes',   'image' => 'cat-training.svg'],
        ];
        foreach ($categoriesData as $c) {
            category::create($c);
        }

        $brands = Brand::all()->keyBy('slug');
        $cats   = category::all()->keyBy('slug');

        // Products — All Air Jordan models
        $products = [
            [
                'name'              => 'Air Jordan 1 Retro High OG Chicago',
                'slug'              => 'air-jordan-1-retro-high-og-chicago',
                'short_description' => 'The original colorway that started a revolution. Red, black, and white.',
                'description'       => 'The Air Jordan 1 Retro High OG Chicago is a faithful reproduction of the 1985 original that launched the entire Air Jordan legacy. Full-grain leather upper in the iconic University Red, Black, and White colorway. Encapsulated Air-Sole unit in the heel. Original Wings logo on the collar. This is the sneaker that changed everything.',
                'regular_price'     => 180.00,
                'sale_price'        => null,
                'SKU'               => 'AJ1-CHI-001',
                'stock_status'      => 'instock',
                'featured'          => true,
                'quantity'          => 50,
                'image'             => 'product-1.jpg',
                'category_id'       => $cats['high-tops']->id,
                'brand_id'          => $brands['jordan']->id,
            ],
            [
                'name'              => 'Air Jordan 4 Retro White Cement',
                'slug'              => 'air-jordan-4-retro-white-cement',
                'short_description' => 'Classic White/Cement colorway. The shoe MJ wore in The Shot.',
                'description'       => 'The Air Jordan 4 Retro White Cement is one of the most iconic sneakers ever made. Michael Jordan wore this shoe when he hit "The Shot" over Craig Ehlo in the 1989 NBA Playoffs. Visible Air unit in the heel, mesh netting on the sides for ventilation, lace locks on the tongue. Premium leather upper with cement grey accents.',
                'regular_price'     => 210.00,
                'sale_price'        => 190.00,
                'SKU'               => 'AJ4-WC-002',
                'stock_status'      => 'instock',
                'featured'          => true,
                'quantity'          => 40,
                'image'             => 'product-2.jpg',
                'category_id'       => $cats['retro-classic']->id,
                'brand_id'          => $brands['jordan']->id,
            ],
            [
                'name'              => 'Air Jordan 11 Retro Concord',
                'slug'              => 'air-jordan-11-retro-concord',
                'short_description' => 'Patent leather and carbon fiber. The most elegant Jordan ever.',
                'description'       => 'The Air Jordan 11 Retro Concord is widely regarded as the most beautiful Air Jordan ever designed. Patented leather overlays give the shoe an extremely clean look while the carbon fiber shank plate enhances court feel. Full-length Air unit provides cushioning. Originally worn by Michael Jordan during the 1995-96 season when the Bulls went 72-10.',
                'regular_price'     => 225.00,
                'sale_price'        => 199.99,
                'SKU'               => 'AJ11-CON-003',
                'stock_status'      => 'instock',
                'featured'          => true,
                'quantity'          => 35,
                'image'             => 'product-3.jpg',
                'category_id'       => $cats['basketball-shoes']->id,
                'brand_id'          => $brands['jordan']->id,
            ],
            [
                'name'              => 'Air Jordan 3 Retro Fire Red',
                'slug'              => 'air-jordan-3-retro-fire-red',
                'short_description' => 'Elephant print detailing and visible Air. An all-time classic.',
                'description'       => 'The Air Jordan 3 Retro Fire Red was the first Jordan designed by Tinker Hatfield and the first to feature a visible Air unit. Elephant print overlays at the toe and heel add a unique texture. Tumbled leather upper provides durability. The cement grey midsole with Fire Red accents is one of the most recognizable colorways in sneaker history.',
                'regular_price'     => 190.00,
                'sale_price'        => null,
                'SKU'               => 'AJ3-FR-004',
                'stock_status'      => 'instock',
                'featured'          => false,
                'quantity'          => 60,
                'image'             => 'product-4.jpg',
                'category_id'       => $cats['retro-classic']->id,
                'brand_id'          => $brands['jordan']->id,
            ],
            [
                'name'              => 'Air Jordan 6 Retro Carmine',
                'slug'              => 'air-jordan-6-retro-carmine',
                'short_description' => 'The shoe MJ wore to his first NBA Championship. Carmine red accents.',
                'description'       => 'The Air Jordan 6 Retro Carmine holds a legendary place in sneaker history — Michael Jordan wore the original while winning his first NBA Championship in 1991. Full-length Air unit and internal heel counter for support. Rubber pull tab at the heel for easy on/off. The clean White and Carmine colorway with Infrared accents is timeless.',
                'regular_price'     => 185.00,
                'sale_price'        => 165.00,
                'SKU'               => 'AJ6-CAR-005',
                'stock_status'      => 'instock',
                'featured'          => true,
                'quantity'          => 45,
                'image'             => 'product-5.jpg',
                'category_id'       => $cats['basketball-shoes']->id,
                'brand_id'          => $brands['jordan']->id,
            ],
            [
                'name'              => 'Air Jordan 12 Retro Flu Game',
                'slug'              => 'air-jordan-12-retro-flu-game',
                'short_description' => 'The shoe from the legendary Flu Game in the 1997 NBA Finals.',
                'description'       => 'The Air Jordan 12 Retro Flu Game commemorates one of the greatest performances in NBA history. Michael Jordan, battling the flu, scored 38 points in Game 5 of the 1997 Finals wearing this shoe. Full Zoom Air unit in the forefoot. Premium leather upper with carbon fiber shank plate. The Black and Varsity Red colorway is instantly recognizable.',
                'regular_price'     => 195.00,
                'sale_price'        => null,
                'SKU'               => 'AJ12-FG-006',
                'stock_status'      => 'instock',
                'featured'          => false,
                'quantity'          => 30,
                'image'             => 'product-6.jpg',
                'category_id'       => $cats['limited-edition']->id,
                'brand_id'          => $brands['jordan']->id,
            ],
            [
                'name'              => 'Air Jordan 5 Retro Fire Red',
                'slug'              => 'air-jordan-5-retro-fire-red',
                'short_description' => 'Shark teeth midsole and reflective tongue. Inspired by WWII fighter jets.',
                'description'       => "The Air Jordan 5 Retro Fire Red is inspired by WWII fighter jets. Reflective tongue with 23 tab. Shark teeth midsole detailing. Full-length Air unit with lace toggle on the laces. Michael Jordan wore the original AJ5 during the 1990-91 season. The White/Fire Red/Black colorway is one of the most beloved in the Jordan lineup.",
                'regular_price'     => 195.00,
                'sale_price'        => 175.00,
                'SKU'               => 'AJ5-FR-007',
                'stock_status'      => 'instock',
                'featured'          => false,
                'quantity'          => 55,
                'image'             => 'product-7.jpg',
                'category_id'       => $cats['retro-classic']->id,
                'brand_id'          => $brands['jordan']->id,
            ],
            [
                'name'              => 'Air Jordan 4 Retro Black Cat',
                'slug'              => 'air-jordan-4-retro-black-cat',
                'short_description' => 'Stealthy all-black AJ4. Inspired by MJ\'s "Black Cat" nickname.',
                'description'       => "The Air Jordan 4 Retro Black Cat takes its name from Michael Jordan's predatory court presence. The all-black premium nubuck upper is accented with tonal visible Air unit and midsole. Mesh panels on the upper and tongue provide ventilation during play. One of the most sought-after colorways in sneaker history, this monochromatic design is a grail for collectors.",
                'regular_price'     => 210.00,
                'sale_price'        => null,
                'SKU'               => 'AJ4-BC-008',
                'stock_status'      => 'instock',
                'featured'          => true,
                'quantity'          => 25,
                'image'             => 'product-8.jpg',
                'category_id'       => $cats['limited-edition']->id,
                'brand_id'          => $brands['jordan']->id,
            ],
            [
                'name'              => 'Air Jordan 1 Low Bred Toe',
                'slug'              => 'air-jordan-1-low-bred-toe',
                'short_description' => 'Low-cut AJ1 in classic Bred Toe colorway. Easy everyday wear.',
                'description'       => 'The Air Jordan 1 Low Bred Toe brings the legendary Bred colorway to a more casual low-cut silhouette. Full-grain leather upper in Black, White, and University Red. Perforations on the toe box for breathability. Low profile ankle collar for unrestricted movement. Perfect for everyday streetwear.',
                'regular_price'     => 110.00,
                'sale_price'        => 95.00,
                'SKU'               => 'AJ1L-BT-009',
                'stock_status'      => 'instock',
                'featured'          => false,
                'quantity'          => 90,
                'image'             => 'product-9.jpg',
                'category_id'       => $cats['low-tops']->id,
                'brand_id'          => $brands['jordan']->id,
            ],
            [
                'name'              => 'Air Jordan 6 Rings',
                'slug'              => 'air-jordan-6-rings',
                'short_description' => 'Celebrating all 6 championships. Features elements from 6 Jordan models.',
                'description'       => 'The Air Jordan 6 Rings celebrates Michael Jordan\'s six NBA championships with a single shoe that combines design elements from each pair Jordan wore during each title run. Stitched leather upper with Jumpman branding. Encapsulated Air unit for cushioning. A tribute to the greatest champion in NBA history.',
                'regular_price'     => 140.00,
                'sale_price'        => 120.00,
                'SKU'               => 'AJ6R-010',
                'stock_status'      => 'instock',
                'featured'          => false,
                'quantity'          => 75,
                'image'             => 'product-10.jpg',
                'category_id'       => $cats['lifestyle']->id,
                'brand_id'          => $brands['jordan']->id,
            ],
            [
                'name'              => 'Air Jordan 1 Mid Chicago',
                'slug'              => 'air-jordan-1-mid-chicago',
                'short_description' => 'Chicago colorway on the mid-cut silhouette. More affordable icon.',
                'description'       => 'The Air Jordan 1 Mid Chicago brings the iconic Chicago colorway to the mid-cut silhouette at an accessible price point. Leather and synthetic materials in the upper. Foam midsole with rubber outsole for everyday comfort. The iconic Wings logo on the ankle collar. A must-have for fans who want the Chicago look without hunting for a retro release.',
                'regular_price'     => 125.00,
                'sale_price'        => null,
                'SKU'               => 'AJ1M-CHI-011',
                'stock_status'      => 'instock',
                'featured'          => false,
                'quantity'          => 100,
                'image'             => 'product-11.jpg',
                'category_id'       => $cats['high-tops']->id,
                'brand_id'          => $brands['jordan']->id,
            ],
            [
                'name'              => 'Air Jordan 13 Retro He Got Game',
                'slug'              => 'air-jordan-13-retro-he-got-game',
                'short_description' => 'Inspired by a panther. The shoe from the 1998 NBA Finals.',
                'description'       => 'The Air Jordan 13 Retro He Got Game is inspired by Michael Jordan\'s panther-like athletic ability. Holographic cat eye detail on the outsole. Full-length Air unit. Premium nubuck and leather upper in White/Black/True Red. Originally worn during the 1998 NBA Finals — Jordan\'s last championship — the He Got Game colorway is a grail for Jordan enthusiasts.',
                'regular_price'     => 200.00,
                'sale_price'        => 179.99,
                'SKU'               => 'AJ13-HGG-012',
                'stock_status'      => 'instock',
                'featured'          => true,
                'quantity'          => 35,
                'image'             => 'product-12.jpg',
                'category_id'       => $cats['basketball-shoes']->id,
                'brand_id'          => $brands['jordan']->id,
            ],
        ];

        foreach ($products as $p) {
            Product::create($p);
        }
    }
}
