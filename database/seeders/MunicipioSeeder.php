<?php

namespace Database\Seeders;

use App\Models\Departamento;
use App\Models\Municipio;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Obtener la información de los municipios (por ejemplo, desde un archivo CSV)
        $municipios = [
            [
                "departamento" => "Alta Verapaz",
                "municipio" => "Cobán - Cabecera departamental"
            ],
            [
                "departamento" => "Alta Verapaz",
                "municipio" => "Santa Cruz Verapaz"
            ],
            [
                "departamento" => "Alta Verapaz",
                "municipio" => "San Cristobal Verapaz"
            ],
            [
                "departamento" => "Alta Verapaz",
                "municipio" => "Tactic "
            ],
            [
                "departamento" => "Alta Verapaz",
                "municipio" => "Tamahú"
            ],
            [
                "departamento" => "Alta Verapaz",
                "municipio" => "San Miguel Tucurú"
            ],
            [
                "departamento" => "Alta Verapaz",
                "municipio" => "Panzóz"
            ],
            [
                "departamento" => "Alta Verapaz",
                "municipio" => "Senahú"
            ],
            [
                "departamento" => "Alta Verapaz",
                "municipio" => "San Pedro Carchá"
            ],
            [
                "departamento" => "Alta Verapaz",
                "municipio" => "San Juan Chamelco"
            ],
            [
                "departamento" => "Alta Verapaz",
                "municipio" => "Sam Agustin Lanquín"
            ],
            [
                "departamento" => "Alta Verapaz",
                "municipio" => "Santa María Cahabón"
            ],
            [
                "departamento" => "Alta Verapaz",
                "municipio" => "Chisec"
            ],
            [
                "departamento" => "Alta Verapaz",
                "municipio" => "Chahal"
            ],
            [
                "departamento" => "Alta Verapaz",
                "municipio" => "fray Bartolomé de las Casas"
            ],
            [
                "departamento" => "Alta Verapaz",
                "municipio" => "Santa Catarina La Tinta"
            ],
            [
                "departamento" => "Alta Verapaz",
                "municipio" => "Raxruhá"
            ],
            [
                "departamento" => "Baja Verapaz",
                "municipio" => "Salamá - Cabecera departamental"
            ],
            [
                "departamento" => "Baja Verapaz",
                "municipio" => "San Miguel Chicaj"
            ],
            [
                "departamento" => "Baja Verapaz",
                "municipio" => "Rabinal"
            ],
            [
                "departamento" => "Baja Verapaz",
                "municipio" => "Cubulco"
            ],
            [
                "departamento" => "Baja Verapaz",
                "municipio" => "Granados"
            ],
            [
                "departamento" => "Baja Verapaz",
                "municipio" => "Santa Cruz el Chol"
            ],
            [
                "departamento" => "Baja Verapaz",
                "municipio" => "San Jerónimo"
            ],
            [
                "departamento" => "Baja Verapaz",
                "municipio" => "Purulhá"
            ],
            [
                "departamento" => "Chimaltenango",
                "municipio" => "San josé Poaquil - Cabecera departamental"
            ],
            [
                "departamento" => "Chimaltenango",
                "municipio" => "San Martín Jilotepeque"
            ],
            [
                "departamento" => "Chimaltenango",
                "municipio" => "San Juan Comalapa"
            ],
            [
                "departamento" => "Chimaltenango",
                "municipio" => "Santa Apolonia"
            ],
            [
                "departamento" => "Chimaltenango",
                "municipio" => "Tecpán"
            ],
            [
                "departamento" => "Chimaltenango",
                "municipio" => "Patzún"
            ],
            [
                "departamento" => "Chimaltenango",
                "municipio" => "San Miguel Pochuta"
            ],
            [
                "departamento" => "Chimaltenango",
                "municipio" => "Patzicía"
            ],
            [
                "departamento" => "Chimaltenango",
                "municipio" => "Santa Cruz Balanyá"
            ],
            [
                "departamento" => "Chimaltenango",
                "municipio" => "Acatenango"
            ],
            [
                "departamento" => "Chimaltenango",
                "municipio" => "San Pedro Yepocapa"
            ],
            [
                "departamento" => "Chimaltenango",
                "municipio" => "San Andrés Itzapa"
            ],
            [
                "departamento" => "Chimaltenango",
                "municipio" => "Parramos"
            ],
            [
                "departamento" => "Chimaltenango",
                "municipio" => "Zaragoza"
            ],
            [
                "departamento" => "Chimaltenango",
                "municipio" => "Zaragoza"
            ],
            [
                "departamento" => "Chimaltenango",
                "municipio" => "El Tejar"
            ],
            [
                "departamento" => "Chiquimula",
                "municipio" => "Chiquimula - Cabecera departamental"
            ],
            [
                "departamento" => "Chiquimula",
                "municipio" => "Jocotán"
            ],
            [
                "departamento" => "Chiquimula",
                "municipio" => "Esquipulas"
            ],
            [
                "departamento" => "Chiquimula",
                "municipio" => "Camotán"
            ],
            [
                "departamento" => "Chiquimula",
                "municipio" => "Quetzaltepeque"
            ],
            [
                "departamento" => "Chiquimula",
                "municipio" => "Olopa"
            ],
            [
                "departamento" => "Chiquimula",
                "municipio" => "Ipala"
            ],
            [
                "departamento" => "Chiquimula",
                "municipio" => "San Juan Ermita"
            ],
            [
                "departamento" => "Chiquimula",
                "municipio" => "Concepción Las Minas"
            ],
            [
                "departamento" => "Chiquimula",
                "municipio" => "San Jacinto"
            ],
            [
                "departamento" => "Chiquimula",
                "municipio" => "San José la Arada"
            ],
            [
                "departamento" => "Petén",
                "municipio" => "Flores - Cabecera departamental"
            ],
            [
                "departamento" => "Petén",
                "municipio" => "San José"
            ],[
                "departamento" => "Petén",
                "municipio" => "San Benito"
            ],
            [
                "departamento" => "Petén",
                "municipio" => "San Andrés"
            ],
            [
                "departamento" => "Petén",
                "municipio" => "La libertad"
            ],
            [
                "departamento" => "Petén",
                "municipio" => "San Francisco"
            ],
            [
                "departamento" => "Petén",
                "municipio" => "Santa Ana"
            ],
            [
                "departamento" => "Petén",
                "municipio" => "Dolores"
            ],
            [
                "departamento" => "Petén",
                "municipio" => "San Luis"
            ],
            [
                "departamento" => "Petén",
                "municipio" => "Sayaxché"
            ],
            [
                "departamento" => "Petén",
                "municipio" => "Melchor de Mencos"
            ],
            [
                "departamento" => "Petén",
                "municipio" => "Poptún"
            ],
            [
                "departamento" => "El Progreso",
                "municipio" => "El Jicaro"
            ],
            [
                "departamento" => "El Progreso",
                "municipio" => "Morazán"
            ],
            [
                "departamento" => "El Progreso",
                "municipio" => "San Agustín Acasaguastlán"
            ],
            [
                "departamento" => "El Progreso",
                "municipio" => "San Antonio La Paz"
            ],
            [
                "departamento" => "El Progreso",
                "municipio" => "San Cristóbal Acasaguastlán"
            ],
            [
                "departamento" => "El Progreso",
                "municipio" => "Sanarate"
            ],
            [
                "departamento" => "El Progreso",
                "municipio" => "Guastatoya - Cabecera departamental"
            ],

            [
                "departamento" => "El Progreso",
                "municipio" => "Sansare"
            ],
            [
                "departamento" => "Quiché",
                "municipio" => "Santa Cruz del Quiché"
            ],
            [
                "departamento" => "Quiché",
                "municipio" => "Chiché"
            ],
            [
                "departamento" => "Quiché",
                "municipio" => "Chinique"
            ],
            [
                "departamento" => "Quiché",
                "municipio" => "Zacualpa"
            ],
            [
                "departamento" => "Quiché",
                "municipio" => "Chajul"
            ],
            [
                "departamento" => "Quiché",
                "municipio" => "Santo Tomás Chichicastenango"
            ],
            [
                "departamento" => "Quiché",
                "municipio" => "Patzité"
            ],
            [
                "departamento" => "Quiché",
                "municipio" => "San Antonio Ilotenango"
            ],
            [
                "departamento" => "Quiché",
                "municipio" => "San Pedro Jocopilas"
            ],
            [
                "departamento" => "Quiché",
                "municipio" => "Cunén"
            ],
            [
                "departamento" => "Quiché",
                "municipio" => "San Juan Cotzal"
            ],
            [
                "departamento" => "Quiché",
                "municipio" => "Santa María Joyabaj"
            ],
            [
                "departamento" => "Quiché",
                "municipio" => "Santa María Nebaj"
            ],
            [
                "departamento" => "Quiché",
                "municipio" => "San Andrés Sajcabajá"
            ],
            [
                "departamento" => "Quiché",
                "municipio" => "Uspantán"
            ],
            [
                "departamento" => "Quiché",
                "municipio" => "Sacapulas"
            ],
            [
                "departamento" => "Quiché",
                "municipio" => "San Bartolomé Jocotenango"
            ],
            [
                "departamento" => "Quiché",
                "municipio" => "Canillá"
            ],
            [
                "departamento" => "Quiché",
                "municipio" => "Chicamán"
            ],
            [
                "departamento" => "Quiché",
                "municipio" => "Ixcán"
            ],
            [
                "departamento" => "Quiché",
                "municipio" => "Pachalum"
            ],
            [
                "departamento" => "Escuintla",
                "municipio" => "Escuintla —cabecera departamental—"
            ],
            [
                "departamento" => "Escuintla",
                "municipio" => "La Democracia"
            ],
            [
                "departamento" => "Escuintla",
                "municipio" => "Santa Lucía Cotzumalguapa"
            ],
            [
                "departamento" => "Escuintla",
                "municipio" => "Siquinalá"
            ],
            [
                "departamento" => "Escuintla",
                "municipio" => "Masagua"
            ],
            [
                "departamento" => "Escuintla",
                "municipio" => "Tiquisate"
            ],
            [
                "departamento" => "Escuintla",
                "municipio" => "La Gomera"
            ],
            [
                "departamento" => "Escuintla",
                "municipio" => "Guaganazapa"
            ],
            [
                "departamento" => "Escuintla",
                "municipio" => "San José"
            ],
            [
                "departamento" => "Escuintla",
                "municipio" => "Iztapa"
            ],
            [
                "departamento" => "Escuintla",
                "municipio" => "Palín"
            ],
            [
                "departamento" => "Escuintla",
                "municipio" => "San Vicente Pacaya"
            ],
            [
                "departamento" => "Escuintla",
                "municipio" => "Nueva Concepción"
            ],

        ];

        foreach ($municipios as $municipioData) {
            $id_departamento = Departamento::where('departamento', $municipioData['departamento'])->first()->id;

            $municipio = new Municipio;
            $municipio->municipio = $municipioData['municipio'];
            $municipio->id_departamento = $id_departamento;

            $municipio->save();
        }
    }
}
