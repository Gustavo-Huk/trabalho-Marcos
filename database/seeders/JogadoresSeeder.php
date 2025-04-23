<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Time;

class JogadoresSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('jogadores')->delete();

        // Lista de posições
        $posicoes = ['Armador', 'Ala', 'Pivô', 'Ala-Armador', 'Ala-Pivô'];

        // Associar jogadores reais a cada time
        $timesJogadores = [
            'Atlanta Hawks' => ['Trae Young', 'Dejounte Murray', 'John Collins', 'Clint Capela', 'DeAndre Hunter'],
            'Brooklyn Nets' => ['Kevin Durant', 'Kyrie Irving', 'Ben Simmons', 'Joe Harris', 'Nicholas Claxton'],
            'Charlotte Hornets' => ['LaMelo Ball', 'Terry Rozier', 'Gordon Hayward', 'Miles Bridges', 'P.J. Washington'],
            'Chicago Bulls' => ['Zach LaVine', 'DeMar DeRozan', 'Nikola Vucevic', 'Lonzo Ball', 'Patrick Williams'],
            'Cleveland Cavaliers' => ['Darius Garland', 'Donovan Mitchell', 'Evan Mobley', 'Jarrett Allen', 'Kevin Love'],
            'Dallas Mavericks' => ['Luka Dončić', 'Kyrie Irving', 'Tim Hardaway Jr.', 'Christian Wood', 'Dwight Powell'],
            'Detroit Pistons' => ['Cade Cunningham', 'Jaden Ivey', 'Jalen Duren', 'Isaiah Stewart', 'Bojan Bogdanović'],
            'Golden State Warriors' => ['Stephen Curry', 'Klay Thompson', 'Draymond Green', 'Andrew Wiggins', 'Jordan Poole'],
            'Houston Rockets' => ['Jalen Green', 'Kevin Porter Jr.', 'Alperen Şengün', 'Jabari Smith Jr.', 'Eric Gordon'],
            'Indiana Pacers' => ['Tyrese Haliburton', 'Buddy Hield', 'Myles Turner', 'Chris Duarte', 'Jalen Smith'],
            'Memphis Grizzlies' => ['Ja Morant', 'Jaren Jackson Jr.', 'Desmond Bane', 'Dillon Brooks', 'Steven Adams'],
            'Milwaukee Bucks' => ['Giannis Antetokounmpo', 'Jrue Holiday', 'Khris Middleton', 'Bobby Portis', 'Brook Lopez'],
            'Minnesota Timberwolves' => ['Anthony Edwards', 'Karl-Anthony Towns', 'Rudy Gobert', 'DAngelo Russell', 'Jaden Ivey'],
            'New Orleans Pelicans' => ['Zion Williamson', 'Brandon Ingram', 'CJ McCollum', 'Jonas Valančiūnas', 'Herbert Jones'],
            'New York Knicks' => ['Julius Randle', 'Jalen Brunson', 'RJ Barrett', 'Mitchell Robinson', 'Evan Fournier'],
            'Orlando Magic' => ['Paolo Banchero', 'Franz Wagner', 'Wendell Carter Jr.', 'Jalen Suggs', 'Cole Anthony'],
            'Philadelphia 76ers' => ['Joel Embiid', 'James Harden', 'Tyrese Maxey', 'Tobias Harris', 'PJ Tucker'],
            'Phoenix Suns' => ['Devin Booker', 'Chris Paul', 'Deandre Ayton', 'Mikal Bridges', 'Cameron Johnson'],
            'Portland Trail Blazers' => ['Damian Lillard', 'Anfernee Simons', 'Jerami Grant', 'Jusuf Nurkić', 'Shaden Sharpe'],
            'Sacramento Kings' => ['De’Aaron Fox', 'Domantas Sabonis', 'Keegan Murray', 'Harrison Barnes', 'Davion Mitchell'],
        ];

        // Percorrer os times e inserir os jogadores
        foreach ($timesJogadores as $nomeTime => $jogadores) {
            // Buscar o time na base de dados
            $time = Time::where('nome', $nomeTime)->first();
            if (!$time) continue;

            // Inserir jogadores para cada time
            foreach ($jogadores as $nome) {
                DB::table('jogadores')->insert([
                    'nome' => $nome,
                    'idade' => rand(20, 35),  // Faixa etária média dos jogadores
                    'posicao' => $posicoes[array_rand($posicoes)],
                    'nacionalidade' => 'USA',  // Aqui usamos 'USA', pode ser ajustado se necessário
                    'salario' => rand(2000000, 30000000),  // Salário aproximado com variação
                    'time_id' => $time->id,  // Associar ao time correto
                ]);
            }
        }
    }
}