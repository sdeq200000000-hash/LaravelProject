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
            'name' => 'Admin',
            'email' => 'admin@casevault.com',
            'mobile' => '1800000001',
            'utype' => 'ADM',
        ]);

        User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@casevault.com',
            'mobile' => '1800000002',
            'utype' => 'USR',
        ]);

        // Brands
        $brandsData = [
            ['name' => 'Apple',    'slug' => 'apple',    'image' => 'brand-apple.svg'],
            ['name' => 'Spigen',   'slug' => 'spigen',   'image' => 'brand-spigen.svg'],
            ['name' => 'OtterBox', 'slug' => 'otterbox', 'image' => 'brand-otterbox.svg'],
            ['name' => 'CaseTify', 'slug' => 'casetify', 'image' => 'brand-casetify.svg'],
            ['name' => 'Nomad',    'slug' => 'nomad',    'image' => 'brand-nomad.svg'],
        ];

        foreach ($brandsData as $b) {
            Brand::create($b);
        }

        // Categories (no description column in DB)
        $categoriesData = [
            ['name' => 'Clear Cases',    'slug' => 'clear-cases',    'image' => 'cat-clear.svg'],
            ['name' => 'Leather Cases',  'slug' => 'leather-cases',  'image' => 'cat-leather.svg'],
            ['name' => 'Silicone Cases', 'slug' => 'silicone-cases', 'image' => 'cat-silicone.svg'],
            ['name' => 'Tough Cases',    'slug' => 'tough-cases',    'image' => 'cat-tough.svg'],
            ['name' => 'Wallet Cases',   'slug' => 'wallet-cases',   'image' => 'cat-wallet.svg'],
            ['name' => 'Designer Cases', 'slug' => 'designer-cases', 'image' => 'cat-designer.svg'],
            ['name' => 'Battery Cases',  'slug' => 'battery-cases',  'image' => 'cat-battery.svg'],
            ['name' => 'Slim Cases',     'slug' => 'slim-cases',     'image' => 'cat-slim.svg'],
        ];

        foreach ($categoriesData as $c) {
            category::create($c);
        }

        $brands = Brand::all()->keyBy('slug');
        $cats   = category::all()->keyBy('slug');

        // Products
        $products = [
            [
                'name'              => 'Clear MagSafe Case - iPhone 15 Pro',
                'slug'              => 'clear-magsafe-case-iphone-15-pro',
                'short_description' => 'Crystal-clear MagSafe-compatible case for iPhone 15 Pro.',
                'description'       => 'Stay connected with MagSafe accessories while protecting your iPhone 15 Pro in a virtually invisible case. Built from optically clear material that resists yellowing. Precision cutouts for all ports and buttons. Compatible with wireless charging.',
                'regular_price'     => 24.99,
                'sale_price'        => 19.99,
                'SKU'               => 'CLR-MS-15P',
                'stock_status'      => 'instock',
                'featured'          => true,
                'quantity'          => 120,
                'image'             => 'case-clear.svg',
                'category_id'       => $cats['clear-cases']->id,
                'brand_id'          => $brands['apple']->id,
            ],
            [
                'name'              => 'Leather Folio Case - iPhone 15',
                'slug'              => 'leather-folio-case-iphone-15',
                'short_description' => 'Genuine full-grain leather folio for iPhone 15.',
                'description'       => 'Crafted from premium full-grain leather sourced from European tanneries. The folio design protects both the front and back of your iPhone 15. Features three card slots and a cash pocket. The natural leather develops a rich patina over time for a truly unique look.',
                'regular_price'     => 59.99,
                'sale_price'        => 49.99,
                'SKU'               => 'LTH-FLO-15',
                'stock_status'      => 'instock',
                'featured'          => true,
                'quantity'          => 60,
                'image'             => 'case-leather.svg',
                'category_id'       => $cats['leather-cases']->id,
                'brand_id'          => $brands['nomad']->id,
            ],
            [
                'name'              => 'Silicone Slim Case - iPhone 14',
                'slug'              => 'silicone-slim-case-iphone-14',
                'short_description' => 'Ultra-soft silicone case for iPhone 14 in 12 colors.',
                'description'       => 'Made from liquid silicone rubber for a soft, pliable feel that is resistant to drops and scratches. Microfiber lining protects your iPhone from scratches. Available in 12 vibrant colors to match your style. Thin profile that fits easily in your pocket.',
                'regular_price'     => 29.99,
                'sale_price'        => null,
                'SKU'               => 'SLC-SLM-14',
                'stock_status'      => 'instock',
                'featured'          => false,
                'quantity'          => 200,
                'image'             => 'case-silicone.svg',
                'category_id'       => $cats['silicone-cases']->id,
                'brand_id'          => $brands['apple']->id,
            ],
            [
                'name'              => 'Ultra Armor Case - iPhone 15 Pro Max',
                'slug'              => 'ultra-armor-case-iphone-15-pro-max',
                'short_description' => 'Military-grade drop protection for iPhone 15 Pro Max.',
                'description'       => 'Tested to MIL-STD-810G military standard for drop protection from up to 4 meters. Dual-layer design with a rigid polycarbonate outer shell and a shock-absorbing TPU inner layer. Raised bezels protect the screen and camera. Includes a built-in kickstand for hands-free viewing.',
                'regular_price'     => 39.99,
                'sale_price'        => 34.99,
                'SKU'               => 'UAR-15PM',
                'stock_status'      => 'instock',
                'featured'          => true,
                'quantity'          => 85,
                'image'             => 'case-tough.svg',
                'category_id'       => $cats['tough-cases']->id,
                'brand_id'          => $brands['otterbox']->id,
            ],
            [
                'name'              => 'Wallet Card Case - iPhone 14 Pro',
                'slug'              => 'wallet-card-case-iphone-14-pro',
                'short_description' => 'Slim wallet case with 3 card slots for iPhone 14 Pro.',
                'description'       => 'Combines everyday protection with the convenience of a wallet. Holds up to 3 cards and cash in the hidden back pocket. Made from genuine leather with magnetic closure. Slim design adds minimal bulk. MagSafe compatible for wireless charging.',
                'regular_price'     => 44.99,
                'sale_price'        => 39.99,
                'SKU'               => 'WLT-14P',
                'stock_status'      => 'instock',
                'featured'          => false,
                'quantity'          => 75,
                'image'             => 'case-wallet.svg',
                'category_id'       => $cats['wallet-cases']->id,
                'brand_id'          => $brands['nomad']->id,
            ],
            [
                'name'              => 'Military Grade Case - iPhone 15 Plus',
                'slug'              => 'military-grade-case-iphone-15-plus',
                'short_description' => 'Rugged 4-meter drop protection for iPhone 15 Plus.',
                'description'       => 'The toughest case in our lineup. Built for the most demanding environments with a three-layer protection system. Oil-resistant coating keeps it looking clean. Port covers keep out dust and debris. Includes a screen protector. Certified IP68 splash-resistant.',
                'regular_price'     => 44.99,
                'sale_price'        => null,
                'SKU'               => 'MIL-15PL',
                'stock_status'      => 'instock',
                'featured'          => false,
                'quantity'          => 50,
                'image'             => 'case-tough.svg',
                'category_id'       => $cats['tough-cases']->id,
                'brand_id'          => $brands['otterbox']->id,
            ],
            [
                'name'              => 'Designer Floral Case - iPhone 13',
                'slug'              => 'designer-floral-case-iphone-13',
                'short_description' => 'Exclusive hand-painted floral design for iPhone 13.',
                'description'       => 'An exclusive collaboration with acclaimed illustrators. Each case features a hand-drawn floral motif printed in UV-resistant inks that will not fade. Slim profile fits comfortably in hand. Raised camera lip prevents lens scratches. Available in three colorways.',
                'regular_price'     => 29.99,
                'sale_price'        => 24.99,
                'SKU'               => 'DSG-FLR-13',
                'stock_status'      => 'instock',
                'featured'          => true,
                'quantity'          => 90,
                'image'             => 'case-designer.svg',
                'category_id'       => $cats['designer-cases']->id,
                'brand_id'          => $brands['casetify']->id,
            ],
            [
                'name'              => 'Battery Power Case - iPhone 14 Pro Max',
                'slug'              => 'battery-power-case-iphone-14-pro-max',
                'short_description' => '5000mAh built-in battery case for iPhone 14 Pro Max.',
                'description'       => 'Never run out of power with this 5000mAh built-in battery case. Adds up to 36 hours of additional battery life. Pass-through charging lets you charge the case and your iPhone simultaneously. LED battery indicator shows remaining charge.',
                'regular_price'     => 99.99,
                'sale_price'        => 79.99,
                'SKU'               => 'BAT-14PM',
                'stock_status'      => 'instock',
                'featured'          => true,
                'quantity'          => 40,
                'image'             => 'case-battery.svg',
                'category_id'       => $cats['battery-cases']->id,
                'brand_id'          => $brands['apple']->id,
            ],
            [
                'name'              => 'Gradient Clear Case - iPhone 13 Pro',
                'slug'              => 'gradient-clear-case-iphone-13-pro',
                'short_description' => 'Sunset gradient clear protective case for iPhone 13 Pro.',
                'description'       => 'A stunning gradient design on a crystal-clear base. The teal-to-purple gradient creates a sunset effect that catches the light beautifully. Anti-yellowing formula keeps it clear for years. Shock-absorbing corners provide extra drop protection. Slim and lightweight.',
                'regular_price'     => 22.99,
                'sale_price'        => null,
                'SKU'               => 'GRD-CLR-13P',
                'stock_status'      => 'instock',
                'featured'          => false,
                'quantity'          => 110,
                'image'             => 'case-gradient.svg',
                'category_id'       => $cats['clear-cases']->id,
                'brand_id'          => $brands['spigen']->id,
            ],
            [
                'name'              => 'Carbon Fiber Slim Case - iPhone 15',
                'slug'              => 'carbon-fiber-slim-case-iphone-15',
                'short_description' => 'Ultra-thin carbon fiber textured case for iPhone 15.',
                'description'       => 'Real woven carbon fiber panel bonded to a lightweight polycarbonate shell. Incredibly thin at just 0.8mm, it adds virtually no bulk to your iPhone 15. The textured surface provides excellent grip and scratch resistance. Minimalist design that complements the iPhone premium aesthetic.',
                'regular_price'     => 34.99,
                'sale_price'        => 27.99,
                'SKU'               => 'CBF-SLM-15',
                'stock_status'      => 'instock',
                'featured'          => false,
                'quantity'          => 70,
                'image'             => 'case-carbon.svg',
                'category_id'       => $cats['slim-cases']->id,
                'brand_id'          => $brands['spigen']->id,
            ],
            [
                'name'              => 'Glitter Sparkle Case - iPhone 13 Mini',
                'slug'              => 'glitter-sparkle-case-iphone-13-mini',
                'short_description' => 'Dazzling gold glitter case for iPhone 13 Mini.',
                'description'       => 'Turn heads with this show-stopping glitter case. Thousands of metallic gold particles suspended in clear resin create a dazzling effect. The glitter never fades or falls out. Soft TPU outer layer absorbs shocks. Raised lip protects your screen when placed face-down.',
                'regular_price'     => 19.99,
                'sale_price'        => null,
                'SKU'               => 'GLT-SPK-13M',
                'stock_status'      => 'instock',
                'featured'          => false,
                'quantity'          => 130,
                'image'             => 'case-glitter.svg',
                'category_id'       => $cats['designer-cases']->id,
                'brand_id'          => $brands['casetify']->id,
            ],
            [
                'name'              => 'MagSafe Wallet Case - iPhone 15 Pro',
                'slug'              => 'magsafe-wallet-case-iphone-15-pro',
                'short_description' => 'Premium MagSafe leather wallet case for iPhone 15 Pro.',
                'description'       => 'The perfect fusion of protection and convenience. Strong MagSafe magnets keep the wallet securely attached to your iPhone 15 Pro. Holds up to 3 cards. The wallet detaches quickly and can be used independently. Made from full-grain leather in a natural finish.',
                'regular_price'     => 54.99,
                'sale_price'        => 44.99,
                'SKU'               => 'MGS-WLT-15P',
                'stock_status'      => 'instock',
                'featured'          => true,
                'quantity'          => 65,
                'image'             => 'case-magsafe.svg',
                'category_id'       => $cats['wallet-cases']->id,
                'brand_id'          => $brands['apple']->id,
            ],
        ];

        foreach ($products as $p) {
            Product::create($p);
        }
    }
}
