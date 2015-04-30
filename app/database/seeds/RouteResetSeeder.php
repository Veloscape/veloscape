<?php

//php artisan db:seed --class=RouteResetSeeder
class RouteResetSeeder extends Seeder {

    public function run() {
        DB::table('routes')->delete();
        DB::table('markers')->delete();
        DB::table('marker_values')->delete();
    }
}
