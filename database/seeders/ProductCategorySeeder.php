<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vegetableCategories = array(
            "Monocrystalline" => array("SunPower", "LG", "Panasonic", "Hanwha Q Cells", "JinkoSolar"),
            "Polycrystalline" => array("Trina Solar", "Canadian Solar", "JA Solar", "Risen Energy", "LONGi Solar"),
            "Thin-Film" => array("First Solar", "Solar Frontier", "Hanergy", "MiaSolé", "Uni-Solar"),
            "Bifacial" => array("REC Group", "Vikram Solar", "Sunpreme", "Longi Solar", "Trina Solar"),
            "Concentrated PV" => array("SolFocus", "Amonix", "Suncore Photovoltaics", "Magpower"),
            "Building Integrated Photovoltaics (BIPV)" => array("Tesla Solar Roof", "Sunflare", "Onyx Solar", "Solaria"),
            "Cadmium Telluride (CdTe) PV" => array("First Solar", "Abound Solar", "PrimeStar Solar"),
            "Amorphous Silicon (a-Si) PV" => array("Sharp", "United Solar Ovonic", "Kaneka Solar Energy")
        
        );

        foreach ($vegetableCategories as $categoryName => $vegetables) {
            $category = \App\Models\ProductCategory::create([
                'name' => $categoryName,
                'slug' => \Illuminate\Support\Str::slug($categoryName),
            ]);

            foreach ($vegetables as $vegetableName) {
                \App\Models\ProductCategory::create([
                    'name' => $vegetableName,
                    'slug' => \Illuminate\Support\Str::slug($vegetableName),
                    'parent_id' => $category->id,
                ]);
            }
        }

    }
}