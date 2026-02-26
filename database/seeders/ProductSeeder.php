<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Seed the products table with sample data.
     * 15 products across 4 brands: ABB, Schneider, Siemens, Omron.
     */
    public function run(): void
    {
        $products = [
            // ── ABB ──────────────────────────────────────────────────
            [
                'name'        => 'ABB ACS880 Variable Speed Drive',
                'brand'       => 'ABB',
                'image_path'  => null,
                'description' => 'Industrial variable speed drive for demanding applications. High performance, energy efficient.',
            ],
            [
                'name'        => 'ABB M2M Motor Series',
                'brand'       => 'ABB',
                'image_path'  => null,
                'description' => 'Low voltage AC motors designed for industrial automation with IE3 efficiency class.',
            ],
            [
                'name'        => 'ABB Rex-D PID Controller',
                'brand'       => 'ABB',
                'image_path'  => null,
                'description' => 'Advanced PID temperature and process controller with auto-tuning capability.',
            ],
            [
                'name'        => 'ABB CB1000 Circuit Breaker',
                'brand'       => 'ABB',
                'image_path'  => null,
                'description' => 'Molded case circuit breaker with adjustable thermal-magnetic trip for overload protection.',
            ],

            // ── Schneider ─────────────────────────────────────────────
            [
                'name'        => 'Schneider Altivar 320 Inverter',
                'brand'       => 'Schneider',
                'image_path'  => null,
                'description' => 'Compact variable speed drive for simple machines. Easy installation and fast commissioning.',
            ],
            [
                'name'        => 'Schneider Modicon M340 PLC',
                'brand'       => 'Schneider',
                'image_path'  => null,
                'description' => 'Modular mid-range PLC platform offering high performance and flexible communication.',
            ],
            [
                'name'        => 'Schneider EasyPact MVS Breaker',
                'brand'       => 'Schneider',
                'image_path'  => null,
                'description' => 'LV air circuit breaker for power distribution in industrial and commercial buildings.',
            ],
            [
                'name'        => 'Schneider Zelio Logic Smart Relay',
                'brand'       => 'Schneider',
                'image_path'  => null,
                'description' => 'Easy-to-use smart relay for small automation applications. Up to 40 I/O.',
            ],

            // ── Siemens ───────────────────────────────────────────────
            [
                'name'        => 'Siemens SIMATIC S7-1200 PLC',
                'brand'       => 'Siemens',
                'image_path'  => null,
                'description' => 'Scalable and flexible programmable logic controller for small to medium automation tasks.',
            ],
            [
                'name'        => 'Siemens SINAMICS G120 Drive',
                'brand'       => 'Siemens',
                'image_path'  => null,
                'description' => 'Modular frequency inverter system for pump, fan, and conveyor applications.',
            ],
            [
                'name'        => 'Siemens 3RV1 Motor Starter',
                'brand'       => 'Siemens',
                'image_path'  => null,
                'description' => 'Motor protection circuit breaker combining switch and overload protection in one device.',
            ],

            // ── Omron ─────────────────────────────────────────────────
            [
                'name'        => 'Omron CJ2M PLC',
                'brand'       => 'Omron',
                'image_path'  => null,
                'description' => 'High-performance modular PLC for medium to large machine control with advanced networking.',
            ],
            [
                'name'        => 'Omron MX2 Inverter',
                'brand'       => 'Omron',
                'image_path'  => null,
                'description' => 'Compact, high-performance inverter with advanced motor control and built-in RS-485.',
            ],
            [
                'name'        => 'Omron E3Z Photoelectric Sensor',
                'brand'       => 'Omron',
                'image_path'  => null,
                'description' => 'Compact photoelectric sensor with reliable long-range detection for factory automation.',
            ],
            [
                'name'        => 'Omron NS10 Touch Panel HMI',
                'brand'       => 'Omron',
                'image_path'  => null,
                'description' => '10.4-inch color touch screen operator interface for industrial machine monitoring.',
            ],
        ];

        // Use upsert to avoid duplicate inserts on re-seed
        foreach ($products as $data) {
            Product::firstOrCreate(
                ['name' => $data['name'], 'brand' => $data['brand']],
                $data
            );
        }

        $this->command->info('ProductSeeder: ' . count($products) . ' products seeded.');
    }
}
