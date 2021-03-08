<?php

namespace Faker\Provider\lu_FR;

class Address extends \Faker\Provider\fr_FR\Address
{
    protected static $postcode = array('####');

    protected static $streetAddressFormats = array(
        '{{buildingNumber}}, {{streetName}}'
    );

    protected static $streetNameFormats = array('{{streetSuffix}} {{lastName}}');

    protected static $cityFormats = array('{{cityName}}');

    protected static $addressFormats = array(
        "{{streetAddress}}\n {{postcode}} {{city}}",
    );

    protected static $streetSuffix = array(
        'rue', 'avenue', 'boulevard', 'place'
    );

    /**
     *
     * @var array
     */
    protected static $cityNames = array(
        'Altwies', 'Alzingen', 'Arsdorf', 'Aspelt', 'Bastendorf', 'Belvaux', 'Berbourg', 'Bereldange', 'Bertrange',
        'Bettembourg', 'Betzdorf', 'Beyren', 'Born', 'Bourglinster', 'Bous', 'Bridel', 'Canach', 'Capellen', 'Cents',
        'Clervaux', 'Colmar-Berg', 'Crauthem', 'Dahl', 'Dahlem', 'Dalheim', 'Diekirch', 'Differdange', 'Echternach',
        'Eisenborn', 'Erpeldange', 'Esch-sur-Alzette', 'Ettelbruck', 'Fentange', 'Filsdorf', 'Findel', 'Foetz',
        'Grass', 'Grevenmacher', 'Hagen', 'Harlange', 'Hautcharage', 'Hellange', 'Helmdange', 'Helmsange', 'Hollenfels',
        'Holzem', 'Hosingen', 'Hostert', 'Howald', 'Huncherange', 'Junglinster', 'Kayl', 'Kehlen', 'Keispelt', '
	Kleinbettingen', 'Lamadelaine', 'Larochette', 'Leudelange', 'Liefrange', 'Linger', 'Lintgen', 'Lipperscheid',
        'Livange', 'Luxembourg-Merl', 'Mamer', 'Mersch', 'Mertert', 'Mertzig', 'Mondercange', 'Mondorf-les-Bains', 'Moutfort',
        'Niederkorn', 'Noerdange', 'Noertzange', 'Nommern', 'Oberfeulen', 'Oberkorn', 'Olm', 'Pétange', 'Pintsch', 'Platen',
        'Pontpierre', 'Rambrouch', 'Reckange-sur-Mess', 'Redange-sur-Attert', 'Remerschen', 'Remich', 'Rodange', 'Roedgen',
        'Rollingen', 'Rollingen (Mersch)', 'Rosport', 'Rumelange', 'Sandweiler', 'Sanem', 'Schoos', 'Schouweiler', 'Schrassig',
        'Schuttrange', 'Senningerberg', 'Soleuvre', 'Steinsel', 'Strassen', 'Tétange', 'Troisvierges', 'Tuntange', 'Uebersyren',
        'Useldange', 'Vianden', 'Warken', 'Wasserbillig', 'Weicherdange', 'Weiler', 'Welfrange', 'Wiltz', 'Wilwerwiltz', 'Wormeldange'
    );

    protected static $region = array();

    protected static $province = array();

    /**
     * Randomly returns a luxembourgish province.
     *
     * @return string
     * @example 'Minette'
     *
     */
    public static function province()
    {
        return static::randomElement(static::$province);
    }

    /**
     * @see parent
     */
    public function cityName()
    {
        return static::randomElement(static::$cityNames);
    }
}
