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
                "municipio" => "Escuintla"
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
            [
                "departamento" => "Guatemala",
                "municipio" => "Amatitlán"
            ],
            [
                "departamento" => "Guatemala",
                "municipio" => "Chinautlar"
            ],
            [
                "departamento" => "Guatemala",
                "municipio" => "Chuarrancho"
            ],
            [
                "departamento" => "Guatemala",
                "municipio" => "Ciudad de Guatemala"
            ],
            [
                "departamento" => "Guatemala",
                "municipio" => "Fraijanes"
            ],
            [
                "departamento" => "Guatemala",
                "municipio" => "Mixco"
            ],
            [
                "departamento" => "Guatemala",
                "municipio" => "Palencia"
            ],
            [
                "departamento" => "Guatemala",
                "municipio" => "San José del Golfo"
            ],
            [
                "departamento" => "Guatemala",
                "municipio" => "San José Pinula"
            ],
            [
                "departamento" => "Guatemala",
                "municipio" => "San Juan Sacatepéquez"
            ],
            [
                "departamento" => "Guatemala",
                "municipio" => "San Miguel Petapa"
            ],
            [
                "departamento" => "Guatemala",
                "municipio" => "San Pedro Ayampuc"
            ],
            [
                "departamento" => "Guatemala",
                "municipio" => "San Pedro Sacatepéquez"
            ],
            [
                "departamento" => "Guatemala",
                "municipio" => "San Raymundo"
            ],
            [
                "departamento" => "Guatemala",
                "municipio" => "Santa Catarina Pinula"
            ],
            [
                "departamento" => "Guatemala",
                "municipio" => "Villa Canales"
            ],
            [
                "departamento" => "Guatemala",
                "municipio" => "Villa Nueva"
            ],
            [
                "departamento" => "Huehuetenango",
                "municipio" => "Huehuetenango"
            ],
            [
                "departamento" => "Huehuetenango",
                "municipio" => "Chiantla"
            ],
            [
                "departamento" => "Huehuetenango",
                "municipio" => "Malacatancito"
            ],
            [
                "departamento" => "Huehuetenango",
                "municipio" => "Cuilco"
            ],
            [
                "departamento" => "Huehuetenango",
                "municipio" => "Nentón"
            ],
            [
                "departamento" => "Huehuetenango",
                "municipio" => "San Pedro Necta"
            ],
            [
                "departamento" => "Huehuetenango",
                "municipio" => "Jacaltenango"
            ],
            [
                "departamento" => "Huehuetenango",
                "municipio" => "Soloma"
            ],
            [
                "departamento" => "Huehuetenango",
                "municipio" => "Ixtahuacán"
            ],
            [
                "departamento" => "Huehuetenango",
                "municipio" => "Santa Bárbara"
            ],
            [
                "departamento" => "Huehuetenango",
                "municipio" => "La Libertad"
            ],
            [
                "departamento" => "Huehuetenango",
                "municipio" => "La Democracia"
            ],
            [
                "departamento" => "Huehuetenango",
                "municipio" => "San Miguel Acatán"
            ],
            [
                "departamento" => "Huehuetenango",
                "municipio" => "San Rafael La Independencia"
            ],
            [
                "departamento" => "Huehuetenango",
                "municipio" => "Todos Santos Cuchumatán"
            ],
            [
                "departamento" => "Huehuetenango",
                "municipio" => "San Juan Atitlán"
            ],
            [
                "departamento" => "Huehuetenango",
                "municipio" => "Santa Eulalia"
            ],
            [
                "departamento" => "Huehuetenango",
                "municipio" => "San Mateo Ixtatán"
            ],
            [
                "departamento" => "Huehuetenango",
                "municipio" => "Colotenango"
            ],
            [
                "departamento" => "Huehuetenango",
                "municipio" => "San Sebastián Huehuetenango"
            ],
            [
                "departamento" => "Huehuetenango",
                "municipio" => "Tectitán"
            ],
            [
                "departamento" => "Huehuetenango",
                "municipio" => "Concepción Huista"
            ],
            [
                "departamento" => "Huehuetenango",
                "municipio" => "San Juan Ixcoy"
            ],
            [
                "departamento" => "Huehuetenango",
                "municipio" => "San Antonio Huista"
            ],
            [
                "departamento" => "Huehuetenango",
                "municipio" => "Santa Cruz Barillas"
            ],
            [
                "departamento" => "Huehuetenango",
                "municipio" => "San Sebastián Coatán"
            ],
            [
                "departamento" => "Huehuetenango",
                "municipio" => "Aguacatán"
            ],
            [
                "departamento" => "Huehuetenango",
                "municipio" => "San Rafael Petzal"
            ],
            [
                "departamento" => "Huehuetenango",
                "municipio" => "San Gaspar Ixchil"
            ],
            [
                "departamento" => "Huehuetenango",
                "municipio" => "Santiago Chimaltenango"
            ],
            [
                "departamento" => "Huehuetenango",
                "municipio" => "Santa Ana Huista"
            ],
            [
                "departamento" => "Izabal",
                "municipio" => "Morales"
            ],
            [
                "departamento" => "Izabal",
                "municipio" => "Los Amates"
            ],
            [
                "departamento" => "Izabal",
                "municipio" => "Livingston"
            ],
            [
                "departamento" => "Izabal",
                "municipio" => "El Estor"
            ],
            [
                "departamento" => "Izabal",
                "municipio" => "Puerto Barrios"
            ],
            [
                "departamento" => "Jalapa",
                "municipio" => "Jalapa"
            ],
            [
                "departamento" => "Jalapa",
                "municipio" => "San Pedro Pinula"
            ],
            [
                "departamento" => "Jalapa",
                "municipio" => "San Luis Jilotepeque"
            ],
            [
                "departamento" => "Jalapa",
                "municipio" => "San Manuel Chaparrón"
            ],
            [
                "departamento" => "Jalapa",
                "municipio" => "San Carlos Alzatate"
            ],
            [
                "departamento" => "Jalapa",
                "municipio" => "Monjas"
            ],
            [
                "departamento" => "Jalapa",
                "municipio" => "Mataquescuintla"
            ],
            [
                "departamento" => "Jutiapa",
                "municipio" => "Jutiapa"
            ],
            [
                "departamento" => "Jutiapa",
                "municipio" => "El Progreso"
            ],
            [
                "departamento" => "Jutiapa",
                "municipio" => "Santa Catarina Mita"
            ],
            [
                "departamento" => "Jutiapa",
                "municipio" => "Agua Blanca"
            ],
            [
                "departamento" => "Jutiapa",
                "municipio" => "Asunción Mita"
            ],
            [
                "departamento" => "Jutiapa",
                "municipio" => "Yupiltepeque"
            ],
            [
                "departamento" => "Jutiapa",
                "municipio" => "Atescatempa"
            ],
            [
                "departamento" => "Jutiapa",
                "municipio" => "Jerez"
            ],
            [
                "departamento" => "Jutiapa",
                "municipio" => "El Adelanto"
            ],
            [
                "departamento" => "Jutiapa",
                "municipio" => "Zapotitlán"
            ],
            [
                "departamento" => "Jutiapa",
                "municipio" => "Comapa"
            ],
            [
                "departamento" => "Jutiapa",
                "municipio" => "Jalpatagua"
            ],
            [
                "departamento" => "Jutiapa",
                "municipio" => "Conguaco"
            ],
            [
                "departamento" => "Jutiapa",
                "municipio" => "Moyuta"
            ],
            [
                "departamento" => "Jutiapa",
                "municipio" => "Pasaco"
            ],
            [
                "departamento" => "Jutiapa",
                "municipio" => "Quesada"
            ],
            [
                "departamento" => "Quetzaltenango",
                "municipio" => "Quetzaltenango"
            ],
            [
                "departamento" => "Quetzaltenango",
                "municipio" => "Salcajá"
            ],
            [
                "departamento" => "Quetzaltenango",
                "municipio" => "San Juan Olintepeque"
            ],
            [
                "departamento" => "Quetzaltenango",
                "municipio" => "San Carlos Sija"
            ],
            [
                "departamento" => "Quetzaltenango",
                "municipio" => "Sibilia"
            ],
            [
                "departamento" => "Quetzaltenango",
                "municipio" => "Cabricán"
            ],
            [
                "departamento" => "Quetzaltenango",
                "municipio" => "Cajolá"
            ],
            [
                "departamento" => "Quetzaltenango",
                "municipio" => "San Miguel Siguilá"
            ],
            [
                "departamento" => "Quetzaltenango",
                "municipio" => "Palestina de Los Altos"
            ],
            [
                "departamento" => "Quetzaltenango",
                "municipio" => "San Juan Ostuncalco"
            ],
            [
                "departamento" => "Quetzaltenango",
                "municipio" => "San Mateo"
            ],
            [
                "departamento" => "Quetzaltenango",
                "municipio" => "Concepción Chiquirichapa"
            ],
            [
                "departamento" => "Quetzaltenango",
                "municipio" => "San Martín Sacatepéquez"
            ],
            [
                "departamento" => "Quetzaltenango",
                "municipio" => "Almolonga"
            ],
            [
                "departamento" => "Quetzaltenango",
                "municipio" => "Cantel"
            ],
            [
                "departamento" => "Quetzaltenango",
                "municipio" => "Huitán"
            ],
            [
                "departamento" => "Quetzaltenango",
                "municipio" => "Zunil"
            ],
            [
                "departamento" => "Quetzaltenango",
                "municipio" => "Colomba Costa Cuca"
            ],
            [
                "departamento" => "Quetzaltenango",
                "municipio" => "San Francisco La Unión"
            ],
            [
                "departamento" => "Quetzaltenango",
                "municipio" => "El Palmar"
            ],
            [
                "departamento" => "Quetzaltenango",
                "municipio" => "Coatepeque"
            ],
            [
                "departamento" => "Quetzaltenango",
                "municipio" => "Génova"
            ],
            [
                "departamento" => "Quetzaltenango",
                "municipio" => "Flores Costa Cuca"
            ],
            [
                "departamento" => "Quetzaltenango",
                "municipio" => "La Esperanza"
            ],
            [
                "departamento" => "Retalhuleu",
                "municipio" => "Retalhuleu"
            ],
            [
                "departamento" => "Retalhuleu",
                "municipio" => "San Sebastián"
            ],
            [
                "departamento" => "Retalhuleu",
                "municipio" => "Santa Cruz Muluá"
            ],
            [
                "departamento" => "Retalhuleu",
                "municipio" => "San Martín Zapotitlán"
            ],
            [
                "departamento" => "Retalhuleu",
                "municipio" => "San Felipe"
            ],
            [
                "departamento" => "Retalhuleu",
                "municipio" => "San Andrés Villa Seca"
            ],
            [
                "departamento" => "Retalhuleu",
                "municipio" => "Champerico"
            ],
            [
                "departamento" => "Retalhuleu",
                "municipio" => "Nuevo San Carlos"
            ],
            [
                "departamento" => "Retalhuleu",
                "municipio" => "El Asintal"
            ],
            [
                "departamento" => "Sacatepéquez",
                "municipio" => "Antigua Guatemala"
            ],
            [
                "departamento" => "Sacatepéquez",
                "municipio" => "Jocotenango"
            ],
            [
                "departamento" => "Sacatepéquez",
                "municipio" => "Pastores"
            ],
            [
                "departamento" => "Sacatepéquez",
                "municipio" => "Sumpango"
            ],
            [
                "departamento" => "Sacatepéquez",
                "municipio" => "Santo Domingo Xenacoj"
            ],
            [
                "departamento" => "Sacatepéquez",
                "municipio" => "Santiago Sacatepéquez"
            ],
            [
                "departamento" => "Sacatepéquez",
                "municipio" => "San Bartolomé Milpas Altas"
            ],
            [
                "departamento" => "Sacatepéquez",
                "municipio" => "San Lucas Sacatepéquez"
            ],
            [
                "departamento" => "Sacatepéquez",
                "municipio" => "Santa Lucía Milpas Altas"
            ],
            [
                "departamento" => "Sacatepéquez",
                "municipio" => "Magdalena Milpas Altas"
            ],
            [
                "departamento" => "Sacatepéquez",
                "municipio" => "Santa María de Jesús"
            ],
            [
                "departamento" => "Sacatepéquez",
                "municipio" => "Ciudad Vieja"
            ],
            [
                "departamento" => "Sacatepéquez",
                "municipio" => "San Miguel Dueñas"
            ],
            [
                "departamento" => "Sacatepéquez",
                "municipio" => "San Juan Alotenango"
            ],
            [
                "departamento" => "Sacatepéquez",
                "municipio" => "San Antonio Aguas Calientes"
            ],
            [
                "departamento" => "Sacatepéquez",
                "municipio" => "Santa Catarina Barahona"
            ],
            [
                "departamento" => "San Marcos",
                "municipio" => "San Marcos"
            ],
            [
                "departamento" => "San Marcos",
                "municipio" => "Ayutla"
            ],
            [
                "departamento" => "San Marcos",
                "municipio" => "Catarina"
            ],
            [
                "departamento" => "San Marcos",
                "municipio" => "Comitancillo"
            ],
            [
                "departamento" => "San Marcos",
                "municipio" => "Concepción Tutuapa"
            ],
            [
                "departamento" => "San Marcos",
                "municipio" => "El Quetzal"
            ],
            [
                "departamento" => "San Marcos",
                "municipio" => "El Rodeo"
            ],
            [
                "departamento" => "San Marcos",
                "municipio" => "El Tumblador"
            ],
            [
                "departamento" => "San Marcos",
                "municipio" => "Ixchiguán"
            ],
            [
                "departamento" => "San Marcos",
                "municipio" => "La Reforma"
            ],
            [
                "departamento" => "San Marcos",
                "municipio" => "Malacatán"
            ],
            [
                "departamento" => "San Marcos",
                "municipio" => "Nuevo Progreso"
            ],
            [
                "departamento" => "San Marcos",
                "municipio" => "Ocós"
            ],
            [
                "departamento" => "San Marcos",
                "municipio" => "Pajapita"
            ],
            [
                "departamento" => "San Marcos",
                "municipio" => "Esquipulas Palo Gordo"
            ],
            [
                "departamento" => "San Marcos",
                "municipio" => "San Antonio Sacatepéquez"
            ],
            [
                "departamento" => "San Marcos",
                "municipio" => "San Cristóbal Cucho"
            ],
            [
                "departamento" => "San Marcos",
                "municipio" => "San José Ojetenam"
            ],
            [
                "departamento" => "San Marcos",
                "municipio" => "San Lorenzo"
            ],
            [
                "departamento" => "San Marcos",
                "municipio" => "San Miguel Ixtahuacán"
            ],
            [
                "departamento" => "San Marcos",
                "municipio" => "San Pablo"
            ],
            [
                "departamento" => "San Marcos",
                "municipio" => "San Pedro Sacatepéquez"
            ],
            [
                "departamento" => "San Marcos",
                "municipio" => "San Rafael Pie de la Cuesta"
            ],
            [
                "departamento" => "San Marcos",
                "municipio" => "Sibinal"
            ],
            [
                "departamento" => "San Marcos",
                "municipio" => "Sipacapa"
            ],
            [
                "departamento" => "San Marcos",
                "municipio" => "Tacaná"
            ],
            [
                "departamento" => "San Marcos",
                "municipio" => "Tajumulco"
            ],
            [
                "departamento" => "San Marcos",
                "municipio" => "Tejutla"
            ],
            [
                "departamento" => "San Marcos",
                "municipio" => "Río Blanco"
            ],
            [
                "departamento" => "San Marcos",
                "municipio" => "La Blanca"
            ],
            [
                "departamento" => "Santa Rosa",
                "municipio" => "Cuilapa"
            ],
            [
                "departamento" => "Santa Rosa",
                "municipio" => "Casillas Santa Rosa"
            ],
            [
                "departamento" => "Santa Rosa",
                "municipio" => "Chiquimulilla
"
            ],
            [
                "departamento" => "Santa Rosa",
                "municipio" => "Guazacapán"
            ],
            [
                "departamento" => "Santa Rosa",
                "municipio" => "Nueva Santa Rosa"
            ],
            [
                "departamento" => "Santa Rosa",
                "municipio" => "Oratorio"
            ],
            [
                "departamento" => "Santa Rosa",
                "municipio" => "Pueblo Nuevo Viñas"
            ],
            [
                "departamento" => "Santa Rosa",
                "municipio" => "San Juan Tecuaco"
            ],
            [
                "departamento" => "Santa Rosa",
                "municipio" => "San Rafael Las Flores"
            ],
            [
                "departamento" => "Santa Rosa",
                "municipio" => "Santa Cruz Naranjo"
            ],
            [
                "departamento" => "Santa Rosa",
                "municipio" => "Santa María Ixhuatán"
            ],
            [
                "departamento" => "Santa Rosa",
                "municipio" => "Santa Rosa de Lima"
            ],
            [
                "departamento" => "Santa Rosa",
                "municipio" => "Taxisco"
            ],
            [
                "departamento" => "Santa Rosa",
                "municipio" => "Barberena"
            ],
            [
                "departamento" => "Sololá",
                "municipio" => "Sololá "
            ],
            [
                "departamento" => "Sololá",
                "municipio" => "Concepción"
            ],
            [
                "departamento" => "Sololá",
                "municipio" => "Nahualá"
            ],
            [
                "departamento" => "Sololá",
                "municipio" => "Panajachel"
            ],
            [
                "departamento" => "Sololá",
                "municipio" => "San Andrés Semetabaj"
            ],
            [
                "departamento" => "Sololá",
                "municipio" => "San Antonio Palopó"
            ],
            [
                "departamento" => "Sololá",
                "municipio" => "San José Chacayá"
            ],
            [
                "departamento" => "Sololá",
                "municipio" => "San Juan La Laguna"
            ],
            [
                "departamento" => "Sololá",
                "municipio" => "San Lucas Tolimán"
            ],
            [
                "departamento" => "Sololá",
                "municipio" => "San Marcos La Laguna"
            ],
            [
                "departamento" => "Sololá",
                "municipio" => "San Pablo La Laguna"
            ],
            [
                "departamento" => "Sololá",
                "municipio" => "San Pedro La Laguna"
            ],
            [
                "departamento" => "Sololá",
                "municipio" => "Santa Catarina Ixtahuacán"
            ],
            [
                "departamento" => "Sololá",
                "municipio" => "Santa Catarina Palopó"
            ],
            [
                "departamento" => "Sololá",
                "municipio" => "Santa Clara La Laguna"
            ],
            [
                "departamento" => "Sololá",
                "municipio" => "Santa Cruz La Laguna"
            ],
            [
                "departamento" => "Sololá",
                "municipio" => "Santa Lucía Utatlán"
            ],
            [
                "departamento" => "Sololá",
                "municipio" => "Santa María Visitación"
            ],
            [
                "departamento" => "Sololá",
                "municipio" => "Santiago Atitlán"
            ],
            [
                "departamento" => "Suchitepéquez",
                "municipio" => "Mazatenango"
            ],
            [
                "departamento" => "Suchitepéquez",
                "municipio" => "Cuyotenango"
            ],
            [
                "departamento" => "Suchitepéquez",
                "municipio" => "San Francisco Zapotitlán"
            ],
            [
                "departamento" => "Suchitepéquez",
                "municipio" => "San Bernardino"
            ],
            [
                "departamento" => "Suchitepéquez",
                "municipio" => "San José El Ídolo"
            ],
            [
                "departamento" => "Suchitepéquez",
                "municipio" => "Santo Domingo Suchitépequez"
            ],
            [
                "departamento" => "Suchitepéquez",
                "municipio" => "San Lorenzo"
            ],
            [
                "departamento" => "Suchitepéquez",
                "municipio" => "Samayac"
            ],
            [
                "departamento" => "Suchitepéquez",
                "municipio" => "San Pablo Jocopilas"
            ],
            [
                "departamento" => "Suchitepéquez",
                "municipio" => "San Antonio Suchitépequez"
            ],
            [
                "departamento" => "Suchitepéquez",
                "municipio" => "San Miguel Panán"
            ],
            [
                "departamento" => "Suchitepéquez",
                "municipio" => "San Gabriel"
            ],
            [
                "departamento" => "Suchitepéquez",
                "municipio" => "Chicacao"
            ],
            [
                "departamento" => "Suchitepéquez",
                "municipio" => "Patulul"
            ],
            [
                "departamento" => "Suchitepéquez",
                "municipio" => "Santa Bárbara"
            ],
            [
                "departamento" => "Suchitepéquez",
                "municipio" => "San Juan Bautista"
            ],
            [
                "departamento" => "Suchitepéquez",
                "municipio" => "Santo Tomás La Unión"
            ],
            [
                "departamento" => "Suchitepéquez",
                "municipio" => "Zunilito"
            ],
            [
                "departamento" => "Suchitepéquez",
                "municipio" => "Pueblo Nuevo"
            ],
            [
                "departamento" => "Suchitepéquez",
                "municipio" => "Río Bravo"
            ],
            [
                "departamento" => "Totonicapán",
                "municipio" => "Totonicapán"
            ],
            [
                "departamento" => "Totonicapán",
                "municipio" => "San Cristóbal Totonicapán"
            ],
            [
                "departamento" => "Totonicapán",
                "municipio" => "San Francisco El Alto"
            ],
            [
                "departamento" => "Totonicapán",
                "municipio" => "San Andrés Xecul"
            ],
            [
                "departamento" => "Totonicapán",
                "municipio" => "Momostenango"
            ],
            [
                "departamento" => "Totonicapán",
                "municipio" => "Santa María Chiquimula"
            ],
            [
                "departamento" => "Totonicapán",
                "municipio" => "Santa Lucía La Reforma"
            ],
            [
                "departamento" => "Totonicapán",
                "municipio" => "San Bartolo"
            ],
            [
                "departamento" => "Zacapa",
                "municipio" => "Cabañas"
            ],
            [
                "departamento" => "Zacapa",
                "municipio" => "Estanzuela"
            ],
            [
                "departamento" => "Zacapa",
                "municipio" => "Gualán"
            ],
            [
                "departamento" => "Zacapa",
                "municipio" => "Huité"
            ],
            [
                "departamento" => "Zacapa",
                "municipio" => "La Unión"
            ],
            [
                "departamento" => "Zacapa",
                "municipio" => "Río Hondo"
            ],
            [
                "departamento" => "Zacapa",
                "municipio" => "San Jorge"
            ],
            [
                "departamento" => "Zacapa",
                "municipio" => "San Diego"
            ],
            [
                "departamento" => "Zacapa",
                "municipio" => "Teculután"
            ],
            [
                "departamento" => "Zacapa",
                "municipio" => "Usumatlán"
            ],
            [
                "departamento" => "Zacapa",
                "municipio" => "Zacapa"
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
