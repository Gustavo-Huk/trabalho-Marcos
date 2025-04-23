<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('jogadores')->delete(); // exclui todos os jogadores primeiro
        DB::table('times')->delete();     // depois exclui os times
        DB::table('times')->insert([
            ['nome' => 'Atlanta Hawks', 'cidade' => 'Atlanta', 'ano_fundacao' => 1946, 'num_titulos' => 1],
            ['nome' => 'Brooklyn Nets', 'cidade' => 'Brooklyn', 'ano_fundacao' => 1967, 'num_titulos' => 0],
            ['nome' => 'Charlotte Hornets', 'cidade' => 'Charlotte', 'ano_fundacao' => 1988, 'num_titulos' => 0],
            ['nome' => 'Chicago Bulls', 'cidade' => 'Chicago', 'ano_fundacao' => 1966, 'num_titulos' => 6],
            ['nome' => 'Cleveland Cavaliers', 'cidade' => 'Cleveland', 'ano_fundacao' => 1970, 'num_titulos' => 1],
            ['nome' => 'Dallas Mavericks', 'cidade' => 'Dallas', 'ano_fundacao' => 1980, 'num_titulos' => 1],
            ['nome' => 'Detroit Pistons', 'cidade' => 'Detroit', 'ano_fundacao' => 1941, 'num_titulos' => 3],
            ['nome' => 'Golden State Warriors', 'cidade' => 'San Francisco', 'ano_fundacao' => 1946, 'num_titulos' => 7],
            ['nome' => 'Houston Rockets', 'cidade' => 'Houston', 'ano_fundacao' => 1967, 'num_titulos' => 2],
            ['nome' => 'Indiana Pacers', 'cidade' => 'Indianapolis', 'ano_fundacao' => 1967, 'num_titulos' => 0],
            ['nome' => 'Memphis Grizzlies', 'cidade' => 'Memphis', 'ano_fundacao' => 1995, 'num_titulos' => 0],
            ['nome' => 'Milwaukee Bucks', 'cidade' => 'Milwaukee', 'ano_fundacao' => 1968, 'num_titulos' => 2],
            ['nome' => 'Minnesota Timberwolves', 'cidade' => 'Minneapolis', 'ano_fundacao' => 1989, 'num_titulos' => 0],
            ['nome' => 'New Orleans Pelicans', 'cidade' => 'New Orleans', 'ano_fundacao' => 2002, 'num_titulos' => 0],
            ['nome' => 'New York Knicks', 'cidade' => 'New York', 'ano_fundacao' => 1946, 'num_titulos' => 2],
            ['nome' => 'Orlando Magic', 'cidade' => 'Orlando', 'ano_fundacao' => 1989, 'num_titulos' => 0],
            ['nome' => 'Philadelphia 76ers', 'cidade' => 'Philadelphia', 'ano_fundacao' => 1946, 'num_titulos' => 3],
            ['nome' => 'Phoenix Suns', 'cidade' => 'Phoenix', 'ano_fundacao' => 1968, 'num_titulos' => 0],
            ['nome' => 'Portland Trail Blazers', 'cidade' => 'Portland', 'ano_fundacao' => 1970, 'num_titulos' => 1],
            ['nome' => 'Sacramento Kings', 'cidade' => 'Sacramento', 'ano_fundacao' => 1923, 'num_titulos' => 1],
        ]);
    }
}