<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Federation;
use App\Models\State;
class FederationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Federation::create(['name' => 'UNIJr-BA','state_id' => State::where('name','Bahia')->first()->id,]);
        Federation::create(['name' => 'FEJERO','state_id' => State::where('name','Rôndonia')->first()->id,]);
        Federation::create(['name' => 'SERJUNIOR','state_id' => State::where('name','Sergipe')->first()->id,]);
        Federation::create(['name' => 'Pará Junior','state_id' => State::where('name','Pará')->first()->id,]);
        Federation::create(['name' => 'Piauí Junior','state_id' => State::where('name','Piauí')->first()->id,]);
        Federation::create(['name' => 'FEJECE','state_id' => State::where('name','Ceará')->first()->id,]);
        Federation::create(['name' => 'FEMTEJ','state_id' => State::where('name','Mato Grosso')->first()->id,]);
        Federation::create(['name' => 'Roraima Junior','state_id' => State::where('name','Roraima')->first()->id,]);
        Federation::create(['name' => 'Maranhão Junior','state_id' => State::where('name','Maranhão')->first()->id,]);
        Federation::create(['name' => 'FEJESC','state_id' => State::where('name','Santa Catarina')->first()->id,]);
        Federation::create(['name' => 'Concentro','state_id' => State::where('name','Distrito Federal')->first()->id,]);
        Federation::create(['name' => 'Acre Junior','state_id' => State::where('name','Acre')->first()->id,]);
        Federation::create(['name' => 'PB Junior','state_id' => State::where('name','Paraíba')->first()->id,]);
        Federation::create(['name' => 'TO Junior','state_id' => State::where('name','Tocantins')->first()->id,]);
        Federation::create(['name' => 'FEJEA','state_id' => State::where('name','Alagoas')->first()->id,]);
        Federation::create(['name' => 'RN Junior','state_id' => State::where('name','Rio Grande do Norte')->first()->id,]);
        Federation::create(['name' => 'FEJEAP','state_id' => State::where('name','Amapá')->first()->id,]);
        Federation::create(['name' => 'FEJERS','state_id' => State::where('name','Rio Grande do Sul')->first()->id,]);
        Federation::create(['name' => 'FEJEMG','state_id' => State::where('name','Minas Gerais')->first()->id,]);
        Federation::create(['name' => 'Goiás Junior','state_id' => State::where('name','Goiás')->first()->id,]);
        Federation::create(['name' => 'FEJEPAR','state_id' => State::where('name','Paraná')->first()->id,]);
        Federation::create(['name' => 'FEJESP','state_id' => State::where('name','São Paulo')->first()->id,]);
        Federation::create(['name' => 'FEJEPE','state_id' => State::where('name','Pernambuco')->first()->id,]);
        Federation::create(['name' => 'FEJEMS','state_id' => State::where('name','Mato grosso do Sul')->first()->id,]);
        Federation::create(['name' => 'Rio Junior','state_id' => State::where('name','Rio de Janeiro')->first()->id,]);
        Federation::create(['name' => 'Juniores','state_id' => State::where('name','Espírito Santo')->first()->id,]);
        Federation::create(['name' => 'Baré Junior','state_id' => State::where('name','Amazonas')->first()->id,]);

    }
}
